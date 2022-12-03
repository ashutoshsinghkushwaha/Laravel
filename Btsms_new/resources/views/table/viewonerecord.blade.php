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
            <small class="float-right">{{ $viewonerecord->created_at?? ' not get' }}</small>
            </h4>
            </div>
            </div>
            <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
            From
            <address>
            <strong>Admin, Inc.</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (804) 123-5432<br>
            Email: <a href="https://adminlte.io/cdn-cgi/l/email-protection"
               class="__cf_email__"
               data-cfemail="5d34333b321d3c31303c2e3c3838392e2928393432733e3230">[email&#160;protected]</a>
            </address>
            </div>
            <div class="col-sm-4 invoice-col">
            To
            <address>
            <strong>John Doe</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (555) 539-1037<br>
            Email: <a href="https://adminlte.io/cdn-cgi/l/email-protection"
               class="__cf_email__"
               data-cfemail="315b5e595f1f555e54715449505c415d541f525e5c">[email&#160;protected]</a>
            </address>
            </div>
            <div class="col-sm-4 invoice-col">
            <b>Invoice #007612</b><br>
            <br>
            <b>Order ID:</b> 4F3S8J<br>
            <b>Payment Due:</b> 2/22/2014<br>
            <b>Account:</b> 968-34567
            </div>
            </div>
            <div class="row">
            <div class="col-12 table-responsive">
            <table class="table table-striped">
            <thead>
            <tr>
            <th>Qty</th>
            <th>Product</th>
            <th>Serial #</th>
            <th>Description</th>
            <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>1</td>
            <td>Call of Duty</td>
            <td>455-981-221</td>
            <td>El snort testosterone trophy driving gloves handsome</td>
            <td>$64.50</td>
            </tr>
            <tr>
            <td>1</td>
            <td>Need for Speed IV</td>
            <td>247-925-726</td>
            <td>Wes Anderson umami biodiesel</td>
            <td>$50.00</td>
            </tr>
            <tr>
            <td>1</td>
            <td>Monsters DVD</td>
            <td>735-845-642</td>
            <td>Terry Richardson helvetica tousled street art master</td>
            <td>$10.70</td>
            </tr>
            <tr>
            <td>1</td>
            <td>Grown Ups Blue Ray</td>
            <td>422-568-642</td>
            <td>Tousled lomo letterpress</td>
            <td>$25.99</td>
            </tr>
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