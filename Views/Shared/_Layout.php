﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $ViewBag->Title ?> - My PHP MVC</title>
    <?php
        RenderStyle("bootstrap");
        RenderStyle("site");
    ?>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- @Html.ActionLink("Application name", "Index", "Home", new { area = "" }, new { @class = "navbar-brand" }) -->
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><?php HTML::ActionLink("Home", "Index", "Home"); ?></li>
                    <li><?php HTML::ActionLink("About", "About", "Home"); ?></li>
                    <li><?php HTML::ActionLink("Contact", "Contact", "Home"); ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container body-content">
        <?=$ViewPage?>
        <hr />
        <footer>
            <p>All time &copy; JOHN WESLEY M</p>
        </footer>
    </div>

    <?php
        RenderScript("jquery-1.10.2.min");
        RenderScript("bootstrap");
        RenderScript("respond");
    ?>
    <?php RenderSection("scripts", FALSE) ?>
</body>
</html>