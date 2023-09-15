<base href="/public">

<title>MyTasks</title>

<!-- Custom fonts for this template-->
<link href="css/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">


<body id="page-top">

    <!-- page wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('estateoffice.navbar')
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
                        alert('Updated Succesful');
                    </script>
                </div>

                @endif

                <form class="user" method="POST" action="{{url('UpdateMyTasks', $Tasks->id)}}">
                    @csrf
                    <div class="row">
                        <div class="col-3 mb-3" style="margin-left: 20px;">Name</div>
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control form-control-user" value="{{$Tasks->name}}" name="name" placeholder="Required">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-3 mb-3" style="margin-left: 20px;">Department</div>
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control form-control-user" value="{{$Tasks->department}}" name="department" placeholder="Required">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-3 mb-3" style="margin-left: 20px;">Date Of Report</div>
                        <div class="col-6 mb-3">
                            <input type="date" class="form-control form-control-user" value="{{$Tasks->dateofreport}}" name="dateofreport" placeholder="Required">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-4 mb-3" style="margin-left: 20px;">Problem Type</div>
                        <div class="col-5 mb-3 ml-40">
                            <select name="problemtype" id="problemtype" class="custom-select" placeholder="Required">
                                <option>Select Below</option>

                                <option value="Capentry">Capentry</option>
                                <option value="Plumbing">Plumbing</option>
                                <option value="Masonry">Masonry</option>
                                <option value="General">General</option>

                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-3 mb-3" style="margin-left: 20px;">Problem Description</div>
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control form-control-user" name="problemdescription" value="{{$Tasks->problemdescription}}" placeholder="Required">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-3 mb-3" style="margin-left: 20px;">Status</div>
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control form-control-user" value="{{$Tasks->statuses}}" name="statuses" placeholder="required">
                        </div>
                    </div>
                    <br>


                    <div class="row" style="margin-top:4%">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <input type="submit" class="btn btn-primary btn-user btn-block">
                        </div>
                    </div>

                </form>

                <br>
                <!-- Footer -->
                @include('staff.footer')
                <!-- End of Footer -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


</body>