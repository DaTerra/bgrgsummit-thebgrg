<?
error_reporting (E_ALL ^ E_NOTICE);
if (strlen($_GET['page'])>0) {
	if (file_exists('pages/'.$_GET['page'].'.php')) {
		include('pages/'.$_GET['page'].'.php');
	} else {
		switch($_GET["page"])
		{
			default:
				include("pages/ops.php"); 
				break;
		}
	}
} else include("pages/home.php");
?>