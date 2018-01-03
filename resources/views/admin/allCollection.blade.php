@extends('layouts.admin_template')
@section('content')
	@if(count($news)>0)
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Title</th>
					<th>Published Time</th>
					<th>Category</th>
					<th>Written by</th>
					<th>make public</th
				</tr>
			</thead>
			<tbody>
				<!-- {{ url('/admin') }} -->
			{{$news->links()}}

			@foreach($news as $new)

				<?php $isVisibleNow=0; ?>
				@foreach($todays as $today)
					@if($today->news_id==$new->id)

						<?php $isVisibleNow=1; ?>
					@endif
				@endforeach


				<?php $count=0;?>
				<tr>
					<td> <strong>{{$new->title}}</strong></td>
					<td>{{$new->updated_at}}</td>
					<td> {{$new->category->name}}</td>
					<td> {{$new->author->name}}</td>
					
			
					<td>
						 {!!Form::open(['url' => 'today', 'method' => 'post'])!!}

						<div class="form-group">
							{{ Form::hidden('newsId',$new->id) }}
							@if($isVisibleNow==1)
								{{ Form::checkbox('visible','yes',true) }}
								{{form::submit('Remove',['class'=>'btn btn-warning'])}}
							@else
								{{ Form::checkbox('visible') }}
								{{form::submit('Show',['class'=>'btn btn-info'])}}
							@endif
						</div>
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