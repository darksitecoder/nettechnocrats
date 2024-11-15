<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Helpers\Helpers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Encryption\DecryptException;

class BlogCommentController extends Controller
{
    //
    public function addBlogCommentApi(Request $request, $blogId)
    {
        $user = Auth::guard('api')->user();
        $userId = $user->id;

        // $existUser = BlogComment::select()->where('userId', $userId)->where('blogId', $blogId)->first();

        $validator = Validator::make($request->all(), [
            'comment' => 'required|string|min:10',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]); // 422 Unprocessable Entity
        }

        $comment = new BlogComment();
        $comment->comment = $request->input('comment');
        $comment->userId = $userId;
        $comment->blogId = $blogId;
        $comment->created_for = $user->parent_id;
        $comment->save();

        // Return a success response
        return response()->json(['success' => "Your comment goes for verification."]);
    }



    // function for show Blog Comment in admin dashboard
    public function blogComments(Request $request, $encryptedUserId, $page_type = null)
    {

        // Decrypt 'page_type' parameter if it's not null
        $page_type = $page_type ? Crypt::decrypt($page_type) : null;

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

            return view('admin_theme.pages.blogs.blogComments', compact('role', 'b2b_shop_status', 'premium_features', 'encryptedUserId', 'page_type',));
        }
        return view('admin_theme/pages/blogs/blogComments')->with(compact('role', 'encryptedUserId', 'page_type',));
    }



    // fucntion for show all comments into admin dashboard
    public function fetchBlogCommentApi()
    {
        $user = Auth::guard('api')->user();

        // Check if the user is authorized (Admin or B2B)
        if (!in_array($user->role, ['Admin', 'b2b'])) {
            return response()->json(['status' => '0', 'message' => 'Unauthorized users']);
        }

        $blogCMN = BlogComment::select('blog_comments.*', 'users.name as userName')
            ->leftJoin('users', function ($join) {
                $join->on('blog_comments.userId', '=', 'users.id');
            })
            // ->leftJoin('user_profiles', function ($join) {
            //     $join->on('blog_comments.userId', '=', 'user_profiles.user_id')
            //         ->where('user_profiles.status', '=', 'Permanent');
            // })
            ->where('blog_comments.created_for', $user->id)
            ->orderBy('blog_comments.created_at', 'DESC')
            ->get();

        return response()->json(['status' => '1', 'success' => $blogCMN]);
    }


    // function for fetch blog and his comment detals
    public function getCommentDetailsApi(Request $request)
    {
        $user = Auth::guard('api')->user();

        // Check if the user is authorized (Admin or B2B)
        if (!in_array($user->role, ['Admin', 'b2b'])) {
            return response()->json(['status' => '0', 'message' => 'Unauthorized users']);
        }

        $blogCMN = BlogComment::select('blog_comments.*', 'users.name as userName', 'blogs.heading')
            ->leftJoin('users', function ($join) {
                $join->on('blog_comments.userId', '=', 'users.id');
            })
            ->leftJoin('blogs', function ($join) {
                $join->on('blog_comments.blogId', '=', 'blogs.id');
            })
            ->where('blog_comments.created_for', $user->id)
            ->where('blog_comments.id', $request->comment_id)
            ->first();

        if ($blogCMN) {
            return response()->json(['status' => '1', 'success' => $blogCMN]);
        }
        return response()->json(['status' => '0', 'massage' => 'No data found']);
    }



    // function for delete Comment By Admin
    public function deleteCommentApi(Request $request)
    {
        $user = Auth::guard('api')->user();
        // Check if the user is authorized (Admin or B2B)
        if (!in_array($user->role, ['Admin', 'b2b'])) {
            return response()->json(['status' => '0', 'message' => 'Unauthorized users']);
        }

        $Comment = BlogComment::where('id', $request->comment_id)->where('created_for', $user->id)->delete();
        if ($Comment) {
            return response()->json(['success' => 'Comment deleted successfully']);
        }
        return response()->json(['errors' => 'Comment not delete']);
    }


    // function for approve Comment By Admin
    public function approveCommentApi(Request $request)
    {
        $user = Auth::guard('api')->user();
        // Check if the user is authorized (Admin or B2B)
        if (!in_array($user->role, ['Admin', 'b2b'])) {
            return response()->json(['status' => '0', 'message' => 'Unauthorized users']);
        }

        $Comment = BlogComment::where('id', $request->comment_id)->where('created_for', $user->id)->update(['showStatus'=>'show']);;
        if ($Comment) {
            return response()->json(['success' => 'Comment approved successfully']);
        }
        return response()->json(['errors' => 'Comment not approve']);
    }
}
