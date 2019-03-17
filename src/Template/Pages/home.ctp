<?php
echo $this->Html->meta('description', 'Com de Chef est une agence de communication culinaire spécialisé dans la restauration. Avec Com de Chef, on étudie le concept de votre restaurant, en passant par la création de votre site, jusqu\'à la gestion de votre réputation en ligne.', ['block' => 'meta']);
echo $this->Html->css(['slick', 'slick-theme', 'home'], ['block' => 'css']);
echo $this->Html->script(['TweenMax.min', 'ScrollMagic.min', 'animation.gsap.min', 'hammer.min', 'sequence.min', 'slick.min', 'home'], ['block' => 'script']);
?>
<section id="home">
    <div class="outter-wrapper">
        <div class="wrapper">
            <div class="hide_el" id="block_contact"><p>Parlons de votre projet</p></div>
            <figure class="fig_logo hide_el">
                <?php echo $this->Html->image('logo_cdc.png', ['class' => 'img-responsive center-block', 'alt' => 'Logo ComdeChef', 'height' => 315, 'width' => 400]); ?>
                <figcaption><h1>Agence de communication culinaire</h1></figcaption>
            </figure>
            <?php echo $this->Html->image('img_home.jpg', ['class' => 'img-responsive center-block hide_el hidden-xs', 'alt' => 'Image communication culinaire CdC', 'height' => 165, 'width' => 1050]); ?>
        </div>
    </div>
</section>
<section id="who">
    <div class="outter-wrapper">
        <div class="wrapper">
            <?php echo $this->Frontblock->explainBlock('Une agence destinée à qui ?'); ?>
            <h2>restaurants, brasseries & pubs</h2>
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <p><span class="color">Com</span> de Chef est une agence de communication spécialisée dans la restauration. Cela signifie que nous traitons essentiellement avec les restaurants et les dérivés (Food truck, fast-food, brasserie, pub, ...).</p>
                    <p>Le concept de <span class="color">Com</span> de Chef est d'apporter sur un plateau tous les ingrédients nécessaires afin de réussir une bonne communication.<br>Nous pouvons intervenir tout au long de votre projet. Que ce soit pour un lancement, un complément quelconque ou une refonte totale.</p>
                    <p>C'est pour cela que nous utilisons le principe de packs à tiroir. Cela signifie que vous choisissez uniquement ce dont vous avez besoin. Nous vous proposons 6 étapes différentes qui représentent un domaine important pour une bonne communication.</p>
                    <p>Nous serons ravis de vous apporter les ingrédients nécessaires pour accomplir vos différents objectifs.</p>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <p class="slogan color">vous, c'est le goût<br>nous, c'est le web</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="outter-wrapper block_bd" style="height:500px;">
    <div class="bd_one"></div>
