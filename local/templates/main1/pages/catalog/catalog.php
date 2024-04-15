<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;
?>
<?php
$i = 1;

// если какойто элемент равен пустой строчке - не берем в новый массив
$urlArr = array_filter(
	// делим все по слешу в массив
	explode('/', $APPLICATION->GetCurDir()),
	function ($item) {
    	return $item != '';
	}
);

// print_r($urlArr);


$whichPage = NULL;


// если полсе каталога ничего нет
if (!isset($urlArr[2])) {
    // print_r('0000000000');
	$whichPage = 1;
}

// если есть католог раздела, но не передана детальная страница
if (isset($urlArr[2]) && !isset($urlArr[3])) {
    // print_r('1111111111');
	$whichPage = 2;
}

// передана детальная страница 
if (isset($urlArr[3])) {
    // print_r('2222222222222');
	$whichPage = 3;
}


// global $arrFilter;
// $arrFilter = [
// 	"=PROPERTY_is_it_cool" => "Да"
// ];


global $arrFilter;
$arrFilter = [];
// $arrFilter['=SECTION_CODE'] = 'morozhenoe';


$arrFilter = [
	// '=SECTION_CODE' => 'lakomka',
	'=SECTION_CODE' => $urlArr[2],
    // "=PROPERTY_is_it_new" => "code_value_for_yes",
	// "PROPERTY_is_it_cool"=> 'Да'
	// "PROPERTY_15_VALUE"=>"Да"
	"PROPERTY_15_VALUE"=>"Да"
];

?><?if( $whichPage == 1):?> <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"catalog",
	Array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "catalog",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "slider",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"SECTION_FIELDS" => array(0=>"NAME",1=>"DESCRIPTION",2=>"PICTURE",3=>"DETAIL_PICTURE",4=>"DATE_CREATE",5=>"TIMESTAMP_X",6=>"",),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"UF_COLOR",1=>"Выбор цвета",2=>"",),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "LINE"
	)
);?> <?endif;?> 





<?if( $whichPage == 2):?> 
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"catalog_ice_cream", 
	array(
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
		"COMPONENT_TEMPLATE" => "catalog_ice_cream",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "slider",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
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
		"PROPERTY_CODE" => array(
			0 => "is_it_cool",
			1 => "is_it_new",
			2 => "in_box",
			3 => "gram",
			4 => "in_poddon",
			5 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?> <?endif?> 
<?if( $whichPage == 3):?> <?$APPLICATION->IncludeComponent(
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
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		// "ELEMENT_CODE" => "vafelnyy-stakanchik-karamelnaya-kosichka",
		"ELEMENT_CODE" => $urlArr[3],
		"ELEMENT_ID" => "",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "slider",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(0=>"is_it_cool",1=>"is_it_new",2=>"color",3=>"cook_pdf",4=>"in_box",5=>"gram",6=>"in_poddon",7=>"expiration_date",8=>"temperature_no_more",9=>"compound",10=>"beloc",11=>"fats",12=>"carbohydrates",13=>"energy_value",14=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N"
	)
);?> <?endif?> <br>
 <br>
 <br>
 <br>
 <br>

