<?php

require 'Class/html.php';
require 'Class/form.php';
require 'Class/validator.php';

$html = new Html();
$form = new Form();

echo $html->meta();
echo $html->linkCSS('../assets/style.css');

echo $html->link('https://gamepress.gg/arknights/operator/nearl-radiant-knight', 'Nearl from Arknight');
echo $html->js('../assets/js.js');



echo $form->startForm('dataForm.php'); // créer le début du formulaire
echo $form->text('nom','Slazor'); // créer un input de type texte avec comme valeur par défaut $nom
echo $form->text('prenom','Loic'); // créer un input de type texte avec comme valeur par défaut $prenom
echo $form->textarea();
echo $form->radio('canard', 'animal');
echo $form->radio('vache', 'animal');
echo $form->radio('ecureuil', 'animal');
echo $form->checkbox('Playstation','console');
echo $form->checkbox('Xbox','console');
echo $form->submit('Modifier'); //Créer un bouton pour soumettre le formulaire se nommant Modifier
echo $form->endForm(); //fermer le formulaire

echo $html->img('https://gamepress.gg/arknights/sites/arknights/files/2021-11/char_1014_nearl2_1.png', 'Nearl from Arknight');