</section>
<section id="steps">
    <div class="outter-wrapper">
        <div class="wrapper">
            <?php echo $this->Frontblock->explainBlock('Tous les outils nécessaires à portée de main'); ?>
            <h2>du restaurant 2.0 dans l'air</h2>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 step">
                    <a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'services']); ?>">
                        <figure>
                            <span class="sprite_main icon_step_concept"></span>
                            <figcaption>
                                <p class="name">Validation du concept<br>de&nbsp;restauration</p>
                                <p class="desc">Nous étudions votre situation autour d'un café</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 step">
                    <a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'services']); ?>">
                        <figure>
                            <span class="sprite_main icon_step_create"></span>
                            <figcaption>
                                <p class="name">Création supports<br>de&nbsp;communication</p>
                                <p class="desc">Nous mettons à votre disposition les ustensiles nécessaires pour démarrer</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 step">
                    <a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'services']); ?>">
                        <figure>
                            <span class="sprite_main icon_step_site"></span>
                            <figcaption>
                                <p class="name">Conception ou refonte<br>du&nbsp;site internet</p>
                                <p class="desc">Nous réalisons le site idéal pour servir vos clients</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 step">
                    <a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'services']); ?>">
                        <figure>
                            <span class="sprite_main icon_step_layout"></span>
                            <figcaption>
                                <p class="name">Agencement<br>&&nbsp;Décoration</p>
                                <p class="desc">Nous enrichissons votre image à votre sauce</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 step">
                    <a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'services']); ?>">
                        <figure>
                            <span class="sprite_main icon_step_digital"></span>
                            <figcaption>
                                <p class="name">Community management<br>/&nbsp;Digital</p>
                                <p class="desc">Retrouvez vos clients sur les réseaux sociaux</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 step">
                    <a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'services']); ?>">
                        <figure>
                            <span class="sprite_main icon_step_marketing"></span>
                            <figcaption>
                                <p class="name">Développement commercial<br>&&nbsp;marketing</p>
                                <p class="desc">Fidélisez votre clientèle pour leur plus grand confort</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="pub">
    <div class="outter-wrapper">
        <div class="bd_two"></div>
        <div class="wrapper">
            <h2>pourquoi com de chef ?</h2>
            <p class="accroche">Car de nos jours, malgré la qualité de votre cuisine et de votre accueil,<br>un manque de visibilité sur le web diminuera l'affluence de vos clients</p>
            <p class="text-center margin-none"><?php echo $this->Html->link('Préparez vos ingrédients !', ['controller' => 'pages', 'action' => 'services'], ['class' => 'cdc_btn']); ?></p>
        </div>
    </div>
</section>
<section id="works">
    <div class="outter-wrapper">
        <div class="project">
            <div class="block_img">
                <div class="triangle tri_bottom"></div>
                <div class="work_img" style="background-image:url('/img/works/budget_jones.png');"></div>
            </div>
            <article>
                <figure>
                    <?php echo $this->Html->image('works/logo_bj.png', ['class' => 'img-responsive center-block', 'width' => 149, 'height' => 80, 'alt' => 'Logo Budget Jones - Com de Chef']); ?>
                    <figcaption>Budget Jones</figcaption>
                </figure>
                <p class="desc">design graphique / support de communication</p>
                <?php echo $this->Html->link('voir le site', 'http://www.budget-jones.com/', ['target' => '_blank', 'rel' => 'nofollow']); ?>
            </article>
        </div>
        <div class="project">
            <article>
                <figure>
                    <?php echo $this->Html->image('works/logo_erbia.png', ['class' => 'img-responsive center-block', 'width' => 310, 'height' => 90, 'alt' => 'Logo Espace Erbia - Com de Chef']); ?>
                    <figcaption>Espace Erbia</figcaption>
                </figure>
                <p class="desc">Traiteur sur Bordeaux</p>
                <?php echo $this->Html->link('voir le site', 'http://www.erbia-traiteur.fr', ['target' => '_blank', 'rel' => 'nofollow']); ?>
            </article>
            <div class="block_img">
                <div class="triangle tri_top"></div>
                <div class="work_img" style="background-image:url('/img/works/erbia.jpg');"></div>
            </div>
        </div>
    </div>
</section>
<section class="outter-wrapper block_bd" style="height:500px;">
    <div class="bd_three"></div>
