@extends('layouts.test_design')
@section('main_content')

  @foreach($newsArray as $news)
    @if($news->category=='banner')
    
    <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12" style="background-color:white;">
              	 <div class="bar">
              	 	<h2><span>{{$news->category}}</span></h2>
              	 </div>
              		<a href ="read/{{$news->id}}"><h1 style="text-align:center;" >{{$news->title}}</h1> </a>

              <div class="col-sm-12 col-md-12 col-lg-12">
	        		 <img src="{{asset('storage/news_images/'.$news->image )}}"  alt="{{$news->image}} Not Found" style="display:block;margin-left:auto;margin-right:auto;"> 
            </div>
                <!-- <p>{{$news->descp}}</p> -->
	           </div  >
              <!-- <div class="col-sm-4 col-md-4 col-lg-4" style="background-color:black;">
                <div class="classwithpad">
                	
                	 
              	</div>
              </div> -->
              
              <div style="margin-top:10px">&nbsp</div>
              the advertisemnt area
              <img src="{{asset('storage/news_images/xavi.png' )}}" alt ="adv area">
              area closed
              <div style="background-color:pink;">
                
                <h1>Next adverstiment is displayed here</h1>
              
            </div>
                <div style="margin-bottom:10px;">&nbsp</div>
    @endif
  @endforeach


  <section idc="ontentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>मुख्य समाचार mukhhya</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">

                @foreach($newsArray as $news)
                  @if($news->category=='economy')
                <li>
                  <!-- src="{asset('storage/news_images/'.$news->image )}}" -->
                  <figure class="bsbig_fig"> <a href="read/{{$news->id}}" class="featured_img"> <img src="{{asset('storage/news_images/'.$news->image )}}" > <span class="overlay"></span> </a>
                    <figcaption> <a href="read/{{$news->id}}">{{$news->title }} </figcaption>
                    <p>{{ str_limit($news->descp,100)}}</p>
                  </figure>
                </li>
                  <?php break; ?>
                 @endif
                @endforeach
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">

                <?php $isFirst=true; $count=0; ?>
                @foreach($newsArray as $news)

                  @if($news->category=='economy'&&$isFirst)
                    <?php $isFirst=false;?>
                  @elseif($news->category=='economy')
                <li>
                  <div class="media wow fadeInDown"> <a href="read/{{$news->id}}" class="media-left"> <img alt="" src="{{asset('storage/news_images/'.$news->image )}}"> </a>
                    <div class="media-body"> <a href="read/{{$news->id}}" class="catg_title"> {{$news->title}}</a> </div>
                  </div>
                </li>
                  <?php if(++$count>=4)break;?>
                  @endif
                @endforeach
                
              </ul>
            </div>
          </div>

          

          <div class="fashion_technology_area">

            <div style="background-color:pink">
            <h1>next advertisement to be displayed here</h1>
          </div>
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>राजनीति politics</span></h2>
                <ul class="business_catgnav wow fadeInDown">

                  @foreach($newsArray as $news)
                    @if($news->category=='politics')
                  <li>
                    <figure class="bsbig_fig"> <a href="read/{{$news->id}}" class="featured_img"> <img alt="" src="{{asset('storage/news_images/'.$news->image )}}"> <span class="overlay"></span> </a>
                      <figcaption> <a href="read/{{$news->id}}">{{$news->title}}</a> </figcaption>
                      <p>{{$news->title}}</p>
                    </figure>
                  </li>
                    <?php break; ?>
                    @endif
                  @endforeach
                </ul>
                <ul class="spost_nav">

                  <?php $isFirst=true; $count=0; ?>
                @foreach($newsArray as $news)

                  @if($news->category=='politics'&&$isFirst)
                    <?php $isFirst=false;?>
                  @elseif($news->category=='politics')
                  <li>
                    <div class="media wow fadeInDown"> <a href="read/{{$news->id}}" class="media-left"> <img alt="" src="{{asset('storage/news_images/'.$news->image )}}"> </a>
                      <div class="media-body"> <a href="read/{{$news->id}}" class="catg_title"> {{$news->title}}</a> </div>
                    </div>
                  </li>
                    <?php if(++$count>=4)
                              break;
                    ?>
                  @endif
                  @endforeach
                  
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>प्रविधिTechno</span></h2>
                <ul class="business_catgnav">
                  @foreach($newsArray as $news)
                    @if($news->category=='technology')
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="read/{{$news->id}}" class="featured_img"> <img alt="" src="{{asset('storage/news_images/'.$news->image )}}"> <span class="overlay"></span> </a>
                      <figcaption> <a href="read/{{$news->id}}">{{$news->title}}</a> </figcaption>
                    <p>{{ str_limit($news->descp,100)}}</p>
                    </figure>
                  </li>
                  <?php break; ?>
                    @endif
                  @endforeach
                </ul>
                <ul class="spost_nav">

                  <?php $isFirst=true; $count=0; ?>
                @foreach($newsArray as $news)

                  @if($news->category=='technology'&&$isFirst)
                    <?php $isFirst=false;?>
                  @elseif($news->category=='technology')
                  <li>
                    <div class="media wow fadeInDown"> <a href="read/{{$news->id}}" class="media-left"> <img alt="" src="{{asset('storage/news_images/'.$news->image )}}"> </a>
                      <div class="media-body"> <a href="read/{{$news->id}}" class="catg_title"> {{$news->title}}</a> </div>
                    </div>
                  </li>
                    <?php if(++$count>=4)break;?>
                  @endif
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>Photography</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="{asset('storage/news_images/'.$news->image )}}" title="Photography Ttile 1"> <img src="{asset('storage/news_images/'.$news->image )}}" alt=""/></a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="{asset('storage/news_images/'.$news->image )}}" title="Photography Ttile 2"> <img src="{asset('storage/news_images/'.$news->image )}}" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="{asset('storage/news_images/'.$news->image )}}" title="Photography Ttile 3"> <img src="{asset('storage/news_images/'.$news->image )}}" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="{asset('storage/news_images/'.$news->image )}}" title="Photography Ttile 4"> <img src="{asset('storage/news_images/'.$news->image )}}" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="{asset('storage/news_images/'.$news->image )}}" title="Photography Ttile 5"> <img src="{asset('storage/news_images/'.$news->image )}}" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="{asset('storage/news_images/'.$news->image )}}" title="Photography Ttile 6"> <img src="{asset('storage/news_images/'.$news->image )}}" alt=""/> </a> </figure>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_post_content">
            <h2><span> अर्थ economy</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">

                @foreach($newsArray as $news)
                  @if($news->category=='other')
                <li>
                  <figure class="bsbig_fig"> <a href="read/{{$news->id}}" class="featured_img"> <img src="{{asset('storage/news_images/'.$news->image )}}" > <span class="overlay"></span> </a>
                    <figcaption> <a href="read/{{$news->id}}">{{$news->title }} </figcaption>
                    <p>{{ str_limit($news->descp,100)}}</p>
                  </figure>
                </li>
                  <?php break; ?>
                 @endif
                @endforeach
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">

                
                <?php $isFirst=true; $count=0; ?>
                @foreach($newsArray as $news)

                  @if($news->category=='other'&&$isFirst)
                    <?php $isFirst=false;?>
                  @elseif($news->category=='other')
                <li>
                  <div class="media wow fadeInDown"> <a href="read/{{$news->id}}" class="media-left"> <img alt="" src="{{asset('storage/news_images/'.$news->image )}}"> </a>
                    <div class="media-body"> <a href="read/{{$news->id}}" class="catg_title"> {{$news->title}}</a> </div>
                  </div>
                </li>

                <?php if(++$count>=4)break;?>
                  @endif
                @endforeach

              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>सम्पाक्दिय sampakadiya</span></h2>
            <ul class="spost_nav">

              <?php $count=0;?>
              @foreach($newsArray as $news)
                  @if($news->category=='paper')
              <li>
                <div class="media wow fadeInDown"> <a href="read/{{$news->id}}" class="media-left"> <img alt="" src="{{asset('storage/news_images/'.$news->image )}}"> </a>
                  <div class="media-body"> <a href="read/{{$news->id}}" class="catg_title"> {{$news->title}}</div>
                </div>
              </li>
                <?php if(++$count>=4)break;?>
                @endif
              @endforeach
              
            </ul>
          </div>


          <div> <a></a>
            <!-- don't delete this div it affects cartoon div -->
          </div>

          


          <div class="single_sidebar wow fadeInDown">
            <div style="background-color:pink">
              <h1>next advertisement to be displayed here</h1>
            </div>

            <div class="sdfsdfdsllol"style="background-color:pink">
              <h1>next advertisement to be displayed here</h1>
            </div>


            <h2><span>Cartoon</span></h2>
            <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt="Cartoon Image"></a> 
            <!-- folllwing line to be deleted -->
            <h2><span></span></h2>

            <div class="sdfsdfdsllol"style="background-color:pink">
              <h1>next advertisement to be displayed here</h1>
            </div>

            <div class="sdfsdfdsllol"style="background-color:pink">
              <h1>next advertisement to be displayed here</h1>
            </div>

            <div class="sdfsdfdsllol"style="background-color:pink">
              <h1>next advertisement to be displayed here</h1>
            </div>



          </div>


          <div class="single_sidebar">
            <h2><span>सम्पाक्दिय Sports</span></h2>
            <ul class="spost_nav">

              <?php $count=0;?>
              @foreach($newsArray as $news)
                  @if($news->category=='sports')
              <li>
                <div class="media wow fadeInDown"> <a href="read/{{$news->id}}" class="media-left"> <img alt="" src="{{asset('storage/news_images/'.$news->image )}}"> </a>
                  <div class="media-body"> <a href="read/{{$news->id}}" class="catg_title"> {{$news->title}}</div>
                </div>
              </li>
                <?php if(++$count>=4)break;?>
                @endif
              @endforeach
              
            </ul>
          </div>



        </aside>


      </div>


    </div>
  </section>
@endsection

 	