@extends('users.parentView')

@section('mainContent')
  <p class="text-center mt-5 fs-2 fw-bold text-primary">USERS FROM DATABASE</p>
  <table class="table table-striped mt-5 w-75 mx-auto thead-dark table-light rounded-3 overflow-hidden border border-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">City</th>
        <th scope="col">Phone</th>
        <th scope="col">Name Company</th>
        <th scope="col">Save</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{$user['id']}}</td>
          <td>{{$user['name']}}</td>
          <td>{{$user['username']}}</td>
          <td>{{$user['email']}}</td>
          <td>{{$user['address']['city']}}</td>
          <td>{{$user['phone']}}</td>
          <td>{{$user['company']['name']}}</td>
          <td>
            <a href="/users/{{$user['id']}}/edit" type="button" class="btn btn-success">Save</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection

