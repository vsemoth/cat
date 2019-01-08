@extends('admin.layouts.master')

@section('title', $post->style.' size '.$post->size)

@section('content')

	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-6 col-md-offset-2">
					<a class="btn btn-primary btn-lg text-sm-left" href="{{ route('admin.show',$post->id) }}" style="float: left;">Order</a>
					@if($post->id === 2)
						<img src="{{url('images/'.$post->image)}}" width="480" height="360" style="float: right;">
					@elseif($post->id === 1)
						<img src="{{url('images/'.$post->image)}}" width="360" height="450" style="float: right;">
					@else
						<img src="{{url('images/'.$post->image)}}" style="float: right;">
					@endif
					<p style="clear: both;">Brand: {{$post->brand}}</p>
					<p style="clear: both;">Style: {{$post->style}}</p>
					<hr>
				</div>
				<div class="col-md-2">
					<a class="btn btn-danger btn-lg" href="{{ route('admin.index') }}">Stock Items List</a>					
				</div>
			</div>
		</div>
	</div>


@endsection