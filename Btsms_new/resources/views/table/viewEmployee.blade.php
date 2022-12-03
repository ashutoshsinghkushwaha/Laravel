<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bluethink | Employee Listing</title>
      <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
      <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome-free/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
      <link rel="stylesheet"
         href="{{ asset('admin/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/dist/css/adminlte.min2167.css?v=3.2.0') }}">
      <!-- stylesheet Start -->
      @include('admin.stylesheet')
      <!-- stylesheet End -->
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
         <div class="content-wrapper">
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1>DataTables</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                     </div>
                  </div>
               </div>
            </section>
            <section class="content">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-12">
                        <div class="card-item-little-sec">
                           <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                    <tr>
                                       <th>Employee Id</th>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Technology</th>
                                       <th>Phone No</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                       <td>{{ $product->emp_id }}</td>
                                       <td>{{ $product->name }}</td>
                                       <td>{{ $product->email }}</td>
                                       <td>{{ $product->technology }}</td>
                                       <td>{{ $product->mobile }}</td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <aside class="control-sidebar control-sidebar-dark"></aside>
         // Footer
         @include('admin.footer')
         // Footer
      </div>
      <script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js ') }}"></script>
      <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js ') }}"></script>
      <script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js ') }}"></script>
      <script src="{{ asset('admin/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js ') }}"></script>
      <script src="{{ asset('admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js ') }}"></script>
      <script src="{{ asset('admin/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js ') }}"></script>
      <script src="{{ asset('admin/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js ') }}"></script>
      <script src="{{ asset('admin/assets/plugins/jszip/jszip.min.js ') }}"></script>
      <script src="{{ asset('admin/assets/plugins/pdfmake/pdfmake.min.js ') }}"></script>
      <script src="{{ asset('admin/assets/plugins/pdfmake/vfs_fonts.js ') }}"></script>
      <script src="{{ asset('admin/assets/plugins/datatables-buttons/js/buttons.html5.min.js ') }}"></script>
      <script src="{{ asset('admin/assets/plugins/datatables-buttons/js/buttons.print.min.js ') }}"></script>
      <script src="{{ asset('admin/assets/plugins/datatables-buttons/js/buttons.colVis.min.js ') }}"></script>
      <script src="{{ asset('admin/assets/dist/js/adminlte.min2167.js?v=3.2.0 ') }}"></script>
      <script src="{{ asset('admin/assets/dist/js/demo.js') }}"></script>
      <script>
         $(function() {
             $("#example1").DataTable({
                 "responsive": true,
                 "lengthChange": false,
                 "autoWidth": false,
                 "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
             }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
             $('#example2').DataTable({
                 "paging": true,
                 "lengthChange": false,
                 "searching": false,
                 "ordering": true,
                 "info": true,
                 "autoWidth": false,
                 "responsive": true,
             });
         });
      </script>
   </body>
</html>