<!-- @import jquery & sweet alert  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php 
// @Connection database
$connection = new mysqli('localhost','root','','project_end_php');
function get_website_logo($status){
     global $connection;
     $sql = "SELECT * FROM `tbl_logo` WHERE status = '$status' ORDER BY `id` DESC LIMIT 1";
     $rs  = $connection->query($sql);
     $row = mysqli_fetch_assoc($rs);
     echo $row['thumbnail'];
}

function get_news_sport(){
     global $connection;
     $sql = "SELECT * FROM `tbl_news` ORDER BY `id` DESC LIMIT 3";
     $rs  = $connection->query($sql);
     while($row = mysqli_fetch_assoc($rs)){
          $id = $row['id'];
          $title = $row['title'];
          echo '
               <i class="fas fa-angle-double-right"></i>
               <a href="news-detail.php?id='.$id.'">'.$title.'</a> &ensp;
          ';
     }
}

function get_news_type($id){
     global $connection;
     $sql   = "SELECT * FROM `tbl_news` WHERE `id` = '$id'";
     $rs    = $connection->query($sql);
     $row   = mysqli_fetch_assoc($rs);
     return $row['news_type'];
}

function get_new_banner($id){
     global $connection;
     $sql = "SELECT * FROM `tbl_news` WHERE `id`= '$id' LIMIT 1";
     $rs    = $connection->query($sql);
     while($row=$rs->fetch_assoc()){
          $banner  = $row['banner'];
          $title   = $row['title'];
          $date    = $row['date'];
          $date    = date('d/M/Y');
          $des     = $row['description'];
          echo '
          <div class="main-news">
               <div class="thumbnail">
                    <img src="../admin/assets/image/'.$banner.'">
                    </div>
                    <div class="detail">
                         <h3 class="title">'.$title.'</h3>
                         <div class="date">'.$date.'</div>
                         <div class="description">'.$des.'</div>
               </div>
          </div>
          ';
     }
}

function get_related_new($id){
     global $connection;
     $news_sport = get_news_type($id);
     $sql   = "SELECT * FROM `tbl_news` WHERE `news_type`='$news_sport' AND `id` NOT IN ($id) ORDER BY 'id' DESC LIMIT 2";
     $rs    = $connection->query($sql);
     while($row=$rs->fetch_assoc()){
          $banner  = $row['banner'];
          $title   = $row['title'];
          $date    = $row['date'];
          $date    = date('d/M/Y');
          $des     = $row['description'];
          echo '
          <figure>
               <a href="">
                    <div class="thumbnail">
                         <img width="350px" height="200px"  src="../admin/assets/image/'.$banner.'" alt="">
                    </div>
                    <div class="detail">
                         <h3 class="title">'.$title.'</h3>
                         <div class="date">'.$date.'</div>
                         <div class="description">'.$des.'</div>
                    </div>
               </a>
          </figure> 
          ';
     }
     function get_viewer($id){
          global $connection;
          $sql   = "UPDATE `tbl_news` SET `views`=`views`+1 WHERE `id` = '$id'";
          $connection->query($sql);
     }
}

function get_main_news($type){
     global $connection;
     if($type == 'Trading'){
          $sql    = "SELECT * FROM `tbl_news` ORDER BY `views` DESC LIMIT 1";
          $rs     = $connection->query($sql);
          $row    = mysqli_fetch_assoc($rs);
          $id     = $row['id'];
          $banner = $row['banner'];
          $title  = $row['title'];
          echo '
          <div class="col-8 content-left" >
               <figure>
                    <a href="news-detail.php?id='.$id.'">
                         <div class="thumbnail">
                              <img width="730" height="415" src="../admin/assets/image/'.$banner.'" alt="">
                              <div class="title">'.$title.'</div>
                         </div>
                    </a>
               </figure>
          </div>
          ';
     }
     else{
          $sql    = "SELECT * FROM `tbl_news` WHERE `id` !=(SELECT `id` from `tbl_news` ORDER BY `views` DESC LIMIT 1) ORDER BY `id` DESC LIMIT 2";
          $rs     = $connection->query($sql);
          while($row = $rs->fetch_assoc()){
               $id     = $row['id'];
               $thumbnail = $row['thumbnail'];
               $title  = $row['title'];
               echo '
               <div class="col-12">
                    <figure>
                    <a href="news-detail.php?id='.$id.'">
                         <div class="thumbnail">
                              <img width="350" height="200" src="../admin/assets/image/'.$thumbnail.'" alt="">
                         <div class="title">'.$title.'</div>
                         </div>
                    </a>
                    </figure>
               </div>
                
               ';
          }
     }
}

