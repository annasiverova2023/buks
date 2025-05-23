<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
// The <main class="main-content"> was opened in the root template.php
// The <div class="page-body-container grid-container"> was opened in header.php
// The <div class="page-wrapper"> was opened in header.php
?>
                    <?// This comment was in the original file, referring to the main content area handled by template.php: </main> /* closes main-content col-9 */ ?>
                    <?// The main content area is now directly within <main class="main-content"> from template.php ?>
                    <?// Thus, no </main> tag is needed here as it's closed in template.php after ShowViewContent ?>

                </div> <?/* closes page-body-container grid-container (opened in header.php) */?>
            
            <footer class="site-footer">
                <div class="footer-content grid-container">
                    <div class="footer-column footer-contacts col-3">
                        <div class="footer-logo">
                            <a href="/" class="logo-text">BestMebel</a>
                        </div>
                        <a href="tel:+70000000000" class="footer-phone"><?/* TODO: Update href dynamically if phone number changes via include */?>
                            <?\$APPLICATION->IncludeFile(
                                SITE_DIR."include/footer_phone.php",
                                Array(),
                                Array("MODE"=>"html", "NAME"=>"Телефон в подвале", "SHOW_BORDER"=>false) 
                            );?>
                        </a>
                        <div class="footer-social-icons">
                            <a href="#" aria-label="VK"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon_vk_placeholder.png" alt="VK"></a>
                            <a href="#" aria-label="OK"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon_ok_placeholder.png" alt="OK"></a>
                            <a href="#" aria-label="YouTube"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon_youtube_placeholder.png" alt="YouTube"></a>
                            <a href="#" aria-label="Telegram"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon_telegram_placeholder.png" alt="Telegram"></a>
                        </div>
                    </div>

                    <div class="footer-column footer-nav col-3">
                        <h4>Покупателям</h4>
                        <?\$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "footer_column_menu", // New custom template
                            Array(
                                "ROOT_MENU_TYPE" => "bottom_buyers", // Descriptive menu type
                                "MAX_LEVEL" => "1",
                                "USE_EXT" => "N",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y"
                            ),
                            false
                        );?>
                    </div>

                    <div class="footer-column footer-nav col-3">
                        <h4>Компания</h4>
                        <?\$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "footer_column_menu", // Re-using the same custom template
                            Array(
                                "ROOT_MENU_TYPE" => "bottom_company", // Descriptive menu type
                                "MAX_LEVEL" => "1",
                                "USE_EXT" => "N",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y"
                            ),
                            false
                        );?>
                    </div>

                    <div class="footer-column footer-company-details col-3">
                        <h4>Реквизиты</h4>
                        <?\$APPLICATION->IncludeFile(
                            SITE_DIR."include/footer_company_details.php",
                            Array(),
                            Array("MODE"=>"html", "NAME"=>"Реквизиты компании в подвале", "SHOW_BORDER"=>false) 
                        );?>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="grid-container">
                        <p class="col-12">&copy; <?=date("Y")?> BestMebel. Все права защищены. Информация на сайте не является публичной офертой.</p>
                    </div>
                </div>
            </footer>

        </div> <?/* closes page-wrapper (opened in header.php) */?>
        <?
        // </body> and </html> are now handled by /local/templates/bestmebel/template.php
        ?>
