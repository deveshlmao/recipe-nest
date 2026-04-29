<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChefController extends Controller
{
    public function index() {
        $chef_data = User::list()->paginate(6);
       return view('pages.prototype.users.chef-list.index', compact('chef_data')); // Show chef page.
    }

    public function show(string $id) {
        $chef = User::list()->author($id)->first();
        return view('pages.prototype.users.profile.show', compact('chef')); // Show chef profile.
    }

    public function showPortfolio(string $id) {
        $chef = User::list()->author($id)->first();
        $featured_data = $chef->recipes()->where("featured", 1)->get();
        return view('pages.prototype.users.main', compact('chef', 'featured_data')); // Show chef portfolio.
    }


}
