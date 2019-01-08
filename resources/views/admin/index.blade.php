@extends('admin.layouts.master')

@section('title', 'Stock Items List')

@section('content')

	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-6 col-md-offset-4">
					@foreach($posts as $post)
						@if($post->id === 2)
							<img src="{{url('images/'.$post->image)}}" width="160" height="120">
						@elseif($post->id === 1)
							<img src="{{url('images/'.$post->image)}}" width="120" height="150">
						@else
							<img src="{{url('images/'.$post->image)}}">
						@endif
						<a class="btn btn-primary btn-lg text-sm-right" href="{{ route('admin.show',$post->id) }}" style="float: right;">View more...</a>
						<p>Brand: {{$post->brand}}</p>
						<p>Style: {{$post->style}}</p>
						<hr>
					@endforeach
				</div>
			</div>
		</div>
	</div>

@endsection