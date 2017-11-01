<?php
  include_once 'sub/header.php';
?>
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
<div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body">
            <div class="row">
               <div class="col-sm-6">
                  <div class="image">
                     <img src="<?php echo $products->Image ?>" alt="" />
                  </div>
               </div>
               <div class="col-sm-6">
                  <h2><?=$products->ProductName ?></h2>
                  <h3 class="top10"><?=$products->Price ?></h3>
                  <p class="top30 bottom30"><?=$products->Description ?></p>
                  <div class="top30 bottom30">Size:</div>
                  <div>
                    <select name="size">
                      <option value="<?=$products->Size ?>">
                        
                      </option>
                    </select>  
                  </div>
                  <a class="btn btn_colored btn_rounded button_moema icon-drop" href="#."> <i class="icon-icons102"></i> Add to Cart</a>
               </div>
            </div>
         </div>
      </div>
   </div>
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