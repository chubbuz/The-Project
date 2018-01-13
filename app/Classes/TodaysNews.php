<?php

namespace App\Classes;

class TodaysNews{
    		public $descp;
    		public $title;
    		public $image;
    		public $author;
    		public $date;
    		public $category;
            public $id;

    		 function __construct($tit,$des,$cat,$img,$id){
    			$this->title = $tit;
                $this->descp=$des;
                $this->category=$cat;
                $this->image=$img;
                $this->id=$id;
    		}

            public function display(){
                
                echo"The title is:".$this->title."<br>";
                echo"The desc:".$this->descp;

            }

    	}
?>
