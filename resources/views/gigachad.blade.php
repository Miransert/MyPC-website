<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('styles/primary.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/custom.css') }}"/>
    <script src="{{ asset('js/add-to-cart.js') }}" defer></script>
    <title>MyPC The GigaChad 2000</title>
</head>

<body>
<nav>
    <div class="container">
        <a href="/" id="logo">
            <h2>MyPC</h2>
            <h3>WebStore</h3>
        </a>
        <div class="cart">
            <span>In cart: </span><span id="cart-count"> 0</span>
        </div>
    </div>
</nav>
<section class="container">
    <main class="details-area">
        <!--Your HTML-->
        <div id="pc11-blade" class="pc-blade">
                <h1>The GigaChad 2000</h1>
                <p class="intro-blade">The GigaChad 2000 is the perfect machine for all of your gaming needs, with RGB that will literally <br> make you puke.</p>
                <ul>
                    <li>1000 GigaWatt Processor</li>
                    <li>4x Undimmed Memoryless RAM</li>
                    <li>Supports more than one monitor</li>
                </ul>
                <button onclick="increment()" class="button-blade" id="add-to-cart">Add to cart</button>
                <img id="pc-image" class="pc-blade" src="{{ asset('img/pc1.png') }}">
            </div>
    </main>
</section>
</body>

</html>
