<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Pagination\LengthAwarePaginator;

class DiscussionController extends Controller
{
    public function open(){
    	
    	return view('forum')
    	->with('forumCount', \App\Category::count())
    	->with('userCount', \App\User::count())
    	->with('categories', \App\Category::paginate(6));
    	
    }
}
