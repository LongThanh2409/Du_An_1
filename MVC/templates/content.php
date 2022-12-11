<div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
<section id="banner" class="banner-section">

  <div class="container">

    <div class="div_zindex">

      <div class="row">

	  <div class="col-md-7"></div>

        <div class="col-md-5">

          <div class="banner_content">

            <h1>Tìm Chiếc Xe Phù Hợp Cho Bạn</h1>

            <p>Chúng tôi có hơn 100X Chiếc Xe Dành Cho Bạn. </p>

            <a href="index.php?url=list_san_pham" class="btn">Danh Sách Sản Phẩm <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>

        </div>

      </div>

    </div>

  </div>

</section>

<!-- /Banners --> 



<!-- Filter-Form -->



<!-- /Filter-Form --> 



<!-- About -->

<section class="about-us-section section-padding">

  <div class="container">

    <div class="section-header text-center">

      <h2>Chào Mừng Đến Với <span> CarForYou</span></h2>

      <p>Car For You với phương châm "Đồng hành cùng xu hướng của bạn" sẽ là nơi mua sắm an toàn và uy tín, bởi chúng tôi luôn đề cao tiêu chí mang đến cho quý khách những sản phẩm chất lượng nhất với giá cả luôn phải chăng.</p>

    </div>

    <div class="row">

     

      <div class="col-lg-6 col-sm-6">

       
      </div>
      <div class="col-lg-6 col-sm-6">

<!-- <div class="looking-car">

  <div class="looking-cat-image"> <img src="assets/image/car-img-03.png" alt="Image" /> </div>

  <div class="looking-car-content">

    <h3>Looking <span>New Car?</span></h3>

    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>

    <a href="index.php?url=list_san_pham" class="btn">View Listing<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> </div>

</div> -->


</div>

    </div>

  </div>

</section>

<!-- /About --> 



<!-- Resent Cat-->

<section class="section-padding gray-bg">

  <div class="container">

    <div class="section-header text-center">

      <h2>TÌM CHIẾC XE PHÙ HỢP CHO BẠN </h2>

      <p>Car For You với phương châm "Đồng hành cùng xu hướng của bạn" sẽ là nơi mua sắm an toàn và uy tín, bởi chúng tôi luôn đề cao tiêu chí mang đến cho quý khách những sản phẩm chất lượng nhất với giá cả luôn phải chăng.</p>

    </div>

    <div class="row"> 

      

      <!-- Nav tabs -->

      <!-- <div class="recent-tab">

        <ul class="nav nav-tabs" id="myTab" role="tablist">

          <li class="nav-item" role="presentation"><a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">New Car</a></li>

          <li class="nav-item" role="presentation"><a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Use Car</a></li>

        </ul>

      </div> -->

      <!-- Recently Listed New Cars -->

      <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

          <?php foreach($six_sp as $value): 
            extract($value);
            $link_ct = 'index.php?url=sanpham_chitiet&ma_xe='.$ma_xe.'&ma_loai='.$ma_loai.'';   ?>
          <div class="col-list-3">

            <div class="recent-car-list">

              <div class="car-info-box"> <a href="<?= $link_ct ?>"><img src="<?php echo $hinh ?>" class="img-fluid" alt=""></a>

                <div class="compare_item">

                  <!-- <div class="checkbox">

                    <input type="checkbox" id="compare9">

                    <label for="compare9">Compare</label>

                  </div> -->

                </div>

                <ul>

                  <li><i class="fa fa-road" aria-hidden="true"></i><?= $so_km ?> km</li>

                  <li><i class="fa fa-calendar" aria-hidden="true"></i><?= $dong_co?></li>

                  <li><i class="fa fa-map-marker" aria-hidden="true"></i><?= $xuat_xu ?></li>

                </ul>

              </div>

              <div class="car-title-m">

                <h6><a href="<?= $link_ct ?>"><?=  $ten_xe?></a></h6>

                <span class="price"> <?= currency_format($don_gia)?></span> 

              </div>

              <div class="inventory_info_m">

                 <p><?= $thong_tin ?></p>

              </div>

            </div>

          </div>
          <?php endforeach ?>
        </div>

        

        <!-- Recently Listed Used Cars -->



      </div>

    </div>

  </div>

