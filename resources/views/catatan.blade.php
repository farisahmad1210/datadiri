@extends('master')
@section('master.content')
    

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                 

                    <!-- DataTales Example -->
                    <div class="card shadow mt-5">
                        <div class="card-header py-3">
                            <h6 class="m-1 font-weight-bold text-dark">Table Isi Data</h6>
                        </div>
                        <form action="simpanhasil" method="POST">
                            @csrf
                            <div class="card-body">
                                <h6>Tanggal Dan Jam</h6>
                                <input type="datetime-local" class="form-control" name="tanggal" placeholder="Tanggal">
                            </div>
                            <div class="card-body">
                                <h6>Lokasi</h6>
                                <input type="text" class="form-control" name="lokasi" placeholder="Lokasi">
                            </div>
                            <div class="card-body">
                                <h6>Suhu</h6>
                                <input type="number" min="32" max="40" class="form-control" name="suhu" placeholder="Suhu">
                            </div>
                            <div class="d-flex justify-content-center">
                            <button type="submit" style="background-color: #222E3C;width:120px" class="btn btn-primary mb-4">Submit</button>
                            </div>
                        </form>
                        
                        
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->


    <!-- Logout Modal-->
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('dist/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('dist/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('dist/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('dist/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('distvendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('dist/js/demo/datatables-demo.js') }}"></script>



</html>

@endsection