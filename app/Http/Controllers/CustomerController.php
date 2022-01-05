<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'customers' => Customer::orderBy('name', 'asc')->get(),
        ];
        return view('customer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerRequest $request)
    {
        $customers = Customer::create([
            'name' => $request->name,
            'status' => (($request->status==1) ? 1 : 0),
            'phone' => $request->phone,
            'address' => $request->address,
            'description' => $request->description,
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $image_name = $customers->id.'_'.time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/customers/'), $image_name);

            if(!File::isDirectory(public_path('images/customers/'))){
                File::makeDirectory(public_path('images/customers/'), 0777, true, true);
            }

            $customers->update([
                'image' => $image_name
            ]);
        }

        $url = route('customer.index');
        if($request->save_opt=='save_edit'){
            $url = route('customer.edit');
        }else if($request->save_opt=='save_new'){
            $url = route('customer.create');
        }
        return redirect($url)->with('success', __('alert.success.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        // dd($customer->id);
        // $customer = Customer::find($customer->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        if($customer->delete()){
            return back()->with('success', __('alert.success.delete'));
        }
    }
}
