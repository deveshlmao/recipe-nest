<x-mylayouts.layout-prototype>

    <Style>
        body {
            box-sizing: border-box;
            margin-left: 375px;
        }

        .mb-0 {
            padding:5px;
        }

        img{
            border-color: #000001;
            border: 3px solid;
        }

        .card-body {
            padding: 1.5rem !important;
            border-top: 3px solid #000001;
        }

        .text-muted {
            color: #6c757d;
            padding: 10px !important;
        }

        .dashboard-body {
            padding: 2rem;
        }

        .stat-card {
            min-height: 70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-top: 3px solid #000001;
        }

        .recent-item {
            width: 42px;
            height: 42px;
            object-fit: cover;
            border-radius: 6px;
            margin-right: .75rem;
        }

        .profile-img {
            width: 96px;
            height: 96px;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>

    <!--- Another Chef Dashboard Layout --->

    <div class="container dashboard-body">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="h3 mb-0">Welcome, {{ $user->name }}</h1>
                <div class="text-muted small">Member since Jan 1, 2024</div>
            </div>
            <div>
                <a href="{{ $user->getLink() }}" class="btn btn-sm btn-outline-primary">View Profile</a>
                <a href="{{ route('recipes.index') }}" class="btn btn-sm btn-primary">All Recipes</a>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-6 col-md-3">
                <div class="card shadow-sm p-3 stat-card">
                    <small class="text-muted">Your Recipes</small>
                    <div class="h4 mb-0">12</div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="card shadow-sm p-3 stat-card">
                    <small class="text-muted">Featured</small>
                    <div class="h4 mb-0">3</div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="card shadow-sm p-3 stat-card">
                    <small class="text-muted">Followers</small>
                    <div class="h4 mb-0">1.2k</div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="card shadow-sm p-3 stat-card">
                    <small class="text-muted">Last Login</small>
                    <div class="h6 mb-0">2 days ago</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Your Recent Recipes</h5>
                        <!--- Recent recipes.
                        Checks for recipes and returns null if there are no recipes.
                        --->
                        @forelse($recentRecipes ?? [] as $recipe)
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('template_default/images/recipe-placeholder.jpg') }}" alt="" class="recent-item">
                                    <div>
                                        <a href="#">{{ }}</a>
                                        <div class="small text-muted"></div>
                                    </div>
                                </div>
                                <div><a href="#" class="btn btn-sm btn-outline-primary">Open</a></div>
                            </li>

                            @empty
                            <li class="list-group-item">You haven't added any recipes yet. Start sharing your culinary creations!</li>
                            @endforelse

                            <li class="list-group-item">You can add more recipes — this is a static preview.</li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Profile</h5>

                        <div class="d-flex align-items-center">
                            <img src="{{ asset('template_default/images/user-placeholder.jpg') }}" class="profile-img me-3" alt="Chef">
                            <div>
                                <h6 class="mb-0">{{ $user->name }}</h6>
                                <div class="small text-muted">{{ $user->email }}</div>
                                <div class="mt-2">
                                    <a href="{{ $user->getLink() }}" class="btn btn-sm btn-primary">View Profile</a>
                                    <a href="{{ route('authors.profile.edit', $user->id) }}" class="btn btn-sm btn-outline-secondary">Edit Profile</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>





</x-mylayouts.layout-prototype>