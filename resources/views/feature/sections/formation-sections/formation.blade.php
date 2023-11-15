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
            <div class="col-lg-6">
                <div class="accordion" id="accordionFAQ1">
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                ISO 21502 Project Management
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse row" aria-labelledby="headingOne"
                             data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body col-lg-3">
                                <img class="img-fluid" src="img/img.webp" alt="">
                            </div>
                            <div class="accordion-body col-lg-3">
                                <a href="{{route('busnessSceance')}}" class="nav-item nav-link">ISO 21502 Project Management</a>
                            </div>
                            <div class="accordion-body col-lg-2">Terminé <br> 4000 CHF</div>
                            <div class="accordion-body col-lg-4">
                                <a href="{{route('busnessSceance')}}" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight" style="background-color: var(--primary)">S'inscrire</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ISO 27001 Foundation
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse row" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body col-lg-3">
                                <img class="img-fluid" src="img/img.webp" alt="">
                            </div>
                            <div class="accordion-body col-lg-3">
                                <a href="{{route('implementerSceance')}}" class="nav-item nav-link">ISO 27001 Foundation</a>
                            </div>
                            <div class="accordion-body col-lg-2">Terminé <br> 4000 CHF</div>
                            <div class="accordion-body col-lg-4">
                                <a href="{{route('implementerSceance')}}" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight" style="background-color: var(--primary)">S'inscrire</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                ISO 27001 Lead Auditor
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse row" aria-labelledby="headingThree"
                             data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body col-lg-3">
                                <img class="img-fluid" src="img/img.webp" alt="">
                            </div>
                            <div class="accordion-body col-lg-3">
                                <a href="{{route('implementerSceance')}}" class="nav-item nav-link">ISO 27001 Lead Auditor</a>
                            </div>
                            <div class="accordion-body col-lg-2">Terminé <br> 4000 CHF</div>
                            <div class="accordion-body col-lg-4">
                                <a href="{{route('implementerSceance')}}" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight" style="background-color: var(--primary)">S'inscrire</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                ISO 27001 lead Implementer
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse row" aria-labelledby="headingFour"
                             data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body col-lg-3">
                                <img class="img-fluid" src="img/img.webp" alt="">
                            </div>
                            <div class="accordion-body col-lg-3">
                                <a href="{{route('managerSceance')}}" class="nav-item nav-link">ISO 27001 lead Implementer</a>
                            </div>
                            <div class="accordion-body col-lg-2">Terminé <br> 4000 CHF</div>
                            <div class="accordion-body col-lg-4">
                                <a href="{{route('managerSceance')}}" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight" style="background-color: var(--primary)">S'inscrire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordion" id="accordionFAQ2">
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                ISO 22301 Business Continuity Management
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse row" aria-labelledby="headingFive"
                             data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body col-lg-3">
                                <img class="img-fluid" src="img/img.webp" alt="">
                            </div>
                            <div class="accordion-body col-lg-3">
                                <a href="{{route('managerSceance')}}" class="nav-item nav-link">ISO 22301 Business Continuity Management</a>
                            </div>
                            <div class="accordion-body col-lg-2">
                                Terminé <br> 4000 CHF
                            </div>
                            <div class="accordion-body col-lg-4">
                                <a href="{{route('managerSceance')}}" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight" style="background-color: var(--primary)">S'inscrire</a>                            </div>
                        </div>
                    </div>
{{--                    <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">--}}
{{--                        <h2 class="accordion-header" id="headingSix">--}}
{{--                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">--}}
{{--                                I’m on a strict budget. Do you have any low cost options?--}}
{{--                            </button>--}}
{{--                        </h2>--}}
{{--                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"--}}
{{--                             data-bs-parent="#accordionFAQ2">--}}
{{--                            <div class="accordion-body">--}}
{{--                                Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">--}}
{{--                        <h2 class="accordion-header" id="headingSeven">--}}
{{--                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">--}}
{{--                                Will you maintain my site for me?--}}
{{--                            </button>--}}
{{--                        </h2>--}}
{{--                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"--}}
{{--                             data-bs-parent="#accordionFAQ2">--}}
{{--                            <div class="accordion-body">--}}
{{--                                Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">--}}
{{--                        <h2 class="accordion-header" id="headingEight">--}}
{{--                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">--}}
{{--                                I’m on a strict budget. Do you have any low cost options?--}}
{{--                            </button>--}}
{{--                        </h2>--}}
{{--                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"--}}
{{--                             data-bs-parent="#accordionFAQ2">--}}
{{--                            <div class="accordion-body">--}}
{{--                                Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs Start -->
