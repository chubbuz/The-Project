@extends('layouts.admin_template')
@section('content')

	<h2>Edit your News here</h2>
<!-- 'action' => 'AdminController@store','method'=>'POST' -->
<!-- 'action' => 'AdminController@store','method'=>'POST' -->
<!-- 'action' => 'AdminController@store','method'=>'POST' -->
    <div class="col-xs-10"> 
		{!! Form::open(['action' => ['AdminController@update',$news->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    	 	<div class="form-group">
    	 		{{Form::label('title','News Title')}}
    	 		{{Form::text('title',$news->title,['class' => 'form-control','placeholder'=>'type here the title of news'])}}

    	 	</div>
    	 	<div class="row">
    	 		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    	 			<img src="{{asset('storage/news_images/'.$news->image )}}  " style="height:30%;width:30%">
    	 		</div>
    	 		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    	 			
    	 		</div>
    	 	</div>

    	 	<div class="form-group">
    	 		{{Form::label('body','enter the full story')}}
    	 		{{Form::textarea('body',$news->description,['class' => 'form-control','id'=>'article-ckeditor','placeholder'=>'enter your news here']  )}}
    	 	</div>
    	 	

        <div class="form-group">
         {{form::file('news_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}

    	 	{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        </div>


        <div class="col-xs-2">
        <div class ="container">
          <h2>categories</h2>

          @foreach($cats as $cat)
            @if($cat->id==$currCat)
                {{ Form::radio('category',$cat->id,true)}} {{$cat->id }}).{{$cat->name}}
            @else
                {{ Form::radio('category',$cat->id) }} {{$cat->id }}).{{$cat->name}}
            
            @endif  
            <br> 

          @endforeach
        </div>
      </div>
		{!! Form::close() !!}
@endsection



@section('content-script')
  <script src={{asset("/vendor/unisharp/laravel-ckeditor/ckeditor.js")}}></script>
  <script>CKEDITOR.replace('article-ckeditor');</script>
@endsection