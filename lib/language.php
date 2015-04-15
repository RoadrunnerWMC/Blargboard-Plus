<?php
if (!defined('BLARG')) die();

$language = "en_US";

// not like other languages will ever make it in
setlocale(LC_ALL, "en_US");

$birthdayExample = "June 26, 1983";

$dateformats = array("", "m-d-y", "d-m-y", "y-m-d", "Y-m-d", "m/d/Y", "d.m.y", "M j Y", "D jS M Y");
$timeformats = array("", "h:i A", "h:i:s A", "H:i", "H:i:s");

$months = array(
	"",
	"January",
	"February",
	"March",
	"April",
	"May",
	"June",
	"July",
	"August",
	"September",
	"October",
	"November",
	"December",
);

$days = array(
	"",
	"Sunday",
	"Monday",
	"Tuesday",
	"Wednesday",
	"Thursday",
	"Friday",
	"Saturday",
);

function Plural($i, $s)
{
	if($i == 1) //For 1, just return that.
		return $i." ".$s;

	if(substr($s,-1) == "y") //Grammar Nazi strikes back!
		$s = substr($s, 0, strlen($s)-1)."ies"; //query -> queries
	else if(substr($s,-3) == "tch") //Grammar Nazi strikes back again!
		$s = $s."es"; //match -> matches
	else
		$s .= "s"; //record -> records

	return $i." ".$s;
}

function HisHer($user)
{
	if($user['sex'] == 0)
		return "his";
	if($user['sex'] == 1)
		return "her";
	return "its";
}

function stringtotimestamp($str)
{
	global $months;
	$parts = explode(" ", $str);
	$day = (int)$parts[1];
	$month = $parts[0];
	$month = str_replace(",", "", $month);
	$year = (int)$parts[2];
	for($m = 1; $m <= 12; $m++)
	{
		if(strcasecmp($month, $months[$m]) == 0)
		{
			$month = $m;
			break;
		}
	}
	if((int)$month != $month)
		return 0;
	return mktime(12,0,0, $month, $day, $year);
}

function timestamptostring($t)
{
	if($t == 0)
		return "";
	return strftime("%B %#d, %Y", $t);
}

function __($english, $flags = 0)
{
	global $languagePack, $language;
	if($language != "en_US")
	{
		if(!isset($languagePack))
		{
			if(is_file(__DIR__."/lang/".$language.".txt"))
			{
				importLanguagePack(__DIR__."/lang/".$language.".txt");
				importPluginLanguagePacks($language.".txt");
			}
			else
				$final = $english;
		}
		if(!isset($languagePack))
			$languagePack = array();
		$eDec = html_entity_decode($english, ENT_COMPAT, "UTF-8");
		if(array_key_exists($eDec, $languagePack))
			$final = $languagePack[$eDec];
		elseif(array_key_exists($english, $languagePack))
			$final = $languagePack[$english];
		if($final == "")
			$final = $english; //$final = "[".$english."]";
	}
	else
		$final = $english;

	if($flags & 1)
		return str_replace(" ", "&nbsp;", htmlspecialchars($final));
	else if($flags & 2)
		return html_entity_decode($final);
	return $final	;
}

function importLanguagePack($file)
{
	global $languagePack;
	$f = file_get_contents($file);
	$f = explode("\n", $f);
	for($i = 0; $i < count($f); $i++)
	{
		$k = trim($f[$i]);
		if($k == "" || $k[0] == "#")
			continue;
		$i++;
		$v = trim($f[$i]);
		if($v == "")
			continue;
		$languagePack[$k] = $v;
	}
}

function importPluginLanguagePacks($file)
{
	$pluginsDir = @opendir("plugins");
	if($pluginsDir !== FALSE)
	while(($plugin = readdir($pluginsDir)) !== FALSE)
	{
		if($plugin == "." || $plugin == "..") continue;
		if(is_dir("./plugins/".$plugin))
		{
			$foo = "./plugins/".$plugin."/".$file;
			if(file_exists($foo))
				importLanguagePack($foo);
		}
	}
}

?>
