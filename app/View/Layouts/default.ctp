<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <?php
    echo $this->Html->css('http://mplus-fonts.osdn.jp/webfonts/basic_latin/mplus_webfonts.css');
    echo $this->Html->css('http://mplus-fonts.osdn.jp/webfonts/general-j/mplus_webfonts.css');
    echo $this->Html->css('bootstrap.css');
    echo $this->Html->css('bootstrap-xlgrid.min.css');
    echo $this->Html->css('jquery.filthypillow.css');
    echo $this->Html->css('icons.css');
    echo $this->Html->css('style.css');
    echo $this->Html->css('buttons.css');
    echo $this->Html->css('navbar-color.css');

    echo $this->Html->script('jquery-1.12.0');
    echo $this->Html->script('bootstrap');
    echo $this->Html->script('moment');
    echo $this->Html->script('moment-timezone-with-data');
    echo $this->Html->script('jquery.countdown');
    echo $this->Html->script('jquery.filthypillow');
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url('/'); ?>DataTables/datatables.css"/>
    <script type="text/javascript" src="<?php echo $this->Html->url('/'); ?>DataTables/datatables.js"></script>

    <!--    Favicon Stuff-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->Html->url('/'); ?>img/favicon.ico"/>
    <link rel="icon" type="image/x-icon" href="<?php echo $this->Html->url('/'); ?>img/favicon.ico"/>

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">

    <meta name="description" content="The Only Centralised English Resource For iDOLM@STER Cinderella Girls Starlight Stage! English translations
    for all cards and idols plus event and gacha countdowns.">
    <meta name="keywords" content="deresute, iDOLM@STER, idolmaster, cinderella girls, Starlight Stage, シンデレラガールズ,
    アイドルマスター, スターライトステージ, デレステ, cards, card, translation, countdown, Android game, rhythm game, ios game">


