<x-mylayouts.layout-prototype>


<style>
    .recipe-image {
        max-width: 100%;
        height: auto;
        object-fit: cover;
    }

    .ingredients-list {
        list-style-type: none;
        padding: 0;
    }

    .ingredients-list li {
        background: #f8f8f8;
        margin: 5px 0;
        padding: 10px;
        border-radius: 5px;
    }

    body {
        margin-left: 375px;
    }

    .col-md-12 {
        background: #f8f8f8;
        padding: 10px;
        border-radius: 5px;
    }

    hr {
        border: 1px solid #eee;
        margin: 20px 0;
    }

    
</style>

    <div class="container mt-5">
        <!-- Recipe Title and Image -->
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>{{ $recipe->title }}</h1>
                <div class="text-center">
                    <img class="recipe-image" style="width: 60%"
                        src="{{ $recipe->getImage() }}"
                        alt="Chocolate Cake">
                </div>
            </div>
        </div>

        <!-- Recipe Ingredients -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Ingredients</h2>
                <ul class="ingredients-list">
                    <li>{!! $recipe->ingredients !!}</li>

                </ul>
            </div>
        </div>

        <!-- Recipe Instructions -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Instructions</h2>
                <p class="instructions">{!! $recipe->instructions !!}</p>

                
            </div>
        </div>

        <!-- Comments Section -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2>Comments</h2>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">This recipe is amazing! The cake turned out so moist and fluffy. I added a
                            little extra vanilla, and it was perfect.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="card-text">I tried this recipe last weekend. The kids loved it, but I had to bake it a
                            little longer. Will try again soon!</p>
                    </div>
                </div>
                <form>
                    <div class="mb-3">
                        <label for="comment" class="form-label">Leave a comment:</label>
                        <textarea class="form-control" id="comment" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Post Comment</button>
                </form>
            </div>
        </div>

        <!-- Share Recipe -->
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h4>Share this Recipe</h4>
                <a href="https://twitter.com/share?text=Check out this recipe: Delicious Chocolate Cake&url=#"
                    class="btn btn-info mx-2">Share on Twitter</a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=#" class="btn btn-primary mx-2">Share on
                    Facebook</a>
            </div>
        </div>
    </div>

</x-mylayouts.layout-prototype>
