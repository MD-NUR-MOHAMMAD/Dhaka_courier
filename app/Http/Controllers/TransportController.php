<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.transport.index', ['transports' => Transport::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.transport.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transport = Transport::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Transport $transport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transport $transport)
    {
        return view('admin.transport.edit', ['transport' => $transport]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transport $transport)
    {
        $transport->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transport $transport)
    {
        $transport->delete();
        return redirect()->back();
    }
}