</head>
<body onload="startTime()" data-spy="scroll" data-target=".scrollspy">
<div class="container-fluid" id="contentContainer">
    <div class="row">
        <div class="col-lg-12">
            <noscript>
                <div class="alert alert-danger" role="alert">This site makes extensive use of JavaScript.
                    Please enable JavaScript in your browser. Here are the <a href="http://www.enable-javascript.com/" target="_blank">
                        instructions how to enable JavaScript in your web browser</a></div>
            </noscript>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="container-fluid">

                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <?php echo $this->Html->link($this->Html->image('favicon.ico',
                                array('alt' => 'Usamin S@tellite', 'class' => 'img-responsive')),
                                array('controller' => 'pages', 'action' => 'display', 'home'),
                                array('class' => 'navbar-brand', 'escape' => false, 'style' => 'padding-top: 0;')); ?>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><?php echo $this->Html->link('<span class=" glyphicon glyphicon-home"></span> Home',
                                        array('controller' => 'pages', 'action' => 'display', 'home'), array('escape' => false)); ?></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th-large"></span> Cards<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><?php
                                            echo "<span style='color: #ffe0e9; padding-left: 10px'>Gallery</span>";
                                            echo $this->Html->link('Full',
                                                array('controller' => 'cards', 'action' => 'index'),
                                                array('escape' => false, 'style' => 'display: inline'));
                                            echo $this->Html->link('Lite',
                                                array('controller' => 'cards', 'action' => 'indexlite'),
                                                array('escape' => false, 'style' => 'display: inline'));?>
                                        </li>
                                    </ul>
                                </li>
                                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-bullhorn"></span> Events',
                                        array('controller' => 'events', 'action' => 'index'), array('escape' => false)); ?></li>
                                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-music"></span> Songs',
                                        array('controller' => 'songs', 'action' => 'index'), array('escape' => false)); ?></li>
                                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-heart"></span> Idols',
                                        array('controller' => 'idols', 'action' => 'index'), array('escape' => false)); ?></li>
                                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-star"></span> Gacha',
                                        array('controller' => 'gachas', 'action' => 'index'), array('escape' => false)); ?></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-option-vertical"></span>
                                        Other<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> Translations',
                                                '/translations', array('escape' => false)); ?></li>
                                        <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-info-sign"></span> About Starlight Stage',
                                                '/about#game', array('escape' => false)); ?></li>
                                        <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span> About this Site',
                                                '/about#aboutus', array('escape' => false)); ?></li>
                                        <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-envelope"></span> Contact Me',
                                                '/about#contact', array('escape' => false)); ?></li>
                                        <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-book"></span> Credits',
                                                '/about#creditsAndSources', array('escape' => false)); ?></li>
                                        <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-usd"></span> Donate',
                                                '/donate', array('escape' => false)); ?></li>
                                    </ul>
                                </li>
                                <?php
                                if ($this->Session->read('Auth.User') && $this->Session->read('Auth.User.role') == 'admin') {
                                ?>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><?php echo $this->Html->link('Control Panel', array('controller' => 'users', 'action' => 'controlpanel')); ?></li>
                                            <li><?php echo $this->Html->link('Cards', array('controller' => 'cards', 'action' => 'adminindex')); ?></li>
                                            <li><?php echo $this->Html->link('Events', array('controller' => 'events', 'action' => 'adminindex')); ?></li>
                                            <li><?php echo $this->Html->link('Songs', array('controller' => 'songs', 'action' => 'adminindex')); ?></li>
                                            <li><?php echo $this->Html->link('Idols', array('controller' => 'idols', 'action' => 'adminindex')); ?></li>
                                            <li><?php echo $this->Html->link('Gacha', array('controller' => 'gachas', 'action' => 'adminindex')); ?></li>
                                        </ul>
                                    </li>
                                <?php
                                    echo '<li>' . $this->Html->link('Log Out', array('controller' => 'users', 'action' => 'logout')) . '</li>';
                                }
                                ?>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <p class="timedate"><span class="navbar-text" id="clock"></span><span class="navbar-text clock">JST</span><span
                                        class="navbar-text" id="date"></span></p>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Get Content -->
    <div class="mobileOnly">
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>
        <a href="#" id="back-to-top" title="Back to top"><span class="glyphicon glyphicon-chevron-up" style="font-size: 1.5em"></span></a>
    </div>
</div>
<!-- End get Content -->
</body>
<footer>
    <div class="row text-center center-block">
        <div class="col-lg-12">
            <em style="font-size: xx-small">Usamin S@tellite on <?php echo $version['Website']['resVersion'] ?> - Last Database Update: <?php echo
    $version['Website']['lastUpdated']?></em>
            </br>
            <em style="font-size: xx-small"> Like this website and use it often? Please consider <?php echo $this->Html->link('donating',
                    '/donate'); ?>! It costs $4 per month for hosting costs and $5 per year for the domain.</em>
        </div>
    </div>
</footer>

<script>
    function startTime() {
        var jstNow = moment().tz('Japan');
        var $clock = $('#clock');
        $clock.html(jstNow.format("HH:mm:ss"));
        var t = setTimeout(startTime, 500);
    };

    $(function () {
        var jstNow = moment().tz('Japan');
        $('#date').html(jstNow.format("YYYY-MM-DD"));
    });

    /*Menu handler*/
    $(function(){
        var url = window.location;
        // Will only work if string in href matches with location
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');

        // Relative URLs
        $('ul.nav a').filter(function() {
            var pageName = location.pathname.substring(location.pathname.lastIndexOf("/") + 1);
            var lowercased = location.pathname.replace(pageName, pageName.toLowerCase());
            return this.href == location.protocol + '//' + location.host + lowercased;
        }).parent().addClass('active');
    });

    $(function() {
        var $backtotop = $('#back-to-top');
        if ($backtotop.length) {
            var scrollTrigger = 200, // px
                backToTop = function () {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $backtotop.addClass('show');
                    } else {
                        $backtotop.removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function () {
                backToTop();
            });
            $backtotop.on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });
        }
    });
</script>

</html>
