<title>Paperless Invertory Card Sheet System </title>

<!-- Custom fonts for this template-->
<link href="css/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

<body id="page-top">

    <!-- Page Wrapper -->
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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="table-responsive">
                        <div class="bg-gray-100">

                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                    <th>S no.</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>User Type</th>
                                    <th>E-mail</th>
                                    <th>Action</th>
                                </tr>
                                @php
                                $x = 1;
                                @endphp
                                @foreach($users as $userss)
                                <tbody>
                                    <tr>
                                        <td> {{ $x }} </td>
                                        <td>{{$userss->id}}</td>
                                        <td>{{$userss->name}}</td>
                                        <td>{{$userss->usertype}}</td>
                                        <td></td>
                                        <td>
                                            <a class="btn btn-outline-primary" href="">Edit</a>
                                            <a class="btn btn-outline-danger" onclick="return confirm('This Action Cant Be Undone')" href="{{url('DeleteUsers', $userss->id)}}">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                                @php
                                $x++;
                                @endphp
                                @endforeach
                            </table>

                        </div>
                        <!-- End Page Content -->

                    </div>
                    <!-- Main Content -->

                </div>
                <!-- Content Wrapper -->


            </div>
            <!-- End of Page Wrapper -->
        </div>

    </div>

</body>