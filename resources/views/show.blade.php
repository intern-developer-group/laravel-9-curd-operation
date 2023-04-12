
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="container">
    <h1 class="d-flex justify-content-center bg-dark text-light pb-2 mt-5" >USER DETAILS</h1>
    <a href="{{ route('user.index') }}"><button class="btn btn-warning mb-5">GO BACK</button></a>
    
    <div class="card">
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Username</b></label>
			<div class="col-sm-10">
                {{ $user->username }}
            </div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Email</b></label>
			<div class="col-sm-10">
                {{ $user->email }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Phone Number</b></label>
			<div class="col-sm-10">
                {{ $user->phone }}
			</div>
		</div>
        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Password</b></label>
			<div class="col-sm-10">
                {{ $user->password }}
			</div>
		</div>
	</div>
</div>
</div>