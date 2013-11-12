<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Tugas Web Dinamis Lanjut</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Tugas Web Dinamis Lanjut</a></h1>
			<div id="top-navigation">
				Welcome <a href="#"><strong>Administrator</strong></a>
				<span>|</span>
				<a href="#">Help</a>
				<span>|</span>
				<a href="#">Profile Settings</a>
				<span>|</span>
				<a href="#">Log out</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="<?php echo base_url()?>index.php/admin" class="active"><span>Data Product</span></a></li>
			    <li><a href="#"><span>New Articles</span></a></li>
			    <li><a href="#"><span>User Management</span></a></li>
			    <li><a href="#"><span>Photo Gallery</span></a></li>
			    <li><a href="#"><span>Products</span></a></li>
			    <li><a href="#"><span>Services Control</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<a href="<?php echo base_url()?>index.php/admin">Dashboard</a>
			<span>&gt;</span>
			Current Articles
		</div>
		<!-- End Small Nav -->
		
		<h2>Data Product</h2>
		<br />
		<!-- Main -->
		<div id="main">
		<div class="cl">&nbsp;</div>
		
			<!-- Pencarian berdasarkan kategori -->
			<div align="right">
			<form action="<?php print site_url();?>/admin/cari" method="POST">
			<label>Kategori</label>
				<select name="cari" class="field size3">
					<?php foreach($browse_category as $bk):?>
						<option value='<?php echo $bk->CategoryID?>'><?php echo $bk->CategoryName;?> </option>
					<?php endforeach ?>
				</select>
				&nbsp;Nama Product<input type="text" name="nama" class="field size3">
				&nbsp;<input type="submit" value="cari" class="button">
			</form>
			</br>
			</div>
			<!-- Penutup Pencarian Combobox --!>
			
			<!-- Content -->
			<?php $this->load->view($admin) ?>
			<!-- End Content -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; 2010 - Unun Isnanto</span>
		<span class="right">
			Design by <a href="http://ununisnanto.com" target="_blank" title="The Sweetest CSS Templates WorldWide">ununisnanto.com</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>