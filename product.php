<?php

include('include/header.php');
include('include/sidebar.php');
include('include/conn.php');

?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Product</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Product</h1>
			</div>
		</div><!--/.row-->
		
		<?php

if(!isset($_GET['more'])){
    include('des/all.php');
}elseif($_GET['more']==='add'){
    include('des/add.php');
}elseif($_GET['more']==='edit'){
    include('des/edit.php');
}elseif($_GET['more']==='delete'){
    include('des/delete.php');
}






?>