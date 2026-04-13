<x-mylayouts.layout-prototype>


  <style>
    .chef-list img {
      width: 100%;
      height: 300px;
    }

    .chef-list .description {
      height: 80px;
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
      justify-content: center;
      align-items: center;
      padding: 30px;
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
    <div class="col-xl-4 col-md-6 mb-4">
    @foreach($chef_data as $chef)

      <div class="card border-0 shadow chef-list">
        <img src="{{ $chef->image_url }}" class="card-img-top" alt="...">
        <div class="card-body">

          <h5 class="card-title mb-0 text-center">{{ $chef->name }}</h5>
          <div class="card-text text-black-50 description">{{ $chef->short_description }}</div>

          <div class="text-center">
            <a class="btn btn-primary mx-2" href="#">View Profile</a>
            <a class="btn btn-primary mx-2" href="{{ route('prototype.chefs.show', $chef->id) }}">View Portfolio</a>
          </div>

          @endforeach
        </div>
        
      </div>
    
    </div>
    <!-- Chef 2 -->
    <div class="col-xl-4 col-md-6 mb-4">
      @foreach($chef_data as $chef)
      <div class="card border-0 shadow chef-list">
        <img src="https://plus.unsplash.com/premium_photo-1689977927774-401b12d137d6?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title mb-0 text-center">{{ $chef->name }}</h5>
          <div class="card-text text-black-50 description">{{ $chef->short_description }}</div>

          <div class="text-center">
            <a class="btn btn-primary mx-2" href="#">View Profile</a>
            <a class="btn btn-primary mx-2" href="{{ route('prototype.chefs.show', $chef->id) }}">View Portfolio</a>
          </div>

        </div>
        @endforeach
      </div>
    </div>
    <!-- Chef 3 -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-0 shadow chef-list">
        <img src="https://images.unsplash.com/photo-1600180758890-6b94519a8ba6?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title mb-0 text-center">Chef</h5>
          <div class="card-text text-black-50 description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at dignissim magna. Cras diam ex.</div>
          <div class="text-center">
            <a class="btn btn-primary mx-2" href="#">View Profile</a>
            <a class="btn btn-primary mx-2" href="#">View Portfolio</a>
          </div>

        </div>
      </div>
    </div>
    <!-- Chef 4 -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-0 shadow chef-list">
        <img src="{{ asset('storage/images/profiles/default.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title mb-0 text-center">Chef</h5>
          <div class="card-text text-black-50 description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at dignissim magna. Cras diam ex.</div>

          <div class="text-center">
            <a class="btn btn-primary mx-2" href="#">View Profile</a>
            <a class="btn btn-primary mx-2" href="#">View Portfolio</a>
          </div>

        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-0 shadow chef-list">
        <img src="{{ asset('storage/images/profiles/default.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title mb-0 text-center">Chef</h5>
          <div class="card-text text-black-50 description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at dignissim magna. Cras diam ex.</div>

          <div class="text-center">
            <a class="btn btn-primary mx-2" href="#">View Profile</a>
            <a class="btn btn-primary mx-2" href="#">View Portfolio</a>
          </div>

        </div>
      </div>
    </div>


    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-0 shadow chef-list">
        <img src="{{ $chef->getImage() }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title mb-0 text-center">{{ $chef->name }}</h5>
          <div class="card-text text-black-50 description">{{ $chef->short_description }}</div>

          <div class="text-center">
            <a class="btn btn-primary mx-2" href="#">View Profile</a>
            <a class="btn btn-primary mx-2" href="#">View Portfolio</a>
          </div>

        </div>
      </div>
    </div>
  </div>



</x-mylayouts.layout-prototype>