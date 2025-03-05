<div id="container-user-akses">
    <form action="<?php echo BASE_URL . "proses_register.php"; ?>" method="post">
        <div class="element-form">
            <label for="nama_lengkap">Nama Lengkap</label>
            <span>
                <input type="text" name="nama_lengkap">
            </span>
        </div>
        <div class="element-form">
            <label for="email">Email</label>
            <span>
                <input type="text" name="email">
            </span>
        </div>
        <div class="element-form">
            <label for="phone">Nomer Telepon</label>
            <span>
                <input type="text" name="phone">
            </span>
        </div>
        <div class="element-form">
            <label for="alamat">alamat</label>
            <span>
                <textarea name="alamat"></textarea>
            </span>
        </div>
        <div class="element-form">
            <label for="password">Password</label>
            <span>
                <input type="password" name="password">
            </span>
        </div>
        <div class="element-form">
            <label for="re-password">Re-Type Password</label>
            <span>
                <input type="password" name="re-password">
            </span>
        </div>
        <div class="element-form">
            <span>
                <input type="submit" value="register">
            </span>
        </div>
    </form>
</div>