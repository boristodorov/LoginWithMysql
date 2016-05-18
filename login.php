<?php
$pageTitle='Login page';
include './include/header.php';

?>

<h1>Login forma</h1>
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