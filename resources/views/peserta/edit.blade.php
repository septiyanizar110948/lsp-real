@extends('admin.admin_master')
@section('index')
    <div class="pagetitle">
        <h1>Edit Peserta</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">peserta</li>
                <li class="breadcrumb-item active">edit peserta</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <div class="card ">
        <div class="card-body">
            <h5 class="card-title">edit peserta</h5>

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Floating Labels Form -->
            <!-- Floating Labels Form -->
            <form class="row g-3" method="POST" action="{{ route('peserta.update', $peserta->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Use PUT method for updates -->
                <div class="col-md-12">
                    <div class="form-floating">
                        <input value="{{ old('nama', $peserta->nama) }}" name="nama" type="text" class="form-control"
                            id="nama" placeholder="Name Nama">
                        <label for="nama">Nama</label>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-floating">
                        <input value="{{ old('tema_pelatihan', $peserta->tema_pelatihan) }}" name="tema_pelatihan"
                            type="text" class="form-control" id="floatingTema_pelatihan"
                            placeholder="Your Tema_pelatihan">
                        <label for="floatingTema_pelatihan">tema pelatihan</label>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </div>





@endsection
