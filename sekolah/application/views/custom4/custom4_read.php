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
        <h2 style="margin-top:0px">Custom4 Read</h2>
        <table class="table">
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>Angka</td><td><?php echo $angka; ?></td></tr>
	    <tr><td>Teks</td><td><?php echo $teks; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('custom4') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>