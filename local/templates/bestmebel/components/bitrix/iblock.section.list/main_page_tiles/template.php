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
<section class="product-catalog-section">
    <h2 class="catalog-title">Интернет-магазин мебели BestMebel в Санкт-Петербурге</h2> <?/* TODO: Title can be dynamic or a parameter */?>
    <div class="catalog-grid">
        <?/* TODO: Replace this static HTML with a loop through $arResult["SECTIONS"] */?>
        <?/* Example of how one might access custom user fields (UF_COLOR_CLASS, UF_ITEM_SIZE_CLASS)
             Make sure these fields are created in the Iblock section settings in Bitrix admin.
        foreach(\$arResult["SECTIONS"] as \$arSection): ?>
            <a href="<?=\$arSection["SECTION_PAGE_URL"]?>" class="product-card <?=\$arSection["UF_COLOR_CLASS"]?> <?=\$arSection["UF_ITEM_SIZE_CLASS"]?>">
                <img src="<?=(\$arSection["PICTURE"]["SRC"] ? \$arSection["PICTURE"]["SRC"] : SITE_TEMPLATE_PATH.'/img/no_photo_section.png')?>" 
                     alt="<?=\$arSection["NAME"]?>">
                <div class="card-content">
                    <h3><?=\$arSection["NAME"]?></h3>
                    <p class="price-from">от XXXX руб.</p> <?/* Price info usually not in section list directly */?>
                </div>
            </a>
        <? endforeach; */?>

        <?
        // Ensure $arResult["SECTIONS"] is available and is an array
        if (isset(\$arResult["SECTIONS"]) && is_array(\$arResult["SECTIONS"])):

            foreach(\$arResult["SECTIONS"] as \$arSection):
                \$this->AddEditAction(\$arSection['ID'], \$arSection['EDIT_LINK'], CIBlock::GetArrayByID(\$arSection["IBLOCK_ID"], "SECTION_EDIT"));
                \$this->AddDeleteAction(\$arSection['ID'], \$arSection['DELETE_LINK'], CIBlock::GetArrayByID(\$arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));

                // Define default classes if user fields are not set or empty
                \$colorClass = !empty(\$arSection["UF_COLOR_CLASS"]) ? htmlspecialcharsbx(\$arSection["UF_COLOR_CLASS"]) : 'card-color-default'; // Default color class
                \$sizeClass = !empty(\$arSection["UF_ITEM_SIZE_CLASS"]) ? htmlspecialcharsbx(\$arSection["UF_ITEM_SIZE_CLASS"]) : 'item-1x1'; // Default size class

                // Determine image source
                \$imageSrc = (\$arSection["PICTURE"]["SRC"] ? \$arSection["PICTURE"]["SRC"] : SITE_TEMPLATE_PATH.'/img/no_photo_section.png');
                ?>
                <a  id="<?=\$this->GetEditAreaId(\$arSection['ID']);?>"
                    href="<?=\$arSection["SECTION_PAGE_URL"]?>" 
                    class="product-card <?=\$colorClass?> <?=\$sizeClass?>">
                    
                    <img src="<?=\$imageSrc?>" 
                         alt="<?=\$arSection["NAME"]?>" 
                         loading="lazy"> <?// Added lazy loading for images ?>
                         
                    <div class="card-content">
                        <h3><?=\$arSection["NAME"]?></h3>
                        <?// Price information is typically not part of iblock.section.list.
                           // This might require custom logic or another component if "price from" is needed.
                           // For now, we can use a placeholder or omit it.
                        ?>
                        <p class="price-from">Подробнее</p> <?// Changed from "от XXXX руб." to a generic CTA ?>
                    </div>
                </a>
            <?endforeach;?>
        <? else: ?>
            <?// Optional: Display a message if no sections are found ?>
            <p>Категории не найдены.</p>
        <? endif; ?>
    </div>
</section>
