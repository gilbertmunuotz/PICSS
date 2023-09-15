  <title>Request Device Sheet</title>

  <!-- Custom fonts for this template-->
  <link href="css/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <body id="page-top">

      <!-- page wrapper -->
      <div id="wrapper">

          <!-- Sidebar -->
          @include('staff.navbar')
          <!-- End of Sidebar -->

          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">

              <!-- Main Content -->
              <div id="content">

                  <!-- Topbar -->
                  @include('staff.header')
                  <!-- End of Topbar -->


                  @if(session()->has('message'))

                  <div class="cointainer">
                      <script>
                          alert('Requested  Succesful');
                      </script>
                  </div>

                  @endif

                  <form class="user" method="POST" action="{{url('RequestingDevice')}}">
                      @csrf
                      <div class="row">
                          <div class="col-3 mb-3" style="margin-left: 20px;">Name</div>
                          <div class="col-6 mb-3">
                              <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="John Laizer" required>
                          </div>
                      </div>
                      <br>

                      <div class="row">
                          <div class="col-3 mb-3" style="margin-left: 20px;">Department</div>
                          <div class="col-6 mb-3">
                              <input type="text" class="form-control form-control-user" id="department" name="department" placeholder="Electrical" required>
                          </div>
                      </div>
                      <br>

                      <div class="row">
                          <div class="col-3 mb-3" style="margin-left: 20px;">Date Of Request</div>
                          <div class="col-6 mb-3">
                              <input type="date" class="form-control form-control-user" id="DOR" name="dateofrequests">
                          </div>
                      </div>
                      <br>

                      <div class="row">
                          <div class="col-3 mb-3" style="margin-left: 20px;">Device Name</div>
                          <div class="col-6 mb-3">
                              <input type="text" class="form-control form-control-user" id="devicename" name="devicename" placeholder="Electical Bulbs" required>
                          </div>
                      </div>
                      <br>

                      <div class="row">
                          <div class="col-3 mb-3" style="margin-left: 20px;">Device Description</div>
                          <div class="col-6 mb-3"> <input type="text" class="form-control form-control-user" id="device_description" name="devicedescription" placeholder="Request of New Electrical Bulbs" required></div>
                      </div>
                      <br>


                      <div class="row" style="margin-top:4%">
                          <div class="col-4"></div>
                          <div class="col-4">
                              <input type="submit" class="btn btn-primary btn-user btn-block">
                          </div>
                      </div>

                  </form>

                  <!-- Footer -->
                  @include('staff.footer')
                  <!-- End of Footer -->

              </div>
              <!--End Main Content -->

          </div>
          <!-- End Content Wrapper -->

      </div>
      <!-- End of Content Wrapper -->

  </body>