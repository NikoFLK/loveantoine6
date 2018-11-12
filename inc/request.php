<?php

function b_add_vaccin($nom){
  global $pdo;
  $sql = "SELECT nom FROM vax_vaccins WHERE nom = :nom";
  $query = $pdo -> prepare($sql);
  $query -> bindValue(':nom', $nom, PDO::PARAM_STR);
  $query -> execute();
  $nomVaccin = $query -> fetch();
  return $nomVaccin;
}

function b_add_vaccin1($nom,$cible,$labo,$info){
  global $pdo;
  $sql = "INSERT INTO vax_vaccins(nom, maladie_cible, labo, info)
          VALUES (:nom, :cible, :labo, :info)";
  $query = $pdo -> prepare($sql);
  $query -> bindValue(':nom', $nom, PDO::PARAM_STR);
  $query -> bindValue(':cible', $cible, PDO::PARAM_STR);
  $query -> bindValue(':labo', $labo, PDO::PARAM_STR);
  $query -> bindValue(':info', $info, PDO::PARAM_STR);
  $query -> execute();
}

}

function index($mail){
  global $pdo;
  $sql = "SELECT mail FROM vax_profils WHERE mail = :mail";
  $query = $pdo -> prepare($sql);
  $query -> bindValue(':mail', $mail, PDO::PARAM_STR);
  $query -> execute();
  $userMail = $query -> fetch();
  return $userMail;
}

function index1($mail, $token, $hash){
  $sql = "INSERT INTO vax_profils ( mail, mdp , created_at,token,status)
          VALUES ( :mail, :hash, NOW(), :token,'user')";
  $query = $pdo -> prepare($sql);
  $query -> bindValue(':mail', $mail, PDO::PARAM_STR);
  $query -> bindValue(':token', $token, PDO::PARAM_STR);
  $query -> bindValue(':hash', $hash, PDO::PARAM_STR);
  $query -> execute();
}

function index3($mail){
  global $pdo;
  $sql = "SELECT * FROM vax_profils
          WHERE mail = :mail";
  $query = $pdo -> prepare($sql);
  $query -> bindValue(':mail', $mail, PDO::PARAM_STR);
  $query -> execute();
  $user = $query -> fetch();
  return $user;
