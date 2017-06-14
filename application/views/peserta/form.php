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
				<a class="navbar-brand" href="#/available#">PesantrenIT</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="<?= site_url('home') ?>">Pendataan Peserta</a></li>
					<li><a href="<?= site_url('acara') ?>">Data Acara</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Input Data Muzaki</div>
				
				<div class="panel-body">
                    <form method="POST" action="" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-3">Nama Lengkap</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="nama_lengkap" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-3">Jenis Kelamin</label>
                            <div class="col-lg-9">
                                <div class="radio">
                                    <label><input type="radio" name="jenis_kelamin" value="Pria" /> Pria</label>
                                    <label><input type="radio" name="jenis_kelamin" value="Wanita" /> Wanita</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-3">Alamat</label>
                            <div class="col-lg-9">
                                <textarea class="form-control" rows="2" name="alamat"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-3">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="email" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-3">No Telp</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="no_telp" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-9">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>