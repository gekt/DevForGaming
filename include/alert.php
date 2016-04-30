<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 29/04/2016
 * Time: 01:48
 */

        if (isset($_SESSION['login'])){
            if (!$dontshownewmsg) {
                require_once 'bdd.php';
                $req = $DB->prepare("SELECT * FROM messagerie WHERE destinataire=? AND hidden=0");
                $req->execute([$_SESSION['auth']->pseudo]);
                $i = 0;
                while ($unread = $req->fetch(PDO::FETCH_OBJ)) {
                    if ($unread->lu == 1) {
                        $i = ++$i;
                    }
                } if ($i >= 1){?>
                    <script type="text/javascript"> setTimeout(function () {
                            Materialize.toast('Vous avez ' + <?= $i ?> + ' nouveau(x) message(s)', 6000, 'rounded')
                        }, 1900)</script>
                <?php }
            }
        }




        if(isset($_SESSION['flash'])):?>
            <?php foreach($_SESSION['flash'] as $type => $message): ?>
                <script type="text/javascript"> setTimeout(function () {
                        Materialize.toast(' <?= $message; ?> ', 6000, 'rounded')
                    }, 1900)</script>
            <?php endforeach; ?>
            <?php unset($_SESSION['flash']); ?>
        <?php endif; ?>