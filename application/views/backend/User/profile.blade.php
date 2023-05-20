@extends('template.backend.theme')


@section('content')

<br>
<br>

@if($notif != null)

<div class="alert alert-info" role="alert">
  {{ $notif }}
</div>

@endif

<form method="post" ation="{{current_url()}}">
  <div class="mb-3">
    <label for="username" class="form-label">User Name</label>
    <input type="text" class="form-control" name='username' id="username" value="{{$user->username}}">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="text" class="form-control" name='password' id="password" value="{{$user->password}}">
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection