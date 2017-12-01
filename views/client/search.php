<?php include_once 'sub/header.php'; ?>
<section id="emp_gallery" class="padding">
  <div class="container-fluid">
    <div id = "projects" class="cbp">
      <?php foreach ($products as $p): ?>
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
    </div>
</section>
   
  

 </main>
<?php include_once 'sub/footer.php'; ?>
<?php include_once 'sub/js.php'; ?>
</body>
</html>