<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="public/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <title>Billboard || Farm System Information</title>

        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <script type="text/javascript" src="/js/app.js"></script>
    </head>

    <body>

        <header class="container-fluid p-3 ">
            <div class="row">
                <div class="col">
                    <a href="home" class="nav-link text-dark">
                        <h2 style=" text-align:left; margin-left:20px;"> 一帆  Evan's Shoes Store</h2>
                    </a>
                </div>
                <div class="col"></div>
                <div class="col">
                    <a href="" class="nav-link text-body">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                        Home
                    </a>

                    <a href="./products.php" class="nav-link text-body">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#products"></use></svg>
                        Products
                    </a>

                    <a href="../shoesshop/index.php" class="nav-link text-body">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#logout"></use></svg>
                    Log Out
                    </a>

                    <a href="./cart.php" class="nav-link text-body">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#cart"></use></svg>
                        Cart
                    </a>

                    <hr>

                </div>
            </div>

        </header>
    </body>

</html>