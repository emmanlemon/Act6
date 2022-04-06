@extends('activity05.header')
@section('title' , 'Item')
@section('content')
<div class="background">
        @if(isset($Itemno) || isset($Name)|| isset($Price))
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
<p>Your Order:{{ $Itemno }}</p> 
<p>Price:{{ $Price }}</p>
@else: <p>{{$text}}</p> <br>
<P>3 required parameters</P>
        <p>Itemno/Name/Price</p>
@endif
@endsection