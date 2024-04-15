<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

foreach($arResult['ITEMS'] as $cell => $arElement)
{

    if($arElement['PREVIEW_PICTURE']['ID']){
        $file = CFile::ResizeImageGet(
            $arElement['PREVIEW_PICTURE']['ID'],
        array("width" => 1840, "height" => 760),	BX_RESIZE_IMAGE_EXACT,
        true );
        $arResult['ITEMS'][$cell]['PREVIEW_PICTURE']['WIDTH'] = $file['width'];
        $arResult['ITEMS'][$cell]['PREVIEW_PICTURE']['HEIGHT'] = $file['height'];
        $arResult['ITEMS'][$cell]['PREVIEW_PICTURE']['SRC'] = $file['src'];
    }

    if($arElement['DETAIL_PICTURE']['ID']){
        $file = CFile::ResizeImageGet(
            $arElement['DETAIL_PICTURE']['ID'],
        array("width" => 670, "height" => 1000),	BX_RESIZE_IMAGE_EXACT,
        true );
        $arResult['ITEMS'][$cell]['DETAIL_PICTURE']['WIDTH'] = $file['width'];
        $arResult['ITEMS'][$cell]['DETAIL_PICTURE']['HEIGHT'] = $file['height'];
        $arResult['ITEMS'][$cell]['DETAIL_PICTURE']['SRC'] = $file['src'];
    }
    
}


?>