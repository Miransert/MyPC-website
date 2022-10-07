<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('styles/primary.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/custom.css') }}"/>
    <script src="{{ asset('js/add-to-cart.js') }}" defer></script>
    <title>MyPC The PlebBoi</title>
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
        <div id="pc22-blade" class="pc-blade">
                <h1>The PlebBoi</h1>
                <p class="intro-blade">The only computer made for betas by betas. The ideal computer that comes with a 2 year simp<br> warranty.</p>
                <ul>
                    <li>RGB to satisfy all your needs</li>
                    <li>1024 KB Virtual Attachable RAM</li>
                    <li>8096 KBit Ethernet port</li>
                    <li>Cheetos resistant keyboard</li>
                    <li>5$ OnlyFans gift card included</li>
                </ul>
                <div id="color-picker">
                    <label for="color">Pick color<br></label>
                    <select name="color" id="color">
                        <option disabled selected value id="none">None</option>
                        <option value="red" id="red">Red</option>
                        <option value="green" id="green">Green</option>
                        <option value="blue" id="blue">Blue</option>
                    </select>
                </div>
                <button onclick="increment()" class="button-blade2" id="add-to-cart">Add to cart</button>
                <img class="pc-blade" id="pc-image" src="http://localhost:8000/img/pc2.png">
            </div>
    </main>
</section>
</body>

</html>
