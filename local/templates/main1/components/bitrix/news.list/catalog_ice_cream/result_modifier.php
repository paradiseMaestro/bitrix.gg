<?php 



$filter = [];
$filter['IBLOCK_ID'] =  (int)$arResult['ID'];
$filter['GLOBAL_ACTIVE'] =  'Y';
$filter['SECTION_ID'] =  (int)$arResult['SECTION']['PATH'][0]['ID'];
$filter['DEPTH_LEVEL'] =  2;

$getiblock = CIBlockSection::GetList(
    ['SORT' => 'ASC'],
    $filter
);
$arResult['SECTIONS'][] = $arResult['SECTION']['PATH'][0];
$arResult['SECTIONS'][0]['NAME'] = 'Все';
while ($sectionwhile = $getiblock->GetNext()) {
    $arResult['SECTIONS'][] = $sectionwhile;
}



$brends = CIBlockElement::GetList(
    ['SORT' => 'ASC'],
    [
        // 'IBLOCK_ID' => (int)$arResult['ITEMS'][0]['PROPERTIES']['brend']['LINK_IBLOCK_ID'],
        'IBLOCK_ID' => 2,
        // 2, id IBLOCK 
    ]
);
while ($value = $brends->GetNext()) {
    $arResult['brends_'][] = $value;
}

$arResult['fat_content'] = [
   [ 'менее 5 %', '<5' ],
   [ 'от 5 до 10 %', '5_10'],
    ['более 10 %', '>10']
];

$arResult['sort'] = [
    [ 'Сначала новинки', 'new' ],
    [ 'Сначала популярные', 'popular'],
];



echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '<pre>';
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($arResult);
// print_r($arResult['ITEMS'][0]['PROPERTIES']['brend']);

echo '</pre>';

?>