</section>

<!-- /Resent Cat --> 



<!-- Fun Facts-->

<section class="fun-facts-section">

  <div class="container div_zindex">

    <div class="row">

      <div class="col-lg-3 col-xs-6 col-sm-3">

        <div class="fun-facts-m">

          <div class="cell">

            <h2><i class="fa fa-calendar" aria-hidden="true"></i>10+</h2>

            <p>Kinh Doanh</p>

          </div>

        </div>

      </div>

      <div class="col-lg-3 col-xs-6 col-sm-3">

        <div class="fun-facts-m">

          <div class="cell">

          <?php
            foreach($total_xe as $value){
              $total_xes = count($total_xe);
            }
            ?>
            <h2><i class="fa fa-car" aria-hidden="true"></i><?=isset($total_xes)?$total_xes:"0"  ?>+</h2>

            <p>Chiếc xe</p>

          </div>

        </div>

      </div>

      <div class="col-lg-3 col-xs-6 col-sm-3">

        <div class="fun-facts-m">

          <div class="cell">
            <?php
            foreach($total_don as $value){
              $total_dons = count($total_don);
            }
            ?>
            <h2><i class="fa fa-car" aria-hidden="true"></i><?= isset($total_dons)? $total_dons:"0"  ?></h2>

            <p>Đã ĐƯợc Đặt</p>

          </div>

        </div>

      </div>

      <div class="col-lg-3 col-xs-6 col-sm-3">

        <div class="fun-facts-m">

          <div class="cell">

            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>

            <p>Lượt Thích</p>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- Dark Overlay-->

  <div class="dark-overlay"></div>

</section>

<!-- /Fun Facts--> 



<!--Featured Car-->

<section class="section-padding">

  <div class="container">

    <div class="section-header text-center">

      <h2>Xe Nổi Bật <span>Ưu Đãi đặc Biệt</span></h2>

      <p>Car For You với phương châm "Đồng hành cùng xu hướng của bạn" sẽ là nơi mua sắm an toàn và uy tín, bởi chúng tôi luôn đề cao tiêu chí mang đến cho quý khách những sản phẩm chất lượng nhất với giá cả luôn phải chăng. </p>

    </div>

    <div class="row">

     
    <?php foreach($three_sp as $value):
      extract($value);
      $link_ct = 'index.php?url=sanpham_chitiet&ma_xe='.$ma_xe.'&ma_loai='.$ma_loai.'';
      ?>
      <div class="col-list-3">

        <div class="featured-car-list">

          <div class="featured-car-img"> <a href="<?= $link_ct?>"><img src="<?= $hinh?>" class="img-fluid" alt="Image"></a>

            <!-- <div class="label_icon">Used</div> -->

            <div class="compare_item">

              <!-- <div class="checkbox">

                <input type="checkbox" id="compare3">

                <label for="compare3">Compare</label>

              </div> -->

            </div>

          </div>

          <div class="featured-car-content">

            <h6><a href="#"><?= $ten_xe?></a></h6>

            <div class="price_info">

              <p class="featured-price"> <?=currency_format($don_gia)?></p>

              <div class="car-location"><span><i class="fa  fa-credit-card" aria-hidden="true"></i>  <?=$giam_gia ?> %</span></div>

            </div>

            <ul>

              <li><i class="fa fa-road" aria-hidden="true"></i><?=$so_km ?> km</li>

              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>

              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>

              <li><i class="fa fa-car" aria-hidden="true"></i><?=$xuat_xu ?></li>

              <li><i class="fa fa-user" aria-hidden="true"></i><?= $slots ?> Chỗ</li>

              <li><i class="fa fa-superpowers" aria-hidden="true"></i><?= $dong_co ?></li>

            </ul>

          </div>

        </div>

      </div>
      <?php endforeach ?>

    </div>

  </div>

