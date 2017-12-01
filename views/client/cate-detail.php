<?php
  include_once 'sub/header.php';
  
?>
<title>Empor | Danh mục | Sản phẩm </title>

<main>


  <!--Page Header-->
<?php
  include_once 'sub/sidebar.php';
  
?>
  <!--Page Header ends -->


<!--IconBox Starts-->
<section class="padding">
  <div class="container-fluid">
    <div class="wrap_double">
      <div class="row">
        <div class="col-md-5 padding_b">
          <?php foreach ($pHot as $key => $p): ?>
          <div class="row" style="margin-bottom: 40px;">
              <div class="col-md-7 col-sm-6 floatedpix">
                <div class="image">
                  <div class="ptags"><span class="hot"> HOT </span></div>
                  <img src="<?= $p->Image?>" alt="image">
                </div>
              </div>
              <div class="col-md-5 col-sm-6 floatedbox right">
                <h2><a href="javascript:void(0)"><?= $p->ProductName ?></a></h2>
                <p class="top20 bottom20"><?=$p->Description ?></p>
               <a href="<?php echo getUrl('product-detail') ?>?id=<?php echo $p->ProductID ?>" class="btn btn_default btn_rounded button_moema"> <i class="icon-icons102"></i> Xem chi tiết</a>
              </div>
          </div>
          <?php endforeach ?>
        </div>
        <div class="col-md-2 hidden-sm">
        </div>
        <div class="col-md-5 padding_b">
          <?php foreach ($pNew as $key => $p): ?>
          <div class="row" style="margin-bottom: 40px;">
              <div class="col-md-5 col-sm-6 floatedbox left">
                <h2><a href="javascript:void(0)"><?= $p->ProductName ?></a></h2>
                <p class="top20 bottom20"><?=$p->Description ?></p>
               <a href="<?php echo getUrl('product-detail') ?>?id=<?php echo $pD->ProductID ?>" class="btn btn_default btn_rounded button_moema"> <i class="icon-icons102"></i> Xem chi tiết</a>
              </div>
              <div class="col-md-7 col-sm-6 floatedpix">
                <div class="image">
                  <div class="ptags"><span class="new">New </span></div>
                  <img style="margin-bottom: 40px;" src="<?= $p->Image ?>" >
              </div>
          </div>
          <?php endforeach ?>
          <?php foreach ($pD as $key => $p): ?>
          <div class="row" style="margin-bottom: 40px;">
              <div class="col-md-5 col-sm-6 floatedbox left">
                <h2><a href="javascript:void(0)"><?= $p->ProductName ?></a></h2>
                <p class="top20 bottom20"><?=$p->Description ?></p>
                <a href="<?php echo getUrl('product-detail') ?>?id=<?php echo $p->ProductID ?>" class="btn btn_default btn_rounded button_moema"> <i class="icon-icons102"></i> Xem chi tiết</a>
              </div>
              <div class="col-md-7 col-sm-6 floatedpix">
                <div class="image">
                  <div class="ptags"><span class="off"><?= $p->Discount ?>%</span></div>
                  <img style="margin-bottom: 40px;" src="<?= $p->Image ?>" >
              </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!--IconBox Ends-->


</main>



<!--Footer Starts-->
<?php
  include_once 'sub/footer.php';
?>
<!--Footer Ends-->

<?php
  include_once 'sub/jsCate.php';
?>

</body>

<!-- Mirrored from wahabali.com/work/empor/shop5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2017 17:35:54 GMT -->
</html>