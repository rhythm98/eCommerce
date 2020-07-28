
<?php
$connect = mysqli_connect("localhost", "root", "", "etantrik");
$tab_query = "SELECT * FROM catigory ORDER BY cid ASC";
$tab_result = mysqli_query($connect, $tab_query);
$tab_menu = '';
$tab_content = '';
$i = 0;
while($row = mysqli_fetch_array($tab_result))
{
 if($i == 0)
 {
  $tab_menu .= '
   <li class="active"><a href="#'.$row["cid"].'" data-toggle="tab">'.$row["cname"].'</a></li>
  ';
  $tab_content .= '
   <div id="'.$row["cid"].'" class="tab-pane fade in active">
  ';
 }
 else
 {
  $tab_menu .= '
   <li><a href="#'.$row["cid"].'" data-toggle="tab">'.$row["cname"].'</a></li>
  ';
  $tab_content .= '
   <div id="'.$row["cid"].'" class="tab-pane fade">
  ';
 }
 $product_query = "SELECT * FROM products WHERE cid = '".$row["cid"]."'";
 $product_result = mysqli_query($connect, $product_query);
 while($sub_row = mysqli_fetch_array($product_result))
 {
  $tab_content .= '
  <div class="card col-md-3" style="width:25%;">
   <img class="card-img-top  img-thumbnail" src="'.$sub_row["image"].'" alt= "'.$sub_row["name"].'"  style="height:400px"  >
    <h4 class="card-title">'.$sub_row["name"].'</h4>
   <a href="#" class="btn btn-primary stretched-link">Quick Look</a>

  </div>
  ';
 }
 $tab_content .= '<div style="clear:both"></div></div>';
 $i++;
}
?>

<head>
    <title>HomePage : eCommerce</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="home.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrapCSS.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="popperJS.js"></script>
    <script src="jquery.js"></script>
    <script src="compiledJS.js"></script>
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 500px;
        }
    </style>
</head>

<body>
   

 
<nav class="navbar navbar-expand-lg navbar-light bg-info">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="homePage.html"><img src="buy-home.png" height="50px"></img></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/home/eshan/workbench/eCommerce-Tantrik/user-login-page.html" style="font-weight: bold;">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                
               

</nav>
   
    <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/Wireless/Xiaomi/RedmiNote8Pro/Flashsale/Next_Sale_20th_Nov/V151730641_IN_WLME_Redmi_Note8Series_FlashSale_DesktopTallHero_1500x600._CB448494772_.jpg" alt="Watch">
            </div>
            <div class="carousel-item active">
                <img src="onePlus.jpg" alt="One Plus">
            </div>
            <div class="carousel-item">
                <img src="w1.jpg" alt="Mi">
            </div>
            <div class="carousel-item">
                <img src="w2.jpg" alt="Watch">
            </div>
            <div class="carousel-item">
                <img src="w3.jpg" alt="Watch">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    
    </div>
    





 <div>
       
        <br>
        <ul class="nav nav-tabs">
        <?php
        echo $tab_menu;
        ?>
        </ul>
        <div class="tab-content">
        <br>
        <?php
        echo $tab_content;
        ?>
        </div>
       </div>




 <br> <br> <br> <br> <br> <br> <br> <br> <br>

<footer style="background:#001b3a; color:lightgrey;position: relative ;bottom: 0;width: 100%;">
    <blockquote>Copyright: @e-tantrik.pvt ltd.<br> Email-Id:etantrikcomsabmilega.gmail.com
        <br> Contact:
        <Contact:> +91-9818682310</Contact:>
        <br> or call toll free at
        <contact>0124-7629812</contact>



    </blockquote>

</footer>



    
    


</body>

