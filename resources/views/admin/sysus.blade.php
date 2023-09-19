<base href="/public">

<title>System Users</title>

<!-- Custom fonts for this template-->
<link href="css/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

<body id="page-top">

    <!-- page wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.navbar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.header')
                <!-- End of Topbar -->


                @if(session()->has('message'))

                <div class="cointainer">
                    <script>
                        alert('Updated  Succesful');
                    </script>
                </div>

                @endif

                <form class="user" method="POST" action="{{url('UpdateMyUsers', $users->id)}}">
                    @csrf
                    <div class="row">
                        <div class="col-3 mb-3" style="margin-left: 20px;">ID</div>
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control form-control-user" value="{{$users->id}}" name="id" placeholder="Required">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-3 mb-3" style="margin-left: 20px;">Name</div>
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control form-control-user" value="{{$users->name}}" name="name" placeholder="Required">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-3 mb-3" style="margin-left: 20px;">User Type</div>
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control form-control-user" value="{{$users->usertype}}" name="usertype" placeholder="Required">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-3 mb-3" style="margin-left: 20px;">E-mail</div>
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control form-control-user" value="" name="email">
                        </div>
                    </div>
                    <br>

                    <div class="row" style="margin-top:2%">
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