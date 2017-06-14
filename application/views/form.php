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
					<li><a href="/">Pendataan Muzaki</a></li>
					<li><a href="/">Pendataan Mustahiq</a></li>
					<li><a href="/">Data Jenis Zakat</a></li>
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
                    <form method="POST" action="<?=site_url('home/do_create')?>" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-3">Nama Muzaki</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="nama_lengkap" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-3">Jenis Zakat</label>
                            <div class="col-lg-9">
                                <select class="form-control" name="jenis_zakat">
                                    <option value="Zakat Maal">Zakat Maal</option>
                                    <option value="Zakat Fitrah">Zakat Fitrah</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-3">Jumlah</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="number" name="jumlah" />
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