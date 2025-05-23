<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
// $ELEMENT_ID or $ELEMENT_CODE will typically be passed via URL in a SEF setup
// For this basic page, we might need to set it manually for testing or expect it as a GET param.
// For now, we'll assume it's somehow available or will be set for testing.
// Example: $ELEMENT_ID = $_REQUEST['ELEMENT_ID']; 

$APPLICATION->IncludeComponent(
    "bitrix:catalog.element",
    "product_detail_v1", // Our new custom template name
    Array(
        "IBLOCK_TYPE" => "catalog", // Placeholder - Same as other catalog components
        "IBLOCK_ID" => "1",         // Placeholder - Same as other catalog components
        "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"], // Expect ELEMENT_ID from URL for now
        "ELEMENT_CODE" => "", // Or ELEMENT_CODE
        "SECTION_ID" => $_REQUEST["SECTION_ID"],
        "SECTION_CODE" => "",
        "PROPERTY_CODE" => array("ARTNUMBER", "MANUFACTURER", "MATERIAL", "COLOR", "SIZE", "MORE_PHOTO"), // Example properties
        "OFFERS_LIMIT" => "0", // No offers handling in this basic version
        "PRICE_CODE" => array("BASE"),
        "USE_PRICE_COUNT" => "N",
        "SHOW_PRICE_COUNT" => "1",
        "PRICE_VAT_INCLUDE" => "Y",
        "USE_PRODUCT_QUANTITY" => "Y", // Show quantity input
        "ADD_PROPERTIES_TO_BASKET" => "Y",
        "PARTIAL_PRODUCT_PROPERTIES" => "N",
        "PRODUCT_PROPERTIES" => array(), // Define which props go to basket
        "LINK_IBLOCK_TYPE" => "",
        "LINK_IBLOCK_ID" => "",
        "LINK_PROPERTY_SID" => "",
        "LINK_ELEMENTS_URL" => "",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_GROUPS" => "Y",
        "SET_TITLE" => "Y", // Set browser title from element name
        "SET_BROWSER_TITLE" => "Y",
        "BROWSER_TITLE" => "-", // - to use element name
        "SET_META_KEYWORDS" => "Y",
        "META_KEYWORDS" => "-",
        "SET_META_DESCRIPTION" => "Y",
        "META_DESCRIPTION" => "-",
        "SET_LAST_MODIFIED" => "N",
        "ADD_SECTIONS_CHAIN" => "Y", // Add section path to breadcrumbs
        "ADD_ELEMENT_CHAIN" => "Y",  // Add element name to breadcrumbs
        "USE_ELEMENT_COUNTER" => "Y", // Increment view counter
        "SHOW_DEACTIVATED" => "N",
        "BACKGROUND_IMAGE" => "-", // No background image
        // SEF parameters (not fully configured here, would be part of bitrix:catalog)
        "SECTION_URL" => "/catalog/#SECTION_CODE#/",
        "DETAIL_URL" => "/catalog/#SECTION_CODE#/#ELEMENT_CODE#/", 
        // Action variables
        "ACTION_VARIABLE" => "action",
        "PRODUCT_ID_VARIABLE" => "id",
    ),
    false
);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
