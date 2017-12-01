<?php
  include_once 'sub/header.php';
  
?>
<title>Empor | Home </title>



<?php
  include_once 'sub/sidebar.php';
  
?>

<section id="emp_gallery" class="padding">
  <div class="container-fluid">
    <div id = "projects" class="cbp">
      <?php foreach ($pHot as $p): ?>
      <div class="cbp-item" style = "width: 299px; height:500px">
        <div class="image">
          <div class="ptags"><span class="hot"> Hot </span></div>
          <img src="<?php echo $p->Image ?>"  >
          <div class="shop_buttons">
           <a class="add_emp" href="<?php echo getUrl('product-detail') ?>?id=<?php echo $p->ProductID ?>"><i style="margin-right:10px" class="icon-expand"></i> Xem chi tiết</a>
          </div>
        </div>
        <div class="product_caption padding_b">
          <a href="#.">
            <h6 class="bottom10">
              <?=$p->ProductName ?>
            </h6>
          </a>
          <p class="p-price">
              <?=$p->Price ?>
          </p>
        </div>
      </div>
      <?php endforeach ?>
      <?php foreach ($pNew as $pN): ?>
        <div  class="cbp-item" style = "width: 299px;height:500px; top:20px">
          <div class="image">
            <div class="ptags"><span class="new"> New </span></div>
            <img src="<?php echo $pN->Image ?>"  >
            <div class="shop_buttons">
             <a class="add_emp" href="<?php echo getUrl('product-detail') ?>?id=<?php echo $pN->ProductID ?>"><i style="margin-right:10px" class="icon-expand"></i> Xem chi tiết
            </div>
          </div>
          <div class="product_caption padding_b">
            <a href="#.">
              <h6 class="bottom10">
                <?=$pN->ProductName ?>
              </h6>
            </a>
            <p class="p-price">
                <?=$pN->Price ?>đ
            </p>
          </div>
        </div>
      <?php endforeach ?>
      <?php foreach ($pDiscount as $pD): ?>
        <div class="cbp-item" style = "width: 299px;height:500px; top:20px">
          <div class="image">
            <div class="ptags"><span class="off"> <?=$pD->Discount ?>% </span></div>
            <img src="<?php echo $pD->Image ?>">
            <div class="shop_buttons">
             <a class="add_emp" href="<?php echo getUrl('product-detail') ?>?id=<?php echo $pD->ProductID ?>"><i style="margin-right:10px" class="icon-expand"></i> Xem chi tiết</a>
            </div>
          </div>
          <div class="product_caption padding_b">
            <h6 class="bottom10">
              <?=$pD->ProductName ?>
            </h6>
            <p class="p-price">
                <?=$pD->Price ?>đ
            </p>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <!-- <div class="col-sm-12 text-center">
      <div class="btn btn_default button_moema margin40">
        <a href="#" id="loadMore">Load More</a>
      </div>
    </div>
      </div> -->
</section>
   
  

 </main>

<!--Footer Starts-->
<?php
  include_once 'sub/footer.php';
?>
<!--Footer Ends-->


<?php 
  include_once 'sub/js.php';
?>
</body>

<!-- Mirrored from wahabali.com/work/empor/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2017 17:26:28 GMT -->
</html>