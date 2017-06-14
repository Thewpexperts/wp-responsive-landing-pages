<?php 
$valid_url = 0;
$url =$_GET['url'];
$requested_host = parse_url($url, PHP_URL_HOST);
if (!filter_var($url, FILTER_VALIDATE_URL) === false && $_SERVER['HTTP_HOST']==$requested_host) {
   $valid_url=1;
} 
?>
<?php if($valid_url){ ?>
<iframe src="<?php echo $_GET['url']; ?>" height="675" width="1024"></iframe>
<?php } ?>