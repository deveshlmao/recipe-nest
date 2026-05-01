    {{-- Portfolio starts here --}}
    <div>


<style>
.recipe-list {
    width: 100%;
    height: 200px;
    justify-content: space-around;
    align-items: center;
    display: block;
    margin-left: 10px;
    padding: 10px;
    text-align: center;
}


</style>


<!-- Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">Recipe List
    </h1>

    @include('pages.custom.users.portfolio.filters')


    @foreach ($recipe_data as $recipe)


    <!-- Project One -->
    <div class="row">
      <div class="col-md-7">
          <a href="#">
              <img class="recipe-list img-fluid rounded mb-3 mb-md-0" src="{{ $recipe->getImage() }}" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>{{ $recipe->title }}</h3>
            <p>{{ $recipe->short_description }}</p>
            <a class="btn btn-primary" href="{{ $recipe->getLink() }}">Read More</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>
    @endforeach

    {{ $recipe_data->links() }}



  </div>
  <!-- /.container -->


    </div>

