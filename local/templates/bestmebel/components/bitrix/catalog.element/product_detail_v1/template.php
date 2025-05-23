<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array \$arParams */
/** @var array \$arResult */
/** @global CMain \$APPLICATION */
/** @global CUser \$USER */
/** @global CDatabase \$DB */
/** @var CBitrixComponentTemplate \$this */
/** @var string \$templateName */
/** @var string \$templateFile */
/** @var string \$templateFolder */
/** @var string \$componentPath */
/** @var CBitrixComponent \$component */
\$this->setFrameMode(true);
// \$templateData = array( 'TEMPLATE_THEME' => \$this->GetFolder().'/themes/'.\$arParams['TEMPLATE_THEME'].'/style.css', 'TEMPLATE_CLASS' => 'bx_'.\$arParams['TEMPLATE_THEME']);
// \$this->addExternalCss(\$templateData['TEMPLATE_THEME']);
?>
<div class="product-detail-page" itemscope itemtype="http://schema.org/Product" id="<?=\$this->GetEditAreaId(\$arResult['ID']);?>">
    <h1 itemprop="name"><?=\$arResult["NAME"]?></h1>
    
    <div class="product-layout-row"> <?/* Example row for image and short info */?>
        <div class="product-image-gallery col-6"> <?/* TODO: Implement Image Gallery */?>
            <?if(\$arResult["DETAIL_PICTURE"]["SRC"]):?>
                <img src="<?=\$arResult["DETAIL_PICTURE"]["SRC"]?>" 
                     alt="<?=\$arResult["DETAIL_PICTURE"]["ALT"] ?: \$arResult["NAME"]?>" 
                     title="<?=\$arResult["DETAIL_PICTURE"]["TITLE"] ?: \$arResult["NAME"]?>"
                     itemprop="image">
            <?elseif(\$arResult["PREVIEW_PICTURE"]["SRC"]):?>
                 <img src="<?=\$arResult["PREVIEW_PICTURE"]["SRC"]?>" 
                     alt="<?=\$arResult["PREVIEW_PICTURE"]["ALT"] ?: \$arResult["NAME"]?>" 
                     title="<?=\$arResult["PREVIEW_PICTURE"]["TITLE"] ?: \$arResult["NAME"]?>"
                     itemprop="image">
            <?else:?>
                <img src="<?=SITE_TEMPLATE_PATH?>/img/no_photo_product_large.png" 
                     alt="<?=\$arResult["NAME"]?>" 
                     title="<?=\$arResult["NAME"]?>"
                     itemprop="image">
            <?endif;?>
            <?// Placeholder for more images/thumbnails (MORE_PHOTO property) ?>
        </div>

        <div class="product-short-info col-6"> <?/* TODO: Implement Short Info Block */?>
            <?if(isset(\$arResult["PRICES"]["BASE"])): // Example: Basic Price Display ?>
                <div class="price-block" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                    <meta itemprop="priceCurrency" content="<?=\$arResult["PRICES"]["BASE"]["CURRENCY"]?>">
                    <?if(\$arResult["PRICES"]["BASE"]["DISCOUNT_VALUE"] < \$arResult["PRICES"]["BASE"]["VALUE"]):?>
                        <span class="old-price"><?=\CCurrencyLang::CurrencyFormat(\$arResult["PRICES"]["BASE"]["VALUE"], \$arResult["PRICES"]["BASE"]["CURRENCY"])?></span>
                        <span class="current-price" itemprop="price"><?=\CCurrencyLang::CurrencyFormat(\$arResult["PRICES"]["BASE"]["DISCOUNT_VALUE"], \$arResult["PRICES"]["BASE"]["CURRENCY"])?></span>
                    <?else:?>
                        <span class="current-price" itemprop="price"><?=\CCurrencyLang::CurrencyFormat(\$arResult["PRICES"]["BASE"]["VALUE"], \$arResult["PRICES"]["BASE"]["CURRENCY"])?></span>
                    <?endif;?>
                    <link itemprop="availability" href="http://schema.org/<?=(\$arResult['CAN_BUY'] ? 'InStock' : 'OutOfStock')?>">
                </div>
            <?endif;?>

            <?if(\$arResult["PREVIEW_TEXT"]):?>
                <div class="short-description" itemprop="description">
                    <?echo \$arResult["PREVIEW_TEXT_TYPE"] == "html" ? \$arResult["PREVIEW_TEXT"] : nl2br(htmlspecialcharsEx(\$arResult["PREVIEW_TEXT"]));?>
                </div>
            <?endif;?>
            
            <?// TODO: Add to cart button, quantity, etc. ?>
            <?if(\$arResult["CAN_BUY"]):?>
                <form action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data" class="add2cart_form">
                    <input type="hidden" name="<?echo \$arParams["ACTION_VARIABLE"]?>" value="ADD2BASKET">
                    <input type="hidden" name="<?echo \$arParams["PRODUCT_ID_VARIABLE"]?>" value="<?echo \$arResult["ID"]?>">
                    <button type="submit" name="<?echo \$arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" class="btn btn-primary">В корзину</button>
                </form>
            <?else:?>
                 <p>Нет в наличии</p>
            <?endif;?>

        </div>
    </div>

    <div class="product-full-description tabs-section"> <?/* TODO: Implement Tabs */?>
        <h3>Описание</h3>
        <?if(\$arResult["DETAIL_TEXT"]):?>
            <div itemprop="description">
                <?echo \$arResult["DETAIL_TEXT_TYPE"] == "html" ? \$arResult["DETAIL_TEXT"] : nl2br(htmlspecialcharsEx(\$arResult["DETAIL_TEXT"]));?>
            </div>
        <?else:?>
            <p>Описание товара отсутствует.</p>
        <?endif;?>
    </div>

    <?// TODO: Display properties (ARTNUMBER, MANUFACTURER, MATERIAL etc.) ?>
    <?// TODO: Reviews component call ?>
    <?// TODO: Related products component call ?>
</div>
