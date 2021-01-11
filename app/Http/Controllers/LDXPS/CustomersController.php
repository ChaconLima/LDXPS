<?php

namespace App\Http\Controllers\LDXPS;

use App\Http\Controllers\Controller;
use App\Models\LDXPS\Customer;
use App\Models\LDXPS\Vendor;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::paginate(8);
        return view('LDXPS.customers.page', compact('customers'))->with('i', (request()->input('page', 1) - 1) * 8);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendors = Vendor::all();
        return view('LDXPS.customers.registration', compact('vendors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = $request->validate([
            'DSNOME' => ['required', 'max:50'],
            'IDTIPO' => 'required',
            'CDVEND' => ['required','max:36'],
            'DSLIM' => 'required'
        ]);
      
        Customer::create($customer);

        $vendor = Vendor::find($customer['CDVEND']);

        return redirect()->route('vendors.show', [$vendor])->with('success', 'Cliente Criado com Sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendors=Vendor::all();
        $customer=Customer::find($id);
        
        $register=null;
        foreach( $vendors as $vendor)
        {
            if( $vendor['CDVEND'] == $customer['CDVEND'] )
            {
                $register = 
                    [
                        'name_vendor'=>  $vendor['DSNOME'],
                        'id_vendor'=> $vendor['CDVEND'],
                    ];
            }
        }
        return view('LDXPS.customers.update', compact(['customer','vendors', 'register']));
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
        $customer = $request->validate([
            'DSNOME' => ['required', 'max:50'],
            'IDTIPO' => 'required',
            'CDVEND' => ['required','max:36'],
            'DSLIM' => 'required'
        ]);

        // dd($customer);

        Customer::find($id)->update($customer);

        $vendor = Vendor::find($customer['CDVEND']);

        return redirect()->route('vendors.show', [$vendor])->with('success', 'Cliente Atualizado com Sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::find($id)->delete();
        return redirect()->route('customers.index')->with('success', 'Cliente Deletado Com Sucesso');

    }
}
