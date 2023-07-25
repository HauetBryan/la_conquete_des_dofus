<?php 

    require_once '../../views/users/register.php';

            //     $emailR = '/^[\w._%+-]+@[\w.-]+\.[a-zA-Z]{2,}$/';
            if(isset($_POST['email'])) {

                if(!empty($_POST['email'])) {

                    $email = $_POST['email'];
                    
                    echo 'L\'email saisi ' . $email . " est valide !"; 
                } else {
                    echo '<p style="color: red;" >Le champ ne correspond pas.</p>';
                }
            }
            // var_dump($_SERVER['PHP_SELF']);
