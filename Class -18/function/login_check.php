
<?php include ('../db.php');?>
<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){

   
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username!=='' && $password!=='')
    {
            
        
        $sql = 'SELECT * FROM login_php.users';

            $statement = $pdo->query($sql);

            // get all users
            $users = $statement->fetchAll(PDO::FETCH_ASSOC);

            if ($users) {
                // show the publishers
                foreach ($users as $user) {
                    // echo $user['id'] ;
                    // echo $user['email'] ;
                    // echo $user['name'] . '<br>';

                 if($username == $user['name'] && $password== $user['password']){
                            echo "Login Successfully!";


                                echo <<< DEMO

                            <div style="border:2px solid black; padding: 20px;">


                                <h2>Welcome $username</h2>
                            
                            
                            </div>


                            DEMO;
                                }
                                else{

                                    echo "Credentials Invalid";
                                    header("Location:../index.php");
                                }
                        }

                }
            }
        
        
        


}
else{

}