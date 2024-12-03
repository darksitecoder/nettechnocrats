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
        $topics = BlogTopic::select('topic','id')->get();
        return view('admin/pages/blogs/blogTopics')->with(compact('topics'));
    }



    // public function save(Request $request) {
    //     $text = $request->topic_text;
        
    //     // Check if the topic already exists
    //     $topicAlreadyExist = BlogTopic::where('topic', $text)->first();
    //     if ($topicAlreadyExist) {
    //         // Store the flash message in the session
    //         session()->flash('error', 'This Topic is already present in our database.');
            
    //         // Redirect the user back to the previous page (or to a specific route)
    //         return redirect()->back();
    //     }
        
    //     // Get the authenticated user's ID
    //     $user = Auth::user(); // Get the authenticated user
    //     if (!$user) {
    //         session()->flash('error', 'User is not authenticated.');
    //         return redirect()->back();
    //     }
        
    //     // If topic is provided, save it
    //     if ($text) {
    //         $data = new BlogTopic();
    //         $data->topic = $text;
    //         $data->created_by = $user->id;  // Get the user ID from the authenticated user
            
    //         $data->save();
            
    //         // Store success message in the session
    //         session()->flash('success', 'Topic added successfully!');
            
    //         // Redirect back or to a specific route
    //         return redirect()->back(); // Replace with your desired route
    //     }
        
    //     // Optionally return an error message if text is empty
    //     session()->flash('error', 'Topic text is required.');
    //     return redirect()->back();
    // }
    
    
    // public function fetch() {
    //     $user = Auth::guard('api')->user();
    //     if (!in_array($user->role, ['Admin', 'b2b'])) {
    //         return response()->json(['status' => '0', 'message' => 'Unauthorized users'], 200);
    //     }

    //     // Fetch and order topics by 'topic' column
    //     $data = BlogTopic::where('created_by', $user->id)->orderBy('topic', 'asc')->get();
    //     return response()->json(['success' => 'Topics fetched successfully', 'data' => $data]);
    // }
    
    // public function delete(Request $request, $id) {

       

    //      // Find the topic by ID and delete it
    // $topic = BlogTopic::find($id);
    
    // if ($topic) {
    //     $topic->delete();
    //     session()->flash('success', 'Topic removed successfully.');
    // } else {
    //     session()->flash('error', 'Topic not found.');
    // }

    // return redirect()->back(); // Redirect back to the previous page
    // }


    public function save(Request $request) {
        

        $text = $request->text;

        // Get the authenticated user's ID
        $user = Auth::user(); // Get the authenticated user
        if (!$user) {
            return response()->json(['status' => '0', 'message' => 'Unauthorized users'], 200);
        }
    
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
        
        // Fetch and order topics by 'topic' column
        $data = BlogTopic::orderBy('topic', 'asc')->get();
        return response()->json(['success' => 'Topics fetched successfully', 'data' => $data]);
    }
    
    public function delete(Request $request) {
        
        $id = $request->id;
    
        // Delete the topic by ID
        $data = BlogTopic::where('id', $id)->delete();
        return response()->json(['success' => 'Topic deleted successfully', 'data' => $data]);
    }
}
