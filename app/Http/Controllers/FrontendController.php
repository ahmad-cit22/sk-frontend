<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        $data = [];

        return view('frontend.index', $data);
    }

    public function shop()
    {

        return view('frontend.shop');
    }

    public function about()
    {

        return view('frontend.about');
    }

    public function contact()
    {

        return view('frontend.contact');
    }

    public function cart()
    {

        return view('frontend.cart');
    }

    public function checkout()
    {

        return view('frontend.checkout');
    }

    public function wishlist()
    {

        return view('frontend.wishlist');
    }

    public function single_product($id)
    {

        return view('frontend.single-product');
    }

    public function blogs()
    {

        return view('frontend.blogs');
    }

    public function single_blog($id)
    {

        return view('frontend.single-blog');
    }

    public function test()
    {
        // Start time
        // $startTime = microtime(true);

        // // Set execution time limit to 1 hour
        // set_time_limit(3600);

        // $oldCustomers = DB::connection('sk_customers')->table('tbl_accounts')->get();
        // // dd($oldCustomers);

        // // Loop through each customer and insert into the new database
        // foreach ($oldCustomers as $customer) {
        //     $customer->email_address = $customer->email_address ?: null;

        //     DB::connection('mysql')->table('users')->insert([
        //         'name' => $customer->acc_name,
        //         'email' => $customer->email_address,
        //         'email_verified_at' => Carbon::now(),
        //         'type' => 'client',
        //         'password' => bcrypt(12345678),
        //         'active_status' => 1,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);

        //     DB::connection('mysql')->table('customers')->insert([
        //         'customer_id' => $customer->acc_id,
        //         'user_id' => DB::connection('mysql')->table('users')->max('id'),
        //         'name' => $customer->acc_name,
        //         'email' => $customer->email_address,
        //         'email_verified_at' => Carbon::now(),
        //         'contact' => $customer->contact_no,
        //         'billing_name' => $customer->acc_name,
        //         'billing_address' => $customer->address,
        //         'shipping_name' => $customer->acc_name,
        //         'shipping_address' => $customer->address,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // }

        // // End time
        // $endTime = microtime(true);

        // // Calculate total execution time
        // $executionTime = $endTime - $startTime;

        // // Output execution time in seconds
        // dd('Customers imported successfully. Total execution time: ' . $executionTime . ' seconds');
    }
}
