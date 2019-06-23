@extends('layouts.app')


@section('content')

<div class="card">
	<div class="card-header">
		Trashed Posts
	</div>
	<div class="card-body">
		<table class="table table-hover">
			<thead>
				<th>Image</th>
				<th>Title</th>
				<th>Editing</th>
				<th>Restore</th>
				<th>Deleting</th>
			</thead>
			<tbody>
				@if($posts->count() > 0)

					@foreach($posts as $post)

					<tr>
						<td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="100px" height="50px"></td>
						<td>{{ $post->title }}</td>
						<td>Edit</td>
						<td>
							<a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-success" style="color: white">Restore</a>
						</td>
						<td>
							<a href="{{ route('post.kill', ['id' => $post->id]) }}" class="btn btn-danger" style="color: white;padding: 5px 25px 5px 25px"><i class="fa fa-close"></i></a>
						</td>
					</tr>

					@endforeach

				@else	

					<tr>
						<th colspan="5" class="text-center">No Trashed Posts</th>
					</tr>

				@endif
			</tbody>
		</table>
	</div>
</div>				

@stop