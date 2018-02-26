<?php
namespace App\Classes;
use App\Classes\AdvSingle;

class AdvToday{
	
	public $alongLogo;
	public $downNavBar;
	public $banner;
	private $bCount;
	private $bCurr;
	public $rightSide;
	public $belowCategory;



	public function init(){
		$this->bRunning = 0;
		$this->bCount =0;
		$this->banner=array();
	}


	public function store($image, $location){
		$ad  = new AdvSingle($image,$location);
		if($ad->location==1) $this->alongLogo =$ad;
        else if($ad->location==2) $this->downNavBar=$ad;
        else if($ad->location==3) $this->banner[$this->bCount++]=$ad;
        //else if($ad->location==4) //$rightAd[$rCount++]=$ad;

	}


	public function AlongLogo(){
		return $this->alongLogo->image;
	}

	public function DownNavBar(){
		return $this->downNavBar->image;
	}

	public function BannerNext(){
		// 
		if($this->bCount>0)
		  return $this->banner[--$this->bCount]->image;
		

	}

	public function RightSideNext(){

	}

}

?>