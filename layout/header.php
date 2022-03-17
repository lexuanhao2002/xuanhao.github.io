
<header class="header">
                <div class="grid wide">

                    <nav class="header__navbar hide-on-mobile-table ">
                        <ul class="header__navbar-list">
                            <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate">Enjoy the best music
                                <div class="header__qr">
                                    <img src="" alt="" class="header__qr-img">
                                    <div class="header__qr-appss">
                                        <a href="" class="header__qr-link">
                                            <img src="../image/google_Playc.png" class="header__qr-dowwnload-img">
                                        </a>
                                        <a href="" class="header__qr-link">
                                            <img src="../image/App_store.png" class="header__qr-dowwnload-img">
                                        </a>


                                    </div>
                                </div>
                            </li>
                            <li class="header__navbar-item">
                                <span class="header__navbar-title--no-pointer">Connect</span>
                                <a href="" class="header__navbar-icon-link">
                                    <i class="header__navbar-icon fab fa-facebook"></i>
                                </a>
                                <a href="" class="header__navbar-icon-link">
                                    <i class="header__navbar-icon fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="header__navbar-list">
                            <li class="header__navbar-item header__navbar-item--has-notify">
                                <a href="#" class="header__navbar-item-link">

                                    <i class="header__navbar-icon far fa-bell"></i>Announce

                                </a>
                                <div class="header-notify">
                                    <header class="header__notify-header">
                                        <h3>New announce received</h3>
                                    </header>
                                    <ul class="header__notify-list">
                                        <li class="header__notify-item header__notify-item--viewed">
                                            <a href="" class="header__notify-link">
                                                <img src="../assets/image/image_1.png" alt="" class="header__notify-img">
                                                <div class="header__notify-info">
                                                    <span class="header__notify-name">Genuine Ohui cosmetics</span>
                                                    <span class="header__notify-description">Description of the original Ohui product</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="header__notify-item header__notify-item--viewed">
                                            <a href="" class="header__notify-link">
                                                <img src="../assets/image/image_1.png" alt="" class="header__notify-img">
                                                <div class="header__notify-info">
                                                    <span class="header__notify-name">Genuine Ohui cosmetics</span>
                                                    <span class="header__notify-description">Description of the original Ohui product</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="header__notify-item">
                                            <a href="" class="header__notify-link">
                                                <img src="../assets/image/image_1.png" alt="" class="header__notify-img">
                                                <div class="header__notify-info">
                                                    <span class="header__notify-name">Genuine Ohui cosmetics</span>
                                                    <span class="header__notify-description">Description of the original Ohui product</span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                    <footer class="header__notify-footer ">
                                        <a href="" class="header__notify-footer-btn">See all</a>
                                    </footer>
                                </div>
                            </li>
                            <li class="header__navbar-item">
                                <a href="#" class="header__navbar-item-link">
                                    <i class="header__navbar-icon far fa-question-circle"></i>Support
                                </a>
                            </li>
                            <!-- <li class="header__navbar-item ">
                                <a class="header__navbar-item-link header__navbar-item--strong  header__navbar-item--separate">
                                    Đăng ký
                                </a>
    
                            </li>
                            <li class="header__navbar-item">
                                <a class="header__navbar-item-link header__navbar-item--strong">
                                    Đăng nhập
                                </a>
                            </li> -->
                            
                            <li class="header__navbar-item header__navbar-user">
                                <img src="https://avatar-redirect.appspot.com/google/100568609144736180025?size=400" alt="" class="header__navbar-user-img">
                                <span class="header__navbar-user-name">
                                <?php 
                                             if(!empty($login)){

                                                 foreach($login as $list => $users){
                                                     echo $users['userName'];
                                                    
                                                }
                                             }
                                             else{
                                                 echo '';
                                             }
                                        
                                                 ?>
                                </span>
                                <ul class="header__navbar-user-menu">
                                    <li class="header__navbar-user-item">
                                        <a href="#">My account</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="#">My address</a>
                                    </li>
                                    
                                    <li class="header__navbar-user-item header__navbar-user-item--separate ">
                                        <a href="../music/assets/user/register.php"  class="header_navbar-link">Log in</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- header with search -->
                    <div class="header-with-search">
                        <label for="mobile-search-checkbook" class="header__mobile-search">
                            <i class="header__mobile-search-icon fas fa-search"></i>
                        </label>
                        <div class="header__logo hide-on-table">
                            <a href="/" class="header__logo-link">
                            <img src="https://www.clipartkey.com/mpngs/m/104-1048265_apple-music-listen-on-apple-music-logo.png" style="width:150px">
                        </div>
                        <input type="checkbox" hidden id="mobile-search-checkbook" class="header__search-checkbook">
                        <div class="header__search   ">
                            <div class="header__search-input-wrap">

                                <input type="text" placeholder="nhập để tìm kiếm " class="header__search-input">
                                <!-- search-history -->
                                <div class="header__search-history">
                                    <h3 class="header__search-history-heading">
                                        Search history
                                    </h3>
                                    <ul class="header__search-history-list">
                                        <li class="header__search-history-item">
                                            <a href="#">Acne cream</a>
                                        </li>
                                        <li class="header__search-history-item">
                                            <a href="#">lotion</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header__search-select">
                                <span class="header__search-select-label">In the Shop</span>


                                <i class="header__search-select-icon fas fa-angle-down"></i>
                                <ul class="header__search-option">
                                    <li class="header__search-option-item header__search-option--active">
                                        <span>In the Shop</span>
                                        <i class="fas fa-check"></i>
                                    </li>
                                    <li class="header__search-option-item ">
                                        <span>Outside the shop</span>
                                        <i class="fas fa-check"></i>
                                    </li>
                                </ul>
                            </div>
                            <button class="header__search-btn">
                                <i class="header__search-btn-icon fas fa-search"></i>
                            </button>
                        </div>
                        <!-- header cart -->
                        <?php
                                $cart = [];
                                if(isset($_COOKIE['cart'])) {
                                    $json = $_COOKIE['cart'];
                                    $cart = json_decode($json, true);
                                }
                            
                            
                                $count = 0;
                                foreach($cart as $item){
                                    $count += $item['num'];
                                    
                                }
                                ?>
                        <div class="header__cart">
                            <div class="header__cart-swap">

                                <i class="header__cart-icon fas fa-shopping-cart"></i>
                                <span class="header__cart-notice"><?=$count ?></span>
                                <!-- No cart cart : header__cart-list--no-cart -->
                                <div class="header__cart-list">
                                  <?php
                                  $cart = [];
                                  if(isset($_COOKIE['cart'])){
                                      $json = $_COOKIE['cart'];
                                      $cart = json_decode($json, true);
                             
                                  }
                                  $idList = [];
                                  foreach ($cart as $item) {
                                      $idList[] = $item['id'];
                                  }
                                  if(count($idList) > 0) {
                                      $idList = implode(',', $idList);
                                      //[2, 5, 6] => 2,5,6
      
                                      $sql = "select * from songs where id in ($idList)";
                                      $cartList = executeResult($sql);
                                  } else {
                                      $cartList = [];
                                      echo '  <img src="../image/no_cart.png" alt="" class="header__cart-list-no-cart-img">
                                      <span class="header__cart-list-no-cart-msg">
                                          No product
                                      </span> ';
                                  }
                             
                                  ?>
                                   
                                    <h4 class="header__cart-heading">Product added</h4>
                                    <!-- cart-item -->
                                    <ul class="header__cart-list-item">
                                        <?php
                                        foreach($cartList as $item){
                                            $num = 0;
                                            foreach($cart as $qty){
                                                if($qty['id'] == $item['id']){
                                                    $num = $qty['num'];
                                                }
                                            }
                                            echo '   <li class="header__cart-item">
                                            <img src="../admin/upload/image/'.$item['thumbnail'].'" alt="" class="header__cart-item-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">'.$item['name'].'</h5>
                                                    <div class="header__cart-item-price-wrap">


                                                        <span class="header__cart-item-price">'.$item['price'].'</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">'.$num.'</span>
                                                    </div>

                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">
                                                    '.$item['artist'].'
                                                    </span>
                                                    <span class="header__cart-item-remove" onclick="deletecart('.$item['id'].')">
                                                      Deteled
                                                    </span>
                                                </div>
                                            </div>
                                        </li>';
                                        }
                                  
                                        ?>
                                     <script type="text/javascript">
                                            function deletecart(id) {
                                            $.post('../api/cookie.php', {
                                                'action': 'delete',
                                                'id': id
                                              
                                            }, function(data) {
                                                location.reload()
                                            });
                                        };
                                     </script>
                                    </ul>
                                    <div class="header__cart-add-to">
                                    <span class='header__cart-add-product'>There are (<?=$count?>) products in the cart</span>
                                    <a href="http://localhost/web_sell/product/pay.php" class="header__cart-view-cart btn btn--primary">Payment</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="header__sort-bar">
                    <li class="header__sort-item">
                        <a href="" class="header__sort-link">
                            Involve
                        </a>
                    </li>
                    <li class="header__sort-item header__sort-item--active">
                        <a href="" class="header__sort-link">
                            selling
                        </a>
                    </li>
                    <li class="header__sort-item">
                        <a href="" class="header__sort-link">
                            New
                        </a>
                    </li>
                    <li class="header__sort-item">
                        <a href="" class="header__sort-link">
                            Price
                        </a>
                    </li>
                </ul>
            </header>

         
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
