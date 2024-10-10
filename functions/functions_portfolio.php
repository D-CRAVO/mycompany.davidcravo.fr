<?php

function get_csv_files($file){

    // Ouverture du fichier
    $csv_file = fopen($file, 'r');

    // Ignorer la première ligne (en-têtes)
    fgetcsv($csv_file);

    // Tableau pour stocker les projets
    $files = [];

    // Lecture des lignes du fichier CSV
    while (($data = fgetcsv($csv_file, 1000, ';')) !== FALSE){
        $files[] = [
            'id' => $data[0],
            'name' => $data[1],
            'client' => $data[2],
            'technologies' => $data[3],
            'description' => $data[4],
            'date' => $data[5],
            'url' => $data[6],
            'image' => $data[7]
        ];
    }

    // Fermeture du fichier
    fclose($csv_file);

    return $files;
}