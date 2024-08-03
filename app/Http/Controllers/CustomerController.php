<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::orderByDesc('id')->paginate(10);

        return view('admin.customers.index', compact('customers'));
    }


    /**
     * Handle login.
     */
    public function login(Request $request)
    {
        return redirect()->route('customer.login');
    }

    /**
     * Handle logout.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('status', 'Logged out successfully!');
    }

    /**
     * Show the registration form.
     */
    public function registerPage()
    {
        return view('customer-register');
    }

    /**
     * Handle registration.
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'dob' => 'required|date_format:m/d/Y',
            'password' => 'required|string|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Customer::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'birth_date' => $request->dob,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('home')->with('status', 'Registration successful!');
    }
}
