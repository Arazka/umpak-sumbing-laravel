@extends('layouts.admin')

@section('main')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ url('admin/account') }}">Account</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
            </ol>
          </nav>
      </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Username</label>
            <input type="name" class="form-control" id="formGroupExampleInput" placeholder="username">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Password</label>
            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
          </div>
          <button type="button" class="btn btn-success">Tambah</button>
      </div>
    </div>
  </div>
@endsection