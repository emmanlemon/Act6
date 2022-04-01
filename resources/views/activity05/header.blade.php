<link rel="stylesheet" href="{{ url('css/act5.css') }}">
<title>@yield('title' ,'Home')</title>
<header class="box">    
    <ul>
        <li><a href="{{ route('Item') }}">Item</a></li>
        <li><a href="{{ route('Customer') }}">Customer</a></li>
        <li><a href="{{ route('Order') }}">Order</a></li>
        <li><a href="{{ route('Order_details') }}">Order list</a></li>
    </ul>
</header>
@yield('content')