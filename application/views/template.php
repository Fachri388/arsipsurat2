<!DOCTYPE HTML>
<html>
<head>
<title>Sistem Informasi Arsip Surat</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url();?>assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="<?php echo base_url();?>assets/stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="<?php echo base_url();?>assets/js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="<?php echo base_url();?>assets/js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="<?php echo base_url().'surat/index'?>"><span>Dashboard</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="<?php echo base_url().'surat/index'?>"><i class="fa fa-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
				<ul class="nav nav-pills nav-stacked custom-nav">
				<?php
					if($this->session->userdata('jabatan') == 'Admin') {
						echo '
						<li class="active">
							<a href="'.base_url('surat/index').'"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a>
						</li>
						<li class="active">
							<a href="'.base_url('surat/surat_masuk').'"><i class="lnr lnr-power-switch"></i><span>Surat Masuk</span></a>
						</li>
						<li class="active">
							<a href="'.base_url('surat/surat_keluar').'"><i class="lnr lnr-power-switch"></i><span>Surat Keluar</span></a>
						</li>
						<li class="active"> 
						<a href="'.base_url('login/logout').'"><i class="fa 
						fa-sign-out"></i><span> Logout</span></a> 
						</li>
						';
					} else{
						echo'
						<li class="active">
							<a href="'.base_url('surat/index').'"><i class="lnr lnr-power-switch"></i><span>Surat Masuk</span></a>
						</li>
						<li class="active"> 
						<a href="'.base_url('login/logout').'"><i class="fa 
						fa-sign-out"></i><span> Logout</span></a> 
						</li>
						';
					}
				?> 
					
						
						
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
    
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
						<ul class="nofitications-dropdown">
							
						
							   							   		
							<div class="clearfix"></div>	
						</ul>
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/gambar.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p><big><?php echo $this->session->userdata('user') ?></big><span></span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>

								</a>
								<ul class="dropdown-menu drp-mnu">
									<!-- <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>  -->
									<!-- <li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li>  -->
									<li> <a href="<?php echo base_url();?>login/logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>
				</div>
			  </div>
			<!--notification menu end -->
			</div>
		<!-- //header-ends -->

<!-- CONTENT -->		
<?php
$this->load->view($main_view);
?>		
</div>
			<!--body wrapper start-->
			</div>
			 <!--body wrapper end-->
		</div>
        <!--footer section start-->
			<footer>
			  
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>