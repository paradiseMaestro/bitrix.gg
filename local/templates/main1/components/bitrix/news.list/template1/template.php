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
?>
<div class="news-list">

<?foreach($arResult["ITEMS"] as $arItem):?>

	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
				<?=$arProperty["DISPLAY_VALUE"];?>
			</small><br />
		<?endforeach;?>
	</p>
<?endforeach;?>

</div>
