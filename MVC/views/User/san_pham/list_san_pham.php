<?php 
require_once "templates/head.php";
require_once "templates/header.php";
?>

<!-- /Header --> 

<!--Page Header-->
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Danh Sách Xe</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Danh Sách Xe</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Listing-grid-view-->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
	  <div class="mobile_search">
		 <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-filter" aria-hidden="true"></i> Find Your Dream Car </h5>
          </div>
          <div class="sidebar_filter">
            <form action="#" method="get">
              <div class="form-group select">
                <select class="form-control">
                  <option>Select Location</option>
                  <option>Location 1</option>
                  <option>Location 2</option>
                  <option>Location 3</option>
                  <option>Location 4</option>
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control">
                  <option>Select Brand</option>
                  <option>Brand 1</option>
                  <option>Brand 2</option>
                  <option>Brand 3</option>
                  <option>Brand 4</option>
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control">
                  <option>Select Model</option>
                  <option>Series 1</option>
                  <option>Series 2</option>
                  <option>Series 3</option>
                  <option>Series 4</option>
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control">
                  <option>Year of Model </option>
                  <option>2016</option>
                  <option>2015</option>
                  <option>2014</option>
                  <option>2013</option>
                </select>
              </div>
              
              <div class="form-group">
                  <label class="form-label">Price Range ($)</label>
                  <input id="price_range1" type="text" class="span2" value="" data-slider-min="50" data-slider-max="6000" data-slider-step="5" data-slider-value="[1000,5000]"/>
              </div>
              <div class="form-group select">
                <select class="form-control">
                  <option>Type of Car </option>
                  <option>New Car</option>
                  <option>Used Car</option>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Car</button>
              </div>
            </form>
          </div>
        </div>
	   </div>
        <div class="result-sorting-wrapper">
          <div class="sorting-count">
          <?php
                 foreach($ds_sp_xe as $value):
                    $tong_xe = count($ds_sp_xe);
                     ?>
                       <?php endforeach ?>
            <p>
               
                 Tổng : <?= $tong_xe ?> Xe   
            </p>
          
          </div>
          <div class="result-sorting-by">
            <p>Sort by:</p>
            <form action="#" method="post">
              <div class="form-group select sorting-select">
                <select class="form-control ">
                  <option>Price (low to high)</option>
                  <option>Price (high to low)</option>
                  <option>Newest Items</option>
                </select>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          
      <?php 
     foreach($ds_sp_xe as $value):
     extract($value);
     $link_ct = 'index.php?url=sanpham_chitiet&ma_xe='.$ma_xe.'&ma_loai='.$ma_loai.''; 
     ?>
          <div class="col-md-4 grid_listing">
            <div class="product-listing-m gray-bg">
              <div class="product-listing-img"> <a href="<?= $link_ct ?>"><img src="<?= $hinh ?>" class="img-fluid" alt="image" /> </a>
               
                <!-- <div class="compare_item">
                  <div class="checkbox">
                    <input type="checkbox" value="" id="compare21">
                    <label for="compare21">Compare</label>
                  </div>
                </div> -->
              </div>
              <div class="product-listing-content">
                <h5><a href="<?= $link_ct ?>"><?= $ten_xe ?></a></h5>
                <p class="list-price"> <?= currency_format($don_gia) ?> </p>
                <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Xuất Xứ: <?= $xuat_xu ?></span></div>
                <ul class="features_list">
                  <li><i class="fa fa-road" aria-hidden="true"></i><?= $so_km ?> km</li>
                  <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i><?= $dong_co ?></li>
                  <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
                </ul>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
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
      
      <!--Side-Bar-->
      <aside class="col-md-3 col-md-pull-9">
        <div class="sidebar_widget sidebar_search_wrap">
          <div class="widget_heading">
            <h5><i class="fa fa-filter" aria-hidden="true"></i> Find Your Dream Car </h5>
          </div>
          <div class="sidebar_filter">
            <form action="#" method="get">
              <div class="form-group select">
                <select class="form-control">
                  <option>Select Location</option>
                  <option>Audi</option>
                  <option>BMW</option>
                  <option>Nissan</option>
                  <option>Toyota</option>
                  <option>Volvo</option>
                  <option>Mazda</option>
                  <option>Mercedes-Benz</option>
                  <option>Lotus</option>
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control">
                  <option>Select Brand</option>
                  <option>Audi</option>
                  <option>BMW</option>
                  <option>Nissan</option>
                  <option>Toyota</option>
                  <option>Volvo</option>
                  <option>Mazda</option>
                  <option>Mercedes-Benz</option>
                  <option>Lotus</option>
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control">
                  <option>Select Model</option>
                  <option>Series 1</option>
                  <option>Series 2</option>
                  <option>Series 3</option>
                  <option>Series 4</option>
                  <option>Series 6</option>
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control">
                  <option>Year of Model </option>
                  <option>2016</option>
                  <option>2015</option>
                  <option>2014</option>
                  <option>2013</option>
                  <option>2012</option>
                  <option>2011</option>
                  <option>2010</option>
                  <option>2009</option>
                  <option>2008</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-label">Price Range ($) </label>
                <input id="price_range" type="text" class="span2" value="" data-slider-min="50" data-slider-max="6000" data-slider-step="5" data-slider-value="[1000,5000]"/>
              </div>
              <div class="form-group select">
                <select class="form-control">
                  <option>Type of Car </option>
                  <option>New Car</option>
                  <option>Used Car</option>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Car</button>
              </div>
            </form>
          </div>
        </div>
        <div class="sidebar_widget sell_car_quote">
          <div class="white-text div_zindex text-center">
            <h3>Sell Your Car</h3>
            <p>Request a quote and sell your car now!</p>
            <a href="#" class="btn">Request a Quote <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
          <div class="dark-overlay"></div>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-car" aria-hidden="true"></i> Recently Listed Cars</h5>
          </div>
          <div class="recent_addedcars">
            <ul>
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="#"><img src="assets/images/post_200x200_1.jpg" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="#">Ford Shelby GT350</a>
                  <p class="widget_price">$92,000</p>
                </div>
              </li>
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="#"><img src="assets/images/post_200x200_2.jpg" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="#">BMW 535i</a>
                  <p class="widget_price">$92,000</p>
                </div>
              </li>
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="#"><img src="assets/images/post_200x200_3.jpg" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a>
                  <p class="widget_price">$92,000</p>
                </div>
              </li>
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="#"><img src="assets/images/post_200x200_4.jpg" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="#">Ford Shelby GT350 </a>
                  <p class="widget_price">$92,000</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </aside>
      <!--/Side-Bar--> 
    </div>
  </div>
</section>
<!--/Listing-grid-view--> 

<!--Brands-->
<section class="brand-section gray-bg">
  <div class="container">
    <div class="brand-hadding">
      <h5>Popular Brands</h5>
    </div>
    <div class="brand-logo-list">
      <div id="popular_brands">
        <div><a href="#"><img src="assets/images/brand-logo-1.png" class="img-fluid" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/brand-logo-2.png" class="img-fluid" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/brand-logo-3.png" class="img-fluid" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/brand-logo-4.png" class="img-fluid" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/brand-logo-5.png" class="img-fluid" alt="image"></a></div>
      </div>
    </div>
  </div>
</section>
<!-- /Brands--> 

<?php
require_once "templates/footer.php"; ?>