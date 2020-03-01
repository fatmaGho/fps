<?php
class Client  // classe 7arf lawel m
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
    
    function__construct($id, $nom, $prenom, $cin, $sexe, $numtel, $adress, $mail, $logo)    //respecter l'ordre ili sna3t bil les variables
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
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Create connection
    $con = new mysqli($servername, $username, $password);
    
    // Check connection
    $con->select_db($database) or die( "Unable to select database");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    echo "Connected successfully";
    
    function add($con)
    {
        $sql = "insert into client(nom,prenom,cin,tel,adresse,mail,logo,created)values('$this->nom','$this->prenom','$this->cin',$this->sexe ,'$this->numtel','$this->adresse','$this->mail','$this->logo')";
        //echo $sql;die;
        $req = mysqli_query($con, $sql);
    }
    function edit($con)
    {
        $sql = "update client set nom='$this->nom',prenom='$this->prenom',cin='$this->cin',tel='$this->tel',$this->sexe ,adresse='$this->adresse',mail='$this->mail',logo='$this->logo' where id='$this->id'";
        $req = mysqli_query($con, $sql);
    }
   function delete($con)
    {
        $req = mysqli_query($con, "delete from client where id='$this->id'");
    }
    function detail($con)                                        //ta3tik les donnes ta3 il client qui a id ili fil url
    {
        $sql = "select * from client where id='$this->id' ";
        $req = mysqli_query($con, $sql);
        $client = mysqli_fetch_array($req);
        return $client;
    }
    function liste($con)
    {
        $sql = "select * from client";
        $clients = array(); //initialisation d'un tableau vide <!> je les définit avec s : clients
        $i = 0;
        $req = mysqli_query($con, $sql);
        while ($res = mysqli_fetch_array($req))        //req trja  ou +eurs clients
        {
            $clients[$i]['id'] = $res['id'];
            $clients[$i]['nom'] = $res['nom'];
            $clients[$i]['prenom'] = $res['prenom'];
            $clients[$i]['adresse'] = $res['adresse'];
            $clients[$i]['sexe'] = $res['sexe'];
            $clients[$i]['cin'] = $res['cin'];
            $clients[$i]['tel'] = $res['tel'];
            $clients[$i]['mail'] = $res['mail'];
            $clients[$i]['logo'] = $res['logo'];
            $i++;
        }
        return $clients
     }
} // fin class
?>