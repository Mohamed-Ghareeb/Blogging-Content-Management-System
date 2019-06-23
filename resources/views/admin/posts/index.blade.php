@extends('layouts.app')


@section('content')

<div class="card">
	<div class="card-header">
		Published Posts
	</div>
	<div class="card-body">
		<table class="table table-hover">
			<thead>
				<th>Image</th>
				<th>Title</th>
				<th>Editing</th>
				<th>Trash</th>
			</thead>
			<tbody>
				@if($posts->count() > 0)

					@foreach($posts as $post)

						<tr>
							<td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="100px" height="50px"></td>
							<td>{{ $post->title }}</td>
							<td>
								<a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-info" style="color: white;padding: 5px 25px 5px 25px"><i class="fa fa-edit"></i></a>
							</td>
							<td>
								<a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn" style="color: white;background: #ff5722;padding: 5px 25px 5px 25px"><i class="fa fa-ban"></i></a>
							</td>
						</tr>

					@endforeach

				@else

					<tr>
						<th colspan="5" class="text-center">No Published Posts</th>
					</tr>

				@endif
			</tbody>
		</table>
	</div>
</div>				

@stop