<?php
/**
 * Created by PhpStorm.
 * User: G.E.K.T
 * Date: 29/04/2016
 * Time: 01:48
 */

        if (isset($_SESSION['login'])){
            require_once 'bdd.php';
            $req = $DB->prepare("SELECT * FROM messagerie WHERE destinataire= ?");
            $req->execute([$_SESSION['auth']->pseudo]);
            $i = 0;
            while ($unread = $req->fetch(PDO::FETCH_OBJ)) {
                if ($unread->lu == 1) {
                    $i = ++$i;
                }
            } if ($i >= 1){?>
                <script type="text/javascript"> setTimeout(function () {
                        Materialize.toast('Vous avez ' + <?= $i ?> + ' nouveau(x) message(s)', 6000, 'rounded')
                    }, 1900)// 'rounded' is the class I'm applying to the toast </script>
            <?php }} ?>