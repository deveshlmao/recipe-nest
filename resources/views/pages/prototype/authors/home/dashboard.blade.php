<x-mylayouts.layout-prototype>

<Style>
    body{
        box-sizing: border-box;
        margin-left: 375px;
    }
</Style>

<!--- Chef Dashboard Layout --->

  <div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="h3 mb-0">Chef Dashboard</h1>
      <div>
        <a href="{{ route('chefs.index') }}" class="btn btn-sm btn-outline-primary">View Chefs</a>
        <a href="{{ route('recipes.index') }}" class="btn btn-sm btn-primary">View Recipes</a>
      </div>
    </div>

    <div class="row g-4 mb-4">
      <div class="col-6 col-md-3">
        <div class="card shadow-sm p-3">
          <small class="text-muted">Chefs</small>
          <div class="h4 mb-0">{{ \App\Models\User::count() }}</div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="card shadow-sm p-3">
          <small class="text-muted">Recipes</small>
          <div class="h4 mb-0">{{ \App\Models\Recipe::count() }}</div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="card shadow-sm p-3">
          <small class="text-muted">Featured recipes</small>
          <div class="h4 mb-0">{{ \App\Models\Recipe::where('featured',1)->count() }}</div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="card shadow-sm p-3">
          <small class="text-muted">Recent signups (7d)</small>
          <div class="h4 mb-0">{{ \App\Models\User::where('created_at','>=', now()->subDays(7))->count() }}</div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title mb-3">Recent Recipes</h5>

            <ul class="list-group list-group-flush">
              @foreach(\App\Models\Recipe::with('user')->latest()->take(6)->get() as $recipe)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                    <a href="{{ route('prototype.recipes.show', $recipe->id) }}">{{ $recipe->title ?? $recipe->name ?? 'Untitled' }}</a>
                    <div class="small text-muted">
                      by
                      @if($recipe->user)
                        <a href="{{ route('prototype.chefs.show', $recipe->user->id) }}">{{ $recipe->user->name }}</a>
                      @elseif($recipe->user_id)
                        <a href="{{ route('prototype.chefs.show', $recipe->user_id) }}">Chef</a>
                      @else
                        Unknown
                      @endif
                    </div>
                  </div>
                  <small class="text-muted">{{ optional($recipe->created_at)->format('M j') }}</small>
                </li>
              @endforeach
            </ul>

          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title mb-3">Recent Chefs</h5>

            <ul class="list-group list-group-flush">
              @foreach(\App\Models\User::latest()->take(6)->get() as $user)
                <li class="list-group-item d-flex align-items-center">
                  <img src="{{ method_exists($user, 'getImage') ? $user->getImage() : ( $user->avatar ?? asset('storage/images/profiles/default.jpg') ) }}" class="rounded-circle me-3" width="42" height="42" alt="">
                  <div>
                    <a href="{{ route('prototype.chefs.show', $user->id) }}">{{ $user->name }}</a>
                    <div class="small text-muted">{{ $user->email }}</div>
                  </div>
                </li>
              @endforeach
            </ul>

          </div>
        </div>
      </div>
    </div>

  </div>

</div>





</div>


</div>
</x-mylayouts.layout-prototype>