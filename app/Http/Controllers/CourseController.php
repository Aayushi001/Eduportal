

       
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use App\Tutorial;
use Illuminate\Support\Facades\Session;
use DB;
class CourseController extends Controller


{
    public function open(){
    	
    	return view('course_display')
    	->with('categories', \App\Category::all())
    	->with('subcategories', \App\Subcategory::all())
    	->with('courses', \App\Course::all())
        ->with('tutorials', \App\Tutorial::all());
    }

    public function view($id){




        $selectedLevel = Input::has('Level') ? Input::get('Level') : null;

        

        if ($selectedLevel == 'beginner') {
        $tutorials = \App\Tutorial::where('level', '=', 'Beginner')->orderBy('id', 'DESC')->get();
        }

        elseif ($selectedLevel == 'intermediate') {
        $tutorials = \App\Tutorial::where('level', '=', 'Intermediate')->orderBy('id', 'DESC')->get();
        }

        else {
        $tutorials = \App\Tutorial::where('level', '=', 'Advanced')->orderBy('id', 'DESC')->get();
        }

       

    	return view('course_display')
        ->with('categories', \App\Category::all())
        ->with('subcategories', \App\Subcategory::all())
        ->with('courses', \App\Course::all())
    	->with('course', \App\Course::find($id))
        ->with('tutorials', $tutorials);




    }


    public function profile()
    {
        return view('profile');
    }

public function ajaxlevel(Request $request)
{
	
				$lev=$request->input("level");
	$count=Tutorial::where("level",$lev)->count();			
					if($count==0)
						return response()->view("sorttut",['count'=>$count]);
					
					else{
	$tuts=Tutorial::where("level",$lev)->get();
			 
					return response()->view("sorttut",["tuts"=>$tuts]);}
}
public function ajaxlanguage(Request $request)
{
	$lev=$request->input("language");
	$count=Tutorial::where("language",$lev)->count();			
					if($count==0)
						return response()->view("sorttut",['count'=>$count]);
					
					else{
	$tuts=Tutorial::where("language",$lev)->get();
			 
					return response()->view("sorttut",["tuts"=>$tuts]);}
				
}
public function ajaxprice(Request $request)
{
	$lev=$request->input("order");
	$count=DB::table("tutorials")->count();
	
	if($count==0)
		return response()->view("sorttut",['count'=>$count]);
	else{
	if($lev=="asc")
	{
		$tuts=Tutorial::orderBy("fee","asc")->get();
		
	}
	else $tuts=Tutorial::orderBy("fee","desc")->get(); 
	
			 
					return response()->view("sorttut",["tuts"=>$tuts]);}
				
}

public function ajaxalltut(Request $request)
{
	

	$count=DB::table("tutorials")->count();
	
	if($count==0)
		return response()->view("sorttut",['count'=>$count]);
	else{
	$tuts=Tutorial::all();
			 
					return response()->view("sorttut",["tuts"=>$tuts]);}
	
	
	
}


}

