@extends('users.parentView')

@section('mainContent')
  <p class="text-center mt-5 fs-2 fw-bold text-primary">USERS FROM DATABASE</p>
  <table class="table table-striped mt-5 w-75 mx-auto table-light rounded-3 overflow-hidden border border-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">City</th>
        <th scope="col">Phone</th>
        <th scope="col">Name Company</th>
        <th scope="col">Birthdate</th>
        <th scope="col">Picture</th>
        <th scope="col">Update</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->username}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->city}}</td>
          <td>{{$user->phone}}</td>
          <td>{{$user->name_company}}</td>
          <td>
            <input type="date" class="form-control" id="birthdate" aria-describedby="birthdateUser" placeholder="Enter a birthdate" value={{$user->birthdate}}>
          </td>
          <td>
            <input type="text" class="form-control" id="picture" aria-describedby="pictureUser" placeholder="Enter a picture link" value={{$user->picture}}>
          </td>
          <td>
            <button type="button" class="btn btn-primary">Update</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection