<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

use Bitrix\Main\Page\Asset;
$asset = Asset::getInstance();
$asset->addCss(SITE_TEMPLATE_PATH."/590.css");
$asset->addCss(SITE_TEMPLATE_PATH."/app.css");

$asset->addJs(SITE_TEMPLATE_PATH."/assets/vendor.js");
$asset->addJs(SITE_TEMPLATE_PATH."/assets/app.js");

$urlArr = array_filter(
	// делим все по слешу в массив
	explode('/', $APPLICATION->GetCurDir()),
	function ($item) {
    	return $item != '';
	}
);

// global $arrFilter;
// $arrFilter = [];
if($urlArr[1] == 'catalog' && isset($urlArr[3]) ){
	$asset->addJs(SITE_TEMPLATE_PATH . '/assets/catalogFormDetail.js');
}

$asset->addString('<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">');

