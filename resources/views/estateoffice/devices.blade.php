<base href="/public">

<title>Devices</title>
<!-- Bootstrap CSS -->
<link href="css/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<link href="//cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.4/css/dataTables.foundation.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.foundation.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>


<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">
<link href="css/datatables.css" rel="stylesheet">
<script src="css/datatables.js"></script>
<link href="//cdn.datatables.net/searchbuilder/1.4.2/css/searchBuilder.dataTables.min.css" rel="stylesheet">


<body id="page-top">

    <!-- Page Wrapper -->
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 style="margin-left: 35%;" class="h3 text-gray-800">Registered Device</h1>
                    </div>

                    <!-- Page Wrapper -->
                    <div id="wrapper">
                        <div class="container my-1">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <tr>
                                            <th>S no.</th>
                                            <th>Item name</th>
                                            <th>Code No</th>
                                            <th>Office</th>
                                            <th>Date Of Registration</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        @php
                                        $x = 1;
                                        @endphp
                                        @foreach($data as $datas)
                                        <tbody>
                                            <tr>
                                                <td> {{ $x }} </td>
                                                <td>{{$datas->itemname}}</td>
                                                <td>{{$datas->codeno}}</td>
                                                <td>{{$datas->office}}</td>
                                                <td>{{$datas->dateofregistration}}</td>
                                                <td><span class="badge badge-success">{{$datas->statuses}}</span></td>
                                                <td>
                                                    <a class="btn btn-outline-primary" href="{{url('EditDevices', $datas->id)}}">Edit</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @php
                                        $x++;
                                        @endphp
                                        @endforeach
                                    </table>
                                </div>
                            </div>

                        </div>
                        <!-- Option 1: Bootstrap Bundle with Popper -->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
                        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                        <script src=https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js></script>
                        <script src=https://cdn.datatables.net/1.13.4/js/dataTables.foundation.min.js></script>
                        <script src=https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js></script>
                        <script src=https://cdn.datatables.net/buttons/2.3.6/js/buttons.foundation.min.js></script>
                        <script src=https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js></script>
                        <script src=https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js></script>
                        <script src=https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js></script>
                        <script src=https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js></script>
                        <script src=https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js></script>
                        <script src=https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js></script>


                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            lengthChange: false,
            buttons: ['excel', 'pdf', 'print']
        });

        table.buttons().container()
            .appendTo('#example_wrapper .small-6.columns:eq(0)');
    });
</script>