<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var bool $itemInBasket
 * @var string $curBasketMethod
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */

if(!empty($item['PROPERTIES']['CHAPTER_NAME']['VALUE'])) {
    $arResult['SECTIONS'][$item['IBLOCK_SECTION_ID']]['NAME'] = $item['PROPERTIES']['CHAPTER_NAME']['VALUE'];
}

if(!empty($item["IPROPERTY_VALUES"]["ELEMENT_PAGE_TITLE"])) $item['NAME'] = $item["IPROPERTY_VALUES"]["ELEMENT_PAGE_TITLE"];

?>
<div class="catalog_item">
    <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="">
    <p><?=$item['PREVIEW_TEXT']?></p>
    <h2><?=$item['NAME']?></h2>
</div>




