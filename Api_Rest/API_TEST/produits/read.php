<?php

header("Acces-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Acces-Control-Allow-Methods: GET");
header("Acces-Control-Allow-Max-Age: 3600");
header("Acces-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers,Authorization , X-Requested-With");


if($_SERVER['REQUEST_METHOD'] == 'GET'){
    include_once '../config/Database.php';
    include_once '../models/Produits.php';

    $database = new Database();
    $db = $database->getConnection();

    $produits = new Produits($db);

    $data = $produits->read();

    if($data->rowCount() > 0 );{
        $tableauProduits = [];
        $tableauProduits['produits'] = [];

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $prod = [
                "id" => $id ,
                "nom" => $title,
                "content" => $content
            ];

            $tableauProduits['produits'][] = $prod;
        }

        http_response_code(200);

        echo json_encode($tableauProduits);   
}




}else{
    http_response_code(405);
    echo json_encode(["message"=>"Methode n'est pas autorisée"]);
}