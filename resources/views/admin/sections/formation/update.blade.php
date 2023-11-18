<div class="page-content">
    <div class="page-header">
        <h4 class="page-title">Modifier la formation </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tables</li>
        </ol>
    </div>

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
                                <form class="form" method="post" action="{{ route('validateFormation') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Picture</label>
                                                        <input type="text" class="form-control" name="picture" placeholder="photo" value="{{$training->picture}}">
                                                    </div>
                                                    <input type="hidden" name="id" value="{{ $formation->id }}">
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Intilulé de la formation</label>
                                                        <input class="form-control" type="text" name="label" placeholder="Intilulé de la formation" value="{{$training->label}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Date</label>
                                                        <input class="form-control" type="date" name="date" placeholder="Date" value="{{$training->date}}">
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Durée</label>
                                                        <input class="form-control" placeholder="Durée" name="duration" value="{{$training->duration}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Prix Unitaire</label>
                                                        <input class="form-control" type="text" placeholder="Prix Unitaire" name="unitPrice" value="{{$training->unitPrice}}">
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Coût en $/ Groupe de 5 à 25</label>
                                                        <input class="form-control" type="text" placeholder="Coût en $/ Groupe de 5 à 25" name="firstGroupPrice" value="{{$training->firstGroupPrice}}">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Coût en $/ Groupe de 25 à 50</label>
                                                        <input class="form-control" type="text" placeholder="Coût en $/ Groupe de 25 à 50" name="secondGroupPrice" value="{{$training->secondGroupPrice}}">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Coût en $/ Groupe de 50 à 100</label>
                                                        <input class="form-control" type="text" placeholder="Coût en $/ Groupe de 50 à 100" name="thirdGroupPrice" value="{{$training->thirdGroupPrice}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Commentaire</label>
                                                        @isset($training)
                                                            <textarea id="inputComment" class="form-control" name="comment"
                                                                      rows="4" >{{$formation->comment}}</textarea>

                                                        @else
                                                            <textarea id="inputComment" class="form-control" name="comment" rows="4" ></textarea>

                                                        @endIf

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6 mb-3">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Auteur</label>
                                                        <input class="form-control" type="text" name="author" placeholder="Auteur" value="{{$training->author}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-right mt-0 mb-0">
                                        <a href="{{ route('getAdminFormation') }}" class="btn btn-secondary mr-3">
                                            <i class="fe fe-x mr-2"></i>Annuler
                                        </a>
                                        <button class="btn btn-primary " name="submit" value="Submit" type="submit">Enregistrer</button>
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