function get_sport_new(){
     global $connection;
     $sql   = "SELECT * FROM `tbl_news` WHERE `category`='Sport' ORDER BY `id` DESC LIMIT 6" ;
     $rs    = $connection->query($sql);
     while($row=$rs->fetch_assoc()){
          $banner = $row['banner'];
          $id     = $row['id'];
          $title  = $row['title'];
          echo '
          <div class="col-4">
               <figure>
                    <a href="news-detail.php?id='.$id.'">
                         <div class="thumbnail">
                              <img width="350px" height="200px" src="../admin/assets/image/'.$banner.'" alt="">
                         <div class="title">'.$title.'</div>
                         </div>
                    </a>
               </figure>
          </div>
          ';
     }
}

function get_social_new(){
     global $connection;
     $sql   = "SELECT * FROM `tbl_news` WHERE `category`='Social' ORDER BY `id` DESC LIMIT 6" ;
     $rs    = $connection->query($sql);
     while($row=$rs->fetch_assoc()){
          $banner = $row['banner'];
          $id     = $row['id'];
          $title  = $row['title'];
          echo '
          <div class="col-4">
               <figure>
                    <a href="news-detail.php?id='.$id.'">
                         <div class="thumbnail">
                              <img width="350px" height="200px" src="../admin/assets/image/'.$banner.'" alt="">
                         <div class="title">'.$title.'</div>
                         </div>
                    </a>
               </figure>
          </div>
          ';
     }
}

function get_entertainment_new(){
     global $connection;
     $sql   = "SELECT * FROM `tbl_news` WHERE `category`='Entertainment' ORDER BY `id` DESC LIMIT 6" ;
     $rs    = $connection->query($sql);
     while($row=$rs->fetch_assoc()){
          $banner = $row['banner'];
          $id     = $row['id'];
          $title  = $row['title'];
          echo '
          <div class="col-4">
               <figure>
                    <a href="news-detail.php?id='.$id.'">
                         <div class="thumbnail">
                              <img width="350px" height="200px" src="../admin/assets/image/'.$banner.'" alt="">
                         <div class="title">'.$title.'</div>
                         </div>
                    </a>
               </figure>
          </div>
          ';
     }
}

function search_new($query){
     global $connection;
     $sql   = $sql = "SELECT * FROM `tbl_news` WHERE `title` LIKE '%$query%'";
     $rs    = $connection->query($sql);
     while($row=$rs->fetch_assoc()){
          $id     = $row['id'];
          $banner = $row['banner'];
          $title  = $row["title"];
          $date        = $row['date'];
          $date    = date('d/M/Y');
          $description = $row["description"];  
          echo '
               <div class="col-4">
               <figure>
                    <a href="news-detail.php?id='.$id.'">
                         <div class="thumbnail">
                         <img width="350px" height="200px" src="../admin/assets/image/'.$banner.'">
                         </div>
                         <div class="detail">
                              <h3 class="title">'.$title.'</h3>
                              <div class="date">'.$date.'</div>
                              <div class="description">
                                   '.$description.'
                              </div>
                         </div>
                    </a>
               </figure>
               </div>
          ';
      }
}

