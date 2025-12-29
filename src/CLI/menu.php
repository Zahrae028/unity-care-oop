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

include './depCrud/displayDep.php';
include './depCrud/addDep.php';
include './depCrud/searchDep.php';
include './depCrud/editDep.php';
include './depCrud/deleteDep.php';

include 'populatedDep.php';
include 'doctorCount.php';


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

                    $choice = trim(fgets(STDIN));

                    switch ($choice) {
                        case '1':
                            displayDoctors($this->pdo);
                            break;
                        case '2':
                            searchDoctor($this->pdo);
                            break;
                        case '3':
                            addDoctor($this->pdo);
                            break;
                        case '4':
                            editDoctor($this->pdo);
                            break;
                        case '0':
                            break;
                        default:
                            break;
                    }
                    break;

                case '3': // assuming 3 is Departments in the main menu
                    echo "=== Department Management ===
                    1. List all departments
                    2. Search for a department
                    3. Add a department
                    4. Edit a department
                    5. Delete a department
                    6. Back";

                    $choice = trim(fgets(STDIN));

                    switch ($choice) {
                        case '1':
                            displayDepartments($this->pdo);
                            break;
                        case '2':
                            searchDepartment($this->pdo);
                            break;
                        case '3':
                            addDepartment($this->pdo);
                            break;
                        case '4':
                            editDepartment($this->pdo);
                            break;
                        case '5':
                            deleteDepartment($this->pdo);
                            break;
                        case '6': // back to main menu
                            break;
                        default:
                            echo "Invalid choice. Please try again.\n";
                            break;
                    }


                case '4': // Statistics
                    echo "=== Statistics ===
                    1. Most populated department (by doctors)
                    2. Doctor count by department
                    3. Back";

                    $choice = trim(fgets(STDIN));

                    switch ($choice) {
                        case '1':
                            popDep($this->pdo);
                            break;

                        case '2':
                            countDoc($this->pdo);
                            break;

                        case '3': 
                            break;

                        default:
                            echo "Invalid choice. Please try again.\n";
                            break;
                    }

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


?>