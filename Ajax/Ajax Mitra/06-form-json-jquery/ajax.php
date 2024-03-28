<?php 
// json-encode() - transforme un array en format json
// json-decode() - transforme un format json en tableau/objet ou array/array

$tab = array();

$tab['contenu']= ''; // 'contenu' => cf. form.php ligne 70

if(!empty($_POST['choix'])) { // empty teste d'abord le isset et ensuite regarde ce qu'il y a dedans
    // c'est comme écrire : isset($_POST['choix']) && ($_POST['choix'] != false)
    $nom = $_POST['choix'];

    // on récupère le contenu du fichier json
    $fichier = file_get_contents('fichier.json');

    // on transforme en array/array
    $json = json_decode($fichier, true);

    foreach ($json as $ligne) {
        if ($ligne['nom'] == $nom) {
            $tab['contenu'] .= '<table style="border-collapse: collapse; width: 100%; margin-top: 35px;" border="1">';
            $tab['contenu'] .= '<tr>';
            
            $tab['contenu'] .= '<td style="padding: 10px;">' . $ligne['nom'] . '</td>';
            $tab['contenu'] .= '<td style="padding: 10px;">' . $ligne['prenom'] . '</td>';
            $tab['contenu'] .= '<td style="padding: 10px;">' . $ligne['sexe'] . '</td>';
            $tab['contenu'] .= '<td style="padding: 10px;">' . $ligne['service'] . '</td>';
            $tab['contenu'] .= '<td style="padding: 10px;">' . $ligne['dateEmbauche'] . '</td>';
            $tab['contenu'] .= '<td style="padding: 10px;">' . $ligne['salaire'] . '</td>';
            $tab['contenu'] .= '<td style="padding: 10px;">' . $ligne['idEmploye'] . '</td>';

            $tab['contenu'] .= '</tr>';
            $tab['contenu'] .= '<table>';
        }
    }

}
// on transforme le tableau array en format json pour la réponse ajax
echo json_encode($tab);
