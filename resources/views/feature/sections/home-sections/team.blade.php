<!-- Team Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Notre équipe</div>
                <h1 class="mb-4">Rencontrez les membres expérimentés de notre équipe</h1>
                <p class="mb-4">Les membres de notre équipe se distinguent par leur professionnalisme, leur dévouement inébranlable envers la réussite de l'entreprise, leur capacité à collaborer efficacement avec leurs collègues,
                    leur créativité dans la résolution de problèmes, et leur engagement constant à améliorer leurs compétences pour rester à la pointe de leur domaine d'expertise.</p>
                <a class="btn btn-primary rounded-pill px-4" href="">Voir plus</a>
            </div>
            <div class="col-lg-7">
                <div class="row g-4">
                    @foreach($teams as $team)
                    <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="team-item bg-white text-center rounded p-4 pt-0">
                            <img class="img-fluid rounded-circle p-4" src="{{$team->picture}}" alt="">
                            <h5 class="mb-0">{{$team->firstname}} {{$team->name}}</h5>
                            <small>{{$team->post}}</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary m-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
