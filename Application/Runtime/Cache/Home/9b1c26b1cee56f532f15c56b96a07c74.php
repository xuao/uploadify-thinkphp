<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>UploadiFive Test</title>
<script src="http://apps.bdimg.com/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="/think/public/plug-ins/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/think/public/plug-ins/uploadify/uploadify.css">
<style type="text/css">
body {
	font: 13px Arial, Helvetica, Sans-serif;
}
</style>
</head>

<body>
	<h1>Uploadify Demo</h1>
	<form>
		<div id="queue"></div>
		<input id="file_upload" name="file_upload" type="file" multiple="true">
	</form>
	<div id="img_show">
	</div>

	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'debug'    : false,
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : '/think/public/plug-ins/uploadify/uploadify.swf',
				'uploader' : 'index.php/Home/Index/uploadify',
				'onUploadSuccess' 	: function(file, data, response) {	
					
					
					$('#img_show').append('<img src = "'+data+'"</img>');
					
        					},
			});
		});
	</script>
</body>
</html>