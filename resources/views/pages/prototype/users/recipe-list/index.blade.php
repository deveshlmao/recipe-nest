<x-mylayouts.layout-prototype>


  <style>
    .recipe-list {
      width: 100%;
      height: 200px;
      object-fit: cover;
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
    border-bottom: 3px solid #000013;
 
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

              
    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <div class="row">
        <div class="col">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </ul>



    {{ $recipe_data ->links() }}

  </div>
  <!-- /.container -->

</x-mylayouts.layout-prototype>