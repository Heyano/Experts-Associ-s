<div class="page-content">
    <div class="page-header">
        <h4 class="page-title">Ajout du membre </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tables</li>
        </ol>
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
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('getAdminTeam') }}" class="btn btn-secondary mr-3" style="margin-left: 90%;">
                        <i class="fe fe-x mr-2"></i>Annuler
                    </a>
                </div>
                <div class="card-body">
                    <div class="e-profile">
                        <div class="tab-content pt-3">
                            <div class="tab-pane active">
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
                                <form class="form" method="post" action="{{ route('postTeam') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="photo-upload">
                                        <input type="file" id="fileInput" name="picture" accept="image/*">
                                        <label for="fileInput">Choisir une photo</label>
                                        <img id="preview" src="#" alt="Aperçu de la photo" />
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Nom</label>
                                                        <input class="form-control" type="text" name="name" placeholder="Nom" value="">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Prénom</label>
                                                        <input class="form-control" type="text" name="firstname" placeholder="Prénom" value="">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Poste</label>
                                                        <input class="form-control" type="text" name="post" placeholder="Poste" value="">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Date</label>
                                                        <input class="form-control" type="date" name="date" placeholder="Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4"></div>
                                                <div>
                                                    <a href="{{ route('getAdminTeam') }}" class="btn btn-secondary mr-3">
                                                        <i class="fe fe-x mr-2"></i>Annuler
                                                    </a>
                                                    <button class="btn btn-primary " type="submit">Enregistrer</button>
                                                </div>
                                                <div class="col-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


