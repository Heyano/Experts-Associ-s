<div class="page-content">
    <div class="page-header">
        <h4 class="page-title">Détails de l'actulité'</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Actualité</a></li>
            <li class="breadcrumb-item active" aria-current="page">Détails</li>
        </ol>
    </div>
    <div class="container">
        <div class="row row-deck">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="card clearfix">
                    <div class="card-header">
                        <div class="float-right mt-0 mb-0" style="margin-left: 68%">
                            <a href="{{ route('getAdminActualite') }}" class="btn btn-secondary mr-3">
                                <i class="fe fe-x mr-2"></i>Retour
                            </a>
                            <a href="{{ route('deleteActualite', $actualite->id) }}" class="btn btn-danger mr-3">
                                <i class="fa fa-trash mr-2"></i>Supprimer
                            </a>
                            <a href="{{ route('updateActualite', $actualite->id) }}" class="btn btn-primary mr-3">
                                <i class="fe fe-edit mr-2"></i>Modifier
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row profile-user-info">
                            <div class="col-lg-8">
                                <div class="table-responsive border ">
                                    <table>
                                        <tbody style="font-family: bold,'Times New Roman Black'; font-size: 18px!important;">
                                        <tr>
                                            <td style="margin-bottom: 50px !important;"><strong>Intitulé de l'actualité' : </strong>{{$actualite->label}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Date de l'actualité' : </strong>{{$actualite->date}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Commentaire :</strong><br><span style="margin-left: 40px">{{$actualite->content}}</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ url($actualite->picture) }}"  style="width: 410px; height: 300px">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
