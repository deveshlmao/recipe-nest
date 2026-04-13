<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChefController extends Controller
{
    public function index() {
        $chef_data = User::list()->get();
       return view('pages.prototype.users.chef-list.index', compact('chef_data')); // Show chef page.
    }

    public function show(string $id) {
        $chef = User::list()->author($id)->get();
        return view('pages.prototype.users.chef-list.show', compact('chef'));
    }

    public function showPortfolio(string $id) {
        $chef = User::list()->author($id)->get();
        return view('pages.prototype.users.main', compact('chef'));
    }


}
