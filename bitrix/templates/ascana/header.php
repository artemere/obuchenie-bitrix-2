<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");



$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");

?> <?$APPLICATION->IncludeComponent(
    "bitrix:catalog.section.list",
    "",
    Array(
        "IBLOCK_TYPE" => "books",
        "IBLOCK_ID" => "6",
        "SECTION_ID" => $_REQUEST["SECTION_ID"],
        "SECTION_URL" => "/e-store/books/#SECTION_ID#/",
        "COUNT_ELEMENTS" => "Y",
        "DISPLAY_PANEL" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600"
    )
);?>
<hr />

<?$APPLICATION->IncludeComponent(
    "bitrix:catalog.top",
    "",
    Array(
        "IBLOCK_TYPE" => "books",
        "IBLOCK_ID" => "6",
        "ELEMENT_SORT_FIELD" => "sort",
        "ELEMENT_SORT_ORDER" => "asc",
        "SECTION_URL" => "/e-store/books/#SECTION_ID#/",
        "DETAIL_URL" => "/e-store/books/#SECTION_ID#/#ELEMENT_ID#/",
        "BASKET_URL" => "/personal/cart/",
        "ACTION_VARIABLE" => "action",
        "PRODUCT_ID_VARIABLE" => "id",
        "SECTION_ID_VARIABLE" => "SECTION_ID",
        "DISPLAY_COMPARE" => "N",
        "ELEMENT_COUNT" => "3",
        "LINE_ELEMENT_COUNT" => "1",
        "PROPERTY_CODE" => Array(),
        "PRICE_CODE" => Array("RETAIL"),
        "USE_PRICE_COUNT" => "N",
        "SHOW_PRICE_COUNT" => "1",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600"
    )
);?>

<h2>Видео-новости</h2>

<?$APPLICATION->IncludeComponent(
    "bitrix:player",
    "",
    Array(
        "PLAYER_TYPE" => "auto",
        "USE_PLAYLIST" => "N",
        "PATH" => "/upload/intro.flv",
        "WIDTH" => "400",
        "HEIGHT" => "324",
        "FULLSCREEN" => "Y",
        "SKIN_PATH" => "/bitrix/components/bitrix/player/mediaplayer/skins",
        "SKIN" => "bitrix.swf",
        "CONTROLBAR" => "bottom",
        "WMODE" => "transparent",
        "HIDE_MENU" => "N",
        "SHOW_CONTROLS" => "Y",
        "SHOW_STOP" => "N",
        "SHOW_DIGITS" => "Y",
        "CONTROLS_BGCOLOR" => "FFFFFF",
        "CONTROLS_COLOR" => "000000",
        "CONTROLS_OVER_COLOR" => "000000",
        "SCREEN_COLOR" => "000000",
        "WMODE_WMV" => "window",
        "AUTOSTART" => "N",
        "REPEAT" => "N",
        "VOLUME" => "90",
        "DISPLAY_CLICK" => "play",
        "MUTE" => "N",
        "HIGH_QUALITY" => "Y",
        "ADVANCED_MODE_SETTINGS" => "N",
        "BUFFER_LENGTH" => "10",
        "DOWNLOAD_LINK_TARGET" => "_self"
    ),
    false
);?>

<!-- --><!-- -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>


<!DOCTYPE HTML>
<html>
<head>
    <title>$APPLICATION->SetTitle();</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>
<body>
<div id="page-wrapper">

    <!-- Header -->
    <div id="header">

        <!-- Logo -->
        <h1><a href="index.html" id="logo">Arcana <em>by HTML5 UP</em></a></h1>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li class="current"><a href="index.html">Home</a></li>
                <li>
                    <a href="#">Dropdown</a>
                    <ul>
                        <li><a href="#">Lorem dolor</a></li>
                        <li><a href="#">Magna phasellus</a></li>
                        <li><a href="#">Etiam sed tempus</a></li>
                        <li>
                            <a href="#">Submenu</a>
                            <ul>
                                <li><a href="#">Lorem dolor</a></li>
                                <li><a href="#">Phasellus magna</a></li>
                                <li><a href="#">Magna phasellus</a></li>
                                <li><a href="#">Etiam nisl</a></li>
                                <li><a href="#">Veroeros feugiat</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Veroeros feugiat</a></li>
                    </ul>
                </li>
                <li><a href="left-sidebar.html">Left Sidebar</a></li>
                <li><a href="right-sidebar.html">Right Sidebar</a></li>
                <li><a href="two-sidebar.html">Two Sidebar</a></li>
                <li><a href="no-sidebar.html">No Sidebar</a></li>
            </ul>
        </nav>

    </div>