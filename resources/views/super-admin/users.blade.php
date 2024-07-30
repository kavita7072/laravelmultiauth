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
                      
             
            
<div class="card-header" >
  <h3 class="card-title" style="color:black">Users</h3>

  
</div>
<div class="card-body">
  <div id="view_category_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
   
    </div>
    <div class="row">
      <div class="col-sm-12">
       
      <table class="table">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @if ($user->roles == null)
                    User
                @else

                {{ $user->roles->name }}

                @endif
            </td>
        </tr>
    @endforeach
</table>


      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <div class="dataTables_info" id="view_category_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div>
      </div>
      <div class="col-sm-12 col-md-7">
        <div class="dataTables_paginate paging_simple_numbers" id="view_category_paginate">
          <ul class="pagination">
            <li class="paginate_button page-item previous disabled" id="view_category_previous">
              <a href="#" aria-controls="view_category" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
            </li>
            <li class="paginate_button page-item active">
              <a href="#" aria-controls="view_category" data-dt-idx="1" tabindex="0" class="page-link">1</a>
            </li>
            <li class="paginate_button page-item next disabled" id="view_category_next">
              <a href="#" aria-controls="view_category" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
            </li>
          </ul>
        </div>
      </div>
           
             <!-- /.card-body -->
               </div>
 </div>
</div>
</div>

              
</section>

</body>
<script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();
        // Add your custom form submission logic here
        console.log('Form submitted:', event.target.search.value);
    });
</script>



</html>

@endsection
