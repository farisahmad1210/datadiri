@extends('master')
@section('master.content')
    

<main class="content">
    <div class="container-fluid p-0">
        
        <div class="row">
            <div class="col-12 ">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-2">Selamat Datang Di Peduli Diri {{ auth()->user()->nama }}</h5>
                    </div>
                </div>
                <a style="background-color: #222E3C" href="/catatan" class="btn btn-primary">Isi Data</a>
            </div>
        </div>



    </div>
</main>
@endsection