<header class="header">
    <a href="dashboard.php" class="logo"><span>Painel</span> do Admin</a>

    <div class="profile">
        <?php
        $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
        $select_profile->execute([$admin_id]);
        $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
        ?>
        <p><?= $fetch_profile['name']; ?></p>
        <a href="update_profile.php" class="btn">update profile</a>
    </div>

    <nav class="navbar">
        <a href="dashboard.php">
            <i class="fas fa-home"></i> <span>home</span>
        </a>
        <a href="add_posts.php">
            <i class="fas fa-pen"></i> <span>add post</span>
        </a>
        <a href="view_posts.php">
            <i class="fas fa-eye"></i> <span>ver posts</span>
        </a>
        <a href="admin_accounts.php">
            <i class="fas fa-user"></i> <span>conta</span>
        </a>
        <a href="../components/admin_logout.php" onclick="return confirm ('Sair do site?');">
            <i class="fas fa-right-from-bracket"></i> <span style="color:var(--red);">sair</span>
        </a>
    </nav>

    <div class="flex-btn">
        <a href="admin_login.php" class="option-btn">login</a>
        <a href="register_admin.php" class="option-btn">registrar-se</a>
    </div>

</header>

<div id="menu-btn" class="fas fa-bars"></div>