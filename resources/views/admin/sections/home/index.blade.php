<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col">

                <div class="h-100">
                    <div class="row mb-3 pb-1">
                        <div class="col-12">
                            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                <div class="flex-grow-1">
                                    <h4 class="fs-16 mb-1">Bonjour, Admin!</h4>
                                    <p class="text-muted mb-0">Voici ce qui se passe avec votre structure aujourd'hui.</p>
                                </div>

                            </div><!-- end card header -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Inscriptions</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="55">0</span> </h4>
                                            <a href="{{route('adminSubscription')}}" class="text-decoration-underline">Voir les inscriptions</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                                            <i class="bx bx-dollar-circle text-success"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Formations</p>
                                        </div>
{{--                                        <div class="flex-shrink-0">--}}
{{--                                            <h5 class="text-danger fs-14 mb-0">--}}
{{--                                                <i class="ri-arrow-right-down-line fs-13 align-middle"></i> -3.57 %--}}
{{--                                            </h5>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="34">0</span></h4>
                                            <a href="{{route('getAdminFormation')}}" class="text-decoration-underline">Voir toutes les formations</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-info-subtle rounded fs-3">
                                                            <i class="bx bx-shopping-bag text-info"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Sessions</p>
                                        </div>
{{--                                        <div class="flex-shrink-0">--}}
{{--                                            <h5 class="text-success fs-14 mb-0">--}}
{{--                                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %--}}
{{--                                            </h5>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="15">0</span> </h4>
                                            <a href="{{route('getAdminSession')}}" class="text-decoration-underline">Voir les sessions</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-warning-subtle rounded fs-3">
                                                            <i class="bx bx-user-circle text-warning"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Contact</p>
                                        </div>
{{--                                        <div class="flex-shrink-0">--}}
{{--                                            <h5 class="text-muted fs-14 mb-0">--}}
{{--                                                +0.00 %--}}
{{--                                            </h5>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="169">0</span></h4>
                                            <a href="{{route('AdminContactList')}}" class="text-decoration-underline">Voir les contacts</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                            <i class="bx bx-wallet text-primary"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div> <!-- end row-->
                </div> <!-- end .h-100-->

            </div> <!-- end col -->
        </div>

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
