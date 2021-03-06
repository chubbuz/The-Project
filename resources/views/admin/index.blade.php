@extends('layouts.admin_template')
@section('content')
	@if(count($news)>0)
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Title</th>
					<th>Published Time</th>
					<th>Category</th>
					<th></th
				</tr>
			</thead>
			<tbody>
				<!-- {{ url('/admin') }} -->
			@foreach($news as $new)
				<?php $count=0;?>
				<tr>
					<td><a href="admin/{{$new->id}}"><strong>{{$new->title}}</strong></a></td>
					<td>{{$new->updated_at}}</td>
					<td> {{$new->category->name}}</td>
					<td><a href="admin/{{$new->id}}/edit" class="btn btn-default">Edit</a></td>
					<td>
						{!!Form::open(['action'=>['AdminController@destroy',$new->id],'method'=>'POST'])!!}
						{{form::hidden('_method','DELETE')}}
						{{form::submit('Delete',['class'=>'btn btn-danger'])}}
						{!! Form::close() !!}
					</td>
				</tr>
				<?php $count++;?>
			@endforeach
			</tbody>
		</table>
	@else
		<p>You have no news yet</p>
	@endif
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
	
@endsection