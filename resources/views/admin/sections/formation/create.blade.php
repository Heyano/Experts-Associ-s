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
                        <i class="fe fe-x mr-2"></i>Retour
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
                                                        <input class="form-control" type="time" placeholder="Heure" name="time">
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Prix</label>
                                                        <input class="form-control" type="number" placeholder="Prix" name="price">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Catégorie</label>
                                                        <select class="form-select" name="category" >
                                                            <option value="">----categorie-----</option>
                                                            @foreach($categories as $item)
                                                                <option value="{{ $item->id }}"> {{ $item->label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Ville</label>
                                                        <input class="form-control" type="text" placeholder="Ville" name="city">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Commentaire</label>
                                                        <textarea class="form-control" rows="2" placeholder="Contenu" name="content"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4"></div>
                                                <div>
                                                    <a href="{{ route('getAdminFormation') }}" class="btn btn-secondary mr-3">
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


