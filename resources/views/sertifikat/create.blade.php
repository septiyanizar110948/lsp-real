@extends('admin.admin_master')
@section('index')
    <div class="pagetitle">
        <h1>Sertifikat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">sertifikat</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">sertifikat</h5>

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
                            <form class="row g-3" method="POST" action="{{ route('sertifikat.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input value="{{ old('company') }}" name="company" type="text" class="form-control" id="company" placeholder="Name Company">
                                        <label for="company">company</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input value="{{ old('kepsek') }}" name="kepsek" type="text" class="form-control" id="kepsek" placeholder="Name Kepsek">
                                        <label for="kepsek">kepala sekolah</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input value="{{ old('kaprok') }}" name="kaprok" type="text" class="form-control" id="floatingKaprok" placeholder="Your Kaprok">
                                        <label for="floatingKaprok">kepala program</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input value="{{ old('tempat') }}" name="tempat" type="text" class="form-control" id="floatingTempat" placeholder="Your Tempat">
                                        <label for="floatingTempat">tempat</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="date" name="tgl_sertifikat" id="tgl_sertifikat" value="{{ old('tgl_sertifikat') }}" class="form-control">
                                        <label for="tgl_sertifikat">Tanggal Sertifikasi</label>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="gambar_Kepsek" class="form-label"> ttd kepala sekolah</label>
                                    <input class="form-control" type="file" name="gambar_kepsek" id="gambar_Kepsek">
                                </div>
                                <div class="mb-3  col-md-6">
                                    <label for="gambar_Kaprok" class="form-label"> ttd kepala program</label>
                                    <input class="form-control" type="file" name="gambar_kaprok" id="gambar_Kaprok">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- End floating Labels Form -->
                        </div>
                    </div>





@endsection
