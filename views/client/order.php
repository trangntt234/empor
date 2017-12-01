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

<body class="boxed">



 <div class="overlaybody"></div>


<!--Shopping Cart-->
 
<main>
<!--Shoping Cart-->
<section id="emp-cart">
   <div class="container-fluid equal_parent">
      <div class="row">
        <?php $total = 0; ?>
         <div class="col-md-5 col-sm-5 bglight blackcolor padding equal_inner">
            <div class="bg_info bgcart row">
               <h2 class="bottom30 text-uppercase">Thông tin đơn hàng</h2>
               <div class="table-responsive emp_cart bottom50">
                  <table class="table">
                     <thead> 
                       <tr> 
                        <th style="width:40%">Tên sản phẩm</th> 
                        <th style="width:10%">Màu sắc</th> 
                        <th style="width:5%">Size</th> 
                        <th style="width:10%">Giá</th> 
                        <th style="width:7%">Số lượng</th> 
                        <th style="width:20%" class="text-center">Thành tiền</th> 
                        <th style="width:7%"> </th> 
                       </tr> 
                      </thead> 
                        <?php
                        if(empty($_SESSION['giohang'])): ?>
                           <h3 style="margin-left: 40px">Giỏ hàng rỗng</h3>
                           <a href="<?= getUrl('/')?>" style= "margin-left: 40px"> Tiếp tục mua hàng</a>
                        <?php 
                        else: 
                           foreach ($_SESSION['giohang'] as $key => $giohang): 
                              $p = Product::find($_SESSION['giohang'][$key]['id']);
                        ?>
                     <tbody>          
                        <tr>
                           <td data-th="Product"> 
                            <div class="row"> 
                                <div class="col-sm-5 hidden-xs"><img src="<?=$p->Image?>" alt="" class="img-responsive" width="100">
                                </div> 
                                <div class="col-sm-7" style="padding: 0"> 
                                 <h6 class="nomargin" ><?=$p->ProductName ?></h6> 
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
                           <td style="width: 5px"><a href="javascript:void(0)" onclick="updateItem(<?=$key?>)" title=""><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                           <td><a href="javascript:void(0)" onclick="confirmRemove('<?= getUrl('thanh-toan') ?>?id=<?= $key ?>&action=remove')"><i class="fa fa-close"></i></a></td>
                        </tr>
                              <?php $total += $p->Price*$_SESSION['giohang'][$key]['soluong']; ?>
                           <?php endforeach ?>
                       

                     </tbody>
                  </table>
               </div>
               <div class="cart_totals bottom50">
                  <h4 class="bottom30">Tổng tiền trong giỏ hàng</h4>
                  <p class="total-text clearfix bottom20">
                     <span class="pull-left">Tổng tiền</span>
                     <span class="pull-right"><?= $total ?>đ</span>
                  </p>
                  <p class="total-text no-border clearfix bottom20">
                     <span class="pull-left">Phí ship</span>
                     <span class="pull-right">Free</span>
                  </p>
                  <h5 class="default_color bottom30">Hình thức thanh toán</h5>
                  <form class="callus bottom30">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <div class="select bottom20">
                                 <select id="choose">
                                       <option>United kingdom (UK)</option>
                                       <option>United kingdom (UK)</option>
                                       <option>United kingdom (UK)</option>
                                    </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input type="text" class="form-control bottom20" placeholder="State / Country">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input type="text" class="form-control bottom20" placeholder="Postcode / Zip">
                           </div>
                        </div>
                     </div>
                     <button type="button" class="btn btn_dark btn_rounded button_moema">update totals</button>
                  </form>
                  <form class="callus">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="text" class="form-control bottom20" placeholder="Tax (included)">
                           </div>
                        </div>
                     </div>
                     <button type="button" class="btn btn_colored btn_rounded button_moema">
                           Proced to checkout
                        </button>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-md-7  col-sm-7 equal_inner">
               <div class="cart_totals no-border">
               <?php if(empty($_SESSION['user'])): ?>
                  <p class="default_color bottom25">
                     <strong>Thành viên: <a href="<?= getUrl('login') ?>">Đăng nhập/Tạo tài khoản</a></strong>
                  </p>
                  <p>
                     <strong>Bạn có thể mua hàng với tư cách là khách. Vui lòng điền các thông tin cần thiết</strong>
                  </p>
               <?php endif; ?>
                  <form action = "<?= getUrl('save-order') ?>" id = "formvalidate" method = "post" class="callus bottom30">
                    <input type="hidden" name="totalPrice" value="<?=$total ?>" >
                      <h3 class="bottom30"><strong>Thông tin liên hệ</strong></h3>
                      <div class="row">
                        <div class="col-sm-6 bottom30">
                           <div class="form-group">
                              <input type="text"  name="ten" class="form-control" placeholder="Tên" required>
                           </div>
                        </div>
                        <div class="col-sm-6 bottom30">
                           <div class="form-group">
                              <input type="text"  name = "ho" class="form-control" placeholder="Họ" required>
                           </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 bottom30">
                           <div class="form-group">
                              <input type="text"  name="email" class="form-control" placeholder="Email"
                              <?php if(isset($_SESSION['user'])): ?>
                                 value="<?= $_SESSION['user']['email'] ?>"
                              <?php else: ?>
                                 value="" 
                              <?php endif; ?> required>
                           </div>
                        </div>
                        <div class="col-sm-6 bottom30">
                           <div class="form-group">
                              <input type="text"  name = "sdt" class="form-control" placeholder="Số điện thoại" required>
                           </div>
                        </div>
                      </div>
                      <h3 class="bottom30"><strong>Chi tiết giao hàng</strong></h3>
                      <div class="row">
                        <div class="bottom30">
                           <div class="form-group">
                              <input type="text"  name = "diaChi" class="form-control" placeholder="Địa chỉ người nhận" required>
                           </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="bottom30">
                           <div class="form-group">
                              <input type="text"  name = "ghiChu" class="form-control" placeholder="Ghi chú" >
                           </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="bottom30">
                           <div class="form-group">
                              Ngày chuyển hàng
                              <input type="datetime-local"  name = "ngayship" class="form-control" required>
                              <span class = "message"><i><?= $message ?></i><span>
                           </div>
                        </div>
                      </div>
                      <div class="bottom30"><button class = "btn btn-primary" name = "order" type="submit">Đặt hàng ngay</button></div>
                  </form>
               </div>
         </div>
      </div>
       <?php endif; ?>
   </div>
