<div class="page-content">
    <div class="page-header">
        <h4 class="page-title">Détails de l'inscription</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Inscription</a></li>
            <li class="breadcrumb-item active" aria-current="page">Détails</li>
        </ol>
    </div>
    <div class="container">
        <div class="row row-deck">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="card clearfix">
                    <div class="card-header">
                        <div class="float-right mt-0 mb-0" style="margin-left: 68%">
                            <a href="{{ route('adminSubscription') }}" class="btn btn-secondary mr-3">
                                <i class="fe fe-x mr-2"></i>Retour
                            </a>
                            <a href="{{ route('adminSubscriptionDelete', $subscription->id) }}" class="btn btn-danger mr-3">
                                <i class="fa fa-trash mr-2"></i>Supprimer
                            </a>
                            <a href="{{ route('AdminUpdateSubscription', $subscription->id) }}" class="btn btn-primary mr-3">
                                <i class="fe fe-edit mr-2"></i>Modifier
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row profile-user-info">
                            <div class="col-lg-8">
                                <div class="table-responsive border ">
                                    <table>
                                        <tbody style="font-size: 18px!important;">
                                        <tr>
                                            <td style="margin-bottom: 50px !important;"><strong>Nom et Prénom : </strong>{{$subscription->name}} {{$subscription->firstname}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Formation : </strong>
                                                {{$subscription->edition->label}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Session : </strong>
                                                @if($subscription->sessions->label)
                                                    {{$subscription->sessions->label}}
                                                @endif

                                             </td>
                                         </tr>
                                         <tr>
                                             <td><strong>Année : </strong>
                                                 {{getYears($subscription->annee->label)}}
                                             </td>
                                         </tr>
                                         <tr>
                                             <td><strong>Date d'inscription: </strong>{{$subscription->created_at}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
