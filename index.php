<?php
session_start(); 
require_once('./data/connect.php');
require_once('./data/library.php');



if (!empty($_SESSION['login'])){
    $login = $_SESSION['login'];
    

}
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="/assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/responsive.css"> </head>
    
    <link rel="stylesheet" href="./style.css"> </head>
<body>
    <div class="app">

            <div class="main">
            <?php
            include "./layout/header.php";
            include "./layout/container.php";
            include "./layout/footer.php";
            ?>
        
        </div>
    </div>
   <div class="modal modal-hover ">
        <div class="modal__overlay "></div>
        <div class="modal__body ">  

  
     <div class="auth-form active">
                <div class="auth-form__container ">

                    <div class="auth-form__header ">
                        <h3 class="auth-form__heading ">Đăng ký</h3>
                        <span class="auth-form__switch-btn login ">Đăng nhập</span>
                    </div>
                    <div class="auth-form__form ">
                        <div class="auth-form__group ">
                            <input type="text " placeholder="Email của bạn " class="auth-form__input ">
                        </div>
                        <div class="auth-form__group ">
                            <input type="password " placeholder="Mật khẩu của bạn " class="auth-form__input ">
                        </div>
                        <div class="auth-form__group ">
                            <input type="password " placeholder="nhập lại mật khẩu " class="auth-form__input ">
                        </div>
                    </div>
                    <div class="auth-form-aside ">
                        <p class="auth-form__policy-text ">Bằng việc đăng ký bạn đã đồng ý với Apple music về
                            <a href=" " class="auth-form__text-link ">Điều khoảng dịch vụ </a> &
                            <a href=" " class="auth-form__text-link ">chính sách và bảo mật  </a>
                        </p>
                    </div>
                    <div class="auth-form__controls ">
                        <button class="btn btn-nomal auth-form__controls-back ">Trở lại</button>
                                <button class="btn btn--primary ">Đăng ký</button>
                            </div>
                        </div>
                        <!-- <div class="auth-form__socials ">
                            <a href=" " class="auth-form__socials--facebook btn btn--size-s btn-with-icon ">
                                <i class="auth-form__socials-icon auth-form__socials-icon-color--facebook fab fa-facebook-square "></i>
                                <span class="auth-form__cocials-title ">
                            kết nối với Facebook
                        </span>
                            </a>
                            <a href=" " class="auth-form__socials--google btn btn--size-s btn-with-icon ">
                                <i class="auth-form__socials-icon auth-form__socials-icon-color--google fab fa-google "></i>
                                <span class="auth-form__cocials-title ">
                            kết nối với Google
                        </span>

                            </a>
                        </div> -->
                
    </div>
    <div class="auth-form  ">
                <div class="auth-form__container ">

                    <div class="auth-form__header ">
                        <h3 class="auth-form__heading ">Đăng nhập</h3>
                        <span class="auth-form__switch-btn ">Đăng ký</span>
                    </div>
                    <div class="auth-form__form ">
                        <div class="auth-form__group ">
                            <input type="text " placeholder="Email của bạn " class="auth-form__input ">
                        </div>
                        <div class="auth-form__group ">
                            <input type="password " placeholder="Mật khẩu của bạn " class="auth-form__input ">
                        </div>

                    </div>
                    <div class="auth-form-aside ">
                        <div class="auth-form__help ">
                            <a href=" " class="auth-form__help-link auth-form__help-forgot ">Quên Mật Khẩu </a>
                            <span class="auth-form__help-separate "></span>
                            <a href=" " class="auth-form__help-link ">Cần Trợ Giúp </a>
                        </div>
                    </div>
                    <div class="auth-form__controls ">
                        <button class="btn btn-nomal auth-form__controls-back ">Trở lại</button>
                        <button class="btn btn--primary ">Đăng nhập</button>
                    </div>
                </div>
                <div class="auth-form__socials ">
                    <a href=" " class="auth-form__socials--facebook btn btn--size-s btn-with-icon ">
                        <i class="auth-form__socials-icon auth-form__socials-icon-color--facebook fab fa-facebook-square "></i>
                        <span class="auth-form__cocials-title ">
                            kết nối với Facebook
                        </span>
                    </a>
                    <a href=" " class="auth-form__socials--google btn btn--size-s btn-with-icon ">
                        <i class="auth-form__socials-icon auth-form__socials-icon-color--google fab fa-google "></i>
                        <span class="auth-form__cocials-title ">
                            kết nối với Google
                        </span>

                    </a>
                </div>
            </div>
     </div>
    </div> 
</body>

</html> 
<script src="./assets/javaScript.js">

</script>

