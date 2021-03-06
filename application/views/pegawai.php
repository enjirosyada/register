<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript">
		function show_confirm(act,gotoid)
		{
			if(act=="update")
				var r=confirm("Are You Sure to Edit Data ?");
			else
				var r=confirm("Are You Sure to Delete Data ?");
			if (r==true)
			{
				window.location="<?php echo site_url()?>index.php/pegawai/"+act+"/"+gotoid;
			}
		}
	</script>
	</head>
	<body>
		<div class="container-fluid">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#">Title</a>
								</div>
						
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									
								<ul class="nav navbar-nav">
										<li><a class="" href="http://localhost/codeigniter_alpha2/index.php/Pegawai"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Biodata Pegawai</a></li>
										<li><a class="" href="http://localhost/codeigniter_alpha2/index.php/pegawai/create"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Tambah Data Pegawai</a></li>
										<li class="active"><a href="<?php echo site_url('login/logout') ?>"> <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
									</ul>
									
									
									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</li>
									</ul>
								</div><!-- /.navbar-collapse -->
						</div>
						</nav>

					</div>	
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="jumbotron">
						<h1>Daftar Pegawai</h1>	
					
					<div class="table-responsive">
							<table class="table table-hover" id="example">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Nip</th>
										<th>Tanggal Lahir</th>
										<th>Alamat</th>
										
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($pegawai_list as $key) { ?>
									<tr>
										<td><?php echo $key->nama ?></td>
										<td><?php echo $key->nip ?></td>
										<td><?php echo $key->tanggalLahir ?></td>
										<td><?php echo $key->alamat ?></td>
										
										<td>
											<a href="<?php echo site_url('jabatan/index/').$key->id ?>" type="button" class="btn btn-info">Jabatan</a>
											<a href="<?php echo site_url('anak/index/').$key->id ?>" type="button" class="btn btn-success">Anak</a>
											<a href="<?php echo site_url('pegawai/update/').$key->id ?>" onClick="show_confirm('update')" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
									    	<a href="<?php echo site_url('pegawai/delete/').$key->id ?>" onClick="show_confirm('hapus')" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>

										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
					</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 	
 		<script type="text/javascript">
		$(document).ready(function(){
			$('#example').dataTable();
		});
 		</script>
	</body>
</html>