<!-- Recipes -->
      <div class="row">
@foreach($recipe_Data as $recipe)
        <div class="col-md-7">
          <a href="#">
            <img class="recipe-list img-fluid rounded mb-3 mb-md-0" src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Recipe Name</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
          <a class="btn btn-primary" href="#">Read More</a>
        </div>
        
      </div>
      @endforeach