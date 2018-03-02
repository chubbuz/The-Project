<?php
namespace App\Classes;
use App\Classes\AdvSingle;

class AdvToday{
	
	public $alongLogo;
	public $downNavBar;
	public $banner;
	private $bCount;
	private $rCount;
	private $cCount;
	public $rightSide;
	public $belowCategory;





	public function init(){
		$this->rCount = 0;
		$this->bCount =0;
		$this->cCount=0;

		$this->banner=array();
		$this->rightSide=array();
		$this->belowCategory=array();
	}


	public function store($image, $location){
		$ad  = new AdvSingle($image,$location);
		if($ad->location==1) $this->alongLogo =$ad;
        else if($ad->location==2) $this->downNavBar=$ad;
        else if($ad->location==3) $this->banner[$this->bCount++]=$ad;
        else if($ad->location==4) $this->rightSide[$this->rCount++]=$ad;
        else if($ad->location==5) $this->belowCategory[$this->cCount++]=$ad;

        //else if($ad->location==4) //$rightAd[$rCount++]=$ad;

	}


	public function AlongLogo(){
		if($this->alongLogo!=null)
			return $this->alongLogo->image;
	}

	public function DownNavBar(){
		if($this->downNavBar!=null)
			return $this->downNavBar->image;
	}

	public function BannerNext(){
		if($this->bCount>0)
		  return $this->banner[--$this->bCount]->image;
	}

	public function BelowCategoryNext(){
		if($this->cCount>0)
		  return $this->belowCategory[--$this->cCount]->image;
	}

	public function RightSideNext(){
		if($this->rCount>0)
		  return $this->rightSide[--$this->rCount]->image;

	}

}

?>