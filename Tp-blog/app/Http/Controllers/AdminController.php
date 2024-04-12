<?php 


namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;

class AdminController extends Controller
{
    public function index()
    {
        $articleCount = Article::count();
        $commentCount = Comment::count();
        // Other statistics...
        return view('admin.dashboard', compact('articleCount', 'commentCount'));
    }
}
