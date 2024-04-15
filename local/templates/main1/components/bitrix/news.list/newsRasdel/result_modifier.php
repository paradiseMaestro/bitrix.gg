<?php
// LIST_PAGE_URL

// global $sectionInfo ;
$sectionInfo = [];

$filter = [];
$filter['IBLOCK_ID'] =  (int)$arParams['IBLOCK_ID'];

$getiblock = CIBlockSection::GetList(
    ['SORT' => 'ASC'],
    $filter
);

while ($sectionwhile = $getiblock->GetNext()) {
    $arResult['SECTIONS'][] = $sectionwhile;
    $sectionInfo[$sectionwhile['ID']] = $sectionwhile['NAME'];
}



$arResult["SECTION_NAMES"] = $sectionInfo;
?>
<pre>
<?php
// print_r(($arResult['ITEMS']));
// print_r(($arResult['SECTIONS']));
// print_r($arResult["SECTION_NAMES"]);
?>
</pre>