<div class="page-content">
    <div class="page-header">
        <h4 class="page-title">Ajout de contact </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Contacts</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
                    <a href="{{ route('AdminContactList') }}" class="btn btn-secondary mr-3" style="margin-left: 90%;">
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
                                <form class="form" method="post" action="{{ route('AdminPostContact') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Nom et Prénom</label>
                                                        <input type="text" class="form-control" name="name" placeholder="Nom et Prénom" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Téléphone</label>
                                                        <input class="form-control" type="tel" oninput="this.value=this.value.replace(/[^0-9]/g,'')" name="phone" placeholder="Ex Tél: 06 62 65 21" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Adresse Mail</label>
                                                        <input class="form-control" type="email" name="email" placeholder="abcd@gr.com">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Message</label>
                                                        <textarea class="form-control" rows="4" placeholder="Votre message" name="message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <dic class="row mt-2">
                                        <div class="col"></div>
                                        <div class="col float-right mt-0 mb-0">
                                            <a href="{{ route('AdminContactList') }}" class="btn btn-secondary mr-3">
                                                <i class="fe fe-x mr-2"></i>Annuler
                                            </a>
                                            <button class="btn btn-primary " type="submit">Enregistrer</button>
                                        </div>
                                        <div class="col"></div>
                                    </dic>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


