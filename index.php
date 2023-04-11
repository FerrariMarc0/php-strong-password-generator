<?php
include_once __DIR__ . '/session.php';
require_once __DIR__ . '/dashboard.php';

function verifyPass ($password) {
    $password_length = str_replace(' ', '', $password);
    $password_length = intval($password_length);

    if ($password_length == 0) {
        return "Inserisci un numero!";
    } elseif ($password_length < 10) {
        return "Inserisci almeno 10 caratteri.";
    } elseif ($password_length > 20) {
        return "La password può contenere al massimo 20 caratteri.";
    } 
}
?>



<h1 class="text-success">Password Generator</h1>



<form action="index.php" method="GET">

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Lunghezza password</label>
        <input type="password" name="exampleInputPassword1" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    <p>Email: <?php echo $_SESSION['email']; ?></p>
</form>
<?php echo verifyPass($_GET["password-length"]) ?>

<?php
include __DIR__.'/footer.php';
?>