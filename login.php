<div id="container-user-akses">
    <form action="<?php echo BASE_URL . "proses_login.php"; ?>" method="post">

        <?php
        $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

        if ($notif == "require") {
            echo "<div class='notif'>Maaf, email dan password yang kamu masukan tidak cocok</div>";
        }
        ?>
        <div class="element-form">
            <label for="email">Email</label>
            <span>
                <input type="text" name="email">
            </span>
        </div>

        <div class="element-form">
            <label for="password">Password</label>
            <span>
                <input type="password" name="password">
            </span>
        </div>
        <div class="element-form">
            <span>
                <input type="submit" value="login">
            </span>
        </div>
    </form>
</div>