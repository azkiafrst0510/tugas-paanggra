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
        <h2 style="margin-top:0px">Menu Read</h2>
        <table class="table">
	    <tr><td>Nama Menu</td><td><?php echo $nama_menu; ?></td></tr>
	    <tr><td>Status Menu</td><td><?php echo $status_menu; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('menu') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>