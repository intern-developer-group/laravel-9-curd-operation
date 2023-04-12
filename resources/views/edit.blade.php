<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="container">
    <h1 class="d-flex justify-content-center bg-dark text-light pb-2 mt-5" >EDIT DATA</h1>
    <a href="{{ route('user.index') }}"><button class="btn btn-warning mb-5">GO BACK</button></a>
    <form action="{{ route('user.update',$user->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="username">Enter Username :</label>
    <input type="text" name="username" id="username" class="form-control w-50" value="{{ $user->username }}"><br>

    <label for="email">Enter Email :</label>
    <input type="email" name="email" id="email" class="form-control w-50" value="{{ $user->email }}" ><br>

    <label for="phone">Enter Phone Number :</label>
    <input type="text" name="phone" id="phone" class="form-control w-50" value="{{ $user->phone }}"><br>

    <label for="password">Enter Password :</label>
    <input type="text" name="password" id="password" class="form-control w-50" value="{{ $user->password }}"><br>
    <input type="hidden" name="id" id="id" class="form-control w-50" value="{{ $user->id }}">

    <input type="submit" class="btn btn-primary">
</form>
</div>