</section>

<!-- /Featured Car--> 



<!--Trending Car-->

<section class="section-padding gray-bg">

  <div class="container">

    <div class="section-header text-center">

      <h2>Xu Hướng <span>Xe Của Năm Nay</span></h2>

      <p>Car For You với phương châm "Đồng hành cùng xu hướng của bạn" sẽ là nơi mua sắm an toàn và uy tín, bởi chúng tôi luôn đề cao tiêu chí mang đến cho quý khách những sản phẩm chất lượng nhất với giá cả luôn phải chăng. </p>

    </div>

    <div class="row">

      <div class="col-lg-12">

        <div id="trending_slider">

         <?php  foreach($six_sp as $value):
          extract($value);
          $link_ct = 'index.php?url=sanpham_chitiet&ma_xe='.$ma_xe.'&ma_loai='.$ma_loai.''; 
          ?>
          <div class="trending-car-m">

            <div class="trending-car-img"> <img src="<?= $hinh ?>" alt="Image" class="img-fluid" /> </div>

            <div class="trending-hover">

              <h4><a href="<?= $link_ct ?>"><?= $ten_xe ?></a></h4>

            </div>

          </div>

          <?php endforeach ?>
        </div>

      </div>

    </div>

  </div>

</section>

<!-- /Trending Car--> 



<!--Testimonial -->

<section class="section-padding testimonial-section parallex-bg">

  <!-- <div class="container div_zindex">

    <div class="section-header white-text text-center">

      <h2>Our Satisfied <span>Customers</span></h2>

      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>

    </div>

    <div class="row">

      <div id="testimonial-slider">

        <div class="testimonial-m">

          <div class="testimonial-img"> <img src="assets/image/testimonial-img-1.jpg" alt="images" /> </div>

          <div class="testimonial-content">

            <div class="testimonial-heading">

              <h5>Donald Brooks</h5>

              <span class="client-designation">CEO of xzy company</span> </div>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>

          </div>

        </div>

        <div class="testimonial-m">

          <div class="testimonial-img"> <img src="assets/image/testimonial-img-2.jpg" alt="images" /> </div>

          <div class="testimonial-content">

            <div class="testimonial-heading">

              <h5>Enzo Giovanotelli</h5>

              <span class="client-designation">CEO of xzy company</span> </div>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>

          </div>

        </div>

        <div class="testimonial-m">

          <div class="testimonial-img"> <img src="assets/image/testimonial-img-2.jpg" alt="images" /> </div>

          <div class="testimonial-content">

            <div class="testimonial-heading">

              <h5>Donald Brooks</h5>

              <span class="client-designation">CEO of xzy company</span> </div>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>

          </div>

        </div>

        <div class="testimonial-m">

          <div class="testimonial-img"> <img src="assets/image/testimonial-img-1.jpg" alt="images" /> </div>

          <div class="testimonial-content">

            <div class="testimonial-heading">

              <h5>Enzo Giovanotelli</h5>

              <span class="client-designation">CEO of xzy company</span> </div>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>

          </div>

        </div>

        <div class="testimonial-m">

          <div class="testimonial-img"> <img src="assets/image/testimonial-img-2.jpg" alt="images" /> </div>

          <div class="testimonial-content">

            <div class="testimonial-heading">

              <h5>Donald Brooks</h5>

              <span class="client-designation">CEO of xzy company</span> </div>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>

          </div>

        </div>

        <div class="testimonial-m">

          <div class="testimonial-img"> <img src="assets/image/testimonial-img-3.jpg" alt="images" /> </div>

          <div class="testimonial-content">

            <div class="testimonial-heading">

              <h5>Enzo Giovanotelli</h5>

              <span class="client-designation">CEO of xzy company</span> </div>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>

          </div>

        </div>

      </div>

    </div>

  </div> -->

  <!-- Dark Overlay-->

  <div class="dark-overlay"></div>

