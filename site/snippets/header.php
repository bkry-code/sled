<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    
    <?php echo css('assets/bootstrap/css/bootstrap.min.css') ?>
    <?php echo css('assets/css/main.css') ?>
</head>
<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1><a href="<?php echo url() ?>"><?php echo $site->title()->html() ?></a></h1>
                </div>
            </div>

            <?php snippet('menu') ?>
        </div>
    </header>        