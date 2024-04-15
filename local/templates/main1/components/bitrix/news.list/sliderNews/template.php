<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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



















<section class="main-news" data-aos="fade-up" data-aos-duration="1500">
	<div class="container">
	<div class="main-news__top">
		<div class="main-news__title animation-title" data-splitting data-effect1><span>новости </span><span>и </span><span>акции</span></div>
		<div class="title-rombs">
			<div class="title-rombs__item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
					<path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z" fill="#F64653"></path>
					<path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z" fill="#F64653"></path>
					<path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z" fill="#F64653"></path>
					<path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z" fill="#F64653"></path>
				</svg></div>
			<div class="title-rombs__item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
					<path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z" fill="#F64653"></path>
					<path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z" fill="#F64653"></path>
					<path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z" fill="#F64653"></path>
					<path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z" fill="#F64653"></path>
				</svg></div>
		</div>
	</div>










	<div class="main-news__slider">
		<div class="main-news__slider-wrapper">
			<div class="swiper main-news__swiper">
				<div class="swiper-wrapper">
				<?if($arParams["DISPLAY_TOP_PAGER"]):?>
					<?=$arResult["NAV_STRING"]?><br />
				<?endif;?>

				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?php
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>





					<a class="swiper-slide main-news__card"   id="<?=$this->GetEditAreaId($arItem['ID']);?>" href="<?=$arItem["DETAIL_PAGE_URL"]?>" >
						<div class="main-news__card-img">
							<picture class="picture">
								<img class="picture__img" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
							</picture>
							<span class="main-news__card-plug">
							<?=$arItem['DETAIL_LIST']['NAME']?>
							</span>
						</div>
						<p class="main-news__card-date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></p>
						<p class="main-news__card-title"><?=$arItem["NAME"]?></p>
					</a>



					<?endforeach;?>


					<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
						<br /><?=$arResult["NAV_STRING"]?>
					<?endif;?>



				</div>
			</div>
		</div>
		<div class="slider-btn btn-hover_parent main-news__button_left">
			<div class="white-circle">
				<div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
					<path d="M16 10.8698L16 8.75515C16 6.47309 13.3808 5.18399 11.5725 6.57603L7.85123 9.44068C6.42121 10.5415 6.42121 12.6981 7.85124 13.7989L11.5725 16.6636C13.3808 18.0556 16 16.7665 16 14.4844L16 12.3698L16 10.8698Z" fill="#4F627D"></path>
				</svg>
			</div>
		</div>
		<div class="slider-btn btn-hover_parent main-news__button_right">
			<div class="white-circle right">
				<div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
					<path d="M16 10.8698L16 8.75515C16 6.47309 13.3808 5.18399 11.5725 6.57603L7.85123 9.44068C6.42121 10.5415 6.42121 12.6981 7.85124 13.7989L11.5725 16.6636C13.3808 18.0556 16 16.7665 16 14.4844L16 12.3698L16 10.8698Z" fill="#4F627D"></path>
				</svg>
			</div>
		</div>
	</div>











	<div class="main-news__bot"><a class="main-news__bot-button btn-hover_parent" href="/news/?catalog=all">
			<div class="btn-hover_circle"></div><span>Все новости и акции</span>
		</a>
	</div>
	</div>
</section>












