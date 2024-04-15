<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("каталог");

?><?php
// если какойто элемент равен пустой строчке - не берем в новый массив
$urlArr = array_filter(
	// делим все по слешу в массив
	explode('/', $APPLICATION->GetCurDir()),
	function ($item) {
    	return $item != '';
	}
);

// global $arrFilter;
// $arrFilter = [];
if(isset($urlArr[3])){
	require($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/assets.php');
}
// $arrFilter = [
// 	'=SECTION_CODE' => $urlArr[2],
// 	"PROPERTY_is_it_cool_VALUE"=> ''
// ];

global $arrFilter;
$arrFilter['=SECTION_CODE'] = $urlArr[2];

if(isset($_GET['top']) && $_GET['top'] == 'is_top'){
	$arrFilter['PROPERTY_is_it_cool_VALUE'] = 'Да';
}

if(isset($_GET['brends'])){
	$arrFilter['=PROPERTY_brend'] = (int)$_GET['brends'];
}

if(isset($_GET['fat_content']) && $_GET['fat_content'] == '<5'){
	$arrFilter['<PROPERTY_fat_content'] = 5;
}

if(isset($_GET['fat_content']) && $_GET['fat_content'] == '>10'){
	$arrFilter['>PROPERTY_fat_content'] = 10;
}

if(isset($_GET['fat_content']) && $_GET['fat_content'] == '5_10'){
	$arrFilter['><PROPERTY_fat_content'] = [5,10];
}
$sort = 'ACTIVE_FROM';
if (isset($_GET['sort']) && $_GET['sort'] == 'popular'){
    $sort = 'SHOW_COUNTER';
}
if (isset($_GET['sort']) && $_GET['sort'] == 'new'){
    $sort = 'CREATED';
}
?>




<?if( isset($urlArr[2]) && !isset($urlArr[3]) ):?> 
<?php

	$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"catalog_ice_cream",
		Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "Y",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "Y",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array("",""),

			"FILTER_NAME" => "arrFilter",



			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "1",
			"IBLOCK_TYPE" => "slider",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MEDIA_PROPERTY" => "",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "Y",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => $urlArr[2],
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array("is_it_new","in_box","gram","in_poddon","is_it_cool",""),
			"SEARCH_PAGE" => "/search/",
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "Y",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SLIDER_PROPERTY" => "",
			"SORT_BY1" => $sort,
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N",
			"TEMPLATE_THEME" => "blue",
			"USE_RATING" => "N",
			"USE_SHARE" => "N"
		)
	);

?> 
<?endif?> 










<?if( !isset($urlArr[2]) ):?> 
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"catalog",
	Array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "slider",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"SECTION_FIELDS" => array("NAME","DESCRIPTION","PICTURE","DETAIL_PICTURE","DATE_CREATE","TIMESTAMP_X",""),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array("UF_COLOR","Выбор цвета",""),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "LINE"
	)
);?> 
<?endif;?> 




<?if( isset($urlArr[3]) ):?> 
	<?php
		$APPLICATION->IncludeComponent(
			"bitrix:news.detail",
			"catalogDetail",
			Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_ELEMENT_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "Y",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"BROWSER_TITLE" => "-",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"ELEMENT_CODE" => $urlArr[3],
				"ELEMENT_ID" => "",
				"FIELD_CODE" => array("",""),
				"IBLOCK_ID" => "1",
				"IBLOCK_TYPE" => "slider",
				"IBLOCK_URL" => "",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"MEDIA_PROPERTY" => "",
				"MESSAGE_404" => "",
				"META_DESCRIPTION" => "-",
				"META_KEYWORDS" => "-",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Страница",
				"PROPERTY_CODE" => array("compound","beloc","color","fats","is_it_new","cook_pdf","in_box","gram","in_poddon","expiration_date","temperature_no_more","is_it_cool","carbohydrates","energy_value",""),
				"SET_BROWSER_TITLE" => "Y",
				"SET_CANONICAL_URL" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "Y",
				"SET_META_KEYWORDS" => "Y",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SLIDER_PROPERTY" => "",
				"STRICT_SECTION_CHECK" => "N",
				"TEMPLATE_THEME" => "blue",
				"USE_PERMISSIONS" => "N",
				"USE_SHARE" => "N"
			)
		);
	?> 
<?endif?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>