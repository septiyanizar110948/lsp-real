@extends('admin.admin_master')
@section('index')

<div class="pagetitle">
    <h1>Data Peserta</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">peserta</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<div class="mb-3 ms-0">
    <a class="btn btn-success" href="{{ route('peserta.create') }}">Tambah Peserta</a>
</div>

<div class="row">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>NO.</th>
                <th>Nama</th>
                <th>No. Sertifikat</th>
                <th>Tema Pelatihan</th>
                <th>Tema serti</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesertas as $peserta)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $peserta->nama }}</td>
                <td>{{ $peserta->no_sertifik }}</td>
                <td>{{ $peserta->tema_pelatihan }}</td>
                <td>{{ $peserta->nilai_sertifikat    }}</td>
                <td class="d-flex">
                    <a href="{{ route('peserta.show', $peserta->id) }}" class="btn btn-primary me-2">
                        <i class="ri-printer-fill"></i>
                    </a>
                    <a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-primary me-2">
                        <i class="ri-edit-circle-fill"></i>
                    </a>
                    <form action="{{ route('peserta.destroy', $peserta->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">
                            <i class="ri-delete-bin-2-fill"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

@endsection
