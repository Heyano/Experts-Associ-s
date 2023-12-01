<!-- Case Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">ACTUALITÉ</div>
            <h1 class="mb-4">Découvrez toute l'actualité PECB</h1>
        </div>
        <div class="row g-4">
            @foreach($actualites as $actualite)
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="case-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="{{$actualite->picture}}" alt="">
                    <a class="case-overlay text-decoration-none" href="">
                        <small>{{$actualite->label}}</small>
                        <p class="lh-base text-white mb-3">{{$actualite->content}}</p>
                        <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Case End -->
