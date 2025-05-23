<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("BestMebel - Интернет-магазин качественной мебели");
// The $APPLICATION->ShowViewContent("main_content") in template.php will display the content below.
?>

<section class="hero-section">
    <div class="pre-hero-banners">
        <div class="mini-banner">
            <svg class="mini-banner-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px"><path d="M9 21.57C8.45 21.57 8 21.12 8 20.57V19H5C3.34 19 2 17.66 2 16V6C2 4.34 3.34 3 5 3H19C20.66 3 22 4.34 22 6V16C22 17.66 20.66 19 19 19H16V20.57C16 21.12 15.55 21.57 15 21.57H9ZM19 5H5C4.45 5 4 5.45 4 6V16C4 16.55 4.45 17 5 17H19C19.55 17 20 16.55 20 16V6C20 5.45 19.55 5 19 5Z M12 15L7 10H10V7H14V10H17L12 15Z "/></svg>
            <span>Гарантия</span>
        </div>
        <div class="mini-banner">
            <svg class="mini-banner-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px"><path d="M20 4H4C2.89 4 2.01 4.89 2.01 6L2 18C2 19.11 2.89 20 4 20H20C21.11 20 22 19.11 22 18V6C22 4.89 21.11 4 20 4ZM20 18H4V12H20V18ZM20 8H4V6H20V8Z"/></svg>
            <span>Рассрочка</span>
        </div>
        <div class="mini-banner">
             <svg class="mini-banner-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px"><path d="M20 8H17V4H7V8H4L12 16L20 8ZM3 18V20H21V18H3Z"/></svg>
            <span>Доставка</span>
        </div>
    </div>

    <div class="hero-banner-content">
        <div class="hero-text-content">
            <h1>Найдёте дешевле — мы сделаем скидку!</h1>
            <p class="subheadline">Только лучшая мебель по самым выгодным ценам. Сравните и убедитесь!</p>
            <a href="#catalog" class="btn btn-primary btn-hero">Подробнее</a> <?/* TODO: Link to actual catalog page */?>
        </div>
        <div class="hero-image-area">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/placeholder_hero_chair.png" alt="Комфортное кресло со скидкой"> <?/* TODO: Replace with actual image path if available, or use a more generic placeholder service if SITE_TEMPLATE_PATH images aren't possible yet for the worker. For now, assuming an image will be placed here later. */?>
            <div class="discount-icons-overlay">
                <span class="discount-badge">-25%</span>
                <span class="discount-badge">HIT</span>
            </div>
        </div>
    </div>
</section>

<?// Section for Product Categories (Main Page Tiles) ?>
<?$APPLICATION->IncludeComponent(
	"bitrix:iblock.section.list",
	"main_page_tiles", // Name of our custom template
	Array(
		"IBLOCK_TYPE" => "catalog", // Placeholder - Replace with actual IBLOCK_TYPE
		"IBLOCK_ID" => "1",         // Placeholder - Replace with actual IBLOCK_ID for furniture categories
		"SECTION_ID" => \$_REQUEST["SECTION_ID"], // Or empty if top level
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "N", // Y to show element count, N if not needed for tiles
		"TOP_DEPTH" => "2",      // Or 1 if only top-level categories are needed
		"SECTION_FIELDS" => array("NAME", "PICTURE", "DESCRIPTION", "UF_*"), // Specify fields, UF_* for User Fields
		"SECTION_USER_FIELDS" => array("UF_COLOR_CLASS", "UF_ITEM_SIZE_CLASS"), // Example User Fields for tile color and size
		"SECTION_URL" => "/catalog/#SECTION_CODE#/", // URL template for section
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"ADD_SECTIONS_CHAIN" => "N" // Usually N on homepage sections listing
	),
	false
);?>

<?// Section for User Reviews ?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"user_reviews", // Name of our custom template
	Array(
		"IBLOCK_TYPE" => "reviews",  // Placeholder - Replace with actual IBLOCK_TYPE for reviews
		"IBLOCK_ID" => "2",          // Placeholder - Replace with actual IBLOCK_ID for reviews
		"NEWS_COUNT" => "3",         // Show 3 reviews (for the static design)
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",         // No filter for now
		"FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DATE_ACTIVE_FROM"), // Fields to select
		"PROPERTY_CODE" => array("REVIEWER_NAME", "REVIEWED_ITEM_NAME"), // Example property codes
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",          // No detail page for reviews in this context
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "", // No truncation for preview text
		"ACTIVE_DATE_FORMAT" => "j F Y", // e.g., 15 марта 2024
		"SET_TITLE" => "N",          // Don't set browser title from this component
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default", // Or a custom one if pagination is needed
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N", // No pagination for 3 static items
		"PAGER_TITLE" => "Отзывы",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>

<?// Other homepage content (like product catalog, reviews sections) will be added here later using Bitrix components. ?>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
