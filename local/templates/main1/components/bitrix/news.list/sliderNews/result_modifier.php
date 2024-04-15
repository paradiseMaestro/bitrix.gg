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

// $sectionId = 5 ; // Получаем ID раздела из $arResult
// $sectionInfo = CIBlockSection::GetByID($sectionId)->GetNext(); // Получаем информацию о разделе

// if ($sectionInfo) {
//     $sectionName = $sectionInfo['NAME']; // Получаем название раздела
//     echo $sectionName;
// }



// $sectionId = CIBlockSection::GetList([], ['IBLOCK_CODE' => 'iblocCode', 'CODE' => 'sectionCode'])->Fetch()[$arParams['IBLOCK_ID']];
// print_r($sectionId);
// print_r($sectionId);



$getiblock = CIBlockSection::GetList(
	Array("SORT"=>"ASC"),
	Array("IBLOCK_ID"=>$arParams['IBLOCK_ID'])
 );

 
  
 while($sectionwhile = $getiblock->GetNext())
{
	$arS[] = $sectionwhile;
}
  
 foreach($arS as $key1=>$arSec){  
	// print_r($arS);
	// print_r($arSec);
	 
	 foreach($arResult["ITEMS"] as $key2=>$arItem){
	// print_r($arItem);
		 
		  if($arItem['IBLOCK_SECTION_ID'] == $arSec['ID']){
			// $arResult['ITEMS'] =  $arItem;
			$arResult['ITEMS'][$key2]['DETAIL_LIST'] =  $arSec;
			
			

		  }
	}
 }

?>