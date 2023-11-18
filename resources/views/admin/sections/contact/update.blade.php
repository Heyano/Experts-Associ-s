<div class="page-content">
    <div class="page-header">
        <h4 class="page-title">Modifier un contact</h4>
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
                                <form class="form" method="post" action="{{ route('getValidateContact') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="hidden" name="id" value="{{ $contact->id }}">
                                                    <div class="form-group">
                                                        <label class="form-label">Nom et Prénom</label>
                                                        <input type="text" class="form-control" name="name" placeholder="Nom et Prénom" value="{{$contact->name}}" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Téléphone</label>
                                                        <input class="form-control" type="tel" oninput="this.value=this.value.replace(/[^0-9]/g,'')" name="phone" placeholder="Ex Tél: 06 62 65 21" value="{{$contact->phone}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Societé / Entreprise</label>
                                                        <input type="text" class="form-control" name="society" placeholder="Nom de Societé / Entreprise" value="{{$contact->society}}">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Fonction</label>
                                                        <input class="form-control" type="text" name="function" placeholder="Fonction" value="{{$contact->function}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Adresse Mail</label>
                                                        <input class="form-control" type="email" name="email" placeholder="abcd@gr.com" value="{{$contact->email}}">
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-label">Sujet</label>
                                                        <input class="form-control" placeholder="Sujet" name="subject" value="{{$contact->subject}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Message</label>
                                                        @isset($contact)
                                                            <textarea id="inputComment" class="form-control" name="message"
                                                                      rows="4" >{{$contact->message}}</textarea>

                                                        @else
                                                            <textarea id="inputComment" class="form-control" name="message" rows="4" ></textarea>

                                                        @endIf

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="float-right mt-0 mb-0">
                                        <a href="{{ route('AdminContactList') }}" class="btn btn-secondary mr-3">
                                            <i class="fe fe-x mr-2"></i>Annuler
                                        </a>
                                        <button class="btn btn-primary " type="submit">Enregistrer</button>
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
