<?php 
    include_once __DIR__.'/session.php';

    if(empty($_SESSION['email'])){
        header('Location: ./index.php');
    }

    include __DIR__.'/head.php';
?>

<h1>Benvenuto</h1>
<?php echo $_SESSION['email']; ?>
<a href="logout.php">Logout</a>

<?php
include __DIR__.'/footer.php';
?>
