<?php
$id = $_GET['id'];
if(!file_exists("share/" . $id . ".json")) {
die();
}
$array = json_decode(file_get_contents("share/" . $id . ".json"), true);
$name = $array['name'];
$url = $array['url'];
$desc = $array['desc'];
$dlurl = "http://sudaox.tech/webclip/mbconfig/" . $id . ".mobileconfig";
?>
<html>
<head>
	<title>Webclip Maker</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<center>
	<p>Downloading app (<?php echo($name); ?>)</p>
	<a href="<?php echo($dlurl); ?>"><button>Download</button></a>
</center>
</body>
</html>