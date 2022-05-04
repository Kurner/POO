<?php

require 'form.php';

$form = new Form();
echo $form->create('form_exercice.php'); // créer le début du formulaire
echo $form->text('nom','Slazor'); // créer un input de type texte avec comme valeur par défaut $nom
echo $form->text('prenom','Loic'); // créer un input de type texte avec comme valeur par défaut $prenom
echo $form->textarea();
echo $form->radio('canard', 'animal');
echo $form->radio('vache', 'animal');
echo $form->radio('ecureuil', 'animal');
echo $form->checkbox('Playstation','console');
echo $form->checkbox('Xbox','console');
echo $form->submit('Modifier'); //Créer un bouton pour soumettre le formulaire se nommant Modifier
echo $form->end(); //fermer le formulaire