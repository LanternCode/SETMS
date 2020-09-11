<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <!-- META DATA -->
        <meta charset="utf-8">
        <meta name="author" content = "LanternCode & Japko7">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">
        <meta name="description" content = "DESCRIPTION">
        <meta name="keywords" content="KEYWORDS">
        <meta http-equiv="content-language" content="en">
        <meta name="robots" content="all">
        <title>SETMS</title>

        <!-- LINKS -->
        <link rel="shortcut icon" type="image/png" href="<?=base_url('images/icon.png')?>"/>
        <link rel="stylesheet" href="<?=base_url('css/main.css')?>">

        <!-- MOBILE APP SHORTCUT ICONS -->
        <!--
        <link href="images/icons/apple-touch-icon.png" rel="apple-touch-icon" />
        <link href="images/icons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />
        <link href="images/icons/apple-touch-icon-167x167.png" rel="apple-touch-icon" sizes="167x167" />
        <link href="images/icons/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
        <link href="images/icons/icon-hires.png" rel="icon" sizes="192x192" />
        <link href="images/icons/icon-normal.png" rel="icon" sizes="128x128" />
        -->

        <!-- SCRIPTS -->

    </head>
    <body>
        <header>
            <h1>SETMS</h1>
            <h2>The Safe Encrypted Task Management System</h2>
        </header>
        no siema
		<?php // isset($body) ? $this->load->view($body) : redirect(base_url()); ?>
		<?php if (isset($body)) $this->load->view($body); ?>

	</body>
</html>
