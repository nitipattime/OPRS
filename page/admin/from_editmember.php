<?php include("../service/head.php"); ?>

<body class="skin-red sidebar-mini">
	<div class="wrapper">
		<!-- Main Header -->
		<?php include("../service/header.php"); ?>

		<!-- Sidebar -->
		<?php include("../service/sidebar.php"); ?>
		
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					ฟอร์มแก้ไขข้อมูลสมาชิก
				</h1>
				<ol class="breadcrumb">
					<li><a href="http://127.0.0.1/eprojectv1.1/"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
					<li><a href="http://127.0.0.1/eprojectv1.1/member"> จัดการสมาชิก </a></li>
					<li class="active">เพิ่มข้อมูลใหม่</li>
				</ol>
			</section>
			<!-- Main content -->
			<section class="content">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<!-- Your Page Content Here -->
							<div class="box box-primary">
								<div class="box-header with-border">
									<!-- <h3 class="box-title"> +ข่าวใหม่ </h3> -->
								</div><!-- /.box-header -->
								<!-- form start -->
								<form role="form" action="http://127.0.0.1/eprojectv1.1/member/editdata" method="post" class="form-horizontal" enctype="multipart/form-data">
									<div class="box-body">
										<div class="form-group">
											<div class="col-sm-2 control-label">
												ชื่อตำแหน่ง
											</div>
											<div class="col-sm-3">
												<select name="ref_pid" class="form-control" required>
													<option value="3">
														-staff-
													</option>
													<option value="">-เลือกข้อมูล-</option>
													<option value="1">-admin-</option>
													<option value="2">-Boss-</option>
													<option value="3">-staff-</option>
													<option value="4">-Employee-</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-2 control-label">
												Username
											</div>
											<div class="col-sm-3">
												<input type="text" name="m_username" class="form-control" required value="staff" disabled>

											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-2 control-label">
												คำนำหน้า
											</div>
											<div class="col-sm-1">
												<select name="m_fname" class="form-control" required>
													<option value="นาย">-นาย-</option>
													<option value="">-เลือกข้อมูล-</option>
													<option value="นาย">-นาย-</option>
													<option value="นางสาว">-นางสาว-</option>
													<option value="นาง">-นาง-</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-2 control-label">
												ชื่อ
											</div>
											<div class="col-sm-6">
												<input type="text" name="m_name" class="form-control" required value="จัดการ12">
												</span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-2 control-label">
												นามสกุล
											</div>
											<div class="col-sm-4">
												<input type="text" name="m_lname" class="form-control" required value="พัสดุ12">
												<input type="hidden" name="m_id" class="form-control" required value="10">
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-2 control-label">
												email
											</div>
											<div class="col-sm-4">
												<input type="text" name="m_email" class="form-control" required value="abc12@g.com">
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-2 control-label">
												phone
											</div>
											<div class="col-sm-4">
												<input type="text" name="m_phone" class="form-control" required value="099999999222">
											</div>
										</div>


										<div class="form-group">
											<div class="col-sm-2 control-label">
												img
											</div>
											<div class="col-sm-4">
												<br>
												ภาพเก่า <br><br>
												<img src="http://127.0.0.1/eprojectv1.1/uploads/ff2fe2e3de23846f7bdaa874ab8af3eb.png" width="300px">
												<br><br>
												เลือกไฟล์ใหม่<br>
												<input type="file" name="m_img" class="form-control" accept="image/*">
											</div>
										</div>


										<div class="form-group">
											<div class="col-sm-2 control-label">

											</div>
											<div class="col-sm-3">
												<button class="btn btn-primary" type="submit">
													<i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
												<a class="btn btn-danger" href="http://127.0.0.1/eprojectv1.1/member" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>


											</div>
										</div>

									</div><!-- /.box-body -->
								</form>
							</div>
						</div>
					</div>
				</div>
			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->
		<!-- Main Footer -->
		<footer class="main-footer">
			<!-- To the right -->
			<div class="pull-right hidden-xs">
				eProject SYSTEM
			</div>
			<!-- Default to the left -->
			<strong>Copyright &copy; 2019 All rights reserved.
		</footer>
	</div><!-- ./wrapper -->
	</div>
</body>

</html>
<!-- <script>
$(document).ready(function() {
$('#example1').DataTable( {
"aaSorting" :[[0,'desc']],
//"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
});
} );

</script> -->
<script>
	$(function() {
		$('#example1').DataTable()
		$('#example2').DataTable({
			'paging': true,
			'lengthChange': false,
			'searching': false,
			'ordering': true,
			'info': true,
			'autoWidth': false
		})
	})
</script>
<!-- <script type="text/javascript">
$(function () {
});
</script>
 -->

<script type="text/javascript">



</script>