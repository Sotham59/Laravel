<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(10);
        return view('blog.index', compact('articles'));
    }

    public function showArticle($id)
    {
        $article = Article::findOrFail($id);
        return view('blog.article', compact('article'));
    }

    public function showContactForm()
    {
        return view('blog.contact');
    }

    public function storeContactForm(Request $request)
    {
    }
}
