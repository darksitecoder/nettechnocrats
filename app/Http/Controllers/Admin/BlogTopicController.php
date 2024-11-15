<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
