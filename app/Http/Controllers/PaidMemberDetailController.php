<?php

namespace App\Http\Controllers;

use App\Models\PaidMemberDetail;
use App\Models\PaidMember;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaidMemberDetailRequest;
use App\Http\Requests\UpdatePaidMemberDetailRequest;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PaidMemberDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('PaidMember/Detail/Index', [
            'paid_member_details' =>  PaidMemberDetail::select('id', 'paid_member_id', 'nick_name', 'greeting', 'filename')
            ->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaidMemberDetail  $paidMemberDetail
     * @return \Illuminate\Http\Response
     */
    // public function edit(PaidMemberDetail $paidMemberDetail)
    public function edit($id)
    {
        $paid_member_detail = PaidMemberDetail::findOrFail($id);
        return Inertia::render('PaidMember/Detail/Edit', [
            'paid_member_detail' => $paid_member_detail
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaidMemberDetailRequest  $request
     * @param  \App\Models\PaidMemberDetail  $paidMemberDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaidMemberDetailRequest $request, $id)
    {
        $paid_member_detail = PaidMemberDetail::findOrFail($id);

        $paid_member_detail->paid_member_id = $request->paid_member_id;
        $paid_member_detail->nick_name = $request->nick_name;
        $paid_member_detail->greeting = $request->greeting;


        // $fname = $request->file('file')->getClientOriginalName();
        $fname = $request->file('file')->getClientOriginalExtension();
        $disk = Storage::build([
                'driver' => 'local',
                'root' => public_path('paid_member_profile_images'),
                // 'root' => public_path('images'),
            ]);

        $random_name = Str::random(15);
        $hoge = date('Y-m-d') . $random_name . '.' . $fname;
        $disk->putFileAs('', $request->file('file'), $hoge);
        $paid_member_detail->filename = $hoge;

        $paid_member_detail->save();

        return redirect()->route('paid_member.dashboard');

    }

}
