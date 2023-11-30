<div class=" content-area mt-5">
    <div class="page-header">
        <h4 class="page-title">Détails du contact</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Contact</a></li>
            <li class="breadcrumb-item active" aria-current="page">Détails</li>
        </ol>
    </div>
    <div class="container">
        <div class="row row-deck">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="card clearfix">
                    <div class="card-header">
                        <div class="float-right mt-0 mb-0" style="margin-left: 68%">
                            <a href="{{ route('AdminContactList') }}" class="btn btn-secondary mr-3">
                                <i class="fe fe-x mr-2"></i>Retour
                            </a>
                            <a href="{{ route('AdminDeleteContact', $contact->id) }}" class="btn btn-danger mr-3">
                                <i class="fa fa-trash mr-2"></i>Supprimer
                            </a>
                            <a href="{{ route('AdminUpdateContact', $contact->id) }}" class="btn btn-primary mr-3">
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
                                            <td><strong>Date : </strong>{{$contact->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <td style="margin-bottom: 50px !important;"><strong>Nom et prénom du Contact : </strong>{{$contact->name}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Téléphone : </strong>0{{$contact->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Adresse mail : </strong>{{$contact->email}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Message :</strong><br><span style="margin-left: 40px">{{$contact->message}}</span></td>
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
