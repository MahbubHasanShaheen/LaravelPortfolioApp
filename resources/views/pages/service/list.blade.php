 @extends('layouts.admin_layout')

  @section('content')
<div class="container">
	<div class="row">
		<div class="service_list">
			<table class="table">
				<thead>
					<tr>
						<th>Icon</th>
						<th>Title</th>
						<th>Description</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					@if(count($service) > 0)
                       @foreach($service as $services) 
                     <tr>
						<td>{{ $services->icon }}</td>
						<td>{{ $services->title }}</td>
						<td> {{ Str::limit(strip_tags($services->description), $limit = 30) }}</td>
						<td style="width:150px">
							
							<div class="row">
								<div class="col-md-6">
								<a href="{{route('services.edit', $services->id)}}" class="btn btn-success">Edit</a>
                                 </div>
                                  
                                 <div class="col-md-6">
							   <form action="{{route('services.destroy', $services->id)}}" method="post">
								@csrf
								@method('DELETE')
								<input type="submit" name="submit" value="Delete" class="btn btn-danger">
							</form>
						  </div>
						  </div>
							
						</td>
					  </tr>
                       @endforeach
					
				   @endif
				 
				</tbody>
			</table>
		</div>
	</div>
	
</div>
@endsection