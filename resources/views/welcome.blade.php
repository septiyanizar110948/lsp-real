<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>certificate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .content {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<header>
    <nav class="navbar bg-body-secondary">
        <div class="container-fluid">
            <span style="color: cadetblue" class="navbar-brand mb-3 h3">certificate</span>
        </div>
    </nav>
</header>

<body>
    <div class="content">

        <section class="content">
            <div class="container mt-4 justify-content-center">
                <div class="row justify-content-center">
                    <div class="d-flex justify-content-center">
                        <h3>Dapatkan Sertifikatmu Disini</h3>
                    </div>
                    <div class="d-md-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
                        <form action="{{ route('search') }}" class="d-flex" method="GET">
                            @csrf
                            <input class="form-control me-2" type="text" name="nama_peserta"
                                placeholder="Tulis Nama Anda" aria-label="Search" required>
                            <button class="btn btn-outline-info" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="d-flex flex-wrap justify-content-center">
                        @if (isset($results))
                            @if ($results->isEmpty())
                                <p>No results found.</p>
                            @else
                                @foreach ($results as $result)
                                    <div class="card m-2" style="width: 30rem;">
                                        <div class="card-body">
                                            <div class="row">
                                                    <div class="col-lg-8">
                                                        <h5>{{ $result->nama }} - {{ $result->tema_pelatihan }}</h5>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="d-flex justify-content-end">
                                                            <a href="{{ route('peserta.show', $result->id) }}" class="btn btn-primary me-2">
                                                                download
                                                            </a>
                                                            <!-- Add other action buttons as needed -->
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        @endif
                    </div>
                </div>
                
                
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
