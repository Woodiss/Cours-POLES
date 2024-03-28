<?php

function listerFichiersProjet($dossier)
{
    $resultat = [];

    $objets = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dossier),
        RecursiveIteratorIterator::SELF_FIRST
    );

    foreach ($objets as $objet) {
        if ($objet->isFile()) {
            $nomFichier = basename($objet->getPathname());
            $dossierFichier = dirname($objet->getPathname());
            $nomDossier = basename($dossierFichier);

            // Créez un sous-tableau pour chaque dossier
            if (!isset($resultat[$nomDossier])) {
                $resultat[$nomDossier] = [];
            }

            // Ajoutez le fichier au sous-tableau du dossier
            $resultat[$nomDossier][] = [
                'nom_fichier' => $nomFichier,
                'dossier_fichier' => $dossierFichier,
            ];
        }
    }

    return $resultat;
}

// Utilisation de la fonction pour lister les fichiers d'un projet
$cheminProjet = '../../PHP_PO_DELIA/';
$fichiersProjet = listerFichiersProjet($cheminProjet);

// Affichage des noms de fichiers et de leurs dossiers associés
// foreach ($fichiersProjet as $nomDossier => $fichiers) {
//     echo 'Dossier : ' . $nomDossier . "<br>";
//     foreach ($fichiers as $fichier) {
//         echo 'Nom du fichier : ' . $fichier['nom_fichier'] . "<br>";
//         echo 'Dossier du fichier : ' . $fichier['dossier_fichier'] . "<br><br>";
//     }
// }
