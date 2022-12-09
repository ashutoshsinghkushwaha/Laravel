<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      <script src="submit.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> System Allot List | Bluethink</title>
      <!-- stylesheet Start -->
      @include('admin.stylesheet')
      <link rel="stylesheet" href="{{ asset('admin/assets/dist/css/custom.css') }}">
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
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0">Allot System</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Stock</li>
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
               <form action="{{ route('SaveSystemRecord')}}" method="POST">
                  @csrf
                  <div class="card-body">
                     <div class="row">
                        <!-- First for start here  -->

                        <input type="hidden" class="asset_id" id="id" name="id" value="">

                        <div class="col-md-3" id="asset_detail">
                           <label for="Serial_no">Serial Number<span style="color:red" type="submit"> *
                           </span></label>
                           <input type="text" class="form-control" id="asset_sr_no" placeholder="Enter Serial No"
                              name="asset_sr_no" value="{{ old('serial_no') }}">
                           <p class="text-danger"> @error('asset_sr_no') {{ $message }} @enderror </p>
                        </div>
                       
                        <div class="col-md-3">
                           <label for="model_no">Model No. <span style="color:red"> * </span></label>
                           <input type="text" class="form-control" id="model_no" placeholder="Enter Model No"
                              name="model_no" value="{{ old('model_no') }}">
                           <p class="text-danger"> @error('model_no') {{ $message }} @enderror </p>
                        </div>
                        <div class="col-md-3">
                           <label for="brand_name">Hardware Manufacturer<span style="color:red" type="submit"> *
                           </span> </label>
                           <input type="text" class="form-control" id="brand_name" placeholder="Enter Brand Name" name="brand_name" value="{{ old('brand_name') }}">
                           <p class="text-danger"> @error('brand_name') {{ $message }} @enderror </p>
                        </div>
                        <div class="col-md-3">
                           <label for="processor">Processor<span style="color:red" type="submit"> *
                           </span> </label>
                           <input type="text" class="form-control" id="processor"
                              placeholder="Enter Processor Name" name="processor" value="{{ old('processor') }}">
                              <p class="text-danger"> @error('processor') {{ $message }} @enderror </p>
                        </div>
                        <div class="col-md-3">
                           <label for="storage">HDD /SSD <span style="color:red" type="submit"> *
                           </span></label>
                           <input type="text" class="form-control" id="storage" placeholder="Enter Storage"
                              name="storage" value="{{ old('storage') }}">
                              <p class="text-danger"> @error('storage') {{ $message }} @enderror </p>
                        </div>
                        <div class="col-md-3">
                           <label for="memory">RAM <span style="color:red" type="submit"> *
                           </span></label>
                           <input type="text" class="form-control" id="memory" placeholder="Enter ram Size"
                              name="memory" value="{{ old('memory') }}">
                              <p class="text-danger"> @error('memory') {{ $message }} @enderror </p>
                        </div>
                        
                        <div class="col-md-3">
                           <label for="host_name">Host Name</label>
                           <input type="text" class="form-control" id="host_name" placeholder="Enter Host Name"
                              name="host_name" value="{{ old('host_name') }}">
                           <p class="text-danger"> @error('host_name') {{ $message }} @enderror </p>
                        </div>
                        <div class="col-md-3">
                           <label for="office_address">Office Address</label>
                           <input type="text" class="form-control" id="office_address"
                              placeholder="Enter Office Address" name="office_address"
                              value="{{ old('office_address') }}">
                           <p class="text-danger"> @error('office_address') {{ $message }} @enderror </p>
                        </div>
                        <div class="col-md-3">
                           <label>Asset Type</label>
                           <select id="asset_type" class="form-control select2" value="{{ old('asset_type') }}" name="asset_type"
                              style="width: 100%;">
                              <option selected="selected" >Old</option>
                              <option >New</option>
                           </select>
                        </div>
                   <!-- new condition to open the warrenty field -->
                        <div class="col-md-3"id="start_warranty_div" >
                           <label for="start_date" style="color:red" >Warrenty Start</label>
                           <input  class="form-control" type="date" id="start_warranty" name="start_warranty" 
                                 placeholder="dd-mm-yyyy"value=""
                                 min="2021-01-01" max="2030-12-31" >
                        </div>
                        <div class="col-md-3" id="end_warranty_div" >
                           <label for="end_date" style="color:red" >Warrenty End</label>
                           <input  class="form-control" type="date" id="end_warranty" name="end_warranty" placeholder="dd-mm-yyyy" value=""
                                 min="2021-01-01" max="2030-12-31">
                        </div>
                        <!-- Closed warrenty field -->

                        <div class="col-md-3">
                           <label>Owned By</label>
                           <select id="owned_by" class="form-control select2" style="width: 100%;"
                              value="{{ old('owned_by') }}" name="owned_by">
                              <option selected="selected">Bluethink</option>
                              <option>Vendor</option>
                           </select>
                        </div>
                        <!-- company name select base form open  -->
                        <div class="col-md-3" id="company_name">
                           <label for="company_name" style="color:red" >Company Name</label>
                           <input type="text" class="form-control" id="company_name"
                              placeholder="Enter company_name" name="company_name"
                              value="{{ old('company_name') }}">
                        </div>
                        <div class="col-md-3" id="reporting_manag_detail">
                           <label for="reporting_manag_detail" style="color:red" >Reporting Manager Detail</label>
                           <input type="text" class="form-control" id="reporting_manag_detail"
                              placeholder="Enter Reporting Manager Detail" name="reporting_manag_detail"
                              value="{{ old('reporting_manag_detail') }}">
                        </div>
                        <!-- company name select base form close  -->
                        <div class="col-md-3">
                           <label>Current Status <span style="color:red"> * </span></label>
                           <select class="form-control" name="current_status" id="current_status"
                              style="width: 100%;" onchange="showDiv('hidden_div', this)">
                              <option value="0">Decommissioned</option>
                              <option value="1">Install</option>
                              <option value="2">Retired</option>
                           </select>
                        </div>
                        <div class="col-md-3" id="remarks">
                           <label for="remark">Remark</label>
                           <input type="text" class="form-control" id="remark" placeholder="Remark" name="remark"
                              value="">
                        </div>
                        <!-- // here the second empid stated -->
                        <div class="row">
                           <div id="hidden_div" class="view_employee">
                              <div class="col-md-3" id="myForm">
                                 <label style="color:blue" id="custom">Employee id <span style="color:red"
                                    type="submit"> * </span></label>
                                 <div class="input_set">
                                    <input name="emp_id" id="emp_id" type="text" class="form-control" />
                                 </div>
                              </div>
                              <div class="col-md-3" id="name">
                                 <label for="name" style="color:blue">Employee Name</label>
                                 <input type="text" class="form-control" name="name" id="name_input" value=""
                                    disabled>
                              </div>
                              <div class="col-md-3" id="technology">
                                 <label for="technology" style="color:blue">Technology</label>
                                 <input type="text" class="form-control" id="tech_input" name="technology"
                                    value="" disabled>
                              </div>
                              <div class="col-md-3" id="email">
                                 <label for="email" style="color:blue">Email address</label>
                                 <input type="email" class="form-control" name="email" value="" id="email_input"
                                    disabled>
                              </div>
                              <div class="col-md-3" id="mobile">
                                 <label for="mobile" style="color:blue">Mobile No</label>
                                 <input type="text" class="form-control" name="mobile" value="" id="mobile_input"
                                    disabled>
                              </div>
                              <!-- here End the install and decomission form controller  -->
                           </div>
                        </div>
                     </div>
                     <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                     </div>
               </form>

 
               </div>
         </div>
         </section>
      </div>
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
   <script>
      // function showDiv(divId, element) {
      //     document.getElementById(divId).style.display = element.value == 1 ? 'flex' : 'none';
      //     document.getElementById('remarks').style.display = element.value == 1 ? 'none' : 'block';
      // }
   </script>
