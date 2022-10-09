<?php 
        session_start();
     ?>
 
     <form method = "POST" >
        
        <div class="kotak_login">>
        Masukkan Username <br>
        <input type = "text" name= "username" placeholder ="username">  <br><br>
        Masukkan Password <br>
        <input type = "password" name = "password_kamu" placeholder = "password"> <br><br>
        <input type = "submit" name = "masuk" value = "login">
        </div>
 
     </form>
 
    <?php 
        if(isset($_POST['masuk'])){
            
            //Masukkan Username;
            $username = $_POST['username'];
            $password_kamu = $_POST['password_kamu'];
 
            if($username == 'admin'){
 
                if($password_kamu == 'admin'){
 
                    $_SESSION['user'] = $username;
                    header('location: admin.php');
 
                }else{
                    echo "
                    <script>
                        alert(' PASSWORD SALAH ... !! ');
                    </script>
                ";
                }
            }

            else if ($username == 'user'){

                if($password_kamu == 'user'){
    
                    $_SESSION['user'] = $username;
                    header('location: user.php');
    
                }else{
                    echo "
                    <script>
                        alert(' PASSWORD SALAH ... !! ');
                    </script>
                ";
                }

            }else{
                echo "
                    <script>
                        alert(' USERNAME TIDAK TERDAFTAR..!! ');
                    </script>
                ";
            }
        }
 
     ?>