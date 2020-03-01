<?php
include "conn.php";
class Client  
{
    var $id; 
    var $nom;
    var $prenom;
    var $cin;
    var $sexe;
    var $numtel;
    var $adresse;
    var $mail;
    var $logo;
    
    function __construct($id, $nom, $prenom, $cin, $sexe, $numtel, $adresse, $mail, $logo)    //respecter l'ordre ili sna3t bil les variables
    {                                                                                   // bil new client
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->cin = $cin;
        $this->sexe = $sexe;
        $this->numtel = $numtel;
        $this->adresse = $adresse;
        $this->mail = $mail;
        $this->logo = $logo;
       
    }
function add($con)
    {
        $sql = "insert into client(nom,prenom,cin,tel,adresse,mail,logo,created)values('$this->nom','$this->prenom','$this->cin',$this->sexe ,'$this->numtel','$this->adresse','$this->mail','$this->logo')";
        $req = mysqli_query($con, $sql);
    }
}

?>