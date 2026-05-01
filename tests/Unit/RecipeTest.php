<?php

namespace Tests\Unit;

use App\Models\Recipe;
use Tests\TestCase;

class RecipeTest extends TestCase
{

    // Get recipe link
    public function test_get_link() {
        $recipe = Recipe::factory()->make(['id' => 1]);
        $this->assertEquals(url('/recipes/1'), $recipe->getLink());
    }

    
// Get recipe image
    public function test_get_image () {
        $recipe = new Recipe();
        $recipe->image_path = '/images/media/';
        $recipe->image_name = 'default.jpg';
        $this->assertEquals(asset('storage' . $recipe->image_path . $recipe->image_name), $recipe->getImage());
    }
    
   
}