</section>

<!-- /Testimonial--> 



<!--Blog -->

<!-- <section class="section-padding">

  <div class="container">

    <div class="section-header text-center">

      <h2>Latest Updates In<span> Automobile Industry</span></h2>

      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>

    </div>

    <div class="row">

      <div class="col-md-4 col-sm-4">

        <article class="blog-list">

          <div class="blog-info-box"> 

          	<div class="share_article">

            	<p><i class="fa fa-share-alt" aria-hidden="true"></i></p>

                <ul>

                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                </ul>

            </div>

            <a href="#"><img src="assets/image/blog_img1.jpg" class="img-fluid" alt="image"></a>

            <ul>

              <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Latest Cars</a></li>

              <li><i class="fa fa-calendar" aria-hidden="true"></i>15 Nov 2016</li>

              <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>10 Comments</a></li>

            </ul>

          </div>

          <div class="blog-content">

            <h5><a href="#">But I must explain to you how all this mistaken idea.</a></h5>

            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>

            <a href="#" class="btn-link">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>

        </article>

      </div>

      <div class="col-md-4 col-sm-4">

        <article class="blog-list">

          <div class="blog-info-box"> 

          <div class="share_article">

            	<p><i class="fa fa-share-alt" aria-hidden="true"></i></p>

                <ul>

                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                </ul>

            </div>

            <a href="#"><img src="assets/image/blog_img2.jpg" class="img-fluid" alt="image"></a>

            <ul>

              <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Latest Cars</a></li>

              <li><i class="fa fa-calendar" aria-hidden="true"></i>10 Nov 2016</li>

              <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>21 Comments</a></li>

            </ul>

          </div>

          <div class="blog-content">

            <h5><a href="#">On the other hand, we denounce with righteous indignation.</a></h5>

            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>

            <a href="#" class="btn-link">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>

        </article>

      </div>

      <div class="col-md-4 col-sm-4">

        <article class="blog-list">

          <div class="blog-info-box"> 

          <div class="share_article">

            	<p><i class="fa fa-share-alt" aria-hidden="true"></i></p>

                <ul>

                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                </ul>

            </div>

            <a href="#"><img src="assets/image/blog_img3.jpg" class="img-fluid" alt="image"></a>

            <ul>

              <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Latest Cars</a></li>

              <li><i class="fa fa-calendar" aria-hidden="true"></i>05 Nov 2016</li>

              <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>18 Comments</a></li>

            </ul>

          </div>

          <div class="blog-content">

            <h5><a href="#">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a></h5>

            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>

            <a href="#" class="btn-link">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>

        </article>

      </div>

    </div>

  </div>

</section> -->

<!-- /Blog--> 



<!--Brands-->

<!-- <section class="brand-section gray-bg">

  <div class="container">

    <div class="brand-hadding">

      <h5>Popular Brands</h5>

    </div>

    <div class="brand-logo-list">

      <div id="popular_brands">

        <div><a href="#"><img src="assets/image/brand-logo-1.png" class="img-fluid" alt="image"></a></div>

        <div><a href="#"><img src="assets/image/brand-logo-2.png" class="img-fluid" alt="image"></a></div>

        <div><a href="#"><img src="assets/image/brand-logo-3.png" class="img-fluid" alt="image"></a></div>

        <div><a href="#"><img src="assets/image/brand-logo-4.png" class="img-fluid" alt="image"></a></div>

        <div><a href="#"><img src="assets/image/brand-logo-5.png" class="img-fluid" alt="image"></a></div>

        <div><a href="#"><img src="assets/image/brand-logo-1.png" class="img-fluid" alt="image"></a></div>

        <div><a href="#"><img src="assets/image/brand-logo-2.png" class="img-fluid" alt="image"></a></div>

      </div>

    </div>

  </div>

</section> -->

<!-- /Brands--> 


