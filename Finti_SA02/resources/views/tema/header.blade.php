<!-- Navbar -->
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <!-- Navbar Brand -->
    <a class="navbar-brand" href="index.html">STMI</a>

    <!-- Navbar Toggler Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="/mhs">Mahasiswa</a></li>
            <li class="nav-item"><a class="nav-link" href="/mk">Matakuliah</a></li>
            <li class="nav-item">
                <a class="nav-link" href="/dosen">Dosen</a>
            </li> 
            <!--<li class="nav-item">
                <a class="nav-link" href="/pegawai">Pegawai</a>
            </li>-->


            <!-- Authenticated User Dropdown -->
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    Nilai
                </a>

                <!-- Dropdown Content Based on User Role -->
                <div class="dropdown-menu">
                    @if(Auth::user()->role == 'Staf')
                        <a class="dropdown-item" href="/krs">KRS Semester Ini</a>
                        <a class="dropdown-item" href="/ips">Nilai Per Semester</a>
                        <div class="dropdown-divider"></div>
                    @endif

                    @if(Auth::user()->role == 'Staf' || Auth::user()->role == 'Manajer')
                        <a class="dropdown-item" href="/ipk">Transkip Nilai</a>
                    @endif

                    @if(Auth::user()->role == 'Manajer')
                        <a class="dropdown-item" href="/hadir">Nilai Kehadiran</a>
                    @endif
                </div>
            </li>
            @endauth

        </ul>

        <!-- Auth Status -->
        <span class="navbar-text">
            @guest
                <!-- Not Logged In -->
                <a href="{{ route('login') }}" class="btn btn-success">Login</a>
                <a href="{{ route('register') }}" class="btn btn-warning">Register</a>
            @else
                <!-- Logged In -->
                <div class="row align-items-center">
                    <div class="col-auto pr-2">
                        Welcome {{ Auth::user()->name }} ({{ Auth::user()->role }}),
                    </div>
                    <div class="col-auto">
                        <form method="post" action="{{ route('logout') }}" class="form-inline my-2 my-lg-0">
                            @csrf
                            <button type="submit" class="btn btn-danger my-2 my-sm-0">Logout</button>
                        </form>
                    </div>
                </div>
            @endguest
        </span>
    </div>
</nav>
