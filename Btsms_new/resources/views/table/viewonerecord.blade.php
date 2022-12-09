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
                        <h1>Record</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                           <li class="breadcrumb-item"><a href="/viewallot">Allotment All Record</a></li>
                           <li class="breadcrumb-item active">View</li>
                        </ol>
                     </div>
                     <tr>
                  </div>
               </div>
            </section>
            <section class="content">
            <div class="container-fluid">
            <div class="row">
            <div class="col-12">
            <div class="invoice p-3 mb-3">
            <div class="row">
            <div class="col-12">
            <h4>
            <i class="fas fa-globe danger "></i> Bluethink, Inc.
            </h4><br>
            </div>
            </div>
            <div class="row invoice-info">
            <div class="col-sm-1 invoice-col">
            <strong>S No.</strong><br>
            <strong>Model No.</strong><br>
            <strong>Brand Name</strong><br>
            <strong>processor</strong><br>
            <strong>Storage</strong><br>
            <strong>Ram</strong><br>
            <strong>Host Name</strong><br>
            <strong>Office Address.</strong><br>
            <strong>Asset Type</strong><br>
            <strong>Ownded By</strong><br>
            <strong>Company Name</strong><br>
            <strong>Reporting </strong><br>
            <strong>Current Status</strong><br>
            <strong>Remark</strong><br>
            </div>
            <div class="col-sm-4 invoice-col">
            <?php foreach ($viewonerecord as $detail);?>
            {{ $detail->asset_sr_no?? ''}}<br>
            {{ $detail->model_no?? ''}}<br>
            {{ $detail->brand_name?? ''}}<br>
            {{ $detail->processor?? ''}}<br>
            {{ $detail->storage?? ''}}<br>
            {{ $detail->memory?? ''}}<br>
            {{ $detail->host_name?? ''}}<br>
            {{ $detail->office_address?? ''}}<br>
            {{ $detail->asset_type?? ''}}<br>
            {{ $detail->owned_by?? ''}}<br>
            {{ $detail->company_name?? ''}}<br>
            {{ $detail->reporting_manag_detail?? ''}}<br>
            <?php if($detail->current_status?? '' == "1"){?>
            Install
            <?php }
               else{?>
            Decommision
            <?php }?>
            {{ $detail->remark?? ''}}<br>
            </div>
            <div class="col-sm-4 invoice-col">
            <!-- <b>Invoice #007612</b><br>
               <br>
               <b>Order ID:</b> 4F3S8J<br>
               <b>Payment Due:</b> 2/22/2014<br>
               <b>Account:</b> 968-34567 -->
            </div>
            </div>
            <div class="row">
            <div class="col-12 table-responsive">
            <table class="table table-striped">
            <thead>
            <tr>
            <th>System S.r No</th>
            <th>Current Status</th>
            <th>Emp Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone No</th>
            <th>Tech</th>
            <th>Allotment Date</th>
            <th>Transfer Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($viewonerecord as $detail)
               <tr> 
               <td>{{ $detail->asset_sr_no}}</td>
               <?php if($detail->current_status == "1"){?>
               <td style="color:Green">Install</td>
               <?php }
                  else{?>
               <td style="color:Red">Decommision</td>
               <?php }?>
               <td>{{ $detail->emp_id?? 'Not Allot User'}}</td>
               <td>{{ $detail->name?? 'Not Allot User'}}</td>
               <td>{{ $detail->email ?? 'Not Allot User'}}</td>
               <td>{{ $detail->mobile ?? 'Not Allot User'}}</td>
               <td>{{ $detail->technology ?? 'Not Allot User'}}</td>
               <td>{{ $detail->created_at?? 'Not Allot User' }}</td>
               <?php if($detail->current_status == "0"){?>
               <td style="color:Red">{{ $detail->updated_at ?? ''}}</td>
               <?php }
                  else{?>
               <td style="color:Green">Running</td>  
               <?php }?>
          
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>
            </div>
            </div>
            <div class="row no-print">
            <div class="col-12">
            <a href="invoice-print.html" rel="noopener" target="_blank"
               class="btn btn-default"><i class="fas fa-print"></i> Print</a>
            <button type="button" class="btn btn-primary float-right"
               style="margin-right: 5px;">
            <i class="fas fa-download"></i> Generate PDF
            </button>
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
                 "autoWidth": true,
         
                 "paging": false,
                 "searching": true,
                 "ordering": true,
                 "info": true,
         
         
         
                 "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
             }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
         
         });
      </script>
   </body>
</html>