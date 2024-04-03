@extends('base');

@section('css')
<!-- Data Tables -->
<link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5.css" />
<link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5-custom.css" />
<link rel="stylesheet" href="assets/vendor/datatables/buttons/dataTables.bs5-custom.css" />
@endsection
@section('content')
@section('titre')
    LISTE ANALYSES
  @endsection
<div class="app-body">

  <!-- User stats starts -->
  <div class="mx-n4 p-4 bg-primary mb-4">

    <div class="d-flex align-items-center flex-row flex-wrap">
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
        <a href="{{route('pages.voir-patient')}}" class="btn bg-primary-subtle position-relative">
          <span>Infos Basic</span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">9+</span>
        </a>
        <a href="{{route('pages.liste-viste-patient')}}" class="btn bg-primary-subtle position-relative">
          <span>Visites</span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">8</span>
        </a>
        <a href="javascript:void(0)" class="btn bg-primary-subtle position-relative">
          <span>Analyses</span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
        </a>
        <a href="{{route('pages.liste-analyse-patient')}}" class="btn bg-primary-subtle position-relative">
          <span>Soins administrés</span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">5</span>
        </a>
        <a href="javascript:void(0)" class="btn bg-primary-subtle position-relative">
          <span>Fichiers</span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
        </a>
        <a href="javascript:void(0)" class="btn bg-primary-subtle position-relative">
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
      <div class="card mb-3">
        <div class="card-header">
          <h5 class="card-title">Liste des Analyses</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="toggleButtons" class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="card ">
                      <div class="list-group w-auto">
                        <a href="{{route('pages.analyse-patient')}}" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                          <img src="assets/images/products/product1.jpg" alt="Bootstrap Gallery" class="rounded-circle flex-shrink-0 img-3x" />
                          <div class="d-flex gap-2 w-100 justify-content-between">
                            <div>
                              <h6 class="mb-0">Type de l'analyse</h6>
                              <p class="mb-0 text-light">
                              Resultat de l'analyse.
                              </p>
                            </div>
                            <small class="text-light text-nowrap">date</small>
                          </div>
                        </a>
                      </div>
                    </div>
                  </td>

                </tr>

              </tbody>

            </table>
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


@section('script')
<!-- Data Tables -->
<script src="assets/vendor/datatables/dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap.min.js"></script>
<script src="assets/vendor/datatables/custom/custom-datatables.js"></script>
<!-- DataTable Buttons -->
<script src="assets/vendor/datatables/buttons/dataTables.buttons.min.js"></script>
<script src="assets/vendor/datatables/buttons/jszip.min.js"></script>
<script src="assets/vendor/datatables/buttons/dataTables.buttons.min.js"></script>
<script src="assets/vendor/datatables/buttons/pdfmake.min.js"></script>
<script src="assets/vendor/datatables/buttons/vfs_fonts.js"></script>
<script src="assets/vendor/datatables/buttons/buttons.html5.min.js"></script>
<script src="assets/vendor/datatables/buttons/buttons.print.min.js"></script>
<script src="assets/vendor/datatables/buttons/buttons.colVis.min.js"></script>
@endsection