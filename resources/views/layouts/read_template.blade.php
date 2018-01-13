<!DOCTYPE html>
<html>
<head>
<title>NewsFeed | Pages | Single Page</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/font.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/li-scroller.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/jquery.fancybox.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/style.css')}}">
<!--[if lt IE 9]>
<script src="../assets/js/html5shiv.min.js"></script>
<script src="../assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>

  @include('inc.navbar_headline')

<div class="container">
  
  
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
              <li><a href="../index.html">Home</a></li>
              <li><a href="#">Technology</a></li>
              <li class="active">Mobile</li>
            </ol>
            <h1>{{$news->title}}</h1>
            <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>Wpfreeware</a> <span><i class="fa fa-calendar"></i>6:49 AM</span> <a href="#"><i class="fa fa-tags"></i>Technology</a> </div>
            <div class="single_page_content"> <img  src="{{asset('storage/news_images/'.$news->image )}}" alt="">
              <p>{{$news->description}}</p>
              <!-- <blockquote> Donec volutpat nibh sit amet libero ornare non laoreet arcu luctus. Donec id arcu quis mauris euismod placerat sit amet ut metus. Sed imperdiet fringilla sem eget euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque adipiscing, neque ut pulvinar tincidunt, est sem euismod odio, eu ullamcorper turpis nisl sit amet velit. Nullam vitae nibh odio, non scelerisque nibh. Vestibulum ut est augue, in varius purus. </blockquote> -->
            
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
            <div class="related_post">
              <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="../images/post_img1.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="../images/post_img2.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="../images/post_img1.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="nav-slit"> <a class="prev" href="#"> <span class="icon-wrap"><i class="fa fa-angle-left"></i></span>
        <div>
          <h3>City Lights</h3>
          <img src="../images/post_img1.jpg" alt=""/> </div>
        </a> <a class="next" href="#"> <span class="icon-wrap"><i class="fa fa-angle-right"></i></span>
        <div>
          <h3>Street Hills</h3>
          <img src="../images/post_img1.jpg" alt=""/> </div>
        </a> </nav>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar" style="background-color:pink">
            <h1>adverstiment here </h1>
            <h1>adverstiment here </h1>
            <h1>adverstiment here </h1>
            <h1>adverstiment here </h1>
            <h1>adverstiment here </h1>
            <h1>adverstiment here </h1>
            

          
          </div>
          <div class="single_sidebar">
            
            <div class="tab-content">
              
         
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div >

            <div style="background-color:pink">
            <h1>adverstiment here </h1>
            <h1>adverstiment here </h1>
            <h1>adverstiment here </h1>
            <h1>adverstiment here </h1>
            <h1>adverstiment here </h1>
            <h1>adverstiment here </h1>
            <h1>adverstiment here </h1>
            <h1>adverstiment here </h1>
            <h1>adverstiment here </h1>
            <h1>adverstiment here </h1>
            <h1>adverstiment here </h1>
            </div>
          
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Rss Feed</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Life &amp; Style</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>Flickr Images</h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
            <ul class="tag_nav">
              <li><a href="#">Games</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Life &amp; Style</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">Photo</a></li>
              <li><a href="#">Slider</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contact</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <address>
            Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; 2045 <a href="../index.html">NewsFeed</a></p>
      <p class="developer">Developed By Wpfreeware</p>
    </div>
  </footer>
</div>
<script src="{{asset('newsfeed/assets/js/jquery.min.js')}}"></script> 
  <script src="{{asset('newsfeed/assets/js/wow.min.js')}}"></script> 
  <script src="{{asset('newsfeed/assets/js/bootstrap.min.js')}}"></script> 
  <script src="{{asset('newsfeed/assets/js/slick.min.js')}}"></script> 
  <script src="{{asset('newsfeed/assets/js/jquery.li-scroller.1.0.js')}}"></script> 
  <script src="{{asset('newsfeed/assets/js/jquery.newsTicker.min.js')}}"></script> 
  <script src="{{asset('newsfeed/assets/js/jquery.fancybox.pack.js')}}"></script> 
  <script src="{{asset('newsfeed/assets/js/custom.js')}}"></script>
</body>
</html>