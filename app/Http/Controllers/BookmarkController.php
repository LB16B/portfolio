<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Recipe;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookmarkRequest;
use App\Http\Requests\UpdateBookmarkRequest;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class BookmarkController extends Controller
{

        public function add_bookmark(UpdateBookmarkRequest $request,Bookmark $bookmark)
    {
        $existingLike =Bookmark::where('recipe_id', $request->recipe_id)
            ->where('paid_member_id', Auth::id())
            ->first();

        if ($existingLike) {
            $existingLike->delete();
        } else {
        Bookmark::create([
            'recipe_id' => $request->recipe_id,
            'paid_member_id' => Auth::id()
            ]);
    }
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bookmark_index()
    {
        $paid_member = Auth::user();
        $bookmarks = Bookmark::where('paid_member_id', $paid_member->id)->get();
        // $recipes = Recipe::where('id', $bookmarks->recipe_id)->get();

        $recipeIds = $bookmarks->pluck('recipe_id')->toArray();

        $recipes = Recipe::whereIn('id', $recipeIds)->get();
    
        if ($recipes->isEmpty()) {
            return Inertia::render('PaidMember/Bookmark/Index', [
                'recipes' => $recipes,
            ]);
        }

        return Inertia::render('PaidMember/Bookmark/Index', [
            'recipes' => $recipes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookmarkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookmarkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function show(Bookmark $bookmark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookmark $bookmark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookmarkRequest  $request
     * @param  \App\Models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookmarkRequest $request, Bookmark $bookmark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function bookmark_destroy($id)
    {
        $bookmark = Bookmark::where('recipe_id', $id)
        ->where('paid_member_id', Auth::id())
        ->first();

        $bookmark->delete();

        return to_route('paid_member.bookmark_index');
    }
}
