@extends('master')
@section('master.content')
    


<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mt-5">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Perjalanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Dan Waktu</th>
                            <th>Lokasi</th>
                            <th>Suhu</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    @php
                        $id = 1;
                    @endphp
                    <tbody>
                        @foreach ($data as $d)
                        <tr>
                            <td scope="row">{{ $id++ }}</td>
                            <td>{{ $d->tanggal }}</td>
                            <td>{{ $d->lokasi }}</td>
                            <td>{{ $d->suhu }}</td>
                            <td>
                                <a href="/ubah/{{ $d->id }}" class="btn btn-info btn-sm">Update</a>
                                <a href="/delete/{{ $d->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus data ini?')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<!-- Bootstrap core JavaScript-->
<script src="{{ asset('dist/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('dist/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ ('js/sb-admin-2.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ ('dist/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('dist/js/demo/datatables-demo.js') }}"></script>
    
</body>
</html>

@endsection