<!-- Hero Start -->
<div class="container-fluid pt-5 bg-primary hero-header">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                <h1 class="display-4 text-white mb-4 animated slideInRight">Inscription</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Accueil</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="/">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">S'incrire</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 align-self-end text-center text-lg-end">
                <img class="img-fluid" src="" alt="" style="max-height: 300px;">
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
            <div class="modal-header border-0">
                <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-light p-3"
                           placeholder="Type search keyword">
                    <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->
<!-- Subscription Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Experts-Associés</div>
            <h1 class="mb-4">Inscription </h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <p class="text-center mb-4">Inscrivez-vous sur nos formations afin d'acquerir une bonne connaissance dans la matière.</p>
                <div class="wow fadeIn" data-wow-delay="0.3s">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="alert alert-danger"> {{$error}}</li>
                        @endforeach
                    </ul>
                    <form method="post" action="{{ route('SubscriptionForm') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Votre Nom">
                                    <label for="name">Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Votre Prénom">
                                    <label for="firstname">Prénom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email">
                                    <label for="email">Adresse-Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control"oninput="this.value=this.value.replace(/[^0-9]/g,'')" name="phone" id="phone" placeholder="Votre Numero">
                                    <label for="phone">Téléphone</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <select name="formation" class="form-control"  required>
                                        <option selected style="text-align: center;">-- Formtion --</option>
                                        <option value="1">Soutien scolaire</option>
                                        <option value="2">Encadrement d'activités parascolaires</option>
                                        <option value="3">Ateliers de formation</option>
                                        <option value="4">Collete de fonds</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <select name="sessionFormation" class="form-control"  required>
                                        <option selected style="text-align: center;">-- Session --</option>
                                        <option value="1">Soutien scolaire</option>
                                        <option value="2">Encadrement d'activités parascolaires</option>
                                        <option value="3">Ateliers de formation</option>
                                        <option value="4">Collete de fonds</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <select name="year" class="form-control"  required>
                                        <option selected style="text-align: center;">-- Année --</option>
                                        <option value="1">Soutien scolaire</option>
                                        <option value="2">Encadrement d'activités parascolaires</option>
                                        <option value="3">Ateliers de formation</option>
                                        <option value="4">Collete de fonds</option>
                                    </select>
                                </div>
                            </div>

{{--                            <div class="col-12">--}}
{{--                                <div class="form-floating">--}}
{{--                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>--}}
{{--                                    <label for="message">Message</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="row mt-5">
                                <div class="col-4">
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-primary w-100 py-3" type="submit">S'inscrire</button>
                                </div>
                                <div class="col-4">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Subscription End -->
@include('feature.sections.home-sections.newsletter')
