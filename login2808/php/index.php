<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">"

<div class="container">
    <?php
    session_start();

    if (!isset($_SESSION['nome'])) {
        header("location:login.php");
    } else {
        ?>
        <p class="text-danger"><?php echo "Bem vindo " . $_SESSION['nome']; ?> </p>
    <?php
    }
    ?>
</div>