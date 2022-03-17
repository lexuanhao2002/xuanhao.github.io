
<?php
require_once('../data/connect.php');
require_once('../data/library.php');
$id = getGet('id');

$productList = executeResult('select * from  songs where id= '. $id,true);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
   
    <link rel="stylesheet" href="../assets/css/responsive.css"> </head>
    
    <link rel="stylesheet" href="./style.css"> </head>
</head>
<body>
    <?php
    include '../layout/header.php';
    
    ?>
      <div class="container">
        <div class="grid wide">
        
                <div class="product-detail">
                        <div class="row ">
                            <?php
                            foreach ($productList as $key => $item) {};
                         
                            ?>

                                <div class="col l-4">
                                    <div class="product-detail__image" style="background-image: url('../admin/upload/image/<?php echo $item['thumbnail'] ?>')";>
                                    </div>    
                                </div>
                                <div class="product-detail__information col l-8">
                                    <div class="product-detail__name"> <?php echo $item['name']  ?></div> 
                                        <div class="product-detail__list">
                                            <span class="product-detail__list-star">Đánh Giá:<u>5</u>
                                                <i class="product-detail__list-icon fas fa-star"></i>
                                                <i class="product-detail__list-icon fas fa-star"></i>
                                                <i class="product-detail__list-icon fas fa-star"></i>
                                                <i class="product-detail__list-icon fas fa-star"></i>
                                                <i class="product-detail__list-icon fas fa-star"></i>
                                        
                                            </span>
                                    
                                        </div>
                                    <div class="product-detail__price">
                                        <span class="product-detail__price-title">Giá bài hát </span>
                                            <span class="product-detail__old-price"><?php echo number_format($item['old_price'], 0, '.', ',') ?> VND</span>
                                            <span class="product-detail__new-price"><?php echo number_format($item['price'], 0, '.', ',') ?>VND</span>
                                    </div>
                                    <div class="product-detail__artist">
                                    Ca sĩ:
                                        <span>
                                        <?php echo $item['artist']  ?>
                                        </span> </div> 
                                <div class="product-detail__tranport">
                                    <span class="product-detail__tranport-title">Nghe thử</span>
                                    
                                       <div class="audio">
                                       <audio controls>
                                        <source src=" ../admin/upload/songs/<?php echo $item['url']  ?>">
                                            </audio>
                                    </div>
                                    
                    
                                </div>
                                    <div class="product-detail__cart">
                                    <button  class="product-detail__cart-add btn btn-add" onclick="addToCart(<?=$id ?>)">
                                   
                                        Add to cart
                                    </button>
                                    <a class="product__buy-link"href="../product/pay.php">
                                             <span  class="product-detail__cart-Buy btn btn-buy-now " >Buy Now</span>
                                        </a>
                                    <div>
                
                </div>
        
            <!-- <div class="infor-detail">
                    <div class="row">
                        <div class="col l-12">
                            <div class="infor-detail-product">
                                <div class="infor-detail-list">
                                    <span class="infor-detail-list-product">
                                    product details
                                    </span>
                                </div>
                                <div class="infor-detail-list-classify">

                                    <span class="infor-detail-model">
                                        model: <?php echo $item['model'] ?>
                                    </span>
                                    <span class="infor-detail-material">
                                        Material: <?php echo $item['Material'] ?>
                                    </span>
                                    <span class="infor-detail-keyboard_material">
                                        keyboard material: <?php echo $item['keyboard_material'] ?>
                                    </span>
                                </div>
                                <div class="infor-Description">
                                    <div class="infor-Description-list">
                                        <span class="infor-Description-title">
                                        Product Descriptions
                                        </span>
                                    </div>
                                    <div class="infor-Description-product">
                                        <span class="infor-Description-product-view">
                                            <?php echo $item['description'] ?>
                                        </span>
                                    </div>
                                    
                                </div>
                        </div>
                    </div>
                </div>
        </div> -->
    </div>
    
    <script type="text/javascript">
                     

            function addToCart(id) {
                $.post('../api/cookie.php', {
                    'action': 'add',
                    'id': id,
                    'num': 1
                }, function(data) {
                    location.reload()
                });
            };
    </script>
                 
</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
