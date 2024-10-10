<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        if (Auth::guard('web')->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', 'between:8,16', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => 'client',
            'password' => !empty($request->password) ? Hash::make($request->password) : Hash::make(12345678),
            'lang' => 'en',
            'created_by' => Auth::user()->id,
            'is_enable_login' => 1,
            'is_deleted' => 0

        ]);

        $customer                   = new Customer;
        $customer->customer_id      = Customer::customerNumber();
        $customer->user_id          = $user->id;
        $customer->name             = $request->name;
        $customer->contact          = $request->contact;
        $customer->email            = $request->email;
        $customer->billing_name     = $request->name;
        $customer->billing_country  = $request->billing_country;
        $customer->billing_city     = $request->billing_city;
        $customer->billing_phone    = $request->contact;
        $customer->billing_zip      = $request->billing_zip;
        $customer->billing_address  = $request->billing_address;

        $customer->shipping_name    = $request->name;
        $customer->shipping_country = $request->billing_country;
        $customer->shipping_city    = $request->billing_city;
        $customer->shipping_phone   = $request->contact;
        $customer->shipping_zip     = $request->billing_zip;
        $customer->shipping_address = $request->billing_address;

        $customer->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
