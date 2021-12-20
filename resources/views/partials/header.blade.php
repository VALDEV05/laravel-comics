<?php
    $menu =[
        [
            'href'=>'home',
            'text'=>'home',
        ],
        [
            'href'=>'comics',
            'text'=>'comics',
        ],
        [
            'href'=>'movies',
            'text'=>'movies',
        ],
        [
            'href'=>'tv',
            'text'=>'tv',
        ],
        [
            'href'=>'games',
            'text'=>'games',
        ],
        [
            'href'=>'collectibles',
            'text'=>'collectibles',
        ],
        [
            'href'=>'videos',
            'text'=>'videos',
        ],
        [
            'href'=>'fans',
            'text'=>'fans',
        ],
        [
            'href'=>'news',
            'text'=>'news',
        ],
        [
            'href'=>'shop',
            'text'=>'shop',
        ],
    ];
?>

<header id="site_header">
    <div id="topnav">

    </div>
    <!-- /#topnav -->
    <nav>
        <div class="container">
            <div class="logo"></div>
            <div id="main_menu">
                <ul>

                    @foreach($menu as $item)
                        <li><a href="{{ route($item['href']) }}">{{ $item['text'] }}</a></li>
                    @endforeach
                    <!-- <li><a href="">Lorem.</a></li>
                    <li><a href="">Accusantium!</a></li>
                    <li><a href="">Aliquam.</a></li>
                    <li><a href="">Nostrum?</a></li>
                    <li><a href="">Voluptatum.</a></li>
                    <li><a href="">Culpa!</a></li>
                    <li><a href="">Et.</a></li>
                    <li><a href="">Dignissimos!</a></li>
                    <li><a href="">Eveniet.</a></li>
                    <li><a href="">Quisquam.</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- /#main_menu -->
</header>