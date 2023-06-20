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
    // {
    //     dd($request->id);
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

    public function add_like(UpdateLikeRequest $request, Like $like)
    {
        
        // dd($request->recipe_id);
        // dd($like->recipe_id);
        // $paid_member = Auth::user();
        // $likes = Like::select('id', 'recipe_id')->get();
        // // $likes = Like::where('paid_member_id', $paid_member->id)->get();
        // // dd($likes);

        // if($paid_member->id != $like->paid_member_id) {

        // }
        // $paid_member = Auth::id();

        // dd($paid_member);

        Like::create([
            'recipe_id' => $request->recipe_id,
            'paid_member_id' => Auth::id()
        ]);

        // return to_route('paid_member.dashboard')
    }

    // public function destroy(Like $like)
    // {

    // }
}
