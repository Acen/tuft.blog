<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    /**
     * Get Articles
     *
     * @param Request $request
     * @param null|string $all
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(Request $request, $all = null)
    {
        if($all){
            return Article::with('user')->get();
        }else {
            // Turns out there is a bug with OrderBy w/ the MongoDB implementation.
            return Article::with('user')->paginate(5);
        }
    }
}