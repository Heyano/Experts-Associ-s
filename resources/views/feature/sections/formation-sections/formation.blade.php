<!-- Hero Start -->
<div class="container-fluid pt-5 bg-primary hero-header">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                <h1 class="display-4 text-white mb-4 animated slideInRight">Nos Formations</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Accueil</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="/">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Formation</li>
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
<!-- FAQs Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">PECB</div>
            <h3 >Formations disponibles en anglais, français et allemand*</h3>
            <p class="mb-4">*Choix de la langue lors de l'inscription à la formation</p>
        </div>
        <div class="row">
            @foreach($formations as $formation)
                <div class="col-6">
                    <div class="accordion" id="accordion{{$formation->id}}">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo{{$formation->id}}" aria-expanded="false" aria-controls="collapseTwo">
                                    {{ $formation->label }}
                                </button>
                            </h2>
                            <div id="collapseTwo{{$formation->id}}" class="accordion-collapse collapse row" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordion{{$formation->id}}">
                                <div class="accordion-body col-lg-3">
                                    <img class="img-fluid" src="{{ $formation->picture }}" alt="">
                                </div>
                                <div class="accordion-body col-lg-3">
                                    <a href="{{route('implementerSceance')}}" class="nav-item nav-link">{{ $formation->label }}</a>
                                </div>
                                <div class="accordion-body col-lg-2">{{ $formation->category->label }} <br> {{ $formation->price }}</div>
                                <div class="accordion-body col-lg-4">
                                    <a href="{{route('subscription')}}" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight" style="background-color: var(--primary)">S'inscrire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- FAQs Start -->
@include('feature.sections.home-sections.newsletter')
