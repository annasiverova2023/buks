<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
// NOTE: The main <head> content, <html>, <body> tags, $APPLICATION->ShowPanel(), 
// and $APPLICATION->ShowHead() are now handled by /local/templates/bestmebel/template.php
// Also, the main style.css is linked in template.php.
// Google Fonts are also linked in template.php.
?>
<div class="page-wrapper">
    <header class="site-header">
        <div class="header-content grid-container">
            <div class="logo-container col-3">
                <div class="logo-graphic">
                    <span class="graphic-bar bar-green"></span>
                    <span class="graphic-bar bar-orange"></span>
                    <span class="graphic-bar bar-yellow"></span>
                </div>
                <a href="/" class="logo-text">BestMebel</a>
            </div>

            <div class="search-container col-6">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:search.form",
                    "header", // Custom template name
                    Array(
                        "USE_SUGGEST" => "N", // "N" as per user suggestion, can be "Y" if needed
                        "PAGE" => "/search/index.php" // Standard search page
                    ),
                    false
                );?>
            </div>

            <div class="contact-actions-container col-3">
                <div class="contact-info">
                    <a href="tel:+70000000000" class="phone-number"><?/* TODO: Update href dynamically if phone number changes via include */?>
                        <?\$APPLICATION->IncludeFile(
                            SITE_DIR."include/header_phone.php",
                            Array(),
                            Array("MODE"=>"html", "NAME"=>"Телефон в шапке", "SHOW_BORDER"=>false) 
                        );?>
                    </a>
                    <span class="working-hours">
                        <?\$APPLICATION->IncludeFile(
                            SITE_DIR."include/header_work_hours.php",
                            Array(),
                            Array("MODE"=>"html", "NAME"=>"Часы работы в шапке", "SHOW_BORDER"=>false) 
                        );?>
                    </span>
                </div>
                <div class="user-actions">
                    <a href="/profile" aria-label="Профиль" class="action-icon"><?/* TODO: Link to Bitrix profile */?>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    </a>
                    <a href="/favorites" aria-label="Избранное" class="action-icon"><?/* TODO: Link to Bitrix favorites */?>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                    </a>
                    <a href="/cart" aria-label="Корзина" class="action-icon"><?/* TODO: Link to Bitrix cart */?>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49A1.003 1.003 0 0 0 20 4H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    </a>
                </div>
                <button type="button" class="btn btn-primary btn-order-call"><?/* TODO: Make this a Bitrix form popup or link */?>Заказать звонок</button>
            </div>
        </div>
    </header>
    <nav class="main-navigation">
        <div class="nav-content grid-container">
            <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top",  // Using standard Bitrix 'top' menu template
                array(
                    "ROOT_MENU_TYPE" => "top",
                        "MAX_LEVEL" => "2", // Allows for one level of dropdowns
                        "CHILD_MENU_TYPE" => "left", // Defines the menu type for dropdown items
                        "USE_EXT" => "Y", // Important for extending menu with dynamic items (e.g., catalog sections)
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                        "MENU_CACHE_TYPE" => "A", // Standard caching
                        "MENU_CACHE_TIME" => "3600", // Cache for 1 hour
                    "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => array()
                ),
                false
            );?>
        </div>
    </nav>
    <div class="page-body-container grid-container"> 
        <aside class="sidebar-catalog col-3">
            <h3>Каталог мебели</h3>
            <?
            // Sidebar Category List
            \$APPLICATION->IncludeComponent(
                "bitrix:iblock.section.list",
                "sidebar_categories", // Name of our new custom template
                Array(
                    "IBLOCK_TYPE" => "catalog", // Placeholder - Same as main page categories IBLOCK_TYPE
                    "IBLOCK_ID" => "1",         // Placeholder - Same as main page categories IBLOCK_ID
                    "SECTION_ID" => "",         // Top level categories
                    "SECTION_CODE" => "",
                    "COUNT_ELEMENTS" => "N",    // Optional: "Y" if you want to show count
                    "TOP_DEPTH" => "1",         // Show only top-level categories for a simple sidebar list
                    "SECTION_FIELDS" => array("NAME", "CODE"),
                    "SECTION_USER_FIELDS" => array(""), // Add any UF needed for icons later, e.g. UF_ICON_CLASS
                    "SECTION_URL" => "/catalog/#SECTION_CODE#/",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_GROUPS" => "Y",
                    "ADD_SECTIONS_CHAIN" => "N" // Usually "N" for sidebar lists
                ),
                false
            );
            ?>
            <?
            // Sidebar Sales Leaders
            \$APPLICATION->IncludeComponent(
                "bitrix:catalog.top",
                "sidebar_sales_leaders", // Name of our new custom template
                Array(
                    "IBLOCK_TYPE" => "catalog",  // Placeholder - Same catalog IBLOCK_TYPE
                    "IBLOCK_ID" => "1",          // Placeholder - Same catalog IBLOCK_ID
                    "ELEMENT_SORT_FIELD" => "shows", // Example: sort by views or a custom "sales_leader_sort" property
                    "ELEMENT_SORT_ORDER" => "desc",
                    "ELEMENT_SORT_FIELD2" => "name",
                    "ELEMENT_SORT_ORDER2" => "asc",
                    "FILTER_NAME" => "", // Optional filter name if you have a pre-defined filter for sales leaders
                    // "PROPERTY_CODE" => array("HIT", "SALE", "NEW"), // Example properties to filter by if needed
                    "ELEMENT_COUNT" => "3", // Show 3 items
                    "LINE_ELEMENT_COUNT" => "1", // Display 1 item per line in this context
                    "PRICE_CODE" => array("BASE"), // Basic price type, adjust as per your setup
                    "USE_PRICE_COUNT" => "N",
                    "SHOW_PRICE_COUNT" => "1",
                    "PRICE_VAT_INCLUDE" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_GROUPS" => "Y",
                    "DISPLAY_COMPARE" => "N",
                    "COMPARE_PATH" => "",
                    "USE_PRODUCT_QUANTITY" => "N",
                    "PRODUCT_PROPERTIES" => array(), // Add properties you want to display if not standard fields
                    "OFFERS_LIMIT" => "0", // No offers for sidebar items usually
                    // Action variables for add to cart, not typically used in a simple sales leader list
                    "ACTION_VARIABLE" => "action",
                    "PRODUCT_ID_VARIABLE" => "id",
                    "SECTION_ID_VARIABLE" => "SECTION_ID",
                    // Display properties
                    "DISPLAY_IMG_WIDTH" => "70", // For consistency with static version
                    "DISPLAY_IMG_HEIGHT" => "70",
                    // These are custom params often added to catalog.top templates, may not be in base.
                    // We will handle them in the template directly or use standard fields/props.
                    // "DISPLAY_RATING" => "Y", 
                    // "DISPLAY_OLD_PRICE" => "Y",
                ),
                false
            );
            ?>
        </aside>
        <?// The opening <main class="main-content col-9"> tag is REMOVED from header.php ?>
        <?// It is now part of the root template.php which uses $APPLICATION->ShowViewContent('main_content') ?>
