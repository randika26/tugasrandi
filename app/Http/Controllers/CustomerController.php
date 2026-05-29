<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customers.index', compact('customers'));
    }

    public function create()
    {
        return view('admin.customers.create');
    }

    public function store(Request $request)
{
    // Kita matikan $request->validate() sementara untuk tes bypass
    
    \App\Models\Customer::create([
        'kode_customer' => $request->kode_customer,
        'nama_customer' => $request->nama_customer,
        'email'         => $request->email,
        'no_telp'       => $request->no_telp,
        'alamat'        => $request->alamat,
    ]);

    return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
}
}