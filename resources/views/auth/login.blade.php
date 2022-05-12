<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Peduli Diri</title>

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

            <div class="col-xl-6 col-lg-12 col-mt-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        @if (session()->has('failed'))
                        <div class="alert alert-dark" role="alert">
                                {{ session('failed') }}
                            </div>
                        @endif

                        @if (session()->has('success'))
                        <div class="alert alert-dark" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="align-self-center">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                                    </div>
                                    <form method="POST" action="/loginUser" class="col-sm-12 mb-3 mb-sm-2 user">
                                        @csrf
                                        <div class="form-group">
                                            <input required type="text" class="form-control form-control-user"
                                                id="nama" aria-describedby="emailHelp" name="nama"
                                                placeholder="Masukan Nama">
                                                @error('nama')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div> 
                                        <div class="form-group">
                                            <input required type="number" class="form-control form-control-user"
                                                id="password"  maxlength="16" oninput="javascript: if (this.value.length -> this.maxlength) this.value = this.value.slice(0, this.maxlength)" min="0" id="rulesInput" pattern="[0-9]" name="password"
                                                 placeholder="Masukan NIK">

                                        </div>
                                        <button type="submit" style="background-color:#222E3C " class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="register">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <script>
        var inputBox = document.getElementById("rulesInput");

        var invalidChars = [
            "-",
            "+",
            "e",
            "E",
            "."
        ];

        inputBox.addEventListener("keydown",function(e){
            if (invalidChars.includes(e.key)) {
                e.preventDefault();
            }
        });


    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('dist/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('dist/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('dist/js/sb-admin-2.min.js') }}"></script>

</body>

</html>