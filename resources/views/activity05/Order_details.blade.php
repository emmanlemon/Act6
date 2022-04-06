@extends('activity05.header')
@section('title' , 'Order_details')
@section('content')
@if(isset($TransNo) || isset($Orderno)|| isset($Itemid)|| isset($Name)|| isset($Price) || isset($Qty))
<p> Your Order Details</p>
<p>Name:{{ $Name }}</p>
<p>Trans Number:{{ $TransNo }}</p>
<p>Order Number:{{ $Orderno }}</p>
<p>Item ID:{{ $Itemid }}</p>
<p>Quantity:{{ $Qty }}</p>
<p>Price:{{ $Price }}</p>
<p>Total Amount:{{ $total }}</p>
@else: <p>{{$text}}</p> <br>
        <P>3 required parameters</P>
        <p>Name/Transno/Orderno/Itemid/Qty/Price</p>
@endif
@endsection
