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
      <link rel="stylesheet" href="{{ asset('admin/assets/plugins/select2/css/select2.min.css') }}">
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
               <!-- <div class="container-fluid">
                  <form action="">
                     <div class="row">
                        <div class="col-md-10 offset-md-1">
                           <div class="row">
                              <div class="col-2">
                                 <div class="form-group">
                                    <label>Sort Order:</label>
                                    <select class="select2" style="width: 100%;">
                                       <option selected>ASC</option>
                                       <option>DESC</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-2">
                                 <div class="form-group">
                                    <label>Status:</label>
                                    <select class="select2" style="width: 100%;">
                                       <option selected>Select</option>
                                       <option value="0">Install</option>
                                       <option value="1">Decommision</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div> -->
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-12">
                        <div class="card-alloot-list">
                           <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>S No.</th>
                                       <th>Model No.</th>
                                       <th>Host Name</th>
                                       <th>Office Add</th>
                                       <!-- <th>Asset Type</th> -->
                                       <th>Owned By</th>
                                       <th>Comp.</th>
                             
                                       <th>Current Status</th>
                                       <th>Emp Id</th>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Phone No</th>
                                       <th>Tech</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($details as $detail)
                                    <tr>
                                       <td>{{ $detail->id}}</td>
                                       <td>{{ $detail->asset_sr_no}}</td>
                                       <td>{{ $detail->model_no }}</td>
                                       <td>{{ $detail->host_name }}</td>
                                       <td>{{ $detail->office_address }}</td>
                                       <!-- <td>{{ $detail->asset_type }}</td> -->
                                       <td>{{ $detail->owned_by }}</td>
                                       <td>{{ $detail->company_name ??'Na'}}</td>
                        
                                       <?php if($detail->current_status == "1"){?>
                                       <td style="color:Green"><b>Install</b></td>
                                       <?php }
                                      elseif ($detail->current_status == "0"){?>
                                          <td style="color:Blue"><b>Decommision</b></td>
                                          <?php }

                                          else{?>
                                       <td style="color:Red"><b>Retired</b></td>
                                       <?php }?>
                                       <td>{{ $detail->emp_id??'Na'}}</td>
                                       <td>{{ $detail->name ??'Na'}}</td>
                                       <td>{{ $detail->email ??'Na'}}</td>
                                       <td>{{ $detail->mobile ??'Na'}}</td>
                                       <td>{{ $detail->technology ??'Na'}}</td>
                                       <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                             <a href="/viewonerecord??id={{ $detail->id}}"  class="btn btn-info"><i class="fas fa-eye"></i></a>
                                             <a href="#" class="btn btn-danger <?php if($detail->current_status == "1"){
                                                echo 'disabled';
                                             }?>"  ><i
                                                class="fas fa-trash" ></i></a>
                                          </div>
                                       </td>
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
      <script src="{{ asset('admin/assets/dist/js/demo.js ') }}"></script>
      <script src="{{ asset('admin/assets/plugins/select2/js/select2.full.min.js') }}"></script>
      <script>
         $(function() {
             $('.select2').select2()
         });
      </script>
      <script>
         $(function() {
             $("#example1").DataTable({
                 "responsive": true,
                 "lengthChange": false,
                 "autoWidth": false,
                 "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
             }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
             
         });
      </script>
   </body>
</html>