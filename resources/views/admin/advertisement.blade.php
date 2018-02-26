@extends('layouts.admin_template')
@section('content')
		
		<!-- <img src="{{asset('storage/advertisements/xavi.png' )}}" alt ="adv area" style="display:block;margin-left:auto;margin-right:auto;"> -->
		<!-- <br> -->
		<!-- <img alt="image not found" src="{{asset('storage/news_images/xavi.png')}}" style="display:block;margin-left:auto;margin-right:auto;"> -->
		
		<h2>Current Advertisement</h2>
<!-- background-color:teal -->
		<div style="overflow-y:scroll;height:500px;"> 
			<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Link</th>
					<th>Display Position</th>
					<th>Snippet</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<!-- {{ url('/admin') }} -->
			
			@foreach($advs as $adv)
			<img src="{{asset('storage/advertisement_images/aa.png' )}}" alt="no image" style="height:50px;width:90px"> 
				<tr>
					<td> {{$adv->link}}</td>
					<td> &nbsp&nbsp&nbsp{{$adv->location_id}} </td>
					<td>
						 	<img src="{{asset('storage/adv_images/'.$adv->image)}}" alt="no image" style="height:60px;width:250px"> 
						 	<!-- {{$adv->image}} -->
					</td>	
					<td>
						{!!Form::open(['action'=>['AdvertisementController@destroy',$adv->id],'method'=>'POST'])!!}
						{{form::hidden('_method','DELETE')}}	
						{{form::submit('Delete',['class'=>'btn btn-danger'])}}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach	
			
			</tbody>
		</table>
			
		</div>

		<br>


		<!-- <h2>New Advertisement Here</h2> -->
		{!! Form::open(['action' => 'AdvertisementController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
		<div style="background-color:"> 

			<div class="container">
   			 <div class="row">

        		<div class="col-xs-2">
        			<h3>Select new </h3>
        			<br><br>	
        		 <div class="form-group">
             		{{form::file('adv_image')}}
            	 </div>
        		</div>

        		
        		<h3>Select Position </h3>
        		<div class="col-xs-2" style="overflow-y:scroll;height:120px">
        			
        			{{ Form::radio('position',1) }}1).&nbsp<strong>Along Logo</strong><br>   
        			{{ Form::radio('position',2) }}2).&nbsp<strong>Below NavBar</strong><br>
        			{{ Form::radio('position',3) }}3).&nbsp<strong>Below Banner</strong><br>
        			{{ Form::radio('position',4) }}4).&nbsp<strong>Right Side</strong><br>
        			{{ Form::radio('position',5) }}5).&nbsp<strong>Below Category</strong><br>
        			   
        		</div>
        		<h3>&nbsp&nbsp&nbspLink </h3>
        		<div class="col-xs-4">
        			{{Form::text('link','',['class' => 'form-control','placeholder'=>'www.example.com/link/#'])}}
            	</div>


        		<div class="col-xs-2">
        			
        			{{form::submit('Upload',['class'=>'btn btn-primary'])}}
        		</div>

		     </div>
			</div>

		
		</div>

		{!! Form::close() !!}
		
@endsection



