<?php

namespace App\Http\Controllers\LDXPS;

use Carbon\Carbon;
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
        return view('LDXPS.vendors.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vendor = $request->validate([
            'DSNOME' => ['required', 'max:50'],
            'CDTAB' => 'required',
            'DTNASC' => 'required'
        ]);

        Vendor::create($vendor);

        return redirect()->route('vendors.index')
            ->with('success', 'Vendedor Criado com Sucesso.');
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
        $vendor=Vendor::find($id);
        $customers = $vendor->customers()->paginate(3);

        return view('LDXPS.vendors.update', compact(['vendor','customers']))->with('i', (request()->input('page', 1) - 1) * 3);
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
        $vendor = $request->validate([
            'DSNOME' => ['required', 'max:50'],
            'CDTAB' => 'required',
            'DTNASC' => 'required'
        ]);
        
        Vendor::find($id)->update($vendor);

        return redirect()->route('vendors.index')
            ->with('success', 'Vendedor Alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $vendor=Vendor::find($id);
            $customers = $vendor->customers()->get();

            foreach($customers as $customer){

                $data = Customer::find($customer->CDCL);
                $data->CDVEND = "";
                $data->save();

            }

            $vendor->delete();
            return redirect()->route('vendors.index')->with('success', 'Vendedor Deletado Com Sucesso');
    }
}
