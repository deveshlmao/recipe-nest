<x-mylayouts.layout-prototype>


  <style>
    .chef-list img {
      width: 100%;
      height: 300px;
    }

    .chef-list .description {
      height: 80px;
    }

    .chef-list {
      margin-bottom: 30px !important;
      padding-bottom: 30px !important;
    }

    .chef-list .card-body {
      align-items: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 30px;

    }

    .my-4 {
      text-align: center;
    }

    .content {
      display: flex;
      flex-wrap: wrap;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
      padding: 30px;
    }

    .col-xl-4,
    .col-md-6,
    .mb-4 {
      padding: 20px;
    }
  </style>

  <link rel="stylesheet" href="{{ asset('template_default/css/open-iconic-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template_default/css/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('template_default/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template_default/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template_default/css/magnific-popup.css') }}">

  <link rel="stylesheet" href="{{ asset('template_default/css/aos.css') }}">

  <link rel="stylesheet" href="{{ asset('template_default/css/ionicons.min.css') }}">

  <link rel="stylesheet" href="{{ asset('template_default/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('template_default/css/jquery.timepicker.css') }}">


  <link rel="stylesheet" href="{{ asset('template_default/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('template_default/css/icomoon.css') }}">
  <link rel="stylesheet" href="{{ asset('template_default/css/style.css') }}">


  <!-- Page Heading -->
  <h1 class="my-4">Chef List
  </h1>


  <!-- Page Content -->
  <div class="content">


    <!-- Chef 1 -->
    <div class="col-xl-4 col-md-6 mb-4 ">
      @foreach($chef_data as $chef)

      <div class="card border-0 shadow chef-list">
        <img src="{{ $chef->getImage() }}" class="card-img-top" alt="...">
        <div class="card-body">

          <h5 class="card-title mb-0 text-center">{{ $chef->name }}</h5>
          <div class="card-text text-black-50 description">{{ $chef->short_description }}</div>

          <div class="text-center">
            <a class="btn btn-primary mx-2" href="{{ $chef->getLink() }}">View Profile</a>
            <a class="btn btn-primary mx-2" href="{{ $chef->getPortfolioLink() }}">View Portfolio</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>





  </div>


  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>


  </div>


</x-mylayouts.layout-prototype>