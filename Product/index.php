
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./style.css">

        <title>Hotel USA</title>
    </head>
    <body>
        <?php
        include "exc.php";
        ?>
        <div class="header">
            <img class="logo_header" src="https://image-tc.galaxy.tf/wipng-ano6dpyzshsvx30zugn38wj3e/file.png?width=500"
                alt="logo">
            <nav class="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link">rooms</a></li>
                    <li class="nav-item"><a class="nav-link">dining</a></li>
                    <li class="nav-item"><a class="nav-link">things to do & see</a></li>
                    <li class="nav-item"><a class="nav-link">amenities</a></li>
                    <li class="nav-item"><a class="nav-link">calendar of events</a></li>
                    <li class="nav-item"><a class="nav-link">callery</a></li>
                    <li class="nav-item"><a class="nav-link"><i id="icon-menu" class="fa fa-bars"
                                aria-hidden="true"></i></a></li>
                </ul>
            </nav>
        </div>
        <div class="image">
            <img src="./img/l1.jpg" alt="" height="690px">
        </div>
        <div class="title">
            <center>
                <h1>Sản phẩm nổi bật </h1>
            </center>
        </div>
        <div class="product">
            <div class="row">
                <div class="column">   
                        <?php foreach ($dataArr as $ele) { ?>
                            <div>
                            <h3><?php echo $ele["name"]?></h3>
                                <p><?php echo $ele["des"]?></p>
                                <h4><?php echo $ele["price"]?></h4>
                                <h4><?php echo $ele["num"]?></h4>
                                 </div>
                        <?php } ?>
                   
                </div>
            </div>
        </div>        
        <div class="footer">
            <hr> 
            <div class="foot">
                <center><p>Copyright TravelClick, an Amadeus Company</p></center>
            </div>
        </div>
    </body>
</html>
