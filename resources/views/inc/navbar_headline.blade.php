  <div class="container-fluid">
    <div class="jumbotron">
      <div class="row" style="margin-top:-25px">
              <div class="col-sm-4 col-md-4 col-lg-4" style="background-color:light-gray" >
                <img src="{{asset('storage/cover_images/logoFit.png' )}}" class="img-responsive"  style="height:150px" >
              </div>
              <div class="col-sm-8 col-md-8 col-lg-8" >
                <img src="{{asset('storage/adv_images/'.$adAll->AlongLogo() )}}"  class="img-responsive center-block">
                
              </div>
            </div>      
    </div>
        <nav class="navbar navbar-inverse" role="navigation" style="margin-top:-50px">
          <div class="navbar-header" >
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse" >
            <ul class="nav navbar-nav main_nav">
              <li><a href="index.html"><span class="fa fa-home desktop-home"></span><span class="mobile-show"></span></a></li>
              <li><a href="#">ताजा खबर</a></li>
              <li><a href="#">राजनिति</a></li>
              <li><a href="#">समाज</a></li>
              <li><a href="#">बिदेश</a></li>
              <li><a href="#">साहित्य</a></li>
              <li><a href="#">बिचार</a></li>
              <li><a href="#">खेल्कुद</a></li>
              <li><a href="#">बिबिध</a></li>
              <li><a href="">देश</a></li>
              <li class="dropdown">
            	<a class="dropdown-toggle" data-toggle="dropdown" href="#">ग्यालरि
            	<span class="caret"></span></a>
            	<ul class="dropdown-menu">
    	          <li><a href="#">Cartoon</a></li>
    	          <li><a href="#">Photo</a></li>
    	          <li><a href="#">Video</a></li>
    	        </ul>
    	      </li>
            </ul>
          </div>
        </nav>
  </div>
  <section id="newsSection">
    <div class="row">
      <div class="col-sm- 12 col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>तात्तातो</span>
          <ul id="ticker01" class="news_sticker">

            @foreach($newsArray as $news)
              @if($news->category=='latest')

            <li><a href="read/{{$news->id}}"><img src="{{asset('storage/news_images/'.$news->image )}}" alt=""> {{ str_limit($news->title,40)}}</a></li>
            

            @endif
          @endforeach
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>

     <div class="col-sm-8 col-md-8 col-lg-8" style="background-color: pink">
                <img src="{{asset('storage/adv_images/'.$adAll->DownNavBar() )}}"  class="img-responsive center-block">
                <!-- <h1>1st advertisement here</h1> -->
              </div>
  </section>