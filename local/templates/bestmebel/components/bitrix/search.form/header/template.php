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
\$this->setFrameMode(true);?>
<form action="<?=\$arResult["FORM_ACTION"]?>" method="get" class="search-form">
    <input type="search" name="q" value="" placeholder="Поиск среди 90 000 товаров" class="search-input" maxlength="50" autocomplete="off">
    <button type="submit" name="s" class="search-button" aria-label="Поиск">
        <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20px" height="20px"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
    </button>
</form>
