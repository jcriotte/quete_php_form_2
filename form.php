<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <title>My test page</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php

// define variables and set to empty values
$firstNameErr = $lastNameErr = $userEmailErr = $sujetErr = $userPhoneNumberErr = $userMessageErr = "";
$firstName = $lastName = $userEmail = $sujet = $userPhoneNumber = $userMessage = "";
?>


<p>This is my page</p>
  <form action="thanks.php" method="post">
    <div>
      <label for="name">Nom :</label>
      <input type="text" id="name" name="first_name" required>
      <span class="error">* <?php echo $firstNameErr;?></span>
    </div>
    <div>
      <label for="prenom">Prénom :</label>
      <input type="text" id="prenom" name="last_name" required>
      <span class="error">* <?php echo $lastNameErr;?></span>
    </div>
    <div>
      <label for="mail">e-mail :</label>
      <input type="email" id="mail" name="user_mail" required>
      <span class="error">* <?php echo $userEmailErr;?></span>
    </div>
    <div>
      <label for="phoneNumber">Numéro de téléphone</label>
      <input type="tel" id="phoneNumber" name="user_phone_number" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}"placeholder="01 23 45 67 89" required>
      <span class="error">* <?php echo $userPhoneNumberErr;?></span>
    </div>
    <div>
      <label for="sujet">Sujet de votre message</label>
      <select id="sujet" name="sujet" required>
        <option value="demanderenseignements">Demande de renseignements</option>
        <option value="reservation">Réservation</option>
        <option value="modificationReservation">Modification de réservation</option>
        <option value="annulationReservation">Annulation de réservation</option>
        <option value="reclamation">Réclamation</option>
      </select>
      <span class="error">* <?php echo $sujetErr;?></span>
    </div>
    <div>
      <label for="msg">Message :</label>
      <textarea id="msg" name="user_message" required></textarea>
      <span class="error">* <?php echo $userMessageErr;?></span>
    </div>
    <div>
      <button type="submit" onclick="alert('Le formulaire est soumit!')">Envoyer le Message</button> </button>
    </div>
  </form>
</body>

</html>
