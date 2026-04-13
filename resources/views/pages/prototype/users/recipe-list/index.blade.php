<x-mylayouts.layout-prototype>


<style>
.recipe-list {
    width: 100%;
    height: 200px;
    object-fit: cover;
    display: block;
    margin-left:20px;
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
          <img class="recipe-list img-fluid rounded mb-3 mb-md-0" src="{{ $recipe->image_url }}" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>{{ $recipe->name }}</h3>
        <p>{{ $recipe->description }}</p>
        <a class="btn btn-primary" href="#">Read More</a>
      </div>
    </div>
    <!-- /.row -->
@endforeach
    <hr>

    <!-- Project Two -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="recipe-list img-fluid rounded mb-3 mb-md-0" src="https://plus.unsplash.com/premium_photo-1700752343056-e89926bf5ff9?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Recipe Name</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
        <a class="btn btn-primary" href="#">Read More</a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Three -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="recipe-list img-fluid rounded mb-3 mb-md-0" src="https://images.unsplash.com/photo-1432139555190-58524dae6a55?q=80&w=1476&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Recipe Name</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
        <a class="btn btn-primary" href="#">Read More</a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Four -->
    <div class="row">

      <div class="col-md-7">
        <a href="#">
          <img class="recipe-list img-fluid rounded mb-3 mb-md-0" src="https://images.unsplash.com/photo-1539136788836-5699e78bfc75?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Recipe Name</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
        <a class="btn btn-primary" href="#">Read More</a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Pagination -->
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
  <!-- /.container -->

</x-mylayouts.layout-prototype>
