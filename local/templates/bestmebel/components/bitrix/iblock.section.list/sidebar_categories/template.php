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

// The category-list class is defined in the main style.css
// The ::before pseudo-element for icons is also in main style.css
?>
<?if (isset(\$arResult["SECTIONS"]) && is_array(\$arResult["SECTIONS"]) && count(\$arResult["SECTIONS"]) > 0):?>
    <ul class="category-list">
    <?foreach(\$arResult["SECTIONS"] as \$arSection):
        \$this->AddEditAction(\$arSection['ID'], \$arSection['EDIT_LINK'], CIBlock::GetArrayByID(\$arSection["IBLOCK_ID"], "SECTION_EDIT"));
        \$this->AddDeleteAction(\$arSection['ID'], \$arSection['DELETE_LINK'], CIBlock::GetArrayByID(\$arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
    ?>
        <li id="<?=\$this->GetEditAreaId(\$arSection['ID']);?>">
            <a href="<?=\$arSection["SECTION_PAGE_URL"]?>">
                <?// Icon handling: Current CSS uses ::before. If specific icons per category are needed,
                   // that would involve User Fields (e.g., UF_ICON_CLASS) on the Iblock sections
                   // and then outputting that class here or using the UF for an <img> src.
                   // For now, relying on the generic ::before styling.
                ?>
                <?=htmlspecialcharsbx(\$arSection["NAME"])?>
                <?if (\$arParams["COUNT_ELEMENTS"] === "Y" && \$arSection["ELEMENT_CNT"]):?>
                    (<?echo \$arSection["ELEMENT_CNT"]?>)
                <?endif;?>
            </a>
        </li>
    <?endforeach;?>
    </ul>
<?else:?>
    <p style="padding-left:5px;">Разделы каталога не найдены.</p>
<?endif;?>
