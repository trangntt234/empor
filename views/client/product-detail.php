<?php
  include_once 'sub/header.php';
?>
<title>Empor </title>
<!-- Slider End -->
<!-- Body -->
<!-- <div>
   <div class="col-sm-6">
      <div class="image">
         <img src="<?php echo $products->Image ?>" alt="" />
      </div>
   </div>
   <div class="col-sm-6">
      <div class="view-rating">
         <span class="view-stars bottom30">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
         <span>(3 customer review)</span>
      </div>
      <h2><?=$products->ProductName ?></h2>
      <h3 class="top10"><?=$products->Price ?></h3>
      <p class="top30 bottom30"><?=$products->Description ?></p>
      <a class="btn btn_colored btn_rounded button_moema icon-drop" href="#."> <i class="icon-icons102"></i> Add to Cart</a>
   </div>
  </div>
</div> -->
<!--End Body -->
<!-- <div class="modal-dialog ">
      <div class="modal-content"> -->
 <div class="modal-body" style="margin-top: 60px">
    <div class="row">
        <div class="col-sm-1">
          
        </div>
        <div class="col-sm-4">
            <div class="image">
               <img name = "image" src="<?php echo $products->Image ?>" alt="" />
            </div>
        </div>
        <div class="col-sm-6" style="margin-top: 20px">
          <h2 name = "name"><?=$products->ProductName ?></h2>
          <h3 class="top10"><?=$products->Price ?>đ</h3>
          <p class="top30 bottom30"><?=$products->Description ?></p>
          <form action="<?=getUrl('add-to-cart') ?>" method="post" accept-charset="utf-8">
            <input type="hidden" name="id" value="<?php echo $products->ProductID ?>" placeholder="">
            <div class="top30 bottom15">Size:
              <select name = "size">
                <?php foreach ($s as $value): ?> 
                  <option value="<?=$value->Value?>"><?=$value->Value ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="top30 bottom15">Màu:
              <?=$products->Color ?>
            </div>
            <div>
              <button type = "submit" class="btn btn_colored btn_rounded button_moema icon-drop" > <i class="icon-icons102"></i>Thêm vào giỏ hàng</button>
            </div> 
          </form>
        </div>
      <div class="col-sm-1">
          
      </div>
    </div>
    <div class = "row">
      <div class="col-sm-1">
          
      </div>
      <div class="col-sm-10">
        <center><h3 style="margin-top: 50px; margin-bottom: 20px">Mặc với</h3></center>
        <?php foreach ($pMacVoi as $key => $value): ?>
        <div class="col-sm-3 cbp-item">
          <div class="image">
            <img src="<?=$pMacVoi[$key]->Image ?>" />
            <div class="shop_buttons">
             <a class="add_emp" href="<?php echo getUrl('product-detail') ?>?id=<?php echo $pMacVoi[$key]->ProductID ?>"><i style="margin-right:10px" class="icon-expand"></i> Xem chi tiết</a>
            </div>
          </div>
          <div class="product_caption padding_b">
            <h6 class="bottom10">
              <?=$pMacVoi[$key]->ProductName ?>
            </h6>
            <p class="p-price">
                <?=$pMacVoi[$key]->Price ?>đ
            </p>
          </div>
        </div>
        
        <?php endforeach ?>
      </div>
      <div class="col-sm-1">
          
      </div>
    </div>
 </div>
     <!--  </div>
     </div> -->

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