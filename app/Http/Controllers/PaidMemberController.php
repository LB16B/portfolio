<?php

namespace App\Http\Controllers;

use App\Models\PaidMember;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaidMemberRequest;
use App\Http\Requests\UpdatePaidMemberRequest;

class PaidMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePaidMemberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaidMemberRequest $request)
    {
        PaidMember::create([
            'name' => $request->name,
            'kana' => $request->kana,
            'tel' => $request->tel,
            'email' => $request->email,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'memo' => $request->memo,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaidMember  $paidMember
     * @return \Illuminate\Http\Response
     */
    public function show(PaidMember $paidMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaidMember  $paidMember
     * @return \Illuminate\Http\Response
     */
    public function edit(PaidMember $paidMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaidMemberRequest  $request
     * @param  \App\Models\PaidMember  $paidMember
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaidMemberRequest $request, PaidMember $paidMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaidMember  $paidMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaidMember $paidMember)
    {
        //
    }
}
