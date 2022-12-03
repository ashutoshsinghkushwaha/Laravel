<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Add Employee | Bluethink</title>
      <!-- stylesheet Start -->
      @include('admin.stylesheet')
      <!-- stylesheet End -->
 
      </style>
   </head>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
      <div class="wrapper">
      <div class="preloader flex-column justify-content-center align-items-center">
         <img class="animation__wobble" src="{{ asset('admin/assets/dist/img/AdminLTELogo.png ') }}"
            alt="AdminLTELogo" height="60" width="60">
      </div>
      <!-- Nav Bar Start -->
      @include('admin.navbar')
      <!-- Nav Bar End -->
      <!-- Side Bar Start -->
      @include('admin.sidebar')
      <!-- Side Bar End -->
      <div class="content-wrapper" style="min-height: 600px;">
      <div class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-md-4"></div>
               <div class="col-sm-4">
                  <div class="costum">
                     <h1 class="m-0">Add New Employee</h1>
                  </div>
               </div>
               <div class="col-sm-4">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active">Employee</li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
         <p>{{ $message }}</p>
      </div>
      @endif
      @if ($message = Session::get('fail'))
      <div class="alert alert-success">
         <p>{{ $message }}</p>
      </div>
      @endif
      <section class="content">
         <div class="container-fluid">
         <div class="row">
            <!-- <div class="col-md-4"></div> -->
            <div class="col-md-12">
               <div class="card card-primary">
                  <form action="{{ route('save')}}" method="post">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Employee id </label>
                           <input type="text" class="form-control" id="exampleInputEmail1"
                              placeholder="Enter employee id" name="emp_id"
                              value="{{ old('emp_id') }}">
                           <p class="text-danger"> @error('emp_id') {{ $message }} @enderror </p>
                        </div>
                        <div class="form-group">
                           <label for="exampleInputEmail1">Employee Name</label>
                           <input type="text" class="form-control" id="name" placeholder="Enter Name"
                              name="name" value="{{ old('name') }}">
                           <p class="text-danger"> @error('name') {{ $message }} @enderror </p>
                        </div>
                        <div class="form-group">
                           <label for="exampleInputEmail1">Technology</label>
                           <input type="text" class="form-control" id="exampleInputEmail1"
                              placeholder="Enter Technology Name" name="technology"
                              value="{{ old('technology') }}">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputEmail1">Email address</label>
                           <input type="email" class="form-control" id="exampleInputEmail1"
                              placeholder="Enter email" name="email" value="{{ old('email') }}">
                           <p class="text-danger"> @error('email') {{ $message }} @enderror </p>
                        </div>
                        <div class="form-group">
                           <label for="exampleInputEmail1">Mobile No</label>
                           <input type="text" class="form-control" id="exampleInputEmail1"
                              placeholder="Enter Mobile No " name="mobile"
                              value="{{ old('mobile') }}">
                           <p class="text-danger"> @error('mobile') {{ $message }} @enderror </p>
                        </div>
                        <div class="card-footer">
                           <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                  </form>
                  </div>
               </div>
               <!-- <div class="col-md-4"></div> -->
      </section>
      </div>
      <aside class="control-sidebar control-sidebar-dark">
      </aside>
      // Footer
      @include('admin.footer')
      // Footer
      </div>
      // JS
      @include('admin.javascript')
      // JS
   </body>
</html>