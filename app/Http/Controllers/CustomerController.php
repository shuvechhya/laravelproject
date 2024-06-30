<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; // Assuming your model is named Customer
use App\Models\Customers;

class CustomerController extends Controller
{
    public function index()
    {
        $url=url('/customer');
        $title="Customer Registration";
        $data =compact('url','title');
        return view('form')->with($data);
    }

    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:60',
            'email' => 'required|string|email|max:60',
            'gender' => 'required|in:male,female,other',
            'address' => 'required|string',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'dob' => 'required|date',
            'password' => 'required|string|min:6',
        ]);

        // Create a new Customer instance
        $customer = new Customers();

        // Assign validated data to the Customer instance
        $customer->name = $validatedData['name'];
        $customer->email = $validatedData['email'];
        $customer->gender = $validatedData['gender'];
        $customer->address = $validatedData['address'];
        $customer->country = $validatedData['country'];
        $customer->state = $validatedData['state'];
        $customer->dob = $validatedData['dob'];
        $customer->password = bcrypt($validatedData['password']); // Securely hash the password

        // Save the Customer instance to the database
        $customer->save();

        return redirect('/customer/view');

    }

    public function view(){
        $customer=Customers::all();
        $data=compact('customer');
        return view('customer-view')->with($data);
    }

    public function delete($id)
    {
        $customer= Customers::find($id);
        if (!is_null($customer)){
            $customer->delete();
        }
        return redirect('customer/view');
    }
    public function edit($id)
    {
        $customer=Customers::find($id);
        if  (is_null($customer)){
            return redirect('customer/view');
        }else
        {
            $title="Update customer";
            $url=url('/customer/update').'/'.$id;
            $data=compact('customer','url','title');
            return view('form')->with($data);
        }
    }
    public function update($id,Request $request)
    {
        $customer=Customers::find($id);
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->gender=$request['gender'];
        $customer->address=$request['address'];
        $customer->state=$request['state'];
        $customer->country=$request['country'];
        $customer->dob=$request['dob'];
        $customer->save();
        return redirect('customer/view');
    }

}
   