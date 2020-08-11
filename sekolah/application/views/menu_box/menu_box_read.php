<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Menu_box Read</h2>
        <table class="table">
	    <tr><td>Status Box</td><td><?php echo $status_box; ?></td></tr>
	    <tr><td>Nama Box</td><td><?php echo $nama_box; ?></td></tr>
	    <tr><td>Ket Box</td><td><?php echo $ket_box; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('menu_box') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>