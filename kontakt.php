<!DOCTYPE html>
<?php require "assets/head.php"; ?>
<body>
    <?php require "assets/header.php"; ?>

    <!----- Hlavní část ----->
      <div class="container">
        <div class="row mt-5 mb-2">
          <div class="col text-center">
            <h2><strong>Kontakt</strong></h2>
          </div>
        </div>
        <div class="row">
            <div class="col mb-4 text-center">
                <p>Email: deskovky.katerinice@gmail.com</p>
                <p>Facebook: <a target="_blank" href="https://www.facebook.com/profile.php?id=100094526834678">Deskovky Kateřinice</a></p>
            </div>
        </div>

    <!----- Kontaktní formulář ----->
        <form action="emaily.php" method="post">
          <!-- <div class="form-result success">Odeslání proběhlo v pořádku</div>
          <div class="form-result error">Chyba při odeslání. Zkuste to prosím znovu</div> -->


            <div class="row mb-3">
              <label for="jmeno" class="col-sm-2 col-form-label">Jméno</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="jmeno">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="inputEmail3" required>
              </div>
            </div>
            <div class="row mb-3">
                <label for="floatingTextarea2" class="col-sm-2 col-form-label">Zpráva</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="message" placeholder="Vaše zpráva" id="floatingTextarea2" style="height: 100px" required></textarea>
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