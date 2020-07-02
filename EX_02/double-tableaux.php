<?php
$tab1=array('T-shirt rouge','15.50','5');
$tab2=array('T-shirt vert','15.50','6');
$tab3=array('T-shirt agrent','15.50','6');
$tab4=array('Short bleu','16.50','5');
$tab5=array('Short vert','19.99','10');
$tab6=array('Veste argent','19.99','10');
$tab7=array('Veste arge,t','35','3');

$panier= array($tab1,$tab2,$tab3,$tab4,$tab5,$tab6,$tab7);

function afficher_panier($panier){
    foreach($panier as $value=>$value){
        echo '<ul>
        <li>'.$value.'</li>
        <li>'.$value.'</li>
        <li>'.$value.'</li>
        </ul>';
    }
};
afficher_panier($panier);
?>