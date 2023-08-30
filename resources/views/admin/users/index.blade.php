@extends('layouts.admin')

@section('main')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Users</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Users</li>
        </ol>
      </nav>
    </div>
    {{-- <!--
    <div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ( $users as $user )
            <tr>
              <th scope="row">{{ $user->id }}</th>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>
                <a class="btn btn-sm btn-primary" href="{{route('admin.users.edit', $user->id)}}" role="button">Edit</a>
              </td>
            </tr>          
          @endforeach
        </tbody>
      </table>
    </div> --> --}}
    <!-- DataTales Example --> 
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a class="btn btn-success" href="{{route('admin.users.create')}}" role="button">Create</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th scope="col">#Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>

            <tbody>
              @foreach ( $users as $user )
              <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  <a class="btn btn-sm btn-primary" href="{{route('admin.users.edit', $user->id)}}" role="button">Edit</a>

                  <button type="button" class="btn btn-sm btn-danger" onclick="
                    event.preventDefault();
                    document.getElementById('delete-user-form-{{ $user->id }}').submit();
                  ">
                    Delete
                  </button>
                  <form id="delete-user-form-{{ $user->id }}" action="{{ route('admin.users.destroy', $user->id)}}" method="POST" style="display:none;">
                    @csrf
                    @method("DELETE")
                  </form>
                </td>
              </tr>          
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection