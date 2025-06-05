<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleControllerApi extends Controller
{
    public function search(Request $request){
        if ($request->search) {
            $user = Article::search('Nihil')->get();
        } else {
            $user = Article::get()->paginate(10);
        }

        return $user;
    }
    public function category(Request $request)
    {
        $user =Category::paginate(10);
        return $user;
    }
}
