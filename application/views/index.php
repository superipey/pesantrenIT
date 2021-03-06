<!DOCTYPE html>
<!-- saved from url=(0031)#/available -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendataan Zakat</title>

	<!-- Fonts -->
	<link href="<?=base_url()?>/assets/style.css" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body cz-shortcut-listen="true">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#/available#">Pendataan Zakat</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="<?= site_url() ?>">Pendataan Muzaki</a></li>
					<li><a href="<?= site_url() ?>">Pendataan Mustahiq</a></li>
					<li><a href="<?= site_url() ?>">Data Jenis Zakat</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
                    Data Muzaki
                    <a href="<?= site_url('home/create')?>" class="btn btn-primary btn-sm ">Tambah Data</a>
                </div>
				
				<div class="panel-body">
					<table class="table">
						<thead>
                            <tr>
							<th>No</th>
							<th>Nama Lengkap</th>
							<th>Jenis Zakat</th>
							<th>Jumlah</th>
							<th>Aksi</th>
						  </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; foreach ($muzaki as $row) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->nama_lengkap ?></td>
                                <td><?= $row->jenis_zakat ?></td>
                                <td><?= $row->jumlah ?></td>
                                <td>
                                    <a class="btn btn-warning" href="<?= site_url('home/edit/' . $row->id)?>">Edit</a>
                                    <a class="btn btn-danger" href="<?= site_url('home/delete/' . $row->id)?>">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>