<?php
require_once "templates/head.php";
require_once "templates/header.php";
?>

<div class="row text-center" >

<div class="col-md-10 col-sm-8 mx-auto">
<?php if(isset($_SESSION['username'])){ ?>

 
        <div class="profile_wrap">

        <?php foreach($ds_xe_dat as $value): 
          $tatol_xe = count($ds_xe_dat);
          ?>
        <?php endforeach ?>
          <h5 class="uppercase underline">Xe đã Đặt <span>(<?=  $tatol_xe?>  XE)</span></h5>
          <div class="my_vehicles_list">
        
            <ul class="vehicle_listing">
            <?php
       

            foreach($ds_xe_dat as $value):
              extract($value);
              ?>
              <li>
                <div class="vehicle_img"> <a href="#"><img src="<?= $hinh ?>" alt="image"></a> </div>
                <div class="vehicle_title">
                  <h6><a href=""><?= $ten_xe ?></a></h6>
                </div>
                <div class="vehicle_status"> <a href="" class="btn outline btn-xs "><?php 
                if($trang_thai==0){
                echo 'Chưa duyệt';
                }
                else{
                echo "Đã Duyệt";}
                ?></a>
                  <div class="clearfix"></div>
                  <!-- <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div> -->
              </li>
              <?php endforeach ?>
            </ul>
      
            <div class="pagination">
              <ul>
                <li class="current">1</li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
            </div>
          </div>
         
        </div>

        <?php } ?>
      </div>
      <?php if(!isset($_SESSION['username'])){ ?>
        <h1>Bạn cần đăng nhập</h1>
      <?php } ?>
</div>
      <?php
require_once "templates/footer.php";

?>