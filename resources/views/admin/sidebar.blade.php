<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <h1>Dashboard</h1>

        <hr>

        <li class="nav-item">
            <a class="nav-link " href="{{ route('peserta.index') }}">
                <span>data peserta </span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link" href="{{ route('sertifikat.edit', ['sertifikat' => 1]) }}">
            <span>sertifikasi</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('logout') }}">
                <span>logout</span>
            </a>
        </li><!-- End Dashboard Nav -->
    </ul>

</aside>
