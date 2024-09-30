<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        $data = [

        ];

        return view('frontend.index', $data);
    }

    public function shop() {

        return view('frontend.shop');
    }

    public function about() {

        return view('frontend.about');
    }

    public function contact() {

        return view('frontend.contact');
    }

    public function cart() {

        return view('frontend.cart');
    }

    public function checkout() {

        return view('frontend.checkout');
    }

    public function wishlist() {

        return view('frontend.wishlist');
    }

    public function single_product($id) {

        return view('frontend.single-product');
    }

    public function test() {

        $oldCustomers = DB::connection('sk_customers')->table('tbl_accounts')->limit(200)->get();

        // dd($oldCustomers);

        foreach ($oldCustomers as $customer) {
            DB::connection('mysql')->table('users')->insert([
                'name' => $customer->acc_name,
                'email' => $customer->email_address,
                'email_verified_at' => Carbon::now(),
                'type' => 'client',
                'password' => bcrypt(12345678),
                'active_status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            DB::connection('mysql')->table('customers')->insert([
                'customer_id' => $customer->acc_id,
                'user_id' => DB::connection('mysql')->table('users')->max('id'),
                'name' => $customer->acc_name,
                'email' => $customer->email_address,
                'email_verified_at' => Carbon::now(),
                'contact' => $customer->contact_no,
                'billing_name' => $customer->acc_name,
                'billing_address' => $customer->address,
                'shipping_name' => $customer->acc_name,
                'shipping_address' => $customer->address,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        dd('Customers imported successfully.');
    }
}
