<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="admin/assets/images/logo-light-2.png" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="admin/assets/images/logo-web-light.png" alt="" height="17">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="admin/assets/images/logo-light-2.png" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="admin/assets/images/logo-web-light.png" alt="" height="17">
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link {{'getAdminIndex' == request()->path() ? 'active' : ''}}" href="{{route('getAdminIndex')}}" data-key="t-analytics">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Tableau de bord</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{'getAdminFormation' == request()->path() ? 'active' : ''}}" href="{{route('getAdminFormation')}}" data-key="t-analytics">
                        <i class="ri-dossier-fill"></i> <span data-key="t-dashboards">Formations</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{'adminSubscription' == request()->path() ? 'active' : ''}}" href="{{route('adminSubscription')}}" data-key="t-analytics">
                        <i class="ri-file-list-line"></i> <span data-key="t-dashboards">Inscriptions</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{'getNewsLetter' == request()->path() ? 'active' : ''}}" href="{{route('getNewsLetter')}}" data-key="t-analytics">
                        <i class="ri-folder-open-fill"></i> <span data-key="t-dashboards">News-letter</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{'AdminContactList' == request()->path() ? 'active' : ''}}" href="{{route('AdminContactList')}}" data-key="t-analytics">
                        <i class="ri-folder-2-fill"></i> <span data-key="t-dashboards">Contact</span>
                    </a>
                </li>
                <!-- end Dashboard Menu -->
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
