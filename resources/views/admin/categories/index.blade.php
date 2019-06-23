@extends('layouts.app')


@section('content')

<div class="card">
	<div class="card-header">
		Categories
	</div>
	<div class="card-body">
		<table class="table table-hover">
			<thead>
				<th>Categoey Name</th>
				<th>Editing</th>
				<th>Deleting</th>
			</thead>
			<tbody>
				@if($categories->count() > 0)

					@foreach($categories as $category)

						<tr>
							<td>
								{{ $category->name }}
							</td>
							<td>
								<a href="{{ route('category.edit', ['id' => $category->id]) }}" style="color: white;padding: 5px 25px 5px 25px" class="btn btn-info">
									<i class="fa fa-edit"></i>
								</a>
							</td>
							<td>
								<a href="{{ route('category.delete', ['id' => $category->id]) }}" style="color: white;padding: 5px 25px 5px 25px" class="btn btn-danger">
									<i class="fa fa-close"></i>
								</a>
							</td>
						</tr>

					@endforeach

				@else

					<tr>
						<th colspan="5" class="text-center">No Categories Yet.</th>
					</tr>

				@endif
			</tbody>
		</table>
	</div>
</div>				

@stop