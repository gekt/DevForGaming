<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 29/04/2016
 * Time: 13:28
 */




if (isset($_POST['submit'])) {
    $target_dir = "user-folder/" . $_SESSION['auth']->pseudo . "/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]['name']);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    $temp = explode(".", $_FILES["fileToUpload"]["name"]);
    $newfilename = "" . $_SESSION['auth']->pseudo . "_avatar." . end($temp);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if ($check == false) {
        $_SESSION['flash']['error'] = "Veuillez uploader une image";
    } else {
        if ($imageFileType != "png") {
            $_SESSION['flash']['error'] = "Veuillez uploader une image png";
        } else {
            if ($_FILES["fileToUpload"]["size"] > 5000000) {
                $_SESSION['flash']['error'] = "L'image est trop grosse";
                $uploadOk = 0;
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . $newfilename)) {
                    $_SESSION['flash']['success'] = "Votre avatar a été changé";
                } else {
                    $_SESSION['flash']['error'] = "Votre avatar n'a pas pu être uploadé";
                }
            }
        }
    }
} ?>
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h1 class="title-blue center-align">Changer votre avatar</h1>
        <form action="compte.php" method="post" enctype="multipart/form-data">
            <div class="file-field input-field">
                <div class="btn">
                    <span>Fichier</span>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" name="fileToUpload" id="fileToUpload" type="text">
                </div>
            </div>
            <button class="btn btn-register waves-effect waves-light" name="submit" value="Upload Image" type="submit">Changer mon avatar
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</div>