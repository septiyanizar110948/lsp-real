@extends('admin.admin_master')
@section('index')
    <div class="pagetitle">
        <h1>Sertifikat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">edit</a></li>
                <li class="breadcrumb-item active">Sertifikat</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Sertifikat</h5>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('sertifikat.update', ['sertifikat' => $sertifikat->id]) }}">
                @csrf
                @method('PUT')

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="company" name="company" placeholder="Name Company" value="{{ old('company', $sertifikat->company) }}">
                    <label for="company">Company</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="kepsek" name="kepsek" placeholder="Name Kepsek" value="{{ old('kepsek', $sertifikat->kepsek) }}">
                    <label for="kepsek">Kepala Sekolah</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="kaprok" name="kaprok" placeholder="Name Kaprok" value="{{ old('kaprok', $sertifikat->kaprok) }}">
                    <label for="kaprok">Kepala Program</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat" value="{{ old('tempat', $sertifikat->tempat) }}">
                    <label for="tempat">Tempat</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="tgl_sertifikat" name="tgl_sertifikat" value="{{ old('tgl_sertifikat', $sertifikat->tgl_sertifikat) }}">
                    <label for="tgl_sertifikat">Tanggal Sertifikat</label>
                </div>

                <div class="form-group mb-3">
                    <label for="gambar_kepsek">TTD Kepala Sekolah</label>
                    <input type="file" class="form-control" id="gambar_kepsek" name="gambar_kepsek">
                </div>

                <div class="form-group mb-3">
                    <label for="gambar_kaprok">TTD Kepala Program</label>
                    <input type="file" class="form-control" id="gambar_kaprok" name="gambar_kaprok">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
