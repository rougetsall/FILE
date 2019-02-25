<?php

if (isset($_POST['Créer'])) {
   
   $nom=$_POST['dossier'];
   $doss=$_POST['doss'];
   $dossier = $doss.'/'.$nom;

     if(mkdir($dossier, 0777, true)) {
       echo "dossier cree";
     }

    }


    if (isset($_POST['Enregistrer'])) {
       $fiche=$_POST['fichier'];
       $messager=$_POST['messager'];
       $nom=$_SESSION["dossier"];
       $doss=$_POST['doss'];
     

     if (strlen($nom)==0) {
     $dossier = $doss.'/'.$fiche;

     if(touch($dossier, 0777, true)) {
       echo "ficher cree";
       $file = fopen($dossier,"w");
     echo fprintf($file,$messager);
   
     }

    }else{
     
       $dossier2 = $doss.'/'.$nom.'/'.$fiche;
    
         if(touch($dossier2, 0777, true)){
          $file = fopen($dossier2,"w");
     echo fprintf($file,$messager);
       echo "dossier et fiche  cree";
     }
     

    }


     }
     if (isset($_POST['Créer'])) {
   
   $nom=$_POST['dossier'];
   $dossier = $doss.'/'.$nom.'/';

     if(mkdir($dossier, 0777, true)) {
       echo "dossier cree";
     }

    }
    ?>