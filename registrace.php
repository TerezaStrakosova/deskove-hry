<!DOCTYPE html>
<?php require "assets/head.php"; ?>
<body>
    <?php require "assets/header.php"; ?>

    <!----- Main ----->
    <div class="container">
        <div class="row mt-5 mb-2">
          <div class="col text-center">
            <h2><strong>Registrace na turnaj: KABO 22.12.2023</strong></h2>
          </div>
        </div>

    <!----- Kontaktní formulář ----->
        <form action="odeslani-registrace.php" method="post">
          <!-- <div class="form-result success">Odeslání proběhlo v pořádku</div>
          <div class="form-result error">Chyba při odeslání. Zkuste to prosím znovu</div> -->

            <div class="row mb-3">
              <label for="jmeno" class="col-sm-2 col-form-label">Jméno</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="jmeno">
              </div>
            </div>
            <div class="row mb-3">
              <label for="prijmeni" class="col-sm-2 col-form-label">Příjmení</label>
              <div class="col-sm-10">
                <input type="text" name="surname" class="form-control" id="prijmeni">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="inputEmail3" required>
              </div>
            </div>

            <div class="row mb-3">
                <div>
                    <label for="dospely" class="col-form-label me-2">Dospělý</label>
                    <input type="radio" name="cathegory" id="dospely" class="me-2" checked value="dospělý">
                    <label for="dite" class="col-form-label me-2">Dítě do 13 let včetně</label>
                    <input type="radio" name="cathegory" id="dite" value="junior">
                </div>
            </div>
            <div class="g-recaptcha row mb-3" data-sitekey="6LfMgCQpAAAAAI32kCOzALekBxEWDaWU4ULsUmWY" data-action="LOGIN"></div>

            <button type="submit" class="btn btn-primary tlacitko-odeslat mb-3">Odeslat</button>
          </form>
      </div>

    <?php require "assets/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>