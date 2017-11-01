<?php
  include_once 'sub/header.php';
  
?>
<!-- Slider End -->



<!--Gallery Starts-->
<section id="emp_gallery" class="padding">
  <div class="container-fluid">
 <!--    <div class="row">
   <div class="col-sm-12 heading_space clearfix">
     <div id="project-filter" class="cbp-l-filters top10 pull-left">
       <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">Show All</div>
       <div data-filter=".style" class="cbp-filter-item"> Lifestyle </div>
       <div data-filter=".shoes" class="cbp-filter-item">  Shoes  </div>
       <div data-filter=".essentials" class="cbp-filter-item">Essentials </div>
       <div data-filter=".fall" class="cbp-filter-item">Fall 2015 </div>
     </div>
      <a class="btn btn_default button_moema  btnfilter pull-right top10">
        <i class="fa fa-th-large"></i> &nbsp; Filter
      </a>
      <div class="clearfix"></div>
      <div class="container-select top20 equal_parent">
         <div class="row">
         <div class="col-md-3 col-sm-6">
            <div class="emp_cate equal_inner">
               <h5 class="text-uppercase select-title">Categories</h5>
               <label class="clearfix">
                 <div class="squaredFour">
                  <input id="squaredFour" value="None" name="check" checked="" type="checkbox">
                  <label for="squaredFour"></label>
                  </div>
                  <h6 class="bottom5">Suits &amp; Blazer</h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="check2" value="None" name="check" type="checkbox">
                  <label for="check2"></label>
                  </div>
                  <h6 class="bottom5">Tuxedo</h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="check3" value="None" name="check" type="checkbox">
                  <label for="check3"></label>
                  </div>
                  <h6 class="bottom5">Suits &amp; Bowler Hat</h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="check4" value="None" name="check" checked="" type="checkbox">
                  <label for="check4"></label>
                  </div>
                  <h6 class="bottom5">Dress Pants</h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="check5" value="None" name="check" checked="" type="checkbox">
                  <label for="check5"></label>
                  </div>
                  <h6 class="bottom5">Shoes Collection</h6>
               </label>
           </div>
         </div>
         <div class="col-md-3 col-sm-6">
            <div class="emp_cate dotted equal_inner">
               <h5 class="text-uppercase select-title">Size</h5>
               <label class="clearfix">
                 <div class="squaredFour">
                  <input id="check6" value="None" name="check" checked="" type="checkbox">
                  <label for="check6"></label>
                  </div>
                  <h6 class="bottom5">S</h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="m" value="None" name="check" checked="" type="checkbox">
                  <label for="m"></label>
                  </div>
                  <h6 class="bottom5">M</h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="l" value="None" name="check" type="checkbox">
                  <label for="l"></label>
                  </div>
                  <h6 class="bottom5">L</h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="xl" value="None" name="check" checked="" type="checkbox">
                  <label for="xl"></label>
                  </div>
                  <h6 class="bottom5">XL</h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="xxl" value="None" name="check" type="checkbox">
                  <label for="xxl"></label>
                  </div>
                  <h6 class="bottom5">XXL</h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="xxxl" value="None" name="check" checked="" type="checkbox">
                  <label for="xxxl"></label>
                  </div>
                  <h6 class="bottom5">XXXL</h6>
               </label>
           </div>
         </div>
         <div class="col-md-3 col-sm-6">
            <div class="emp_cate dotted equal_inner">
               <h5 class="text-uppercase select-title">Colour</h5>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="black" value="None" name="check" type="checkbox">
                  <label for="black"></label>
                  </div>
                  <h6 class="bottom5">Black <span class="color black"></span></h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="blue" value="None" name="check" type="checkbox">
                  <label for="blue"></label>
                  </div>
                  <h6 class="bottom5">Blue <span class="color blue"></span></h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="grey" value="None" name="check" checked="" type="checkbox">
                  <label for="grey"></label>
                  </div>
                  <h6 class="bottom5">Gray <span class="color grey"></span></h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="red" value="None" name="check" type="checkbox">
                  <label for="red"></label>
                  </div>
                  <h6 class="bottom5">Red <span class="color red"></span></h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="yellow" value="None" name="check" checked="" type="checkbox">
                  <label for="yellow"></label>
                  </div>
                  <h6 class="bottom5">Yellow <span class="color yellow"></span></h6>
               </label>
       </div>
         </div>
         <div class="col-md-3 col-sm-6">
            <div class="emp_cate dotted equal_inner">
               <h5 class="text-uppercase select-title">By Price</h5>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="fifty" value="None" name="check" checked="" type="checkbox">
                  <label for="fifty"></label>
                  </div>
                  <h6 class="bottom5">$0.00  -  $50.00</h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="hundred" value="None" name="check" checked="" type="checkbox">
                  <label for="hundred"></label>
                  </div>
                  <h6 class="bottom5">$0.00  -  $100.00</h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="twoh" value="None" name="check"  type="checkbox">
                  <label for="twoh"></label>
                  </div>
                  <h6 class="bottom5">$0.00  -  $200.00</h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="fourh" value="None" name="check" type="checkbox">
                  <label for="fourh"></label>
                  </div>
                  <h6 class="bottom5">$0.00  -  $400.00</h6>
               </label>
               <label class="clearfix">
               <div class="squaredFour">
                  <input id="sisteen" value="None" name="check"  type="checkbox">
                  <label for="sisteen"></label>
                  </div>
                  <h6 class="bottom5">$0.00  -  $1600.00</h6>
               </label>
           </div>
         </div>
      </div>
      </div>
   </div>
 </div> -->
    <div id="projects" class="cbp">
        <?php foreach ($pHot as $p): ?>
        <div class="cbp-item" style = "width: 299px; height:500px">
          <div class="image">
            <div class="ptags"><span class="hot"> Hot </span></div>
            <img src="<?php echo $p->Image ?>"  >
            <div class="shop_buttons">
             <a class="add_emp" href="<?= getUrl('')?>"> <i class="icon-icons102"></i> add to bag </a>
             <a class="ext_emp" href="<?php echo getUrl('product-detail') ?>&id=<?php echo $p->ProductID ?>" > <i class="icon-expand"></i></a>
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
        <div class="cbp-item" style = "width: 299px;height:500px; top:20px">
          <div class="image">
            <div class="ptags"><span class="new"> New </span></div>
            <img src="<?php echo $pN->Image ?>"  >
            <div class="shop_buttons">
             <a class="add_emp" href=""> <i class="icon-icons102"></i> add to bag </a>
             <a class="ext_emp" href="<?php echo getUrl('product-detail') ?>&id=<?php echo $pN->ProductID ?>" > <i class="icon-expand"></i></a>
            </div>
          </div>
          <div class="product_caption padding_b">
            <a href="#.">
              <h6 class="bottom10">
                <?=$pN->ProductName ?>
              </h6>
            </a>
            <p class="p-price">
                <?=$pN->Price ?>
            </p>
          </div>
        </div>
      <?php endforeach ?>
      <?php foreach ($pDiscount as $pD): ?>
        <div class="cbp-item" style = "width: 299px;height:500px; top:20px">
          <div class="image">
            <div class="ptags"><span class="off"> <?=$pD->Discount ?>% </span></div>
            <img src="<?php echo $pD->Image ?>"  >
            <div class="shop_buttons">
             <a class="add_emp" href=""> <i class="icon-icons102"></i> add to bag </a>
             <a class="ext_emp" href="<?php echo getUrl('product-detail') ?>&id=<?php echo $pD->ProductID ?>" > <i class="icon-expand"></i></a>
            </div>
          </div>
          <div class="product_caption padding_b">
            <a href="#.">
              <h6 class="bottom10">
                <?=$pD->ProductName ?>
              </h6>
            </a>
            <p class="p-price">
                <?=$pD->Price ?>
            </p>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
   
<!--Modal on Quick View-->
<!-- <div class="modal fade emp-quickview" id="demo" tabindex="-1" role="dialog" aria-labelledby="demo" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body">
            <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
            <div class="row">
               <div class="col-sm-6">
                  <div class="image">
                     <img src="images/product5.jpg" alt="">
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
                  <h2>Barber’s Broom Classiscs</h2>
                  <h3 class="top10">$112.00</h3>
                  <p class="top30 bottom30">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its distribution of letters.</p>
                  <a class="btn btn_colored btn_rounded button_moema icon-drop" href="#."> <i class="icon-icons102"></i> Add to Cart</a>
               </div>
            </div>
         </div>
      </div>
   </div>
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