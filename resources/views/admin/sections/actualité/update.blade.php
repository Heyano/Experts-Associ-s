<div class="page-content">
    <div class="page-header">
        <h4 class="page-title">Modifier l'actualité' </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tables</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('getAdminActualite') }}" class="btn btn-secondary mr-3" style="margin-left: 90%;">
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
                                <form class="form" method="post" action="{{ route('validateActualite') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Picture</label>
                                                        <input type="text" class="form-control" name="picture" placeholder="photo" value="{{$actualite->picture}}">
                                                    </div>
                                                    <input type="hidden" name="id" value="{{ $actualite->id }}">
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Intilulé de l'actualité'</label>
                                                        <input class="form-control" type="text" name="label" placeholder="Intilulé de la formation" value="{{$actualite->label}}">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Date</label>
                                                        <input class="form-control" type="date" name="date" placeholder="Date" value="{{$actualite->date}}">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Ville</label>
                                                        <input class="form-control" type="text" name="city" placeholder="Ville" value="{{$actualite->city}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Commentaire</label>
                                                        @isset($actualite)
                                                            <textarea id="inputComment" class="form-control" name="content"
                                                                      rows="4" >{{$actualite->content}}</textarea>

                                                        @else
                                                            <textarea id="inputComment" class="form-control" name="content" rows="4" ></textarea>

                                                        @endIf

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4"></div>
                                        <div class="float-right mt-0 mb-0 col-4">
                                            <a href="{{ route('getAdminActualite') }}" class="btn btn-secondary mr-3">
                                                <i class="fe fe-x mr-2"></i>Annuler
                                            </a>
                                            <button class="btn btn-primary " name="submit" value="Submit" type="submit">Enregistrer</button>
                                        </div>
                                        <div class="col-4"></div>
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
