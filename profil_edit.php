<?php include ('inc/pdo.php') ?>
<?php include ('inc/fonction.php') ?>
<?php include ('inc/header.php') ?>

<form id="profil" action="valide_profil.php" method="post">

    <label for="nom">Votre nom:</label>
    <span class="error"><?php if(!empty($errors['nom'])){echo $errors['nom'];}?></span>
  <input type="text" name="nom" placeholder="nom" required="required">

    <label for="prenom">Votre prénom:</label>
    <span class="error"><?php if(!empty($errors['prenom'])){echo $errors['prenom'];}?></span>
  <input type="text" name="prenom" placeholder="prenom" required="required"><br>

    <label for="mail">Votre mail:</label>
    <span class="error"><?php if(!empty($errors['mail'])){echo $errors['mail'];}?></span>
  <input type="mail" name="mail" placeholder="mail" required="required" value="<?php echo $_SESSION['user']['mail'] ?>"><br>

    <label for="ddn">Votre date de naissance:</label>
  <input type="date" name="ddn"  value="01-01-2001"><br>

  <select form="profil" class="select_sexe" name="sexe">
    <option name ="homme" value=1>homme</option>
    <option name ="femme" value=2>femme</option>
    <option name ="autre" value=3 selected>autre</option>
  </select><br>

  <p>Votre taille:</p>  <input type="number" name="taille"> <p>en cm</p>
  <br>

    <p>Votre poids:</p><input type="number" name="poid"> <p>en kg</p>
  <br>

    <input type="checkbox" name="notif" value="notif" checked><span>Voulez vous recevoir les notifications </span><br>

    <input type="submit" name="sub" value="Confirmer">

</form>




<?php include ('inc/footer.php') ?>