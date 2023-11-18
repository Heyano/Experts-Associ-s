<div class="page-content">
    <div class="page-header">
        <h4 class="page-title">Ajout de formation </h4>
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
                    <a href="{{ route('getAdminFormation') }}" class="btn btn-secondary mr-3" style="margin-left: 90%;">
                        <i class="fe fe-x mr-2"></i>Annuler
                    </a>
                </div>
                <div class="card-body">
                    <div class="e-profile">
                        <div class="row">
                            <div class="col-12 col-sm-auto mb-3">
                                <div class="mx-auto img-2">
                                    <img src="{{ url('assets\images\formation\dev.jpg') }}" style="width: 300px; height: 300px">
                                </div>
                            </div>
                            <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                <div class="text-center text-sm-left mb-sm-0">
                                    <div>
                                        <button  class="btn btn-primary btn-block mt-5" type="button">
                                            <i class="fa fa-fw fa-camera"></i>
                                            <span>Change Photo</span>
                                        </button>
                                    </div>
                                    <button class="btn btn-secondary btn-block mt-2" type="button">
                                        <i class="fa fa-fw fa-camera"></i>
                                        <span>Remove Photo</span>
                                    </button>
                                </div>
                            </div>
                        </div>

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
                                <form class="form" method="post" action="{{ route('postFormation') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="photo-upload">
                                        <input type="file" id="fileInput" name="picture" accept="image/*">
                                        <label for="fileInput">Choisir une photo</label>
                                        <img id="preview" src="#" alt="Aperçu de la photo" />
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Intilulé de la formation</label>
                                                        <input class="form-control" type="text" name="label" placeholder="Intilulé de la formation" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Date</label>
                                                        <input class="form-control" type="date" name="date" placeholder="Date">
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Durée</label>
                                                        <input class="form-control" placeholder="Durée" name="duration">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Heure</label>
                                                        <input class="form-control" type="text" placeholder="Coût / Personne" name="unitPrice">
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Prix</label>
                                                        <input class="form-control" type="text" placeholder="Coût en $/ Groupe de 5 à 25" name="firstGroupPrice">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Category</label>
                                                        <input class="form-control" type="text" placeholder="Coût en $/ Groupe de 25 à 50" name="secondGroupPrice">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Ville</label>
                                                        <input class="form-control" type="text" placeholder="Coût en $/ Groupe de 50 à 100" name="thirdGroupPrice">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Commentaire</label>
                                                        <textarea class="form-control" rows="2" placeholder="My Bio" name="comment"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="{{ route('getAdminFormation') }}" class="btn btn-secondary mr-3">
                                                    <i class="fe fe-x mr-2"></i>Annuler
                                                </a>
                                                <button class="btn btn-primary " type="submit">Enregistrer</button>
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


