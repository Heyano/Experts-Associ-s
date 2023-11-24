<div class="page-content">
    <div class="page-header">
        <h4 class="page-title">Inscription</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tables</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('adminSubscription') }}" class="btn btn-secondary mr-3" style="margin-left: 90%;">
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
                                <form class="form" method="post" action="{{ route('postAdminSubscription') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Nom</label>
                                                        <input type="text" class="form-control" name="name" placeholder="Votre nom">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Prénom</label>
                                                        <input class="form-control" type="text" name="firstname" placeholder="Votre prénom" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Téléphone</label>
                                                        <input class="form-control" type="tel" oninput="this.value=this.value.replace(/[^0-9]/g,'')" name="phone" placeholder="ex: 07 85 12 36">
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Adresse  mail</label>
                                                        <input class="form-control" type="email" placeholder="Adresse mail" name="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col col-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Formation</label>
                                                        <select name="formation" class="form-control"  required>
                                                            <option >-- Formation --</option>
                                                            @foreach($formation as $item)
                                                                <option value="{{ $item->id }}"> {{ $item->label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col col-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Session</label>
                                                        <select name="session" class="form-control"  required>
                                                            @foreach($sessions as $item)
                                                                <option value="{{ $item->id }}"> {{ $item->label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col col-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Année</label>
                                                        <select name="year" class="form-control"  required>
                                                            @foreach($annees as $item)
                                                                <option value="{{ $item->id }}"> {{ $item->label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mt-2">
                                        <div class="col col-4">
                                        </div>
                                        <div class="float-right mt-0 mb-0 col col-4">
                                            <a href="{{ route('adminSubscription') }}" class="btn btn-secondary mr-3">
                                                <i class="fe fe-x mr-2"></i>Annuler
                                            </a>
                                            <button class="btn btn-primary " type="submit">Enregistrer</button>
                                        </div>
                                        <div class="col col-4">
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
