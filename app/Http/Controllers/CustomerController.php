<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class CustomerController.
 *
 * @author  The scaffold-interface created at 2017-12-05 12:06:11pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - customer';
        $customers = Customer::paginate(6);
        return view('customer.index',compact('customers','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - customer';
        
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();

        
        $customer->email = $request->email;

        
        $customer->name = $request->name;

        
        
        $customer->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new customer has been created !!']);

        return redirect('customer');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - customer';

        if($request->ajax())
        {
            return URL::to('customer/'.$id);
        }

        $customer = Customer::findOrfail($id);
        return view('customer.show',compact('title','customer'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - customer';
        if($request->ajax())
        {
            return URL::to('customer/'. $id . '/edit');
        }

        
        $customer = Customer::findOrfail($id);
        return view('customer.edit',compact('title','customer'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $customer = Customer::findOrfail($id);
    	
        $customer->email = $request->email;
        
        $customer->name = $request->name;
        
        
        $customer->save();

        return redirect('customer');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/customer/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$customer = Customer::findOrfail($id);
     	$customer->delete();
        return URL::to('customer');
    }
}
