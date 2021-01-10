<?php

namespace App\Http\Controllers\LDXPS;

use App\Http\Controllers\Controller;
use App\Models\LDXPS\Vendor;
use Illuminate\Http\Request;
use App\Exceptions\Handler;
use App\Models\LDXPS\Customer;

class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::paginate(8);
        return view('LDXPS.vendors.page', compact('vendors'))->with('i', (request()->input('page', 1) - 1) * 8);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor=Vendor::find($id);
        $customers = $vendor->customers()->paginate(8);

        return view('LDXPS.vendors.details', compact(['vendor','customers']))->with('i', (request()->input('page', 1) - 1) * 8);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Vendor::find($id)->delete();
            return redirect()->route('vendors.index')->with('success', 'Vendedor Deletado Com Sucesso');

        } catch (Exception $e) {
            return redirect()->route('vendors.index')->with('error','CDVEND');
        }
    }
}
