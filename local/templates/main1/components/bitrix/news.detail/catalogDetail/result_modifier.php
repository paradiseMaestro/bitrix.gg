<?php 

$res = CIBlockElement::GetByID((int)$arResult['PROPERTIES']['brend']['VALUE']);
if($ar_res = $res->GetNext()){
	$arResult['PROPERTIES']['brend']['name_brend']= $ar_res['NAME'];
}


$next_element = CIBlockElement::GetByID((int)$arResult['PROPERTIES']['next_element']['VALUE']);
if($next = $next_element->GetNext()){
	$arResult['PROPERTIES']['next_element']['next']= $next;
}

// $next_img = CIBlockElement::GetByID((int)$arResult['PROPERTIES']['next_element']['next']['DETAIL_PICTURE']);
// if($next_ = $next_img->GetNext()){
// 	$arResult['PROPERTIES']['next_element']['next']['DETAIL_PICTURE'][]= $next_;
// }


$arResult['PROPERTIES']['next_element']['next']['PICTURE'] = CFile::ResizeImageGet(
    (int)$arResult['PROPERTIES']['next_element']['next']['DETAIL_PICTURE'],
    ['height' => 600, 'weight' => 600],
    BX_RESIZE_IMAGE_EXACT,
);




foreach ($arResult['PROPERTIES']['gallery']['VALUE'] as $item) {


    $arResult['PROPERTIES']['gallery']['src_images'][] = CFile::ResizeImageGet(
        $item,
        ['height' => 1200, 'weight' => 1200],
        BX_RESIZE_IMAGE_EXACT,
    );
}


// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '</br>';
// echo '<pre>';
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
// $arResult;
// echo '</pre>';



?>