@extends('admin.admin_master')
@section('index')
@section('style')
    <style>
        .custom-image-input {
            display: none;
            /* Hide the default input */
        }

        .custom-image-label {
            cursor: pointer;
            border: 2px solid #e5e7eb;
            border-radius: 0.375rem;
            overflow: hidden;
        }

        .custom-image-label img {
            width: 25%;
            height: auto;
        }

        .custom-image-label:hover {
            border-color: #1e3a8a;
        }

        .custom-image-radio {
            display: none;
        }

        .custom-image-radio-label {
            cursor: pointer;
            border: 2px solid #e5e7eb;
            border-radius: 0.375rem;
            overflow: hidden;
        }

        .custom-image-radio-label img {
            width: 100%;
            height: auto;
            display: block;
        }

        .custom-image-radio-label:hover {
            border-color: #1e3a8a;
        }


    </style>
@endsection
<div class="pagetitle">
    <h1>Tambah Peserta</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">peserta</li>
            <li class="breadcrumb-item active">tambah peserta</li>
        </ol>
    </nav>
</div><!-- End Page Title -->


<div class="card ">
    <div class="card-body">
        <h5 class="card-title">tambah peserta</h5>

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
        <form class="row g-3" method="POST" action="{{ route('peserta.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <div class="form-floating">
                    <input value="{{ old('nama') }}" name="nama" type="text" class="form-control" id="nama"
                        placeholder="Name Nama">
                    <label for="nama">Nama</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-floating">
                    <input value="{{ old('tema_pelatihan') }}" name="tema_pelatihan" type="text" class="form-control"
                        id="floatingTema_pelatihan" placeholder="Your Tema_pelatihan">
                    <label for="floatingTema_pelatihan">tema pelatihan</label>
                </div>
            </div>

            <div class="row">
                <div class="mb-5">
                    <p class="mb-2 block text-sm font-medium text-gray-900">Desain Sertifikat</p>
                    <div class="flex justify-between"> <!-- Space evenly -->
                        <div class="col-md-3">
                            <label for="sertifikat-1" class="custom-image-label">
                                <img class="mb-2 h-56 rounded-lg border-2 border-slate-200 md:w-full"
                                    src="{{ asset('sertifikat/certi1.png') }}" alt="">
                            </label>
                            <div class="flex items-center rounded border border-gray-200 ps-4">
                                <input
                                    class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500"
                                    id="sertifikat-1" name="certificate_type" type="radio" value="" checked>
                                <label class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    for="sertifikat-1">Sertifikat 1</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="sertifikat-2" class="custom-image-label">
                                <img class="mb-2 h-56 rounded-lg border-2 border-slate-200 md:w-full"
                                    src="{{ asset('sertifikat/certi2.png') }}" alt="">
                            </label>
                            <div class="flex items-center rounded border border-gray-200 ps-4">
                                <input
                                    class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500"
                                    id="sertifikat-2" name="certificate_type" type="radio" value="">
                                <label class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    for="sertifikat-2">Sertifikat 2</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="sertifikat-3" class="custom-image-label">
                                <img class="mb-2 h-56 rounded-lg border-2 border-slate-200 md:w-full"
                                    src="{{ asset('sertifikat/certi3.png') }}" alt="">
                            </label>
                            <div class="flex items-center rounded border border-gray-200 ps-4">
                                <input
                                    class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500"
                                    id="sertifikat-3" name="certificate_type" type="radio" value="">
                                <label class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    for="sertifikat-3">Sertifikat 3</label>
                            </div>
                        </div>
                    </div>
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
