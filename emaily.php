<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Načítá pole z formuláře - name, email a message; odstraňuje bílé znaky; odstraňuje HTML
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // // Kontroluje data popř. přesměruje na chybovou adresu
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?success=-1#form");
        exit;
     }

    // Odeslání emailu
    $robot_name = "Deskovky Kateřinice";
    $robot_email = "robot@deskovky-katerinice.fun";
    // Odeslání notifikačního emailu mně
    $to_admin = "tereza.strakosova@seznam.cz";  // kam mail přijde
    $subject_admin = "Máte novou zprávu od: $name";    // předmět emailu
    // Obsah emailu, který se vám odešle
    $email_content_admin = "Jméno: $name\n";
    $email_content_admin .= "Email: $email\n\n";
    $email_content_admin .= "Zpráva:\n$message\n";
    $email_headers = "From: $robot_name <$robot_email>";    // hlavička mailu
    mail($to_admin, $subject_admin, $email_content_admin, $email_headers);  // odeslání emailu    
    // Přesměrování na stránku, pokud vše proběhlo v pořádku
    header("Location:index.php?success=1#form");

    // Odeslání potvrzovacího e-mailu uživateli
    $to_user = $email;
    $subject_user = 'Deskovky - kontakt';
    $message_user = 
    '
    Dobrý den,

    děkujeme za Váš email, bude co nejdříve zpracován.
    
    Toto je automaticky generovaná odpověď, která potvrzuje příchod Vaší zprávy, prosíme, neodpovídejte na ni. 
    
    Děkujeme.
    Deskovky Kateřinice';
    mail($to_user, $subject_user, $message_user, $email_headers);
    
    // Přesměrování na stránku, pokud vše proběhlo v pořádku
    
    header("Location: index.php?success=1#form");
    exit;
    
} else {
    echo "Přístup zakázán.";
}
?>

