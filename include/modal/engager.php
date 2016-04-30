<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 30/04/2016
 * Time: 13:03
 */
 ?>
<!-- Modal Structure -->
<div id="modal_engager" class="modal">
    <div class="modal-content">
        <div class="row">
        <h1 class="title-blue center-align">Engager <?= $data->pseudo ?></h1>
        <form action="cv.php" method="post" enctype="multipart/form-data">
            <div class="input-field col offset-l2 offset-m2 l8 m8 s12">
                <input name="sujet" id="sujet" type="text" class="validate" value="[OFFRE] Bonjour <?= $data->pseudo ?> je souhaiterais vous engagez" required="">
                <label class="label-inscription" for="sujet">Sujet :</label>
            </div>
            <div class="input-field col offset-l2 offset-m2 l8 m8 s12">
                <textarea id="message" name="message" class="materialize-textarea" required></textarea>
                <label class="label-inscription" for="message">Message :</label>
            </div>
            <div class="input-field col offset-l2 offset-m2 l8 m8 s12">
            <input class="label-inscription" type="checkbox" id="confirm" required/>
            <label style="margin-left: -10px;" for="confirm">Je confirme vouloir engager <?= $data->pseudo ?></label>
            </div>
            <input type="hidden" name="destinataire" value="<?= $data->pseudo ?>">
            <div class="input-field col offset-l2 offset-m2 l8 m8 s12">
                <button class="btn btn-register waves-effect waves-light" name="engager" type="submit">Engager
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
        </div>
    </div>
</div>