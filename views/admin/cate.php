<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Dashboard</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<?php 
	include 'sub/style.php';
?>
</head>
<body class="page-header-fixed page-quick-sidebar-over-content">
<!-- BEGIN HEADER -->
<?php 
	include 'sub/header.php';
?>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<?php 
		include 'sub/sitebar.php';
	?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="search-form">
				<form action="" method="get" id="filterForm">
					<div class="page-size form-group col-xs-2">
						<!-- <select id="pageSize" name="pagesize" class="form-control">
							@foreach (getPageSizeList() as $ps)
								<option @if($pageSize == $ps) selected @endif value="{{$ps}}">{{$ps}}</option>
							@endforeach
						</select> -->
					</div>
					<div class="form-group col-sm-3 div-cate-relative">
						<input class="form-control" type="text" name="keyword" value="" placeholder="Tìm kiếm...">
						<button class="btn btn-success btn-sm btn-asl-form" type="submit">
							<i class="fa fa-search"></i>
						</button>
					</div>		
				</form>
			</div>
			<table class="table table-hover">
			<thead>
			<tr>
				<th>
					 ID
				</th>
				<th>
					 Tên danh mục
				</th>
				
				<th>
					 Danh mục cha
				</th>
				<th class="hidden-480">
					 Hiển thị menu
				</th>
				<th>
					 Mô tả
				</th>
				<th>
					 <a href="<?= getUrl('admin/add-cate') ?>" class="btn btn-success">
					 	<i class="fa fa-plus"></i>
					 	Thêm
					 </a>
				</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($cates as $element): ?>
				<tr>
					<td>
						 <?= $element->CategoryID ?>
					</td>
					<td>
						<a href="" title=""> <?= $element->CategoryName ?> </a>
					</td>
					<td>
						 <?= $element->ParentID ?>
					</td>
					<td class="hidden-480">
						 <?= $element->IsMenu ?>
					</td>
					<td>
						 <?= $element->Description ?>
					</td>
					<td>
						<a href="<?= getUrl('admin/edit-cate') ?>?id=<?= $element->CategoryID ?>" title="" class="btn btn-sm btn-primary">
							<i class="fa fa-pencil"></i>
						</a>
						<a href="javascript:void(0);" onclick="confirmRemove('<?= getUrl('admin/remove-cate') ?>?id=<?= $element->CategoryID ?>')" class="btn btn-sm btn-danger">
							<i class="fa fa-remove"></i>
						</a>
					</td>
				</tr>
			<?php endforeach ?>
				
			
			</tbody>
			</table>
		</div>
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
	<?php 
		include 'sub/quick_sidebar.php';
	?>
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php 
	include 'sub/footer.php';
?>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{asset('metronic/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('metronic/global/plugins/excanvas.min.js')}}"></script> 
<![endif]-->
<?php 
	include 'sub/js.php';
?>
<script type="text/javascript">
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
<!-- END BODY -->
</html>