</html>

<script>
   $('#asset_sr_no').blur(function(e) {
   e.preventDefault();
   var asset_sr_no = $('#asset_sr_no').val();
   $.ajax({
      type: 'post',
      data: {
            asset_sr_no: asset_sr_no,
            _token: "{{ csrf_token() }}"
      },
      url: "{{ url('asset_detail') }}",
      success: function(response) {
            console.log(response);
            $('#id').val(response.id);
            // alert(response.id);
            // $('.col-md-3 #asset_sr_no').val(response.asset_sr_no);
            $('.col-md-3 #model_no').val(response.model_no);
            $('.col-md-3 #brand_name').val(response.brand_name);
            $('.col-md-3 #processor').val(response.processor);
            $('.col-md-3 #storage').val(response.storage);
            $('.col-md-3 #memory').val(response.memory);
            $('.col-md-3 #host_name').val(response.host_name);
            $('.col-md-3 #office_address').val(response.office_address);
            $('.col-md-3 #owned_by').val(response.owned_by);
            $('.col-md-3 #company_name').val(response.company_name);
            $('.col-md-3 #reporting_manag_detail').val(response
               .reporting_manag_detail);
               $('.col-md-3 #asset_type').val(response.asset_type);
               $('.col-md-3 #start_warranty').val(response.start_warranty);
               $('.col-md-3 #end_warranty').val(response.end_warranty);
               
            $('#current_status').val(response.current_status);
            $('.col-md-3 #remark').val(response.remark);
            $('.view_employee #emp_id').val(response.emp_id);
            if (response.current_status == 1) {
               getEmpDetails();
               document.getElementById('hidden_div').style.display = 'flex';
            } else {
               document.getElementById('hidden_div').style.display = 'none';
            }
      }
   })
   });
   $('#emp_id').blur(function(e) {
   e.preventDefault();
   getEmpDetails();
   });

   function getEmpDetails() {
   var emp_id = $('#emp_id').val();
   $.ajax({
      type: 'post',
      data: {
            emp_id: emp_id,
            _token: "{{ csrf_token() }}"
      },
      url: "{{ url('find') }}",
      success: function(response) {
            console.log(response);
            $('.view_employee #emp_id').val(response.emp_id);
            $('.view_employee #name_input').val(response.name);
            $('.view_employee #email_input').val(response.email);
            $('.view_employee #tech_input').val(response.technology);
            $('.view_employee #mobile_input').val(response.mobile);
      }
   })
   }
</script>