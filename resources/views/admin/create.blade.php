@extends('layouts.admin_template')



@section('content-header')
	<h1>
       	Create News
        <small>Add a new post now</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
	
@endsection


@section('content')


  <div class="row">
        <div class="col-xs-10"> 
             <h2>Create your News here<h2>

          	{!! Form::open(['action' => 'AdminController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
           	<div class="form-group">
           		{{Form::label('title','News Title')}}
           		{{Form::text('title','',['class' => 'form-control','placeholder'=>'type here the title of news'])}}

           	</div>

           	<div class="form-group">
           		{{Form::label('body','enter the full story')}}
           		{{Form::textarea('body','',['class' => 'form-control','id'=>'article-ckeditor','placeholder'=>'enter your news here']  )}}
              <!-- 'id'=>'article-ckeditor' -->
           	</div>

            <div class="form-group">
             {{form::file('news_image')}}
            </div>

            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
           	

      </div>

      <div class="col-xs-2">
        <div class ="container">
          <h2>categories</h2>

          @foreach($cats as $cat)
            {{ Form::radio('category',$cat->id ) }} {{$cat->id }}).<strong>{{$cat->name}}</strong><br>   
          @endforeach
        </div>
      </div>



            {!! Form::close() !!}
  </div> 
@endsection



@section('content-script')
  <script src={{asset("/vendor/unisharp/laravel-ckeditor/ckeditor.js")}}></script>
   <!-- 
   <script>CKEDITOR.replace('article-ckeditor');</script>
    -->
@endsection
 