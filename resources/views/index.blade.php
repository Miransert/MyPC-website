<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('styles/primary.css') }}" />
    <link rel="stylesheet" href="{{ asset('styles/custom.css') }}" />
    <title>MyPC</title>
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
        <main class="mains">
            <!--Your HTML-->

            <div id="pc11" class="pc">
                <h2>The GigaChad 2000</h2>
                <p class="intro">The GigaChad 2000 is the perfect <br> machine for all of your gaming <br> needs, with RGB that will literally <br> make you puke.</p>
                <ul>
                    <li>1000 GigaWatt Processor</li>
                    <li>4x Undimmed Memoryless RAM</li>
                    <li>Supports more than one monitor</li>
                </ul>
                <p class="stock">Only 3 in stock!</p>
                <a href="gigachad" class="details-link"><button class="button">Gimme</button></a>
                <img class="pc" src="{{ asset('img/pc1.png') }}">
            </div>

            <div id="pc22" class="pc">
                <h2>The PlebBoi</h2>
                <p class="intro">The only computer made for betas by betas. The ideal computer that comes with a 2 year simp warranty.</p>
                <ul>
                    <li>RGB to satisfy all your needs</li>
                    <li>1024 KB Virtual Attachable RAM</li>
                    <li>8096 KBit Ethernet port</li>
                    <li>Cheetos resistant keyboard</li>
                    <li>5$ OnlyFans gift card included</li>
                </ul>
                <p class="stock">Only 57 in stock!</p>
                <a href="plebboi" class="details-link"><button class="button">Gimme</button></a>
                <img class="pc" src="{{ asset('img/pc2.png') }}">
            </div>

        </main>
    </section>
</body>

</html>
