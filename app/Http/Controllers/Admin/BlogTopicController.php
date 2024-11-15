<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BlogTopic;
use App\Helpers\Helpers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Encryption\DecryptException;

class BlogTopicController extends Controller
{
    public function blogTopics(Request $request, $encryptedUserId, $page_type = null)
    {

        // Decrypt 'page_type' parameter if it's not null
        $page_type = $page_type ? Crypt::decrypt($page_type) : null;
        $b2b_id = $request->query('id') ?? NULL;

        try {
            $userId = Crypt::decrypt($encryptedUserId);
        } catch (DecryptException $e) {
            return response()->json(['error' => 'Invalid user ID'], 400);
        }

        $user = User::find($userId);





        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $role = $user->role;

        if ($role == 'b2b') {
            $b2b_shop_info = Helpers::getB2BShopInfo($userId);
            $b2b_shop_status = $b2b_shop_info['b2b_shop_status'];
            $premium_features = $b2b_shop_info['premium_features'];

            $b2b_id = Null;

            return view('admin_theme.pages.blogs.blogTopics', compact('role', 'b2b_shop_status', 'premium_features', 'encryptedUserId', 'page_type', 'b2b_id'));
        }
        return view('admin_theme/pages/blogs/blogTopics')->with(compact('role', 'encryptedUserId', 'page_type', 'b2b_id'));
    }



    public function save(Request $request) {
        $user = Auth::guard('api')->user();
        if (!in_array($user->role, ['Admin', 'b2b'])) {
            return response()->json(['status' => '0', 'message' => 'Unauthorized users'], 200);
        }

        $text = $request->text;
    
        // Check if the topic already exists
        $topicAlreadyExist = BlogTopic::where('topic', $text)->first();
        if ($topicAlreadyExist) {
            return response()->json(['alreadyExist' => 'This Topic is already present in our database.']);
        }
    
        // If topic is provided, save it
        if ($text) {
            $data = new BlogTopic();
            $data->topic = $text;
            $data->created_by = $user->id;
    
            $data->save();
    
            return response()->json(['success' => 'Topic added successfully', 'id' => $data->id]);
        }
    }
    
    public function fetch() {
        $user = Auth::guard('api')->user();
        if (!in_array($user->role, ['Admin', 'b2b'])) {
            return response()->json(['status' => '0', 'message' => 'Unauthorized users'], 200);
        }

        // Fetch and order topics by 'topic' column
        $data = BlogTopic::where('created_by', $user->id)->orderBy('topic', 'asc')->get();
        return response()->json(['success' => 'Topics fetched successfully', 'data' => $data]);
    }
    
    public function delete(Request $request) {
        $user = Auth::guard('api')->user();
        if (!in_array($user->role, ['Admin', 'b2b'])) {
            return response()->json(['status' => '0', 'message' => 'Unauthorized users'], 200);
        }

        $id = $request->id;
    
        // Delete the topic by ID
        $data = BlogTopic::where('id', $id)->where('created_by', $user->id)->delete();
        return response()->json(['success' => 'Topic deleted successfully', 'data' => $data]);
    }
}
