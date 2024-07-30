@extends('layout/layout')

@section('space-work')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kavita' Project</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="contain"><h1 class="H1_style"></h1></div>
    
    <div class="contain"><h6 class="H6_style"></h6></div>
    
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
         
              <div class="col-md-8">
                <div class="card">
                    <div class="card card-primary">
                        <!-- /.card-header -->

<h2 class="mb-4">Manage Role</h2>

<form action="{{ route('updateRole') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-2">
            <label for="">Select User</label>
        </div>
        <div class="col-md-4">
            <select name="user_id" required class="form-control" style="border: 1px solid;">
                <option value="">Select User</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-2">
            <label for="">Select Role</label>
        </div>
        <div class="col-md-4">
            <select name="role_id" required class="form-control" style="border: 1px solid;">
                <option value="">Select Role</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
                <option value="0">User</option>
            </select>
        </div>
    </div>
    <input type="submit" value="Update Role" class="btn btn-primary">
</form>

@endsection
