<?php
$pageTitle = 'Register';
include './include/header.php';
include './include/constant.php';

if($_POST){
    
    if(!$connection){
        echo 'no database';
    }
    mysqli_set_charset($connection, 'utf8');
    
    $sql = 'INSERT INTO users(user_name, password) VALUES ("'.$_POST['username'].'", "'.$_POST['password'].'" )';
    
    $query = mysqli_query($connection, $sql);
    
    if($query){
        echo 'uspesno ste se registrovali sada mozete da se prijavite <a href="login.php" >login</a>';
        
    }
    else{
        echo 'error with register';
    }
    
}

?>
<h1>Register form</h1>
<form method="post" >
    <div>
        Ime:<input type="text" name="username"/>
    </div>
    <div>
       Sifra:<input type="text" name="password"/>
    </div>
    <div>
        <input type="submit" value="Go" />
    </div>
    
</form>

<?php
include './include/footer.php';



