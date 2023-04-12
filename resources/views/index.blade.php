<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="container">
    <h1 class="d-flex justify-content-center bg-dark text-light pb-2 mt-5" >USER DATA</h1>
    <a href="{{ route('user.create') }}"><button class="btn btn-warning mb-5">ADD DATA</button></a>

    @if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif


<div class="card">
	
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Username</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Password</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td>{{ $row->username }}</td>
						<td>{{ $row->email }}</td>
						<td>{{ $row->phone }}</td>
                        <td>{{ $row->password }}</td>
						<td>
							<form method="post" action="{{ route('user.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('user.show', $row->id) }}" class="btn btn-dark btn-sm">View</a>
								<a href="{{ route('user.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>

						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		
	</div>
</div>
</div>