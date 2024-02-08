<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('dashboard'); ?>" class="brand-link">
        <img src="<?= DIST; ?>img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8;" />
        <span class="brand-text font-weight-light"><?= APP_NAME; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?php 
                    if(empty($_SESSION['photo'])){
                        $image = "https://via.placeholder.com/120x120?text=preview";
                    }else{
                        if (file_exists('assets/uploads/' . $_SESSION['photo'])) {
                            $image = base_url('assets/uploads/' . $_SESSION['photo']);
                        } else {
                            $image = "https://via.placeholder.com/120x120?text=preview";
                        }
                    }
                ?>
                <img src="<?= $image; ?>" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
                <a href="<?= base_url('profile'); ?>" class="d-block">Administrator</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url('dashboard'); ?>" class="nav-link <?= isset($dashboard)?'active':''; ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p> Dashboard </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('gallery'); ?>" class="nav-link <?= isset($gallery)?'active':''; ?>">
                        <i class="nav-icon fas fa-camera"></i>
                        <p> Gallery </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('notifications'); ?>" class="nav-link <?= isset($notifications)?'active':''; ?>">
                        <i class="nav-icon fas fa-bell"></i>
                        <p> Notifications </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('ecactivities'); ?>" class="nav-link <?= isset($ecactivities)?'active':''; ?>">
                        <i class="nav-icon fas fa-basketball-ball"></i>
                        <p> EC Activities </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('achievements'); ?>" class="nav-link <?= isset($achievements)?'active':''; ?>">
                        <i class="nav-icon fas fa-trophy"></i>
                        <p> Achievements </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('feedbacks'); ?>" class="nav-link <?= isset($feedbacks)?'active':''; ?>">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p> Feedbacks </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('staffs'); ?>" class="nav-link <?= isset($staffs)?'active':''; ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p> Staffs </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('placements'); ?>" class="nav-link <?= isset($placements)?'active':''; ?>">
                        <i class="nav-icon fas fa-hands-helping"></i>
                        <p> Placements </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('sliders'); ?>" class="nav-link <?= isset($sliders)?'active':''; ?>">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p> Sliders </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>