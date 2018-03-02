<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todays;
use App\News;
use App\Classes\TodaysNews;
use App\Classes\AdvToday;
use App\Advertisement;

class FrontController extends Controller
{
    



    public function index(){
    		$newsArray = array();
    		$todays = Todays::orderBy('created_at','inc')->get();
    		$i=0;

    		foreach($todays as $today){
    			$title=$today->news['title'];
    			$des=$today->news['description'];
    			$cat=$today->news['category']['name'];
                $img=$today->news['image'];
                $id=$today->news['id'];

    			$newsArray[$i]=new TodaysNews($title,$des,$cat,$img,$id);
    			$i++;
    		}

            $advAll = Advertisement::all();
            $adAll = new AdvToday();
            $adAll->init();
            foreach($advAll as $ad){
                 $adAll->store($ad->image,$ad->location_id);
            }
           
    		return view('front.index')->with('newsArray',$newsArray)->with('adAll',$adAll);
    }



    public function show($id){
        $newsArray = array();
            $todays = Todays::orderBy('created_at','inc')->get();
            $i=0;

            foreach($todays as $today){
                $cat=$today->news['category']['name'];
                if($cat=='latest'){
                    $title=$today->news['title'];
                    $des=$today->news['description'];
                    $img=$today->news['image'];
                    $currId=$today->news['id'];
                    
                    $newsArray[$i]=new TodaysNews($title,$des,$cat,$img,$currId);
                    $i++;
                }
            }


        echo"showing the details of the news id = ".$id;
        $news=News::find($id);
        return view('front.read')->with('news',$news)->with('newsArray',$newsArray);
    }
    
}

