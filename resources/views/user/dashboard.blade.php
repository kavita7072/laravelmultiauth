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

<div class="container">

    <h1></h1>
    <a href="{{ url('tasks.create') }}" class="btn btn-primary">Add User</a>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->status }}</td>
                    <td>
                       <a href="{{ url('edit/' . $task->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ url('tasks/'. $task->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                
                @endforeach
            
        </tbody>
    </table>
</div>
</div>





@endsection
