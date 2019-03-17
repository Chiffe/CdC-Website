<!DOCTYPE html>
<html lang="fr">
<head>
    <?php echo $this->Html->charset(); ?>
    <title><?php echo $title_layout; ?></title>
    <?php
    use Cake\Core\Configure;
    echo $this->Html->meta('icon');
    echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1'), NULL, array('inline' => false));
    echo $this->Html->meta(array('name' => 'author', 'content' => 'Bew-Works'), NULL, array('inline' => false));
    //echo $this->Html->meta(array('name' => 'robots', 'content' => 'index, follow'), NULL, array('inline' => false));
    echo $this->fetch('meta');

    echo $this->Html->css(['base', 'bootstrap.min', 'main'], ['async']);
    echo $this->fetch('css');
    ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-64466679-2', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>
<div id="container">
    <div id="menu_button" role="button" class="menu_hide">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div id="menu">
        <div class="menu_container">
            <div class="content">
                <?php echo $this->Html->image('logo_cdc_menu.png', ['class' => 'img-responsive center-block', 'height' => 140, 'width' => 210]); ?>
                <div class="block_menu">
                    <ul>
                        <li><?php echo $this->Html->link('accueil', ['controller' => 'pages', 'action' => 'home']); ?></li>
                        <li><?php echo $this->Html->link('nos services', ['controller' => 'pages', 'action' => 'services']); ?></li>
                        <!--<li><?php echo $this->Html->link('à propos', '#'); ?></li>-->
                    </ul>
                </div>
                <div class="rs">
                    <p>
                        <?php
                        echo $this->Html->link('<span class="sprite_main icon_menu_fb"></span>', 'https://www.facebook.com/comdechef/', ['escape' => false, 'target' => '_blank', 'rel' => 'nofollow', 'data-toggle' => 'tooltip', 'title' => 'Facebook']);
                        echo $this->Html->link('<span class="sprite_main icon_menu_twitter"></span>', 'https://twitter.com/ComdeChef', ['escape' => false, 'target' => '_blank', 'rel' => 'nofollow', 'data-toggle' => 'tooltip', 'title' => 'Twitter']);
                        /*echo $this->Html->link('<span class="sprite_main icon_menu_linkedin"></span>', '#', ['escape' => false, 'target' => '_blank', 'rel' => 'nofollow', 'data-toggle' => 'tooltip', 'title' => 'LinkedIn']);
                        echo $this->Html->link('<span class="sprite_main icon_menu_google"></span>', '#', ['escape' => false, 'target' => '_blank', 'rel' => 'nofollow', 'data-toggle' => 'tooltip', 'title' => 'Google+']);
                        echo $this->Html->link('<span class="sprite_main icon_menu_viadeo"></span>', '#', ['escape' => false, 'target' => '_blank', 'rel' => 'nofollow', 'data-toggle' => 'tooltip', 'title' => 'Viadeo']);*/
                        ?>
                    </p>
                </div>
            </div>
            <div class="menu_footer">
                <div id="menu_contact"><p>Un projet ?</p></div>
                <p><span class="email_contact">Email protégé par JS</span></p>
                <p class="color">05 24 61 03 78</p>
            </div>
        </div>
    </div>
    <div id="content">
        <?php echo $this->Flash->render(); ?>

        <?php echo $this->fetch('content'); ?>
    </div>
    <div id="footer">
        <div class="top_block outter-wrapper">
            <div id="to_top"><span class="glyphicon glyphicon-chevron-up"></span></div>
            <div class="wrapper">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-push-6">
                        <?php
                        echo $this->Form->create($contact, ['url' => ['controller' => 'pages', 'action' => 'contact'], 'id' => 'contact_form']);

                        $this->Form->templates([
                            'inputContainer' => '<div class="form-group"><div class="input-group">{{content}}</div></div>',
                            'input' => '<div class="input-group-addon"><span class="sprite_main {{icon}}"></span></div><input type="{{type}}" name="{{name}}" {{attrs}} class="form-control"/>',
                            'textarea' => '<div class="input-group-addon"><span class="sprite_main {{icon}}"></span></div><textarea name="{{name}}"{{attrs}} class="form-control">{{value}}</textarea>',
                            'formGroup' => '{{label}}{{input}}'
                        ]);

                        echo $this->Form->inputs([
                            'name'  => ['label' => false, 'placeholder' => 'Nom', 'required' => true, 'templateVars' => ['icon' => 'icon_form_name']],
                            'email' => ['label' => false, 'placeholder' => 'Email', 'required' => true, 'type' => 'email', 'templateVars' => ['icon' => 'icon_form_email']],
                            'msg'   => ['label' => false, 'placeholder' => 'Message', 'required' => true, 'type' => 'textarea', 'templateVars' => ['icon' => 'icon_form_msg']]
                        ], ['legend' => 'besoin d\'une recette ?']);
                        echo '<div id="cont_captcha"></div>';
                        echo $this->Form->button('<span class="sprite_main icon_form_submit"></span> on envoie !', ['type' => 'submit', 'class' => 'col-xs-12']);
                        echo $this->Form->end();
                        ?>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                        <div class="visible-xs-block margin_t50"></div>
                        <figure class="fig_logo">
                            <?php echo $this->Html->image('logo_cdc.png', ['class' => 'img-responsive center-block', 'alt' => 'Logo ComdeChef', 'height' => 315, 'width' => 400]); ?>
                            <figcaption>Agence de communication culinaire</figcaption>
                        </figure>
                        <div class="tooltip fade top in"></div>
                        <div class="rs">
                            <p>
                                <?php
                                echo $this->Html->link('<span class="sprite_main icon_fb"></span>', 'https://www.facebook.com/comdechef/', ['escape' => false, 'target' => '_blank', 'rel' => 'nofollow', 'data-toggle' => 'tooltip', 'title' => 'Facebook']);
                                echo $this->Html->link('<span class="sprite_main icon_twitter"></span>', 'https://twitter.com/ComdeChef', ['escape' => false, 'target' => '_blank', 'rel' => 'nofollow', 'data-toggle' => 'tooltip', 'title' => 'Twitter']);
                                /*echo $this->Html->link('<span class="sprite_main icon_linkedin"></span>', '#', ['escape' => false, 'target' => '_blank', 'rel' => 'nofollow', 'data-toggle' => 'tooltip', 'title' => 'LinkedIn']);
                                echo $this->Html->link('<span class="sprite_main icon_google"></span>', '#', ['escape' => false, 'target' => '_blank', 'rel' => 'nofollow', 'data-toggle' => 'tooltip', 'title' => 'Google+']);
                                echo $this->Html->link('<span class="sprite_main icon_viadeo"></span>', '#', ['escape' => false, 'target' => '_blank', 'rel' => 'nofollow', 'data-toggle' => 'tooltip', 'title' => 'Viadeo']);*/
                                ?>
                            </p>
                        </div>
                        <hr>
                        <div class="address">
                            <p class="text-uppercase dlight">contact</p>
                            <p class="dregular">46 avenue du chut 33700 Mérignac<br>Appt C102 Marque de Bew-Works<br>
                                <span class="email_contact">Email protégé par JS</span>
                                <br>Siret : 80925701700016
                            </p>
                            <p class="color dbold">05 24 61 03 78</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_block outter-wrapper">
            <div class="wrapper">
                <p class="text-uppercase dextralight"><?php echo $this->Html->link('mentions légales', ['action' => 'mentions-legales']); ?></p>
                <p class="dlight">Com de Chef <span class="color">©</span> Copyright 2016 - All Rights Reserved - Marque de <?php echo $this->Html->link('Bew-Works', 'http://www.bew-works.fr/', ['class' => 'color dbold', 'target' => '_blank', 'escape' => false]) ?></p>
            </div>
        </div>
    </div>
</div>
<?php
echo $this->Html->script(['jquery-1.11.3.min', 'bootstrap.min', 'https://www.google.com/recaptcha/api.js?onload=onloadCaptcha&render=explicit', 'jQuery.scrollSpeed', 'main']);
echo $this->fetch('script');
?>
</body>
</html>