function list_sport_news($category,$new_type,$page,$limit){
     global $connection;
     $start = ($page - 1)*$limit;
     $sql   = "SELECT * FROM `tbl_news` WHERE `category` ='$category' AND `news_type`='$new_type' ORDER BY `id` LIMIT  $start,$limit";
     $rs    = $connection->query($sql);
     while($row=mysqli_fetch_assoc($rs)){
         $thumbnail   = $row['thumbnail'];
         $title       = $row["title"];
         $date        = $row['date'];
         $date        = date("d/M/Y");
         $description = $row["description"];  
         $id         = $row['id'];
         echo '
               <div class="col-4">
                    <figure>
                         <a href="news-detail.php?id='.$id.'">
                              <div class="thumbnail">
                              <img width="350px" height="200px" src="../admin/assets/image/'.$thumbnail.'">
                              </div>
                              <div class="detail">
                              <h3 class="title">'.$title.'</h3>
                              <div class="date">'.$date.'</div>
                              <div class="description">
                                   '.$description.'
                              </div>
                              </div>
                         </a>
                    </figure>
               </div>
             ';
     }
 }

 function get_pageination($category,$news_type,$limit){
     global $connection;
     $sql     = "SELECT COUNT(id) as total_post FROM tbl_news WHERE category='$category' AND news_type='$news_type' ";
     $rs      = $connection->query($sql );
     $row     = mysqli_fetch_assoc($rs);
     $total_post  = $row['total_post'];
     $pageination = ceil($total_post/$limit);
     for($i=1; $i<=$pageination; $i++ ){
         echo '
         <li>
             <a href="?page='.$i.'">'.$i.'</a>
         </li>
     ';
     }
 }

 function feed_back(){
     global $connection;
     if(isset($_POST['btn_message'])){
          $username = $_POST['username'];
          $email    = $_POST['email'];
          $phone    = $_POST['phone'];
          $address  = $_POST['address'];
          $message  = $_POST['message'];

          $sql      = "INSERT INTO `tbl_feedback`(`name`, `email`, `phone`, `address`, `description`)
                       VALUES ('$username','$email','$phone','$address','$message')";
          $rs       = $connection->query($sql);
          if($rs){
               echo '
                    <script>
                         $(document).ready(function(){
                              swal({
                                   title: "Successfully",
                                   text: "You clicked the button!",
                                   icon: "success",
                                   button: "OK",
                              });
                         });
                    </script>
               ';
           }
     }
 }
 feed_back();


function get_follow_us($status){
     global $connection;
     $sql   = "SELECT * FROM `tbl_follow_us` WHERE `status`='$status' ORDER BY `id` DESC";
     $rs    = $connection->query($sql);
     while($row=$rs->fetch_assoc()){
          $id        = $row['id'];
          $label     = $row['label'];
          $thumbnail = $row['thumbnail'];
          $url       = $row['url'];
          echo '
          <li>
               <img src="../admin/assets/image/'.$thumbnail.'" width="40px"> <a href="'.$url.'">'.$label.'</a>
          </li>
          ';
     }
}

function get_follow_us_footer($status){
     global $connection;
     $sql   = "SELECT * FROM `tbl_follow_us` WHERE `status`='$status' ORDER BY `id` DESC";
     $rs    = $connection->query($sql);
     while($row=$rs->fetch_assoc()){
          $thumbnail = $row['thumbnail'];
          $url       = $row['url'];
          echo '
          <li>
               <a href="'.$url.'"><img  width="40px" height="40px"  src="../admin/assets/image/'.$thumbnail.'" alt=""></a>
          </li>
          ';
     }
}

function get_about_us(){
     global $connection;
     $sql   = "SELECT * FROM `tbl_about_us` ORDER BY `id` DESC LIMIT 1";
     $rs    = $connection->query($sql);
     while($row=$rs->fetch_assoc()){
          $id = $row['id'];
          $description = $row['description'];
          echo '
          <div class="description">'.$description.'</div> 
          ';
     }
}
