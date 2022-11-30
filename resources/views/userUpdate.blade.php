@extends('users.parentView')

@section('mainContent')
  <p class="text-center mt-5 fs-2 fw-bold text-primary">UPDATE USER</p>
  <div class="container w-50 mx-auto">

    <div class="card px-5 py-3 mt-4 bg-light">
      <p class="fs-4"><span class="fw-bold">ID: </span>{{$user->id}}</p>
      <p class="fs-4"><span class="fw-bold">Name: </span>{{$user->name}}</p>
      <p class="fs-4"><span class="fw-bold">Username: </span>{{$user->username}}</p>
      <p class="fs-4"><span class="fw-bold">Email: </span>{{$user->email}}</p>
      <p class="fs-4"><span class="fw-bold">City: </span>{{$user->city}}</p>
      <p class="fs-4"><span class="fw-bold">Phone: </span>{{$user->phone}}</p>
      <p class="fs-4"><span class="fw-bold">Name Company: </span>{{$user->name_company}}</p>
    </div>

    <form action="/users/{{$user->id}}" method="POST">
      @csrf
      @method('PUT')
      <div class="m-4 d-flex flex-column">
        <label for="" class="form-label">Birthdate</label>
        <input style="height: 40px;" class="px-2" required type="date" name="birthdate" id="birthdate" value="{{$user->birthdate}}" placeholder="Enter a birthdate">
      </div>
      <div class="m-4 d-flex flex-column">
        <label for="" class="form-label">Picture</label>
        <input style="height: 40px;" class="px-2" required type="text" name="picture" id="picture" value="{{$user->picture}}">
      </div>    
      <div class="pt-3 d-flex flex-row justify-content-evenly">
        <a style="width: 200px;" href="/users" class="btn btn-danger btn-lg">Cancel</a>
        <button style="width: 200px;" type="submit" class="btn btn-primary btn-lg">Save</button>
      </div>
    </form>
    
  </div>
@endsection