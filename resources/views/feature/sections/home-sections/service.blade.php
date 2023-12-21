<!-- Service Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Experts Associés</div>
                <h1 class="mb-4">Nos Formations</h1>
                <p class="mb-4">Vous souhaitez recevoir toutes les informations sur les formations PECB Swiss ?</p>
                <p>Les formations ISO de PECB ont pour but de vous aider à améliorer vos compétences en management de projet et à vous mettre sur la voie de devenir un excellent gestionnaire de projet.
                    Elles favorisent la collaboration des employés et améliorent la communication entre le personnel, les fournisseurs et les clients concernés par le projet,
                    ce qui se traduit par l’engagement des parties prenantes et la satisfaction des clients.</p>
                <a class="btn btn-primary rounded-pill px-4" href="">Demandez-nous votre brochure</a>
            </div>
            <div class="col-lg-7">
                <div class="row g-4">
                    @foreach($categories as $category)
                    <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon " style="font-size: 10px">
                                <img class="img-fluid" src="{{url('img/img.webp')}}" alt="">
                            </div>
                            <h5 class="mb-3">{{$category->label}}</h5>
                            <p></p>
                            <a class="btn px-3 mt-auto mx-auto" href="{{route('formation')}}">En savoir plus</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
