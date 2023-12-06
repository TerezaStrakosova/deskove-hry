<?php
if (isset($_GET['success'])) {
    $success = intval($_GET['success']);
    
    if ($success === 1) {
        echo '<script>alert("Váš požadavek byl úspěšně odeslán. Do několika minut byste měli obdržet email s informacemi. Zkontrolujte prosím také složku hromadné a spam.");</script>';
    } elseif ($success === -1) {
        echo '<script>alert("Nastala chyba při odesílání požadavku.");</script>';
    }
}
?>

<!DOCTYPE html>
<?php require "assets/head.php"; ?>
<body>
    <?php require "assets/header.php"; ?>

    <!-- Main -->
    <main>
      <div class="container text-center">
        <div class="row mt-5 mb-2">
          <div class="col">
            <h2><strong>Aktuality</strong></h2>
          </div>
        </div>
        <div class="row">
            <div class="col mb-5">
                <img src="img/plakat.png" alt="" class="img-fluid custom-img">
            </div>
        </div>
      </div>
    </main>

    <?php require "assets/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>