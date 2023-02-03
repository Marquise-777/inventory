<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\items;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private function monthlyincome($year, $month) {
        return Customer::whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('totalprice');
    }
    private function daylyincome($y, $m, $d) {
        return Customer::whereYear('created_at', $y)->whereMonth('created_at', $m)->whereDate('created_at',$d)->sum('totalprice');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $year = date('Y');
        $month = date('m');
        $date = date('d');
        $noitems = count(items::get());
        $nocustomer = count(Customer::get());
        $totalincome = Customer::sum('totalprice');
        $monthlyincome = $this->monthlyincome($year, $month);
        $daylyincome = $this->daylyincome($year, $month, $date);
        return view('dashboard', compact('noitems','nocustomer','totalincome','monthlyincome','daylyincome'));
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
