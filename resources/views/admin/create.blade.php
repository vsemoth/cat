@extends('admin.layouts.master')

@section('title', 'Add Stock Item')

@section('content')

	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-8 col-md-offset-2">
					<h2>Add Product</h2>

					<form enctype="multipart/form-data" method="post" action="{{ route('admin.store') }}">
						@csrf
						<div class="row">
							<input class="form-control" type="text" name="item" placeholder="Item" autofocus>
						</div>
						<br>							
						<div class="row">
							<input class="form-control" type="text" name="brand" placeholder="Brand">
						</div>
						<br>	
						<div class="row">
							<input class="form-control" type="text" name="style" placeholder="Style">
						</div>
						<br>
						<div class="row">
							<input class="form-group" type="file" name="image" placeholder="Picture">
						</div>
						<br>
						<div class="row">
							<input class="form-control" type="text" name="color" placeholder="Colour">
						</div>
						<br>
						<div class="row">
							<input class="form-control" type="text" name="size" placeholder="Size">
						</div>
						<br>
						<div class="row">
							<input class="form-control" type="text" name="price" placeholder="Price">
						</div>
						<br>

						<input type="submit" name="create" value="Add" class="btn btn-success btn-lg btn-block">
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection