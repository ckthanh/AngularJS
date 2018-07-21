<!DOCTYPE html>
<html lang="en"  >
<head>
	<title> Demo AngularJS  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<link rel="stylesheet" href="<?php echo base_url();?>/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/vendor/angular-material.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/vendor/1.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/vendor/mdb.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/vendor/style.css">
	<script type="text/javascript" src="<?php echo base_url();?>/vendor/jquery-3.2.1.min.js"></script>
</head>
<style>


.btn-warning
{
	background-color:red !important;
}

#sinhvien th
{
	font-weight: bold;
	text-align: center;
	line-height: 72px;
	width:216px;
	background-color: #fff;
}
#sinhvien th:last-child
{
	font-weight: bold;
	text-align: center;
	line-height: none;
	width:216px;
	background-color: #fff;
}

.md-button.md-raised:not([disabled]) {
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
}

</style>
<body ng-app="myApp" ng-controller="MyController">
	
	 <div id="main">		
		<div class="jumbotron" style="background-color: #1b1b63ed !important">
			<div class="container">
	
				<h1 style="text-align: center;color:#fff;">DANH SÁCH SINH VIÊN</h1>
			</div>
		</div>
	</div>
	
	<div class="container" >
		
		<table class="table table-responsive table-bordered table-hover" id="sinhvien" >
			<thead>
				<tr >
					<th>Mã SV</th>
					<th>Họ và Tên</th>
					<th>Email</th>
					<th>SĐT</th>
					<th>
						<!-- <button class="btn btn-info">Thêm Sinh Viên</button> -->
						Chức Năng
					</th>
				</tr>
			</thead>
	
			<!-- Hiện ra trước -->
			<tbody ng-repeat="sv in sinhVien"  ng-init="sv.hienra=false">
				
			<!-- 	Khối Sửa -->
				<tr style="text-align: center;line-height: 45px;" ng-show="sv.hienra">
					<td>
						<input type="text" ng-model="sv.MaSV" disabled="">
					</td>
					<td>
						<input type="text" ng-model="sv.TenSV">
					</td>
					<td>
						<input type="text" ng-model="sv.Email">
					</td>
					<td>
						<input type="text" ng-model="sv.Phone">
					</td>
					<td>
						<button class="btn btn-info" ng-click="luudulieu(sv)" >
							Lưu
						</button>
	
					</td>
				</tr>
				<!-- Hết Khối Sửa
					
				Khối Ban Đầu -->
				<tr style="text-align: center;line-height: 45px;" ng-show="!sv.hienra">
					<td>
						{{sv.MaSV}}
					</td>
					<td>
						{{sv.TenSV}}
					</td>
					<td>
						{{sv.Email}}
					</td>
					<td>
						{{sv.Phone}}
					</td>
					<td>
						<button class="btn btn-info btn" ng-click="hienradi(sv)" >							Sửa 
						</button>
						
						<!-- <md-button class="md-warn md-raised md-hue-2 xoadulieu" id="{{sv.MaSV}}"  ng-click="xoa(sv)">Xóa</md-button> -->
					</td>
				</tr>
				<!-- Hết Khối Ban Đầu -->
			</tbody>
			
	
			
		</table>	
	
	</div>
	 
<!-- 	<div class="container">
	<p>Nhập màu, vị trí, kích cỡ</p>		
	<input type="text" ng-model="nhap">
	<input type="text" ng-model="nhap1">
	<input type="text" ng-model="nhap2">
	

	<p style="background-color: {{nhap}};text-align: {{nhap1}}; font-size: {{nhap2}}">
	
		Hello World
	</p>
</div>
 -->


	<script type="text/javascript" src="<?php echo base_url();?>/vendor/bootstrap.js"></script>  
	<script type="text/javascript" src="<?php echo base_url();?>/vendor/angular-1.5.min.js"></script>  
	<script type="text/javascript" src="<?php echo base_url();?>/vendor/angular-animate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/vendor/angular-aria.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/vendor/angular-messages.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/vendor/angular-material.min.js"></script>  
	<script type="text/javascript" src="<?php echo base_url();?>/vendor/1.js"></script>


	<script type="text/javascript" src="<?php echo base_url();?>/vendor/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/vendor/mdb.js"></script>
</body>
</html>