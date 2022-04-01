@extends('activity05.header')
@section('title' , 'Costumer')
@section('content')
<link rel="stylesheet" href="{{ url('css/act5.css') }}">
<p> Hi Customers! </p>
<div class="container">
    <div class="img">
        <img src="/Customer/crisyan.jpeg" alt="Crisyan">
        <label for="">Crisyan</label>
    </div>
    <div class="img">
        <img src="/Customer/Jericka.jpeg" alt="Crisyan">
        <label for="">Jericka</label>
    </div>
    <div class="img">
        <img src="/Customer/Marj.jpg" alt="Crisyan">
        <label for="">Marjelvin</label>
    </div>
    <div class="img">
        <img src="/Customer/Emman.jpg" alt="Crisyan">
        <label for="">Emmanuel</label>
    </div>
</div>
@endsection
