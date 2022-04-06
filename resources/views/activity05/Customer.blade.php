@extends('activity05.header')
@section('title' , 'Costumer')
@section('content')
<link rel="stylesheet" href="{{ url('css/act5.css') }}">
<div class="background">
@if(isset($Customerid) || isset($Name)|| isset($Address))
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
<p>Address:{{ $Address }}</p>
@else <p>Customer</p><br><p>{{ $text }}</p> <br>
<P>3 required parameters</P>
<p>Customerid/Name/Address</p>
@endif
@endsection
<div>