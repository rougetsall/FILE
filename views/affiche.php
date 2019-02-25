<?php
include("../models/creat.php");
include("../models/delete.php");
include("../models/gere.php");

$sup=strlen($ficher)+1;
$rest = substr($doc, 0, -$sup);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>affiche</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
  <section class="section">


  <div class="container">
    <h1 class="title"><?php echo $ficher ?></h1>
    <div class="columns">
      <div class="column">
        <table class="table is-fullwidth is-hoverable">
            <tr>
               <td><form method="POST" action="http://localhost:8003/?controller=affiche&action=<?php
                echo $rt; ?>&fich=<?php echo $rtfich; ?>">                        
                       
                        <button type="submit" class="fas fa-level-up-alt" style="border: 0; " name=<?php echo "'".$ficher."'"; ?>></button>
                        </form>
                </td>
              
              <td>Parent</td>
            </tr>
           
            
            
            <?php 
           
            
           $tab=list_dir($doc);
            $tabs=list_file($doc);
              
          foreach ($tab as $key => $value) {
              $docs=$doc."/".$value;
              $rov=$value;
            if ($value!="." && $value!="..") {
                                    
                  ?>
                      <tr>
                       <td><form method="POST" action="http://localhost:8003/?controller=affiche&action=<?php echo $docs; ?>&fich=<?php echo $value; ?>&rt=<?php echo $doc; ?>&rtfich=<?php echo $ficher; ?>">
                        
                        <button type="submit" class="fas fa-folder" style="border: 0; " name=<?php echo "'".$value."'"; ?>></button>
                        </form>
                      </td>
                         <td><?php echo " - ". $value."<br>\n"; ?></td>
                          <td>
                          <form method="POST">
                           <input type="hidden" name="efface" value=<?php echo "'".$docs."'"; ?>>
                          <input type="hidden" name="doc" value=<?php echo "'".$doc."'"; ?>>
                          <input type="hidden" name="fiche" value=<?php echo "'". $ficher."'"; ?>>
                       
                          <button name="supdoc" class="button is-light is-small" type="submit"><i class="fas fa-trash-alt"></i></button>
                          </form>
                      </td>
                       </tr>
                   
                 
                 <?php } }
                 foreach ($tabs as $key => $value) {
                      $fic=$doc."/".$value;
                  ?>
                     <tr>
                        <td><i class="fas fa-file"></i></td>
                        <td><?php echo $value."<br>\n";
                             ?></td>
                          <td>
                        <form method="POST">
                      <input type="hidden" name="efface" value=<?php echo "'".$fic."'"; ?>>
                     <input type="hidden" name="doc" value=<?php echo "'".$doc."'"; ?>>
                      <input type="hidden" name="fiche" value=<?php echo "'". $ficher."'"; ?>>
                       
                      <button name="suprime" class="button is-light is-small" type="submit"><i class="fas fa-trash-alt"></i></button>
                       </form>
                      </td>
              
                      </tr>
                      <?php } ?>
          </table>
        </div>
        <div class="column">
          <form method="POST">
            <div class="field">
              <label class="label">Nouveau dossier</label>
              <div class="control">
                <input type="hidden" name="doc" value=<?php echo "'".$doc."'"; ?>>
                <input type="hidden" name="fiche" value=<?php echo "'".$ficher."'"; ?>>
                <input type="hidden" name="doss" value=<?php echo "'".$doc."'"; ?>>
                <input class="input" type="text" name="dossier" placeholder="Nom du dossier">
              </div>
            </div>
            <div class="field is-grouped">
              <div class="control">
                <input type='submit'class="button is-link" name="Créer" value="Créer">
              </div>
            </div>
          </form>
          <hr />
          <form method="POST">
            <div class="field">
              <label class="label">Nouveau fichier</label>
              <div class="control">
                <input type="hidden" name="doss" value=<?php echo "'".$doc."'"; ?>>
                <input type="hidden" name="doc" value=<?php echo "'".$doc."'"; ?>>
                <input type="hidden" name="fiche" value=<?php echo "'".$ficher."'"; ?>>
                  
                <input class="input" type="text" name="fichier" placeholder="Nom du fichier">
              </div>
            </div>
            <div class="field">
              <label class="label">Contenu</label>
              <div class="control">
                <textarea class="textarea" placeholder="Textarea"></textarea>
              </div>
            </div>
            <div class="field is-grouped">
              <div class="control">
              
                 <input type='submit'class="button is-link" name="Enregistrer" value="Enregistrer">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

      
</body>
</html>