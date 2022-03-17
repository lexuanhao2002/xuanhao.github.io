<?php
  require_once('../data/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <form action="#" method="post">
        
    <table class="table">
    <button class="btn add" onclick="window.open('./handle/add.php','_self')" type="button"> ADD</button>
    <div class="content" style="margin-bottom:12px">
    <div class="title" style="text-align:center; margin-bottom:16px">
            <h2>Quản lý danh sách bài hát</h2>
        </div>
      <thead>
         
        <tr>
         <th scope="col">STT</th>
          <th scope="col">name</th>
          <th scope="col">thumbnail</th>
          <th scope="col">url</th>
          <th scope="col">artist id</th>
          <th scope="col">old price</th>
          <th scope="col">new price</th>
          <th scope="col">update date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
          $sql = 'select * from songs';
          $list = executeResult($sql);
            $index = 1;
          foreach($list as $listSong){
              echo '
              <tr>
              <th scope="row">'.$index++.'</th>
              <td>'.$listSong['name'].'</td>
              <td> 
              <img src="./upload/image/'.$listSong['thumbnail'].' " style="width:50px";
              </td>
              <td>'.$listSong['url'].'</td>
              <td>'.$listSong['artist_id'].'</td>
              <td>'.$listSong['old_price'].'</td>
              <td>'.$listSong['price'].'</td>
              <td>'.$listSong['update_date'].'</td>
            
              <td>
                 
                  <button class="btn remove" onclick="deleteSong('.$listSong['id'].') "> remove</button>
                  <button class="btn update" >update</button>
              </td>
            </tr>
              ';
          }
          ?>
       
       
      </tbody>
    </div>
    
<script type="text/javascript">
       function deleteSong(id){
          $.post('./handle/deleteSong.php',{
              'id':id
          },function(data){
              location.reload();

          });
       }
   </script>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.1/dist/chart.min.js" ></script>
</body>
</html>