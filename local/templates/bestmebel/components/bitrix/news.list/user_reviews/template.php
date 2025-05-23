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
<section class="user-reviews-section">
    <h2 class="section-title">Отзывы покупателей</h2> <?/* TODO: Title can be dynamic or a parameter */?>
    <div class="reviews-container">
        <?/* TODO: Replace this static HTML with a loop through $arResult["ITEMS"]
        foreach(\$arResult["ITEMS"] as \$arItem):?>
            <?
            \$this->AddEditAction(\$arItem['ID'], \$arItem['EDIT_LINK'], CIBlock::GetArrayByID(\$arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            \$this->AddDeleteAction(\$arItem['ID'], \$arItem['DELETE_LINK'], CIBlock::GetArrayByID(\$arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="review-card" id="<?=\$this->GetEditAreaId(\$arItem['ID']);?>">
                <div class="review-header">
                    <img src="<?=(\$arItem["PREVIEW_PICTURE"]["SRC"] ? \$arItem["PREVIEW_PICTURE"]["SRC"] : SITE_TEMPLATE_PATH.'/img/no_user_photo.png')?>" 
                         alt="<?=\$arItem["NAME"]?>" class="reviewer-photo">
                    <div class="reviewer-info">
                        <h4 class="reviewer-name"><?=(\$arItem["PROPERTIES"]["REVIEWER_NAME"]["VALUE"] ? \$arItem["PROPERTIES"]["REVIEWER_NAME"]["VALUE"] : \$arItem["NAME"])?></h4>
                        <?if(\$arParams["DISPLAY_DATE"]!="N" && \$arItem["DISPLAY_ACTIVE_FROM"]):?>
                            <p class="review-date"><?echo \$arItem["DISPLAY_ACTIVE_FROM"]?></p>
                        <?endif?>
                    </div>
                </div>
                <div class="review-body">
                    <?if(\$arParams["DISPLAY_PREVIEW_TEXT"]!="N" && \$arItem["PREVIEW_TEXT"]):?>
                        <p class="review-text"><?echo \$arItem["PREVIEW_TEXT"];?></p>
                    <?endif;?>
                    <?if(!empty(\$arItem["PROPERTIES"]["REVIEWED_ITEM_NAME"]["VALUE"])):?>
                        <p class="reviewed-item-name"><?echo \$arItem["PROPERTIES"]["REVIEWED_ITEM_NAME"]["VALUE"];?></p>
                    <?endif;?>
                </div>
            </div>
        <?endforeach;?>
        */?>

        <?
        // Ensure $arResult["ITEMS"] is available and is an array
        if (isset(\$arResult["ITEMS"]) && is_array(\$arResult["ITEMS"])):

            foreach(\$arResult["ITEMS"] as \$arItem):
                \$this->AddEditAction(\$arItem['ID'], \$arItem['EDIT_LINK'], CIBlock::GetArrayByID(\$arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                \$this->AddDeleteAction(\$arItem['ID'], \$arItem['DELETE_LINK'], CIBlock::GetArrayByID(\$arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                // Determine image source for reviewer photo
                \$imageSrc = (\$arItem["PREVIEW_PICTURE"]["SRC"] ? \$arItem["PREVIEW_PICTURE"]["SRC"] : SITE_TEMPLATE_PATH.'/img/no_user_photo.png');
                ?>
                <div class="review-card" id="<?=\$this->GetEditAreaId(\$arItem['ID']);?>">
                    <div class="review-header">
                        <img src="<?=\$imageSrc?>" 
                             alt="<?=(\$arItem["PROPERTIES"]["REVIEWER_NAME"]["VALUE"] ? htmlspecialcharsbx(\$arItem["PROPERTIES"]["REVIEWER_NAME"]["VALUE"]) : htmlspecialcharsbx(\$arItem["NAME"]))?>" 
                             class="reviewer-photo"
                             loading="lazy"> <?// Added lazy loading ?>
                        <div class="reviewer-info">
                            <h4 class="reviewer-name">
                                <?=(!empty(\$arItem["PROPERTIES"]["REVIEWER_NAME"]["VALUE"]) ? htmlspecialcharsbx(\$arItem["PROPERTIES"]["REVIEWER_NAME"]["VALUE"]) : htmlspecialcharsbx(\$arItem["NAME"]))?>
                            </h4>
                            <?if(\$arParams["DISPLAY_DATE"]!="N" && \$arItem["DISPLAY_ACTIVE_FROM"]):?>
                                <p class="review-date"><?echo \$arItem["DISPLAY_ACTIVE_FROM"]?></p>
                            <?endif?>
                        </div>
                    </div>
                    <div class="review-body">
                        <?if(\$arParams["DISPLAY_PREVIEW_TEXT"]!="N" && \$arItem["PREVIEW_TEXT"]):?>
                            <p class="review-text"><?echo \$arItem["PREVIEW_TEXT"];?></p>
                        <?endif;?>
                        <?if(!empty(\$arItem["PROPERTIES"]["REVIEWED_ITEM_NAME"]["VALUE"])):?>
                            <p class="reviewed-item-name"><?echo htmlspecialcharsbx(\$arItem["PROPERTIES"]["REVIEWED_ITEM_NAME"]["VALUE"]);?></p>
                        <?endif;?>
                    </div>
                </div>
            <?endforeach;?>
        <? else: ?>
            <?// Optional: Display a message if no reviews are found ?>
            <p>Отзывов пока нет.</p>
        <? endif; ?>
    </div>
    <div class="slider-navigation-dots">
        <?/* TODO: Slider dots would need JS interaction and dynamic generation based on item count */?>
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</section>
