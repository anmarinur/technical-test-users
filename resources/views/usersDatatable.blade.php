@extends('users.parentView')

@section('mainContent')
  <p class="text-center mt-5 fs-2 fw-bold text-primary">USERS FROM API</p>
  @if(session('error'))
    <div class="alert alert-danger w-50 mx-auto" role="alert">
      {{session('error')}}
    </div>
  @elseif (session('success'))
    <div class="alert alert-success w-50 mx-auto" role="alert">
      {{session('success')}}
    </div>
  @endif
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
            <form action="/users" method="POST">
              @csrf
              <input type="hidden" name="id" value={{$user['id']}}>  
              <input type="hidden" name="name" value={{$user['name']}}>  
              <input type="hidden" name="username" value={{$user['username']}}>  
              <input type="hidden" name="email" value={{$user['email']}}>  
              <input type="hidden" name="city" value={{$user['address']['city']}}>  
              <input type="hidden" name="phone" value={{$user['phone']}}>  
              <input type="hidden" name="name_company" value={{$user['company']['name']}}>  
              <button type="submit" class="btn btn-success">Save</button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection

