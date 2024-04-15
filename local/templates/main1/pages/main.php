<?php 
$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"template2",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("ID","NAME","PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_PICTURE",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);

?> 
<?php 
$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"catalog", 
	array(
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
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "slider",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "NAME",
			1 => "DESCRIPTION",
			2 => "PICTURE",
			3 => "DETAIL_PICTURE",
			4 => "DATE_CREATE",
			5 => "TIMESTAMP_X",
			6 => "",
		),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "UF_COLOR",
			1 => "Выбор цвета",
			2 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => "catalog"
	),
	false
); 
?> 


<?php if(false): ?> 
<section class="main-traditions container-fluid" data-aos="fade-up" data-aos-duration="1500">
<div class="main-traditions__bg">
</div>
<div class="container" data-aos="fade-up" data-aos-duration="1500">
	<div class="main-traditions__logo">
	</div>
	<div class="main-traditions__top">
		<h3 class="main-traditions__title animation-title" data-splitting="" data-effect1="">
		<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"template1",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/include/templ/main_page.php"
	)
);?> </h3>
		<div class="title-rombs">
			<div class="title-rombs__item">
			</div>
			<div class="title-rombs__item">
			</div>
		</div>
	</div>
	<div class="main-traditions__row">
		<div class="main-traditions__col">
			<div class="main-traditions__text">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"template1",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/include/templ/main_page4.php"
	)
);?>
			</div>
 <a class="main-traditions__button btn-hover_parent desktop" href="/about_company">
			<div class="btn-hover_circle">
			</div>
 <span>
			<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"template1",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/include/templ/main_page6.php"
	)
);?> </span> </a>
		</div>
		<div class="main-traditions__col">
			<div class="main-traditions__text">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"template1",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/include/templ/main_page5.php"
	)
);?>
			</div>
 <a class="main-traditions__button btn-hover_parent mobile" href="/about_company/">
			<div class="btn-hover_circle">
			</div>
 <span>
			<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"template1",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/include/templ/main_page6.php"
	)
);?> </span> </a>
		</div>
	</div>
	<div class="main-traditions__video" data-button-fade="main-video">
		<div class="main-traditions__video-bg">
		</div>
		<div class="main-traditions__video-video">
 <video src="<span id=" title="Код PHP: &lt;?php echo SITE_TEMPLATE_PATH ?&gt;" class="bxhtmled-surrogate"><?php echo SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/assets/videos/zp_preview.mp4" loop muted playsinline autoplay preload="none"&gt;</video>
		</div>
		<div class="main-traditions__video-button">
		</div>
	</div>
</div>
 </section> <section class="main-filials container" data-aos="fade-up" data-aos-duration="1500">
<div class="main-filials__landscape" data-aos="fade-up" data-aos-duration="1500">
	<div class="main-filials__landscape-bg desktop">
 <span class="picture"> <source type="image/webp" srcset="<span id=" title="Код PHP: &lt;?php echo SITE_TEMPLATE_PATH ?&gt;" class="bxhtmled-surrogate"><?php echo SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/assets/images/main-filials-bg.webp" /&gt; <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-bg.png" class="picture__img"> </span>
	</div>
	<div class="main-filials__landscape-bg devices">
 <span class="picture"> <source type="image/webp" srcset="<span id=" title="Код PHP: &lt;?php echo SITE_TEMPLATE_PATH ?&gt;" class="bxhtmled-surrogate"><?php echo SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/assets/images/main-filials-bg-device.webp" /&gt; <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-bg-device.png" class="picture__img"> </span>
	</div>
	<div class="main-filials__landscape-bg mobile-mob">
 <span class="picture"> <source type="image/webp" srcset="<span id=" title="Код PHP: &lt;?php echo SITE_TEMPLATE_PATH ?&gt;" class="bxhtmled-surrogate"><?php echo SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/assets/images/main-filials-bg-mobile.webp" /&gt; <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-bg-mobile.png" class="picture__img"> </span>
	</div>
	<div class="main-filials__landscape-top">
		<div class="title-rombs">
			<div class="title-rombs__item">
			</div>
			<div class="title-rombs__item">
			</div>
		</div>
	</div>
	<h2 class="main-filials__landscape-title animation-title" data-splitting="" data-effect1="">
	<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"template1",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/include/templ/main_page1.php"
	)
);?> </h2>
	<div class="main-filials__landscape-content">
		<div class="main-filials__landscape-text">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"template1",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/include/templ/main_page2.php"
	)
);?>
		</div>
		<div class="main-filials__landscape-desk">
			 Присоединяйтесь к нам!
		</div>
 <a class="main-filials__landscape-button btn-hover_parent" href="/for_partners/">
		<div class="btn-hover_circle white">
		</div>
		<p>
			 Подробнее о сотрудничестве
		</p>
 </a>
	</div>
</div>
<div class="main-filials__bottom" data-aos="fade-up" data-aos-duration="1500">
 <a class="main-filials__card where-buy btn-hover_parent" href="/where_to_buy">
	<div class="main-filials__card-top">
		<div class="main-filials__card-title">
			 где купить
		</div>
		<div class="main-filials__card-text">
			 Локальные, федеральные сети и&nbsp;маркетплейсы
		</div>
	</div>
	<div class="main-filials__card-bot">
		<div class="main-filials__card-row">
			<div class="main-filials__card-icons">
 <span class="picture"> <source type="image/webp" srcset="<span id=" title="Код PHP: &lt;?php echo SITE_TEMPLATE_PATH ?&gt;" class="bxhtmled-surrogate"><?php echo SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/assets/images/main-filials-card-icons1.webp" /&gt; <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-card-icons1.png" class="picture__img"> </span>
			</div>
			<div class="button button-arrow_right btn-hover_parent">
				<div class="btn-hover_circle total-white">
				</div>
			</div>
		</div>
	</div>
 </a><a class="main-filials__card game btn-hover_parent" href="#" target="blank">
	<div class="main-filials__card-bg">
 <span class="picture"> <source type="image/webp" srcset="<span id=" title="Код PHP: &lt;?php echo SITE_TEMPLATE_PATH ?&gt;" class="bxhtmled-surrogate"><?php echo SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/assets/images/main-filials-game.webp" /&gt; <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-game.png" class="picture__img"> </span>
	</div>
	<div class="main-filials__card-top">
		<div class="main-filials__card-title">
			 мобильная игра
		</div>
		<div class="main-filials__card-text">
			 Сёмыч и Ладушка спасают Снежландию
		</div>
	</div>
	<div class="main-filials__card-bot">
		<div class="main-filials__card-row">
			<div class="main-filials__card-icons short">
 <span class="picture"> <source type="image/webp" srcset="<span id=" title="Код PHP: &lt;?php echo SITE_TEMPLATE_PATH ?&gt;" class="bxhtmled-surrogate"><?php echo SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/assets/images/main-filials-card-icons2.webp" /&gt; <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-card-icons2.png" class="picture__img"> </span>
			</div>
			<div class="button button-arrow_right btn-hover_parent">
				<div class="btn-hover_circle total-white">
				</div>
			</div>
		</div>
	</div>
 </a>
</div>
</section> 
<section class="main-news" data-aos="fade-up" data-aos-duration="1500">
<div class="container">
	<div class="main-news__top">
		<div class="main-news__title animation-title" data-splitting="" data-effect1="">
			 новости и акции
		</div>
		<div class="title-rombs">
			<div class="title-rombs__item">
			</div>
			<div class="title-rombs__item">
			</div>
		</div>
	</div>
	<div class="main-news__slider">
		<div class="main-news__slider-wrapper">
			<div class="swiper main-news__swiper">
				<div class="swiper-wrapper">
 <a class="swiper-slide main-news__card" href="#">
					<div class="main-news__card-img">
 <span class="picture"> <source type="image/webp" srcset="<span id=" title="Код PHP: &lt;?php echo SITE_TEMPLATE_PATH ?&gt;" class="bxhtmled-surrogate"><?php echo SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/assets/images/main-news-card1.webp" /&gt; <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.png" class="picture__img"> </span><span class="main-news__card-plug">выставки и конференции</span>
					</div>
					<p class="main-news__card-date">
						 6 марта 2023
					</p>
					<p class="main-news__card-title">
						 Диетолог Снегирева рассказала, как выбрать правильное мороженое
					</p>
 </a><a class="swiper-slide main-news__card" href="#">
					<div class="main-news__card-img">
 <span class="picture"> <source type="image/webp" srcset="<span id=" title="Код PHP: &lt;?php echo SITE_TEMPLATE_PATH ?&gt;" class="bxhtmled-surrogate"><?php echo SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/assets/images/main-news-card1.webp" /&gt; <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.png" class="picture__img"> </span><span class="main-news__card-plug">выставки и конференции</span>
					</div>
					<p class="main-news__card-date">
						 6 марта 2023
					</p>
					<p class="main-news__card-title">
						 Диетолог Снегирева рассказала, как выбрать правильное мороженое
					</p>
 </a><a class="swiper-slide main-news__card" href="#">
					<div class="main-news__card-img">
 <span class="picture"> <source type="image/webp" srcset="<span id=" title="Код PHP: &lt;?php echo SITE_TEMPLATE_PATH ?&gt;" class="bxhtmled-surrogate"><?php echo SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/assets/images/main-news-card1.webp" /&gt; <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.png" class="picture__img"> </span><span class="main-news__card-plug">выставки и конференции</span>
					</div>
					<p class="main-news__card-date">
						 6 марта 2023
					</p>
					<p class="main-news__card-title">
						 Диетолог Снегирева рассказала, как выбрать правильное мороженое
					</p>
 </a><a class="swiper-slide main-news__card" href="#">
					<div class="main-news__card-img">
 <span class="picture"> <source type="image/webp" srcset="<span id=" title="Код PHP: &lt;?php echo SITE_TEMPLATE_PATH ?&gt;" class="bxhtmled-surrogate"><?php echo SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/assets/images/main-news-card1.webp" /&gt; <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.png" class="picture__img"> </span><span class="main-news__card-plug">выставки и конференции</span>
					</div>
					<p class="main-news__card-date">
						 6 марта 2023
					</p>
					<p class="main-news__card-title">
						 Диетолог Снегирева рассказала, как выбрать правильное мороженое
					</p>
 </a><a class="swiper-slide main-news__card" href="#">
					<div class="main-news__card-img">
 <span class="picture"> <source type="image/webp" srcset="<span id=" title="Код PHP: &lt;?php echo SITE_TEMPLATE_PATH ?&gt;" class="bxhtmled-surrogate"><?php echo SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/assets/images/main-news-card1.webp" /&gt; <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.png" class="picture__img"> </span><span class="main-news__card-plug">выставки и конференции</span>
					</div>
					<p class="main-news__card-date">
						 6 марта 2023
					</p>
					<p class="main-news__card-title">
						 Диетолог Снегирева рассказала, как выбрать правильное мороженое
					</p>
 </a>
				</div>
			</div>
		</div>
		<div class="slider-btn btn-hover_parent main-news__button_left">
			<div class="white-circle">
				<div class="btn-hover_circle total-white">
				</div>
			</div>
		</div>
		<div class="slider-btn btn-hover_parent main-news__button_right">
			<div class="white-circle right">
				<div class="btn-hover_circle total-white">
				</div>
			</div>
		</div>
	</div>
	<div class="main-news__bot">
 <a class="main-news__bot-button btn-hover_parent" href="/news_and_promotions/">
		<div class="btn-hover_circle">
		</div>
		 Все новости и акции </a>
	</div>
</div>
 </section>
<?php endif; ?>


<div class="popup-video" data-popup-fade="main-video">
	<div class="popup-video__close" data-fade-close="main-video">
		<div class="btn-hover_parent">
			<div class="btn-hover_circle white">
			</div>
		</div>
	</div>
	<div class="popup-video__inner">
		<div class="popup-video__video">
 <video class="zp-video" controls="controls" width="100%" height="100%" poster="./assets/images/about-production-popup-icecream.png" preload="none"> <source src="<span id=" title="Код PHP: &lt;?php echo SITE_TEMPLATE_PATH ?&gt;" class="bxhtmled-surrogate"><?php echo SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/assets/videos/video-zdor-product.mp4"&gt; </video>
		</div>
	</div>
</div>
 
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"sliderNews", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" =>  "news/detail.php?ELEMENT_CODE=ELEMENT_CODE",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "slider",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
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
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "sliderNews"
	),
	false
);?>