</section>

</main>
   
<!--Footer Starts-->
<?php
  include_once 'sub/footer.php';
?>
<!--Footer Ends-->


<?php
  include_once('sub/js.php');
?>
<script>
  $(document).ready(function(){
    $("#formvalidate").validate({
            rules: {
                ten: "required",
                ho: "required",
                email:{
                    required: true,
                    email: true
                },
                sdt:{
                    required: true,
                    digits: true,
                    rangelength: [10, 11]
                },
                diaChi:{
                    required: true,
                    minlength: 2
                },
                ghiChu:{  
                    maxlength: 200
                },
                ngayship: "required"
            },
            messages: {
                ten: "Vui lòng nhập tên",
                ho: "Vui lòng nhập họ",
                email:{
                    required: "Vui lòng nhập email",
                    email: "Vui lòng nhập đúng định dạng email"
                },
                sdt:{
                    required: "Vui lòng nhập số điện thoại",
                    digits: "Vui lòng nhập kiểu số dương",
                    rangelength: "Vui lòng nhập số điện thoại từ 10 hoặc 11 kí tự"
                },
                diaChi:{
                    required: "Vui lòng nhập địa chỉ",
                    minlength: "Vui lòng nhập địa chỉ tối thiếu 2 kí tự"
                },
                ghiChu:{
                    maxlength: "Vui lòng nhập ghi chú tối đa 200 kí tự"
                },
                ngayship: "Vui lòng chọn ngày ship",
            }
        });
  });
   function updateItem(id){
      var sl = document.getElementById("sl_<?=$key?>").value;
      $.get("<?= getUrl('thanh-toan') ?>?id="+id+"&sl="+sl,function(data){
         location.reload();
      });
   }
   function confirmRemove(url){
      bootbox.confirm({
          message: "Bạn có chắc chắn muốn xoá?",
          buttons: {
              confirm: {
                  label: 'Có',
                  className: 'btn-danger'
              },
              cancel: {
                  label: 'Không',
                  className: 'btn-primary'
              }
          },
          callback: function (result) {
              if(result){
                window.location.href = url;
              }
          }
      });
    }

</script>
</body>


<!-- Mirrored from wahabali.com/work/empor/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2017 17:36:12 GMT -->
</html>