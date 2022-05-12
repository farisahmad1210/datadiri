<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Peduli Diri</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('dist/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('dist/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-white">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-2 shadow-lg my-5">
                    <div class="card-body p-2">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="align-self-center">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Membuat Akun</h1>
                                    </div>
                                    <form method="POST" action="/create" class="col-sm-12 mb-3 mb-sm-2 user">
                                        @csrf
                                        <div class="form-group">
                                            <input required type="text" class="form-control form-control-user"
                                                id="nama" aria-describedby="emailHelp" name="nama"
                                                placeholder="Daftar Nama" @error('nama') is invaid @enderror autofocus required>
                                                @error('nama')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>
                                        <div class="form-group">
                                            <input required type="number" class="form-control form-control-user"
                                                id="nik" name="nik" max="16"
                                                placeholder="Daftar NIK" @error('nik') is invaid @enderror autofocus required>
                                                @error('nik')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button style="background-color: #222E3C" type="submit" class="btn btn-primary btn-user btn-block">
                                            Daftar
                                        </button>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="/">have an account? Click this</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('dist/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('dist/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('dist/js/sb-admin-2.min.js') }}"></script>

</body>

</html>