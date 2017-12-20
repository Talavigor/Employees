<?php

namespace App\Http\Controllers;

use App\Models\Middle;
use Illuminate\Http\Request;
use App\Models\Junior;
use App\Models\Senior;
use App\Models\Manager;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $juniors = Junior::all();
//        $middles = Middle::all();
//        $seniors = Senior::all();
//        $managers = Manager::all();
//        $customers = Customer::all();
//
//        return view('employees.employee', ['juniors' => $juniors,
//                                                'middles' => $middles,
//                                                'seniors' => $seniors,
//                                                'managers' => $managers,
//                                                'customers' => $customers,
//
//        ]);
        $employees = Employee::all();

        return view('employees.employee', ['employees' => $employees]);

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
        //
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
        //
    }
}
