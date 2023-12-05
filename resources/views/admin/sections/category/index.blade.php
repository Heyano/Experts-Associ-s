<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Categorie formations</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
                            <li class="breadcrumb-item active">Liste</li>
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
                        <h4 class="card-title mb-0">Liste des categories</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="listjs-table" id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="card-header">
                                    <button type="button" class="btn btn-primary" style="margin-left: 90%" data-bs-toggle="modal" data-bs-target="#categoryModal">
                                        <i class="fe fe-plus mr-2"></i>
                                        Ajouter
                                    </button>
                                </div>
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li class="alert alert-danger"> {{$error}}</li>
                                @endforeach
                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead>
                                    <tr>
                                        <th>@lang('Num')</th>
                                        <th>@lang('Titre')</th>
                                        <th>@lang('Status')</th>
                                        <th>@lang('Actions')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $ide = 0;
                                    @endphp
                                    @foreach($categories as $item)
                                        <tr>
                                            <th scope="row">{{ $ide += 1 }}</th>
                                            <td>{{$item->label}}</td>
                                            <td>
                                                @if($item->status == 0)
                                                    <span class="badge-warning"> brouillon </span>
                                                @endif

                                                @if($item->status == 1)
                                                    <span class="badge-success"> publier </span>
                                                @endif

                                                @if($item->status == 2)
                                                    <span class="badge-danger"> annuler </span>
                                                @endif
                                            </td>
                                            <td>
                                                <div style="display: flex;">
                                                    <div style="display: inline-block; flex: 1; margin: 5px;">
                                                        <a href="{{ route('deleteCategory', $item->id) }}" class="btn btn-outline-danger" style="font-size: 7px !important;">
                                                            <i class="ri-delete-back-2-fill"></i>
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



<div id="categoryModal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                     <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Creation categorie</h4>
                        <p class="text-muted mx-4 mb-0">Creation d'une nouvelle categorie de formation</p>
                    </div>
                </div>

                <div class="mt-4">
                    <form class="form" method="post" action="{{ route('AdminPostCategory') }}">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Libelle de la categorie</label>
                                    <input type="text" class="form-control" name="label" placeholder="libelle de la categorie" required>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn w-sm btn-primary" id="delete-notification">enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

