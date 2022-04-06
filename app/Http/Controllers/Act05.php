<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Act05 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('activity05.header');
    }
    public function Customer($Customerid=null , $Name=null ,$Address=null ){
      $text = "Please Input in url";
      return view ('activity05.Customer', ['Customerid' => $Customerid, 'Name' => $Name, 'Address' => $Address,'text' => $text]);
    }
    public function Item($Itemno=null, $Name=null , $Price=null){
      $text = "Please Input in url";
      return view ('activity05.Item', ['Itemno' => $Itemno, 'Name' => $Name, 'Price' => $Price,'text' => $text]);
    }
    public function Order_details($Name=null,$TransNo=null, $Orderno=null , $Itemid=null, $Qty=null , $Price=null ){
      $text = "Please Input in url";
      $total = (float)$Price * (float)$Qty;
      return view ('activity05.Order_details', 
      ['TransNo' => $TransNo, 'Orderno' => $Orderno, 'Itemid' => $Itemid,
      'Name' => $Name, 'Price' => $Price, 'Qty' => $Qty, 'total' => $total, 'text' => $text]);
    }
    public function Order($Customerid=null , $Name=null , $order_no=null , $Date=null){
      $text = "Please Input in url";
        return view ('activity05.Order', ['Customerid' => $Customerid, 'Name' => $Name, 'Order' => $order_no, 'Date' => $Date,'text' => $text]);

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
