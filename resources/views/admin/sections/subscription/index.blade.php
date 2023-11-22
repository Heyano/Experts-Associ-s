<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Inscriptions</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Liste des inscriptions</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="listjs-table" id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="card-header">
                                    <a href="{{ route('AdminEditSubscription') }}" class="btn btn-primary" style="margin-left: 90%; color: black">
                                        <i class="ri-add-line align-bottom me-1"></i>
                                        Ajouter
                                    </a>
                                </div>
                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead>
                                    <tr>
                                        <th>@lang('Nbre')</th>
                                        <th>@lang('Nom et Prénom')</th>
                                        <th>@lang('Formation')</th>
                                        <th>@lang('Session de formation')</th>
                                        <th>@lang('Année')</th>
                                        <th>@lang('Date d\'inscription')</th>
                                        <th>@lang('Actions')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $ide = 0;
                                    @endphp
                                    @foreach($subscriptions as $item)
                                        <tr>
                                            <th scope="row">{{ $ide += 1 }}</th>
                                            <td>{{$item->name}} {{$item->firstname}}</td>
                                            <td>
                                                @foreach ($formations as $item)
                                                    {{ $item->label }}
                                                @endforeach
                                            </td>
                                            <td>{{$item->sessionFormation}}</td>
                                            <td>{{$item->year}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>
                                                <div style="display: flex;">
                                                    <div style="display: inline-block; flex: 1; margin: 5px;">
                                                        <a href="{{ route('AdminUpdateSubscription', $item->id) }}" class="btn btn-outline-primary" style="font-size: 7px !important;">
                                                            <i class="ri-edit-2-fill"></i>
                                                        </a>
                                                    </div>

                                                    <div style="display: inline-block; flex: 1; margin: 5px; ">
                                                        <a href="{{ route('adminSubscriptionView', $item->id) }}" class="btn btn-outline-info" style="font-size: 7px !important;">
                                                            <i class="ri-eye-2-fill"></i>
                                                        </a>
                                                    </div>

                                                    <div style="display: inline-block; flex: 1; margin: 5px;">
                                                        <a href="{{ route('adminSubscriptionDelete', $item->id) }}" class="btn btn-outline-danger" style="font-size: 7px !important;">
                                                            <i class="ri-delete-back-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="javascript:void(0);">
                                        Next
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
