<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todays;
use App\News;
use App\Classes\TodaysNews;

class FrontController extends Controller
{
    



    public function index(){
    		$newsArray = array();
    		$todays = Todays::all();

    		$i=0;
    		foreach($todays as $today){
    			$title=$today->news->title;
    			$des=$today->news->description;
    			$cat=$today->news->category->name;
                $img=$today->news->image;
                $id=$today->news->id;


    			$newsArray[$i]=new TodaysNews($title,$des,$cat,$img,$id);
    			$i++;
    		}
    		echo"there are total ".$i." news in";
    		return view('front.index')->with('newsArray',$newsArray);
    }

    public function show($id){
        echo"showing the details of the news mhgjhgjhgjhg";
        $news=News::find($id);
        return view('front.read')->with('news',$news);
    }
    
}

