<?php

require_once '../../config/database.php';

include './patientCrud/displayPatient.php';
include './patientCrud/addPatient.php';
include './patientCrud/searchPatient.php';
include './patientCrud/editPatient.php';
include './patientCrud/deletePatient.php';

include './doctorCrud/displayDoctor.php';
include './doctorCrud/addDoctor.php';
include './doctorCrud/searchDoctor.php';
include './doctorCrud/editDoctor.php';
include './doctorCrud/deleteDoctor.php';
class Menu
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

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
                        echo "=== Patient Management ===
                        1. List all patients
                        2. Search for a patient
                        3. Add a patient
                        4. Edit a patient
                        5. Delete a patient
                        6. Back";


                        $choice = trim(fgets(STDIN));

                        switch ($choice) {
                            case '1':
                                displayPatient($this->pdo);
                                break;
                            case '2':
                                searchPatient($this->pdo);
                                break;
                            case '3':
                                addPatient($this->pdo);
                                break;
                            case '4':
                                editPatient($this->pdo);
                                break;
                            case '0':
                                break;
                            default:
                                break;
                        }
                    } while ($choice != 0);


                    break;

                    case '2':
                        echo "=== Doctor Management ===
                        1. List all doctors
                        2. Search for a doctor
                        3. Add a doctor
                        4. Edit a doctor
                        5. Delete a doctor
                        6. Back";

                            break;
                case '0':

                    break;

                default:
                    # code...
                    break;
            }






        } while ($choice != 0);
    }

    public function addPatient()
    {

        $firstName = trim(fgets(STDIN));
        $lastName = trim(fgets(STDIN));
        $email = trim(fgets(STDIN));
        $phone = trim(fgets(STDIN));



    }

}
;


$menu = new Menu($test2);
$menu->run();
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