<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CourierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $couriers = Courier::where("company_id", $request->user()->id)->get();

        return view("courier/index", compact("couriers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("courier/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Courier::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "address" => $request->address,
            "mobile" => $request->mobile,
            "company_id" => $request->user()->id
        ]);

        return redirect()->route("admin.home");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orders = Courier::find($id)->orders;
        return view("courier/show", compact("orders"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
