<?php
if ($user_id) {
    direct(BASE_URL);
}
?>

<div id="container-user-akses">
    <form action="<?php echo BASE_URL . "proses_register.php"; ?>" method="post">

        <?php
        $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
        $nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
        $email = isset($_GET['email']) ? $_GET['email'] : false;
        $phone = isset($_GET['phone']) ? $_GET['phone'] : false;
        $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;

        if ($notif == "require") {
            echo "<div class='notif'>Maaf, Kamu harus melengkapi form dibawah ini</div>";
        } elseif ($notif == "password") {
            echo "<div class='notif'>Maaf, Password yang kamu masukan tidak sama</div>";
        } elseif ($notif == "email") {
            echo "<div class='notif'>Maaf, Email yang kamu masukan sudah terdaftar</div>";
        }
        ?>

        <div class="element-form">
            <label for="nama_lengkap">Nama Lengkap</label>
            <span>
                <input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap ?>">
            </span>
        </div>
        <div class="element-form">
            <label for="email">Email</label>
            <span>
                <input type="text" name="email" value="<?php echo $email ?>">
            </span>
        </div>
        <div class="element-form">
            <label for="phone">Nomer Telepon</label>
            <span>
                <input type="text" name="phone" value="<?php echo $phone ?>">
            </span>
        </div>
        <div class="element-form">
            <label for="alamat">alamat</label>
            <span>
                <textarea name="alamat"><?php echo $alamat ?></textarea>
            </span>
        </div>
        <div class="element-form">
            <label for="password">Password</label>
            <span>
                <input type="password" name="password">
            </span>
        </div>
        <div class="element-form">
            <label for="re_password">Re-Type Password</label>
            <span>
                <input type="password" name="re_password">
            </span>
        </div>
        <div class="element-form">
            <span>
                <input type="submit" value="register">
            </span>
        </div>
    </form>
</div>