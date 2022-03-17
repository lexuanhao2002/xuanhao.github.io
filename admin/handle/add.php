<?php
   require_once('../../data/connect.php');

$name = '';

$old_price = '';
$new_price = '';
$artist_id= '';
$update_date= '';

if(!empty($_POST)){
    if(isset($_POST['btnsave'])){
        $name = $_POST['name'];
        
        $old_price = $_POST['old_price'];
        $new_price = $_POST['new_price'];
        $artist_id= $_POST['artist_id'];
        $update_date = $_POST['update_date'];
       
        if(isset($_FILES['image']))
        {
            $upload_dir = '../upload/image/';
            $image = $_FILES['image']['name'];
            $nameImage = date('YmdHis') . '_' . $image;
            move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $nameImage);
        }
       
     
        if(isset($_FILES['url'])){
            $upload_song = '../upload/songs/';
            $url = $_FILES['url']['name'];
            $url_name = $url ;
            trim(move_uploaded_file($_FILES['url']['tmp_name'],$upload_song.$url_name ));
       
         }
        //  if($S_id != ''){
        //     $sql ="update songs set song_name='$name', aritst_id=' $artist', trailer='$trailer',price='$price' where song_id =".$S_id;
   
        //  }
      
       
        $sql = "INSERT INTO `songs` (name,thumbnail,url,old_price,price,artist_id,update_date) VALUES ('$name','$nameImage','$url_name','$old_price','$new_price','$artist_id','$update_date');";
        execute($sql);
        header('Location:../index.php');
   
    die();
    }  
    
   
   
}

// $id = '';
// if(isset($_GET['id'])){
//     $id = $_GET['id'];
//     $sql = 'select * from songs where song_id= '.$id;
//     $SongList = executeResult($sql);
//     if($SongList != null && count($SongList) > 0){
//         $std = $SongList[0];
     
//         $name =  $std ['song_name'];
//         $artist =  $std ['aritst_id'];
//         $trailer =  $std ['trailer'];
//         $price =  $std ['price'];
//     }
//     else{
//         $id ='';
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Song name</label>
    <input type="text" style="display:none" class="form-control" name="id" id="exampleInputEmail1"  placeholder="tên bài hát">
   
    <input type="text" class="form-control" name="name" id="exampleInputEmail1"  placeholder="Tên bài hát">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">thumbnail</label>
    <input type="file" class="form-control" name="image" id="exampleInputPassword1" placeholder="Chọn hình ảnh">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">url</label>
    <input type="file" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="chọn bài hát">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">old price</label>
    <input type="number" class="form-control" name="old_price" id="exampleInputEmail1"  placeholder="Nhập giá cũ">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">new price</label>
    <input type="number" class="form-control" name="new_price" id="exampleInputEmail1"  placeholder="Nhập giá mới">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">artist id</label>
    <input type="text" name="artist_id" class="form-control" name="name" id="exampleInputEmail1"  placeholder="Nhập id ca sĩ">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">update date</label>
    <input type="text" name="update_date" class="form-control" name="name" id="exampleInputEmail1"  placeholder="Nhập ngày cập nhật">
   
  </div>
  <button type="submit" name="btnsave" class="btn btn-primary">ADD</button>
</form>
</body>
</html>