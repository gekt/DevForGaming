<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 28/04/2016
 * Time: 16:36
 */


/** CETTE PAGE A POUR BUT D'AFFICHER DES INDFOS VIA LA FONCTION [ debug() ] */
session_start();
include_once 'include/functions.php';
debug($_SESSION['auth']);

echo '<pre>' . $_SESSION['auth']->id . '</pre>';  /** Pour appeller les differents objets de la session active changer lobjet par un autre (ex. id ou pseudo) */
echo '<pre>' . $_SESSION['auth']->pseudo . '</pre>';
echo '<pre>' . $_SESSION['auth']->nom . '</pre>';
echo '<pre>' . $_SESSION['auth']->prenom . '</pre>';
echo '<pre>' . $_SESSION['auth']->mdp . '</pre>';
echo '<pre>' . $_SESSION['auth']->email . '</pre>';
echo '<pre>' . $_SESSION['auth']->datedenaissance . '</pre>';
echo '<pre>' . $_SESSION['auth']->sexe . '</pre>';
echo '<pre>' . $_SESSION['auth']->date_inscription . '</pre>';

