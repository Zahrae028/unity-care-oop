<?php

require_once '../../database.php';
class Menu
{

    public function run()
    {
        do {
            echo "=== Unity Care CLI ===
            1. Gérer les patients
            2. Gérer les médecins
            3. Gérer les départements
            4. Statistiques
            0. Quitter \n";

            echo "insert your input : ";

            $choice = trim(fgets(STDIN));

            switch ($choice) {

                case '1':
                    do {
                        
                    } while ($choice != 0);


                    // $this->addPatient();
                    break;

                case '0':
                    echo "Exiting...\n";
                    break;
                
                default:
                    # code...
                    break;
            }






        } while ($choice != 0);
    }

    public function addPatient(){

        $firstName = trim(fgets(STDIN));
        $lastName = trim(fgets(STDIN));
        $email = trim(fgets(STDIN));
        $phone = trim(fgets(STDIN));
        
        
    
    }

};



// echo "=== Unity Care CLI ===
// 1. Gérer les patients
// 2. Gérer les médecins
// 3. Gérer les départements
// 4. Statistiques
// 5. Quitter \n";

// echo "insert your input : ";
// $input = fgets(STDIN);
// echo $input;


?>