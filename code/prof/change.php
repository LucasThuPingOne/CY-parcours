<html>
    <head>
        <script type="text/javascript" src="prof.js"></script>
    </head>
</html>
<?php

                function afficherEleves($fichier,$spe)
                {
                    $data = file_get_contents($fichier);
                    $data_json = json_decode($data,TRUE);
                    $tailleJson = count($data_json) + 1;
                    echo "<input type='hidden' id='spe'  value=$spe>";
                    echo "<select name='listEleve' id='listEleve' size=10>";
                    echo "<option value=''>Eleves de la spécialité $spe</option>"; 
                    
                    for ($i=0; $i < count($data_json); $i++) { 
                        
                        echo "<option value=".$data_json[$i]['eleve']." onclick='test()'>".$data_json[$i]['eleve']."</option>";
                                            
                        
                    }
                    echo "</select>";
                }
                $filiere = $_POST['filiere'];
                if ($filiere == 'GSI') {
                    afficherEleves("../../data/resultat1.json","GSI");
                }
                elseif ($filiere == 'MI') {
                    afficherEleves("../../data/resultat2.json","MI");
                }
                elseif ($filiere == 'MF') {
                    afficherEleves("../../data/resultat3.json","MF");
                }
                else {
                    echo "<p id ='etatB'>Erreur</p>";
                }


               
               

            ?>