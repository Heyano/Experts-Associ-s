<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Formations</h4>

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
                        <h4 class="card-title mb-0">Liste des formations</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="listjs-table" id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="card-header">
                                    <a href="{{ route('editFormation') }}" class="btn btn-primary" style="margin-left: 90%; color: black">
                                        <i class="fe fe-plus mr-2"></i>
                                        Ajouter
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li class="alert alert-danger"> {{$error}}</li>
                                    @endforeach
                                </ul>
                            </div><!-- col-lg-8 -->
                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead>
                                    <tr>
                                        <th>@lang('Nbre')</th>
                                        <th>@lang('Image')</th>
                                        <th>@lang('Intitulé de la formation')</th>
                                        <th>@lang('Durée')</th>
                                        <th>@lang('Coût par personne')</th>
                                        <th>@lang('Actions')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $ide = 0;
                                    @endphp
                                    @foreach($formations as $item)
                                        <tr>
                                            <th scope="row">{{ $ide += 1 }}</th>
                                            <td><img src="{{ url($item->picture) }}" style="width: 32px"></td>
                                            <td>{{$item->label}}</td>
                                            <td>{{$item->duration}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>
                                                <div style="display: flex;">
                                                    <div style="display: inline-block; flex: 1; margin: 5px;">
                                                        <a href="/admin-formation/edit/{{$item->id}}" class="btn btn-outline-primary" style="font-size: 7px !important;">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                    </div>

                                                    <div style="display: inline-block; flex: 1; margin: 5px; ">
                                                        <a href="{{ route('adminFormationView', $item->id) }}" class="btn btn-outline-info" style="font-size: 7px !important;">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </div>

                                                    <div style="display: inline-block; flex: 1; margin: 5px;">
                                                        <a href="/admin-formation/delete/{{$item->id}}" class="btn btn-outline-danger" style="font-size: 7px !important;">
                                                            <i class="fa fa-trash"></i>
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
