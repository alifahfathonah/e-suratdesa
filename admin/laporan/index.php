<?php
  	include ('../part/header.php');
?>

<aside class="main-sidebar">
   	<section class="sidebar">
   		<div class="user-panel">
       		<div class="pull-left image">
       			<img src="../../assets/img/user.jpg" class="img-circle" alt="User Image">
       		</div>
       		<div class="pull-left info">
       			<p>Administrator</p>
       			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
       		</div>
   		</div>
   		<ul class="sidebar-menu" data-widget="tree">
      		<li class="header">MAIN NAVIGATION</li>
       		<li>
       			<a href="../dashboard/"><i class="fas fa-tachometer-alt"></i> <span>&nbsp;&nbsp;Dashboard</span></a>
       		</li>
       		<li>
       			<a href="../penduduk/"><i class="fa fa-users"></i> <span>Data Penduduk</span></a>
       		</li>
       		<li class="treeview">
       			<a href="#"><i class="fas fa-envelope-open-text"></i> <span>&nbsp;&nbsp;Surat</span>
           			<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
       			</a>
       			<ul class="treeview-menu">
           			<li>
           				<a href="../surat/permintaan_surat/"><i class="fa fa-circle-notch"></i> Permintaan Surat</a>
           			</li>
           			<li>
           				<a href="../surat/surat_selesai/"><i class="fa fa-circle-notch"></i> Surat Selesai</a>
           			</li>
       			</ul>
       		</li>
       		<li class="active">
       			<a href="#"><i class="fas fa-chart-line"></i> <span>&nbsp;&nbsp;Laporan</span></a>
       		</li>
		</ul>
	</section>
</aside>
<div class="content-wrapper">
    <section class="content-header">
      	<h1>Laporan</h1>
      	<ol class="breadcrumb">
        	<li><a href="../dashboard/"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
        	<li class="active">Laporan</li>
      	</ol>
    </section>
    <section class="content">
      	KONTEN
    </section>
</div>

<?php 
  	include ('../part/footer.php');
?>