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
?>
<section class="sales-leaders-sidebar">
    <h3 class="sidebar-section-title">Лидеры продаж</h3>
    <?if (isset(\$arResult["ITEMS"]) && is_array(\$arResult["ITEMS"]) && count(\$arResult["ITEMS"]) > 0):?>
        <div class="sales-leader-items">
        <?foreach(\$arResult["ITEMS"] as \$arItem):
            \$this->AddEditAction(\$arItem['ID'], \$arItem['EDIT_LINK'], CIBlock::GetArrayByID(\$arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            \$this->AddDeleteAction(\$arItem['ID'], \$arItem['DELETE_LINK'], CIBlock::GetArrayByID(\$arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCT_ELEMENT_DELETE_CONFIRM')));

            \$imgSrc = (\$arItem["PREVIEW_PICTURE"]["SRC"] ? \$arItem["PREVIEW_PICTURE"]["SRC"] : (\$arItem["DETAIL_PICTURE"]["SRC"] ? \$arItem["DETAIL_PICTURE"]["SRC"] : SITE_TEMPLATE_PATH."/img/no_photo_product.png"));
            // Resize image if needed using CFile::ResizeImageGet or similar if template receives original path
            // For catalog.top, PREVIEW_PICTURE might already be resized based on params if component supports it.
            // Let's assume PREVIEW_PICTURE is already appropriately sized if $arParams["DISPLAY_IMG_WIDTH"] etc. are standard.
        ?>
            <a href="<?=\$arItem["DETAIL_PAGE_URL"]?>" class="sales-leader-item" id="<?=\$this->GetEditAreaId(\$arItem['ID']);?>">
                <img src="<?=\$imgSrc?>" alt="<?=htmlspecialcharsbx(\$arItem["NAME"])?>" loading="lazy">
                <div class="item-details">
                    <h4 class="item-name"><?=htmlspecialcharsbx(\$arItem["NAME"])?></h4>
                    <?// Rating: Requires a property like "RATING" ?>
                    <?if(isset(\$arItem["PROPERTIES"]["RATING"]["VALUE"]) && !empty(\$arItem["PROPERTIES"]["RATING"]["VALUE"])):
                        \$rating = intval(\$arItem["PROPERTIES"]["RATING"]["VALUE"]);
                    ?>
                        <div class="item-rating">
                            <?for(\$i = 1; \$i <= 5; \$i++):?>
                                <span><?=(\$i <= \$rating ? '⭐' : '☆')?></span>
                            <?endfor;?>
                        </div>
                    <?endif;?>

                    <?// Price: catalog.top usually provides price info in $arItem["PRICES"] or $arItem["MIN_PRICE"] ?>
                    <?if(isset(\$arItem["MIN_PRICE"]) && is_array(\$arItem["MIN_PRICE"])): // Example using MIN_PRICE ?>
                        <div class="item-price">
                            <span class="current-price"><?=\CCurrencyLang::CurrencyFormat(\$arItem["MIN_PRICE"]["DISCOUNT_VALUE"], \$arItem["MIN_PRICE"]["CURRENCY"])?></span>
                            <?if(\$arItem["MIN_PRICE"]["DISCOUNT_DIFF"] > 0):?>
                                <span class="old-price"><?=\CCurrencyLang::CurrencyFormat(\$arItem["MIN_PRICE"]["VALUE"], \$arItem["MIN_PRICE"]["CURRENCY"])?></span>
                            <?endif;?>
                        </div>
                    <?elseif(isset(\$arItem["PRICES"]["BASE"]["PRINT_DISCOUNT_VALUE"])): // Fallback for older price structure ?>
                         <div class="item-price">
                            <span class="current-price"><?=\$arItem["PRICES"]["BASE"]["PRINT_DISCOUNT_VALUE"]?></span>
                            <?if(\$arItem["PRICES"]["BASE"]["DISCOUNT_DIFF_PERCENT"] > 0):?>
                                <span class="old-price"><?=\$arItem["PRICES"]["BASE"]["PRINT_VALUE"]?></span>
                            <?endif;?>
                        </div>
                    <?endif;?>
                </div>
            </a>
        <?endforeach;?>
        </div>
    <?else:?>
        <p style="padding:10px;">Лидеры продаж не найдены.</p>
    <?endif;?>
</section>
