@extends('activity05.header')
@section('title' , 'Order')
@section('content')
<p> Your Order </p>
@if(isset($Customerid) || isset($Name)|| isset($Order_no))
<p>Your Order:{{ $Customerid }}</p> 
<p>Name:{{ $Name }}</p>
<p>Order Number:{{ $Order }}</p>
@else: <p>{{$text}}</p> <br>
        <P>3 required parameters</P>
@endif
@endsection
