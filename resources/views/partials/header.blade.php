<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <a href="/" class="navbar-brand">
                <img src="img/logo-web-light-230.png">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="/" class="nav-item nav-link {{'/' == request()->path() ? 'active' : ''}}">Accueil</a>
                    <a href="{{route('about')}}" class="nav-item nav-link {{'about' == request()->path() ? 'active' : ''}}">A propos de nous</a>
                    <div class="nav-item dropdown">
                        <a href="{{route('management')}}" class="nav-link dropdown-toggle {{'management' == request()->path() ? 'active' : ''}}" data-bs-toggle="dropdown">Formations</a>
                        <div class="dropdown-menu bg-light mt-2">
                            <a href="{{route('management')}}" class="dropdown-item">ISO 21502 Project Management</a>
                            <a href="{{route('foundation')}}" class="dropdown-item">ISO 27001 Foundation</a>
                            <a href="{{route('auditor')}}" class="dropdown-item">ISO 27001 Lead Auditor</a>
                            <a href="{{route('implementer')}}" class="dropdown-item">ISO 27001 lead Implementer</a>
                            <a href="{{route('business')}}" class="dropdown-item">ISO 22301 Business Continuity Management</a>
                        </div>
                    </div>
                    <a href="{{route('inscription')}}" class="nav-item nav-link {{'inscription' == request()->path() ? 'active' : ''}}">Inscriptions</a>
                    <a href="{{route('aboutPecb')}}" class="nav-item nav-link {{'aboutPecb' == request()->path() ? 'active' : ''}}">A propos de PECB</a>
                    <a href="{{route('contact')}}" class="nav-item nav-link {{'contact' == request()->path() ? 'active' : ''}}">Contact</a>
                </div>
                <butaton type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal"
                         data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->



