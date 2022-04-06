@extends('activity05.header')
@section('title' , 'Order')
@section('content')
@if(isset($Customerid) || isset($Name)|| isset($Order) || isset($Date))
<p> Hi <br>My name is {{ $Name }} !!!</p>
<div class="container">
    @if($Name == "crisyan")
    <div class="img">
    <img src="/Customer/crisyan.jpeg" alt="Crisyan">
    </div>
@endif
@if($Name == "jericka")
<div class="img">
    <img src="/Customer/Jericka.jpeg" alt="Crisyan">
</div>
@endif
@if($Name == "marjelvin")
<div class="img">
    <img src="/Customer/Marj.jpg" alt="Crisyan">
</div>
@endif
@if($Name== "emman")
<div class="img">
    <img src="/Customer/Emman.jpg" alt="Crisyan">
</div>
@endif
</div>
<p>Customer ID:{{ $Customerid }}</p> 
<p>Order Number:{{ $Order }}</p>
<p>Date: {{ $Date }}</p>
@else: <p>{{$text}}</p> <br>
        <P>3 required parameters</P>
        <p>Customer ID/Name/Order No/Date</p>
@endif
@endsection
