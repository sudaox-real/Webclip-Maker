<?php
if(isset($_POST['share'])) {
$id = generateRandomString(10);
$refid = generateRandomString(10);
$bid = "com." . generateRandomString(10) . "." . $id;
//echo($bid);
if(!isset($_POST['name'])) {
	$name = "Webclip Maker";
}
else {
	$name = $_POST['name'];
}
if(!isset($_POST['url'])) {
	$url = "http://sudaox.tech/webclip/maker.php";
}
else {
	$url = $_POST['url'];
}
if(!isset($_POST['desc'])) {
	$desc = "Webclip Maker App";
}
else {
	$desc = $_POST['desc'];
}
$mbconfig = '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
	<dict>
		<key>PayloadContent</key>
		<array>
			<dict>
				<key>FullScreen</key>
				<true />
				<key>IgnoreManifestScope</key>
				<true />
				<key>Label</key>
				<string>' . $name . '</string>
				<key>PayloadDisplayName</key>
				<string>Webclip</string>
				<key>PayloadIdentifier</key>
				<string>com.apple.webClip.managed</string>
				<key>PayloadType</key>
				<string>com.apple.webClip.managed</string>
				<key>PayloadUUID</key>
				<string>8b8923c0-8c4e-41a6-aed4-8bc7d75131cb</string>
				<key>PayloadVersion</key>
				<integer>1</integer>
				<key>Precomposed</key>
				<true />
				<key>URL</key>
				<string>' . $url . '</string>
			</dict>
		</array>
		<key>PayloadDescription</key>
		<string>' . $desc . '</string>
		<key>PayloadDisplayName</key>
		<string>' . $name . '</string>
		<key>PayloadIdentifier</key>
		<string>' . $bid . '</string>
		<key>PayloadOrganization</key>
		<string>SudaWorks</string>
		<key>PayloadType</key>
		<string>Configuration</string>
		<key>PayloadUUID</key>
		<string>c08cb535-d139-40d8-80b4-12f915c625f5</string>
		<key>PayloadVersion</key>
		<integer>1</integer>
	</dict>
</plist>';
//die($mbconfig);
$pt = strtok($_SERVER["REQUEST_URI"], '?');
$pt = str_ireplace("generate.php", "clip.php", $pt);
echo('<html>
	<head>
	<title>Webclip Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <center>
    <p>Webclip Generator</p>
    <a href="http://' . $_SERVER['HTTP_HOST'] . $pt . "?id=" . $id . '&refid=' . $refid . '">http://' . $_SERVER['HTTP_HOST'] . $pt . '?id=' . $id . '&refid=' . $refid . '</a>
    </center>
');
$array = array();
$array['name'] = $name;
$array['url'] = $url;
$array['desc'] = $desc;
$array['id'] = $id;
file_put_contents("share/" . $id . ".json", json_encode($array));
file_put_contents("mbconfig/" . $id . ".mobileconfig", $mbconfig);
die();
}
header("Content-Type: application/x-apple-aspen-config");
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$id = generateRandomString(10);
$bid = "com." . generateRandomString(10) . "." . $id;
//echo($bid);
if(!isset($_POST['name'])) {
	$name = "Webclip Maker";
}
else {
	$name = $_POST['name'];
}
if(!isset($_POST['url'])) {
	$url = "http://sudaox.tech/webclip/maker.php";
}
else {
	$url = $_POST['url'];
}
if(!isset($_POST['desc'])) {
	$desc = "Webclip Maker App";
}
else {
	$desc = $_POST['desc'];
}
$mbconfig = '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
	<dict>
		<key>PayloadContent</key>
		<array>
			<dict>
				<key>FullScreen</key>
				<true />
				<key>IgnoreManifestScope</key>
				<true />
				<key>Label</key>
				<string>' . $name . '</string>
				<key>PayloadDisplayName</key>
				<string>Webclip</string>
				<key>PayloadIdentifier</key>
				<string>com.apple.webClip.managed</string>
				<key>PayloadType</key>
				<string>com.apple.webClip.managed</string>
				<key>PayloadUUID</key>
				<string>8b8923c0-8c4e-41a6-aed4-8bc7d75131cb</string>
				<key>PayloadVersion</key>
				<integer>1</integer>
				<key>Precomposed</key>
				<true />
				<key>URL</key>
				<string>' . $url . '</string>
			</dict>
		</array>
		<key>PayloadDescription</key>
		<string>' . $desc . '</string>
		<key>PayloadDisplayName</key>
		<string>' . $name . '</string>
		<key>PayloadIdentifier</key>
		<string>' . $bid . '</string>
		<key>PayloadOrganization</key>
		<string>SudaWorks</string>
		<key>PayloadType</key>
		<string>Configuration</string>
		<key>PayloadUUID</key>
		<string>c08cb535-d139-40d8-80b4-12f915c625f5</string>
		<key>PayloadVersion</key>
		<integer>1</integer>
	</dict>
</plist>';
echo($mbconfig);