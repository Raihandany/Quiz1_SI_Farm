<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="public/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <title>Dashboard || Rainsel'Bag</title>
    </head>

    <body>
        <!-- header --!>
        <header>
            <div class="container">
                <h1><a href="dashboard.php">SI | FARM</a></h1>
                <ul>
                    <li><a href="dashboard.php">Lokation</a></li>
                    <li><a href="">Transaction</a></li>
                    <li><a href="">Facility</a></li>
                    <li><a href="">Data Actort</a></li>   
                    <li><a href="">Exit</a></li>
                </ul>
            </div>
        </header>

        <!-- content --!>
        <div class="section">
        <div class="container">
            <h3>Facility</h3>
            <div class="box">
                <p><a href="request-add.php">Request</a></p>
                <table border = "3" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th width="60px">No</th>
                            <th>Name User</th>
                            <th>Request Goods</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    


                </table>
            </div>
        </div>
    </div>

    <body>

</html>