<?php
  if(isset($_GET['id']) && isset($_GET['sl'])){
    $_SESSION['giohang'][$_GET['id']]['soluong'] = $_GET['sl'];
  }
  if(isset($_GET['id']) && isset($_GET['action'])){
     unset($_SESSION['giohang'][$_GET['id']]);
  }
?>
<?php
  include_once 'sub/header.php';
?>
<title>Empor | Giỏ hàng </title>
<link rel="stylesheet" type = "text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type = "text/css" href="css/style_cart.css">
<section>
<h2 class="text-center">Giỏ hàng</h2>
<div class="container"> 
  <table id="cart" class="table table-hover table-condensed"> 
    <thead> 
     <tr> 
      <th style="width:33%">Tên sản phẩm</th> 
      <th style="width:10%">Màu sắc</th> 
      <th style="width:10%">Size</th> 
      <th style="width:10%">Giá</th> 
      <th style="width:7%">Số lượng</th> 
      <th style="width:20%" class="text-center">Thành tiền</th> 
      <th style="width:10%"> </th> 
     </tr> 
    </thead> 
    <tbody>
    <?php 
      $total = 0;
      foreach ($_SESSION['giohang'] as $key => $value) {
        $p = Product::find($_SESSION['giohang'][$key]['id']);
    ?> 
      <tr> 
        <td data-th="Product"> 
          <div class="row"> 
           <div class="col-sm-3 hidden-xs"><img src="<?=$p->Image?>" alt="" class="img-responsive" width="100">
           </div> 
           <div class="col-sm-9" style="margin-top:25px;"> 
            <h5 class="nomargin" ><?=$p->ProductName ?></h5> 
           </div> 
          </div> 
        </td> 
        <td style="vertical-align: middle;" data-th="Price"><?=$p->Color ?></td> 
        <td style="vertical-align: middle;" data-th="Price"><?=$_SESSION['giohang'][$key]['size'] ?></td> 
        <td style="vertical-align: middle;" data-th="Price"><?=$p->Price ?>đ</td> 
        <td  style="vertical-align: middle;">
         
          <select name="sl_<?=$key?>" id = "sl_<?=$key?>">
            <option value=" <?=$_SESSION['giohang'][$key]['soluong'] ?>"> <?=$_SESSION['giohang'][$key]['soluong'] ?></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
          </select>
        </td> 
        <td style="vertical-align: middle;" data-th="Subtotal" class="text-center"><?php echo $p->Price*$_SESSION['giohang'][$key]['soluong'] ?></td> 
        <?php 
          $total += $p->Price*$_SESSION['giohang'][$key]['soluong'];
        ?>
        <td style="vertical-align: middle;" class="actions" data-th="">
          <a class="btn btn-danger btn-sm" href="javascript:void(0)" onclick="updateItem(<?=$key?>)" title=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
          <a class="btn btn-danger btn-sm" href="javascript:void(0)" onclick="removeItem(<?=$key?>)" title=""><i class="fa fa-trash-o"></i></a> 
        </td> 
        </tr> 
      <?php } ?>
      <tfoot> 
        <tr> 
          <td style="margin-top: 20px" ><a href="<?= getUrl('/')?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
          </td> 
          <td style="margin-top: 20px" colspan="4" class="hidden-xs"> </td> 
          <td class="hidden-xs text-center">
            <strong>
              <?php
                echo "Tổng: " .$total;
              ?>
            </strong>
          </td> 
          <td style="margin-top: 20px" ><a href="" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
          </td> 
        </tr> 
      </tfoot> 
    </tbody>  
  </table>
</div>
</main>
</section>
<!--Footer Starts-->
<?php
  include_once 'sub/footer.php';
?>
<!--Footer Ends-->


<?php 
  include_once 'sub/js.php';
?>
<script>
  function updateItem(id){
    var sl = document.getElementById("sl_<?=$key?>").value;
    $.get("<?= getUrl('add-to-cart') ?>?id="+id+"&sl="+sl,function(data){
      location.reload();
    });
  }
  function removeItem(id){
    $.get("<?= getUrl('add-to-cart') ?>?id="+id+"&action=remove",function(data){
      location.reload();
    });
  }
</script>
</body>

<!-- Mirrored from wahabali.com/work/empor/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2017 17:26:28 GMT -->
</html>