<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Like;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLikeRequest;
use App\Http\Requests\UpdateLikeRequest;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{


    // public function index()
    // {

    // }


    // public function create()
    // {

    // }


    // public function store(StoreLikeRequest $request)
    // public function store(StoreLikeRequest $request)
    // {
    //     // dd($request);
    //     // Recipe::create([
    //     //     'recipe_id' => $id,
    //     //     'paid_member_id' => Auth::id(),
    //     // ]);

    //     return to_route('paid_member.dashboard');
    // }


    // public function show(Like $like)
    // {

    // }


    // public function edit(Like $like)
    // {

    // }

    public function update(UpdateLikeRequest $request, Like $like)
    {
        Like::create([
            'recipe_id' => $like->id,
            'paid_member_id' => Auth::id()
        ]);

        return to_route('paid_member.dashboard');
    }

    // public function destroy(Like $like)
    // {

    // }
}
