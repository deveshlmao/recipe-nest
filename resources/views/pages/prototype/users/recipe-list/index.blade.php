<x-mylayouts.layout-prototype>


  <style>
    .recipe-list {
      width: 100%;
      height: 300px;
      display: flex;
      flex-direction: column;
      margin-left: 30px;
      justify-content: center;
      align-items: center;
      padding: 10px !important;
    }

    body {
      margin-left: 300px;
    }

    h1 {
      text-align: center;
    }

   .row {
    background: #f8f8f8;
    padding: 10px;
   }

   .recipe-list img {
    max-width: 250px !important;
    object-fit: contain !important;
    max-height: 250px !important;
    margin-left: 20px;
   }

  hr {
    border: 1px solid #000019;
  }

  
   
  </style>


  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">Recipe List
    </h1>
    @foreach ($recipe_data as $recipe)
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="recipe-list img-fluid rounded mb-3 mb-md-0" src="{{ $recipe->getImage() }}" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>{{ $recipe->title }}</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat excepturi officia quibusdam exercitationem facere nulla ad veritatis tenetur sequi numquam?</p>
        <a class="btn btn-primary" href="{{ $recipe->getLink() }}">Read More</a>
      </div>

    </div>
    <!-- /.row -->

    <hr>
              @endforeach
    



    {{ $recipe_data ->links() }}

  </div>
  <!-- /.container -->

</x-mylayouts.layout-prototype>