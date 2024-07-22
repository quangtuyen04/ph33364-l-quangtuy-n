<?php
    $loaitin = DB::table('loaitin')
    ->select('id', 'name')
    ->get();
?>

<nav class="navbar navbar-expand-lg navbar-white">
    <a class="navbar-brand order-1" href="index.html">
        <img class="img-fluid" width="100px" src="/theme/images/logo.png" alt="Reader | Hugo Personal Blog Template">
    </a>
    <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('home') }}">Trang Chủ</i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">Chyên Mục<i class="ti-angle-down ml-1"></i></a>
                <div class="dropdown-menu">
                    @foreach ($loaitin as $lt)
                        <a class="dropdown-item" href="{{ url('cat', [$lt->id]) }}">{{ $lt->name }}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact.create') }}">Liên Hệ</a>
            </li>
        </ul>
    <div class="order-2 order-lg-3 d-flex align-items-center">
        <!-- search -->
        <form class="search-bar">
            <input id="search-query" name="s" type="search" placeholder="Tìm Kiếm...">
        </form>
        <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse" data-target="#navigation">
            <i class="ti-menu"></i>
        </button>
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
