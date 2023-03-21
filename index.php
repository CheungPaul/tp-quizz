<?php

/**
 *
 *  _____ ____     ___        _
 * |_   _|  _ \   / _ \ _   _(_)________
 *   | | | |_) | | | | | | | | |_  /_  /
 *   | | |  __/  | |_| | |_| | |/ / / /
 *   |_| |_|      \__\_\\__,_|_/___/___|
 *
 *  Consigne : Compléter chaque classe afin de reproduire le jeu d’essai ci-dessous.
 *
 */

// Import Classe
include "Organisation.php";
include "Users.php";
include "Questionnaire.php";

// Importation du jeux d'essai
$listOrganisation[] = new Organisation("TF1", "Issy les moulineaux");
$listOrganisation[] = new Organisation("France 2", "Paris");
$listOrganisation[] = new Organisation("CanalPlus", "Boulogne");
$listOrganisation[] = new Organisation("Netflix", "Los Gatos");

$henri = new Users("Lecompte", "Henri", "h.L@laposte.net");
$paul = new Users("Bocusse", "Paulo", "paulo@bocusse.jambon");
$nathan = new Users("Zag", "Nathan", "nathan@zag.fr");
$beni = new Users("La Tour", "Beni", "latour@free.fr");
$yael = new Users("Rousse", "Yael", "rousse@free.fr");
$celine = new Users("Labelle", "Celine", "celine@senane.net");
$albane = new Users("Camille", "Albane", "camille@albane.com");

$listOrganisation[0]->setUser($celine);
$listOrganisation[0]->setUser($albane);
$listOrganisation[0]->setUser($paul);
$listOrganisation[1]->setUser($beni);
$listOrganisation[1]->setUser($albane);
$listOrganisation[2]->setUser($yael);
$listOrganisation[3]->setUser($henri);
$listOrganisation[3]->setUser($nathan);
$listOrganisation[3]->setUser($celine);

$questionnaires["RH"] = new Questionnaire($listOrganisation[3]);
$questionnaires["CUISINE"] = new Questionnaire($listOrganisation[2]);
$questionnaires["VOITURE"] = new Questionnaire($listOrganisation[1]);
$questionnaires["ENTREPRISE"] = new Questionnaire($listOrganisation[0]);

// Affichage du jeux d'essai
foreach ($questionnaires as $nomDuQuestionnaire => $questionnaire) {
    echo "Le questionnaire <b>" . $nomDuQuestionnaire . "</b> est destiné à l'organisation <b>" . $questionnaire->getOrganisation()->getNom() . "</b><br>";
        echo "L'organisation <b>" . $questionnaire->getOrganisation()->getNom() . "</b> est située à " . $questionnaire->getOrganisation()->getAdresse() . " et compte <b>" . $questionnaire->getOrganisation()->getNbUser() . "</b> utilisateur" . (($questionnaire->getOrganisation()->getNbUser() > 1 ) ? "s" : " ") . "<br>";
        echo "Liste des utilisateurs du questionnaire : <br>";
        foreach ($questionnaire->getOrganisation()->getUsers() as $user) {
            echo "- " . $user->getPrenom() . " " . $user->getNom() . " (" . $user->getEmail() . ")<br>";
        }
        echo "<br>";
    }

/**
 *
 * Résultat attendu :
 *
Le questionnaire RH est destiné à l'organisation Netflix
L'organisation Netflix est située à Los Gatos et compte 3 utilisateurs
Liste des utilisateurs du questionnaire :
- Henri Lecompte (h.L@laposte.net)
- Nathan Zag (nathan@zag.fr)
- Celine Labelle (celine@senane.net)

Le questionnaire CUISINE est destiné à l'organisation CanalPlus
L'organisation CanalPlus est située à Boulogne et compte 1 utilisateur
Liste des utilisateurs du questionnaire :
- Yael Rousse (rousse@free.fr)

Le questionnaire VOITURE est destiné à l'organisation France 2
L'organisation France 2 est située à Paris et compte 2 utilisateurs
Liste des utilisateurs du questionnaire :
- Beni La Tour (latour@free.fr)
- Albane Camille (camille@albane.com)

Le questionnaire ENTREPRISE est destiné à l'organisation TF1
L'organisation TF1 est située à Issy les moulineaux et compte 3 utilisateurs
Liste des utilisateurs du questionnaire :
- Celine Labelle (celine@senane.net)
- Albane Camille (camille@albane.com)
- Paulo Bocusse (paulo@bocusse.jambon)
 *
 */
