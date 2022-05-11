<?php 
function ajouter($nom,$image,$image2,$image3,$image4,$prix,$desc,$categorie,$Ville,$Carburant,$modele,$anneemodele){
    if(require("configM.php")){
        $req = $access->prepare("INSERT INTO produits (image,image2,image3,image4,nom,prix,description,categorie,Ville,Carburant,modele,anneemodele) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $req->execute(array($image,$image2,$image3,$image4,$nom,$prix,$desc,$categorie,$Ville,$Carburant,$modele,$anneemodele));
        $req->closeCursor();

    }
}
function ajouterpiece($nom_piece,$prix,$description,$image1,$image2,$image3,$type){
    if(require("configM.php")){
        $req = $access->prepare("INSERT INTO pieces_de_rechange (nom_piece,prix,description,image1,image2,image3,type) VALUES (?,?,?,?,?,?,?)");
        $req->execute(array($nom_piece,$prix,$description,$image1,$image2,$image3,$type));
        $req->closeCursor();

    }
}
function afficher(){
    if(require("configM.php")){
        $req = $access->prepare("SELECT * FROM produits WHERE disponible=true ORDER BY id_produit DESC");
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
} 
function rechercher($search,$categorie){
    if(require("configM.php")){
        $req = $access->prepare("SELECT * FROM produits WHERE disponible=true AND categorie = ? AND nom LIKE '%$search%'  ORDER BY id_produit DESC");
        $req->execute(array($categorie));
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
} 
function supprimer($id_produit){
    if (require("configM.php")){
        $req = $access->prepare("DLETE * FROM produits WHERE id_produit=? ");
        $req->execute(array($id_produit));
    }
}
?>