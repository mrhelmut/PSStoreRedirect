<?php
/*
This PHP code is public domain.
*/

// this is based on the official list of countries where PS Network operates
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
// create a variable for the country code
$var_country_code = $geoplugin->countryCode;
// NA territory country codes
$naCodeList = ["US", "CA", "MX", "BR", "CL", "AR", "PE", "CO", "PA", "CR", "EC", "GT", "SV", "PY", "HN", "BO", "UY", "NI"]; 
// Asia/SCEK territory country codes
$aCodeList = ["HK", "TW", "SG", "MY", "KR", "ID", "TH", "CN"]; 
// redirect based on country code:
if (in_array($var_country_code, $aCodeList)) {
	header('Location: https://store.playstation.com/#%21/cid='.$_GET["scek"]);
}
else if (in_array($var_country_code, $naCodeList)) {
	header('Location: https://store.playstation.com/#%21/cid='.$_GET["scea"]);
}
else if ($var_country_code == 'JP') {
	header('Location: https://store.playstation.com/#%21/cid='.$_GET["scej"]);
}
else {
	header('Location: https://store.playstation.com/#%21/cid='.$_GET["scee"]);
}
?>