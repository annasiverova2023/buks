<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <meta charset="<?= LANG_CHARSET ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/style.css">
    <!-- Add more stylesheets here -->
</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>

<?php include($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/header.php"); ?>

<main class="main-content">
    <?php $APPLICATION->ShowViewContent("main_content"); ?>
</main>

<?php include($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/footer.php"); ?>

<!-- JS Scripts -->
<script src="<?= SITE_TEMPLATE_PATH ?>/js/main.js"></script>
<!-- Add more JS if needed -->

</body>
</html>
