<?php include("../service/head.php"); ?>

<body class="skin-red sidebar-mini">
	<div class="wrapper">
		<!-- Main Header -->
		<?php include("../service/header.php"); ?>

		<!-- Sidebar -->
		<?php include("../service/sidebar_admin.php"); ?>

		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					ฟอร์มแก้ไข password
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
								<form role="form" action="http://127.0.0.1/eprojectv1.1/member/editpwd" method="post" class="form-horizontal">
									<div class="box-body">
										<div class="form-group">
											<div class="col-sm-2 control-label">
												ชื่อตำแหน่ง
											</div>
											<div class="col-sm-3">
												<select name="ref_pid" class="form-control" required disabled>
													<option value="3">
														-staff-
													</option>
													<option value="">-เลือกข้อมูล-</option>

													<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

														<h4>A PHP Error was encountered</h4>

														<p>Severity: Warning</p>
														<p>Message: Undefined variable $rspo</p>
														<p>Filename: admin/member_form_pwd.php</p>
														<p>Line Number: 36</p>


														<p>Backtrace:</p>






														<p style="margin-left:10px">
															File: C:\xampp\htdocs\eprojectv1.1\application\views\admin\member_form_pwd.php<br />
															Line: 36<br />
															Function: _error_handler </p>








														<p style="margin-left:10px">
															File: C:\xampp\htdocs\eprojectv1.1\application\controllers\Member.php<br />
															Line: 339<br />
															Function: view </p>






														<p style="margin-left:10px">
															File: C:\xampp\htdocs\eprojectv1.1\index.php<br />
															Line: 315<br />
															Function: require_once </p>




													</div>
													<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

														<h4>A PHP Error was encountered</h4>

														<p>Severity: Warning</p>
														<p>Message: foreach() argument must be of type array|object, null given</p>
														<p>Filename: admin/member_form_pwd.php</p>
														<p>Line Number: 36</p>


														<p>Backtrace:</p>






														<p style="margin-left:10px">
															File: C:\xampp\htdocs\eprojectv1.1\application\views\admin\member_form_pwd.php<br />
															Line: 36<br />
															Function: _error_handler </p>








														<p style="margin-left:10px">
															File: C:\xampp\htdocs\eprojectv1.1\application\controllers\Member.php<br />
															Line: 339<br />
															Function: view </p>






														<p style="margin-left:10px">
															File: C:\xampp\htdocs\eprojectv1.1\index.php<br />
															Line: 315<br />
															Function: require_once </p>




													</div>
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
												<select name="m_fname" class="form-control" required disabled>
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
											<div class="col-sm-4">
												<input type="text" name="m_name" class="form-control" required value="จัดการ12" disabled>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-2 control-label">
												นามสกุล
											</div>
											<div class="col-sm-4">
												<input type="text" name="m_lname" class="form-control" required value="พัสดุ12" disabled>
												<input type="hidden" name="m_id" class="form-control" required value="10">
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-2 control-label">
												New Password
											</div>
											<div class="col-sm-3">
												<input type="password" name="m_password" class="form-control" required minlength="3" placeholder="password" value="">
												<span class="fr"></span>
											</div>
										</div>


										<div class="form-group">
											<div class="col-sm-2 control-label">
												Confirm Password
											</div>
											<div class="col-sm-3">
												<input type="password" name="m_password2" class="form-control" required minlength="3" placeholder="confirm password" value="">
												<span class="fr"></span>
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
<script>
	$(document).ready(function() {
		$('#example1').DataTable({
			"aaSorting": [
				[0, 'desc']
			],
			//"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
		});
	});
</script>
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