</section>
<section id="why">
    <div class="outter-wrapper">
        <div class="wrapper">
            <?php echo $this->Frontblock->explainBlock('Pourquoi nous contacter ?'); ?>
            <h2>besoin d'assistance ?<br>nous sommes là pour vous</h2>
            <div class="row">
                <div class="col-xs-12 col-sm-4 why_block">
                    <div class="block_icon">
                        <span class="sprite_main icon_seasoning"></span>
                        <p class="name">assaisonnement</p>
                    </div>
                    <p class="accroche">vous lancez votre propre restaurant/<br>votre propre marque</p>
                    <hr>
                    <p class="desc"><span class="cdc"><span class="color">Com</span> de Chef</span> est là pour vous accompagner<br>tout au long de votre projet.<br>Pour ainsi dire de l’entrée jusqu’au digestif !</p>
                </div>
                <div class="col-xs-12 col-sm-4 why_block">
                    <div class="block_icon">
                        <span class="sprite_main icon_supplements"></span>
                        <p class="name">compléments</p>
                    </div>
                    <p class="accroche">vous souhaitez ajuster et développer<br>votre communication</p>
                    <hr>
                    <p class="desc"><span class="cdc"><span class="color">Com</span> de Chef</span> est là pour vous permettre<br>de gagner en notoriété.<br>Faites-vous entendre et restez en contact avec vos clients.</p>
                </div>
                <div class="col-xs-12 col-sm-4 why_block">
                    <div class="block_icon">
                        <span class="sprite_main icon_refreshment"></span>
                        <p class="name">rafraîchissement</p>
                    </div>
                    <p class="accroche">envie d'un rafraîchissement<br>pour entreprise culinaire</p>
                    <hr>
                    <p class="desc"><span class="cdc"><span class="color">Com</span> de Chef</span> est là pour vous booster<br>en cas de période difficile.<br>Comblons vos lacunes !</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about">
    <div id="sequence-home">
        <div class="scrollmagic">
            <div class="seq-canvas">
                <div class="item seq-in">
                    <div class="contitem">
                        <div class="seq-step seq-step1"></div>
                        <div class="wrapper">
                            <div class="cont_txt left_cont">
                                <p class="name">Jean-Philippe Saban</p>
                                <p class="desc">Responsable du pôle<br>graphique et facteur<br>primordial pour matérialiser<br>vos idées sous forme de<br>design.</p>
                            </div>
                            <div class="cont_txt right_cont">
                                <p class="name">Jean-Roland Saban</p>
                                <p class="desc">Responsable du pôle de<br>développement et indispensable<br>pour créer l'intéraction entre<br>le design et vos clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="contitem">
                        <div class="seq-step seq-step2"></div>
                        <div class="wrapper">
                            <div class="cont_txt left_cont">
                                <p class="name">Jean-Roland Saban</p>
                                <p class="desc">Responsable du pôle de<br>développement et indispensable<br>pour créer l'intéraction entre<br>le design et vos clients.</p>
                            </div>
                            <div class="cont_txt right_cont">
                                <p class="name">Jean-Philippe Saban</p>
                                <p class="desc">Responsable du pôle<br>graphique et facteur<br>primordial pour matérialiser<br>vos idées sous forme de<br>design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="partners" style="display:none;">
    <div class="outter-wrapper">
        <div class="wrapper">
            <?php echo $this->Frontblock->explainBlock('Nos partenaires nous soutiennent'); ?>
            <h2>ils nous accompagnent</h2>
        </div>
        <div class="slider">
            <?php
            $partners = [
                ['filename' => 'logo_aatypik.png', 'alt' => 'Logo Aatypik', 'title' => 'aatypik', 'desc' => 'spécialiste en agencement d\'intérieur', 'link_display' => 'www.aatypik.fr', 'url' => 'http://www.aatypik.fr/'],
                ['filename' => 'logo_myevent.png', 'alt' => 'Logo My Event by Jenny', 'title' => 'My Event by Jenny', 'desc' => 'Organisatrice d\'événements', 'link_display' => 'www.myevent-bordeaux.fr', 'url' => 'http://www.myevent-bordeaux.fr/'],
                ['filename' => 'logo_louch.png', 'alt' => 'Logo Louch\'Bem Films', 'title' => 'Louch\'Bem Films', 'desc' => 'Production audiovisuelle', 'link_display' => 'www.louchbemfilms.fr', 'url' => 'http://www.louchbemfilms.fr/'],
                ['filename' => 'logo_monteils.png', 'alt' => 'Logo Marine Monteils', 'title' => 'Marine Monteils', 'desc' => 'Photographe', 'link_display' => 'marinemonteils.com', 'url' => 'http://marinemonteils.com/'],
                ['filename' => 'logo_mbg.png', 'alt' => 'Logo Mon Bonheur Gourmand', 'title' => 'mon bonheur gourmand', 'desc' => 'Blog cuisine / Community Manager', 'link_display' => 'monbonheurgourmand.com', 'url' => 'http://monbonheurgourmand.com/'],
                ['filename' => 'logo_lili.png', 'alt' => 'Logo Lili à Bordeaux', 'title' => 'Lili à Bordeaux', 'desc' => 'Blog Lifestyle / Community Manager', 'link_display' => 'www.lili-a-bordeaux.fr', 'url' => 'http://www.lili-a-bordeaux.fr/'],
                ['filename' => 'logo_bj.png', 'alt' => 'Logo Budget Jones', 'title' => 'budget jones', 'desc' => 'blog lifestyle / restauration', 'link_display' => 'www.budget-jones.com', 'url' => 'http://www.budget-jones.com/'],
                ['filename' => 'logo_yao.png', 'alt' => 'Logo Yao Communication', 'title' => 'Yao Communication', 'desc' => 'Community Manager', 'link_display' => 'yaocommunication.fr', 'url' => 'http://yaocommunication.fr/'],
                ['filename' => 'logo_lm.png', 'alt' => 'Logo LM Solutions', 'title' => 'lm solutions', 'desc' => 'imprimeur tous supports', 'link_display' => 'www.lmsolutions.fr', 'url' => 'http://www.lmsolutions.fr/'],
                ['filename' => 'logo_photo.png', 'alt' => 'Logo Jade Sequeval Photographe', 'title' => 'Jade Sequeval', 'desc' => 'Photographe', 'link_display' => 'jadesequeval.fr', 'url' => 'http://jadesequeval.fr/']
            ];
            $even = true;
            foreach($partners as $partner): ?>
                <div class="partner">
                    <?php if($even): ?>
                        <figure>
                            <?php echo $this->Html->image('partners/'.$partner['filename'], ['class' => 'img-responsive center-block', 'width' => 350, 'height' => 240, 'alt' => $partner['alt'].' - Com de Chef']); ?>
                            <div class="triangle tri_bottom"></div>
                        </figure>
                        <article>
                            <p class="title"><?php echo $partner['title']; ?></p>
                            <p class="desc color"><?php echo $partner['desc']; ?></p>
                            <p class="link color"><?php echo $this->Html->link($partner['link_display'], $partner['url'], ['target' => '_blank', 'rel' => 'nofollow']); ?></p>
                            <?php echo $this->Html->link('voir le site', $partner['url'], ['class' => 'btn_link', 'target' => '_blank', 'rel' => 'nofollow']); ?>
                        </article>
                    <?php else: ?>
                        <article>
                            <p class="title"><?php echo $partner['title']; ?></p>
                            <p class="desc color"><?php echo $partner['desc']; ?></p>
                            <p class="link color"><?php echo $this->Html->link($partner['link_display'], $partner['url'], ['target' => '_blank', 'rel' => 'nofollow']); ?></p>
                            <?php echo $this->Html->link('voir le site', $partner['url'], ['class' => 'btn_link', 'target' => '_blank', 'rel' => 'nofollow']); ?>
                        </article>
                        <figure>
                            <?php echo $this->Html->image('partners/'.$partner['filename'], ['class' => 'img-responsive center-block', 'width' => 350, 'height' => 240, 'alt' => $partner['alt'].' - Com de Chef']); ?>
                            <div class="triangle tri_top"></div>
                        </figure>
                    <?php endif; ?>
                </div>
            <?php $even = !$even;
            endforeach; ?>
        </div>
    </div>
</section>
<section id="map" class="hidden-xs">
    <div class="curtain">
        <div class="wrapper">
            <div class="row">
                <div class="col-xs-12 block">
                    <p>avenue du chut, mérignac</p>
                </div>
            </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/d/embed?mid=zzX5pMWW9NUc.krURmSOtMhZ8" width="1900" height="480"></iframe>
</section>