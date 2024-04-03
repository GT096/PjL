@extends('base')
@section('content')


  @section('titre')
    INFORMATIONS BASIQUES
  @endsection

<div class="app-body">

    <!-- User stats starts -->
    <div class="mx-n4 p-4 bg-primary mb-4">

        <div class="d-flex align-items-center flex-row flex-wrap navbar  navbar-expand-lg fixed">
            <img src="assets/images/user5.png" class="img-5x rounded-circle" alt="Admin Dashboard">

            <div class="ms-3 text-white">
                <h5 class="mb-1">Clarence Wyatt</h5>
                <h6 class="m-0 fw-light">UX Designer</h6>
            </div>


            <div class="ms-4 text-white d-flex align-items-center ps-4 border-start">
                <i class="ri-phone-line fs-2 lh-1 me-2"></i>
                <div>
                    <h6 class="mb-1">Contact</h6>
                    <p class="m-0 fw-light small">000 000 0000</p>
                </div>
            </div>
            <div class="ms-4 text-white d-flex align-items-center ps-4 border-start">
                <i class="ri-map-pin-line fs-2 lh-1 me-2"></i>
                <div>
                    <h6 class="mb-1">Location</h6>
                    <p class="m-0 fw-light small">United States</p>
                </div>
            </div>
            <div class="ms-auto d-flex gap-2">
                <a href="javascript:void(0)" class="btn bg-primary-subtle position-relative ">
                    <span>Infos Basic</span>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">9+</span>
                </a>
               
                <a href="{{route('pages.liste-viste-patient')}}" class="btn bg-primary-subtle position-relative">
                    <span>Visites</span>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                </a>
                <a href="{{route('pages.liste-analyse-patient')}}" class="btn bg-primary-subtle position-relative">
                    <span>Analyses</span>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                </a>
                <a href="{{route('pages.voir-patient')}}" class="btn bg-primary-subtle position-relative">
                    <span>Soins administrés</span>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">5</span>
                </a>
                <a href="{{route('pages.voir-patient')}}" class="btn bg-primary-subtle position-relative">
                    <span>Fichiers</span>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                </a>
                <a href="{{route('pages.voir-patient')}}" class="btn bg-primary-subtle position-relative">
                    <span>Notes</span>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2</span>
                </a>
            </div>
        </div>

    </div>
    <!-- User stats ends -->
    <!-- App content start -->
    <div class="app-body">

        <!-- Row start -->
        <div class="row gx-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="custom-tabs-container">
                            <ul class="nav nav-tabs" id="customTab3" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="tab-oneAA" data-bs-toggle="tab" href="#oneAA" role="tab" aria-controls="oneAA" aria-selected="true"><i class="ri-user-smile-line"></i>Informations
                                        Personnelles</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="tab-twoAA" data-bs-toggle="tab" href="#twoAA" role="tab" aria-controls="twoAA" aria-selected="false" tabindex="-1"><i class="ri-money-dollar-circle-line"></i>Informations Biologiques</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="tab-threeAA" data-bs-toggle="tab" href="#threeAA" role="tab" aria-controls="threeAA" aria-selected="false" tabindex="-1"><i class="ri-at-fill"></i>Informations Complementaires</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="customTabContent3">
                                <div class="tab-pane fade show active" id="oneAA" role="tabpanel" aria-labelledby="tab-oneAA">

                                    <!-- Row start -->
                                    <div class="row gx-3">
                                        <div class="col-xl-3 col-sm-4 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="">Type de Pièce</label>
                                                <input type="text" class="form-control" id="" value="Carte Nationnale d'Identité">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-4 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="name">CIN</label>
                                                <input type="number" class="form-control" id="name" value="022589966354">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-4 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="email">Nom</label>
                                                <input type="email" class="form-control" id="email" value="LACHILO">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-4 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="phn">Prenom</label>
                                                <input type="number" class="form-control" id="phn" value="Expédit">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-4 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="company">Sexe</label>
                                                <input type="text" class="form-control" id="company" value="Masculin">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-4 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="bAddress">Date de Naissance</label>
                                                <input type="date" class="form-control" id="bAddress" value="18/12/2000">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-4 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="terri">Adresse</label>
                                                <input type="text" class="form-control" id="terri" value="Tokpota-vèdo">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-4 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="terri">E-mail</label>
                                                <input type="text" class="form-control" id="terri" value="expeditlachilo796@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-4 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="">Téléphone</label>
                                                <input type="number" class="form-control" id="" value="52401574">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-4 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="value">Profession</label>
                                                <input type="text" class="form-control" id="" value="Informaticien de Gestion">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-4 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="">Pays</label>
                                                <input type="text" class="form-control" id="" value="Bénin">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-4 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="">Ville</label>
                                                <input type="text" class="form-control" id="" value="Porto-Novo">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Row end -->

                                </div>
                                <div class="tab-pane fade" id="twoAA" role="tabpanel" aria-labelledby="tab-twoAA">

                                    <!-- Row start -->
                                    <div class="row gx-3">
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="companyName">Nom du père</label>
                                                <input type="text" class="form-control" id="companyName" value="LACHILO">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="companyName">Prénom du père</label>
                                                <input type="text" class="form-control" id="companyName" value="Josué">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="companyName">Pathologie du père</label>
                                                <input type="text" class="form-control" id="companyName" value="Toux">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="companyName">Nom de la mère</label>
                                                <input type="text" class="form-control" id="companyName" value="OLOTIN">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="companyName">Prenom de la mère</label>
                                                <input type="text" class="form-control" id="companyName" value="Bernadette">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="companyName">Pathologie de la mère</label>
                                                <input type="text" class="form-control" id="companyName" value="Sainte">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="companyName">Groupe sanguin</label>
                                                <input type="text" class="form-control" id="companyName" value="O+">
                                            </div>
                                        </div>



                                    </div>
                                    <!-- Row end -->

                                </div>
                                <div class="tab-pane fade" id="threeAA" role="tabpanel" aria-labelledby="tab-threeAA">

                                    <!-- Row start -->
                                    <div class="row gx-3">
                                        <div class="col">
                                            <!-- Correspondace -->
                                            <div class="mb-3">
                                                <div class="card mb-3">
                                                    <div class="card-header">
                                                        <h5 class="card-title">Correspondance</h5>
                                                    </div>
                                                    <div class="card-body">

                                                        <!-- Table start -->
                                                        <div class="table-outer">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Nom</th>
                                                                        <th>Prénom</th>
                                                                        <th>Télephone</th>
                                                                        <th>Relation avec le patient</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>8800</td>
                                                                        <td>6300</td>
                                                                        <td>3600</td>
                                                                        <td>2300</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>7400</td>
                                                                        <td>9200</td>
                                                                        <td>3600</td>
                                                                        <td>2300</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>4900</td>
                                                                        <td>8200</td>
                                                                        <td>3600</td>
                                                                        <td>2300</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td>7700</td>
                                                                        <td>7600</td>
                                                                        <td>3600</td>
                                                                        <td>2300</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td>3600</td>
                                                                        <td>2300</td>
                                                                        <td>3600</td>
                                                                        <td>2300</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- Table end -->

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Allergie -->
                                            <div class="mb-3">
                                                <div class="card mb-3">
                                                    <div class="card-header">
                                                        <h5 class="card-title">Allergies</h5>
                                                    </div>
                                                    <div class="card-body">

                                                        <!-- Table start -->
                                                        <div class="table-outer">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Allergies</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>8800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>7400</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>4900</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td>7700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td>3600</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- Table end -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- Row end -->

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- App content ends -->

</div>
<!-- App body ends -->
@endsection