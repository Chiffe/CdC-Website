<?php
    use Cake\Core\Configure;
    echo '<p>Un contact client a été établi.</p>'."\n";
    echo '<p>Ci-dessous les informations concernant ce contact :</p>'."\n";
    echo '<ul>';
    echo '<li><strong>Nom :</strong> '.$datas['name'].'</li>';
    echo '<li><strong>Email :</strong> '.$datas['email'].'</li>';
    echo '<li><strong>Message :</strong> '.nl2br($datas['msg']).'</li>';
    echo '</ul>';
    echo '<p>Dernier point important : <strong>Répondre au client au plus vite !!</strong></p>';