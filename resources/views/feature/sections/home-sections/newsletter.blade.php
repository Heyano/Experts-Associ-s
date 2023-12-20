<!-- Newsletter Start -->
<div class="container-fluid bg-primary newsletter py-5 mt-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid" src="img/guest-1.png" alt="">
            </div>
            <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Newsletter</div>
                <h1 class="text-white mb-4">Abonnez-vous à la newsletter</h1>
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="alert alert-danger"> {{$error}}</li>
                    @endforeach
                </ul>
                <form method="post" action="{{ route('postNewsLetter') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Votre Email">
                                <label for="email">Adresse-Email</label>
                            </div>
                        </div>
                    <div class="row mt-2">
                        <div class="col-4">
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary w-100 py-3" type="submit">Envoyer</button>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                </div>
                <small class="text-white-50">Soumettre en toute sécurité</small>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->
