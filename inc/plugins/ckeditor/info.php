<?php
// Disallow direct access to this file for security reasons
if(!defined("IN_MYBB"))
{
    die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}
function ckeditor_info()
{
	global $lang;
	$lang->load('ckeditor');
	$info = array(
		"name"          => $lang->ckeditor,
		"description"   => "",
		"website"       => "https://github.com/ATofighi/MyBB-CKEditor",
		"author"        => "AliReza_Tofighi",
		"authorsite"    => "http://my-bb.ir",
		"version"       => "0.1 ".$lang->demo,
		"guid"          => "",
		"compatibility" => "16*"
	);
	if(ckeditor_is_installed() && $plugins_cache['active']['ckeditor'])
	{
		global $PL;
		$PL or require_once PLUGINLIBRARY;
		$info["description"] .= "<br /><a href=\"index.php?module=config/settings&action=change&search=ckeditor_\">{$lang->changesettings}</a>.";
	}
	return $info;
}
?>