<?php

namespace App\Http\Controllers\PaidMember\Auth;

use App\Http\Controllers\Controller;
use App\Models\PaidMember;
use App\Http\Requests\StorePaidMemberRequest;
use App\Http\Requests\UpdatePaidMemberRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;
use Throwable;
use Illuminate\Support\Facades\Log;
use App\Models\PaidMemberDetail;
use Illuminate\Support\Facades\DB;



class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('PaidMember/Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        // ]);

        try{
            DB::transaction(function () use($request) {
                Auth::guard('paid_members')->login($paid_member = PaidMember::create([
                    // $paid_member = PaidMember::create([
                    'name' => $request->name,
                    'kana' => $request->kana,
                    'tel' => $request->tel,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'postcode' => $request->postcode,
                    'address' => $request->address,
                    'birthday' => $request->birthday,
                    'gender' => $request->gender,
                    'memo' => $request->memo,
                ]));

                PaidMemberDetail::create([
                    'paid_member_id' => $paid_member->id,
                    'nick_name' => 'nick_name',
                    'filename' => '',
                    'greeting' => '',
                ]);               

                // event(new Registered($paid_member));
        
                Auth::login($paid_member);
        }, 2);
        } catch( Throwable $e ){
            Log::error($e);
            throw $e;
        }


        return redirect(RouteServiceProvider::PAID_MEMBER_HOME);
    }
}
