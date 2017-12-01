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
			<div>
		<h3>Sửa danh mục</h3>
	</div>
	<form action="<?= getUrl('admin/save-edit-cate') ?>" method="post" enctype="multipart/form-data" novalidate>
	<?= $message ?>
		<input type="hidden" name="id" value="<?= $cate->CategoryID ?>">
		<div class="col-md-6">
			<div class="form-group row">
				<label class="col-md-3 control-label">Tên</label>
				<div class="col-md-9">
					<input  type="text" class="form-control"  name="name" 
					<?php if($message == ""): ?> value="<?= $cate->CategoryName ?>"
					<?php else: ?> value="<?= $name ?>"
					<?php endif ?> >
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-3 control-label">Danh mục cha</label>
				<div class="col-md-9 div-cate-relative">
					<select name="parent_id" class="form-control">
						<option value="0">-----------------</option>
						<?php foreach ($cates as $element): ?>
							<option 
							<?php if($cate->ParentID == $element->CategoryID): ?> selected 
							<?php endif ?>
							value="<?= $element->CategoryID ?>"><?= $element->CategoryName ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-md-3 control-label"></label>
				<div class="col-md-7">
					<input type="hidden" name="is_menu" value="0"
					>
					<input type="checkbox" name="is_menu" value="1" 
					<?php if($cate->IsMenu == 1): ?> checked 
					<?php endif ?>
					>
					<label for="isMenu">Hiển thị trang chủ</label>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group row">
				<label class="col-md-3 control-label">Mô tả </label>
				<div class="col-md-9">
					<textarea name="desc"><?= $cate->Description ?></textarea>
				</div>
			</div>
		</div>
		<div class="text-center">
			<a href="" class="btn btn-danger">Huỷ</a>
			<button type="submit" name = "save" class="btn btn-success">Lưu</button>
		</div>
	</form>
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
</body>
<!-- END BODY -->
</html>