<?php 



namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::paginate(10);
        return view('admin.comments.index', compact('comments'));
    }

    // Implement other CRUD methods for comments
}
