<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?=$assetDir?>/img/icons1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/Cat2.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="site/index" class="d-block">Elizabeth Podkaluk</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    
                    ['label' => 'Main Admin Page', 'url' => ['site/index'], 'icon' => 'th'],
                    ['label' => 'TABLE DATA', 'header' => true],
                    ['label' => 'Users', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info', 'url' => ['/user'],],
                    ['label' => 'Feedbacks', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info', 'url' => ['/feedbacks'],],
                    ['label' => 'Anonym tickets', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info', 'url' => ['/tikanonymous'],],
                    ['label' => 'Tickets', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info', 'url' => ['/tickets'],],

                    ['label' => 'SITE PAGES', 'header' => true],
                    ['label' => 'Home', 'url' => ['../frontend/web/'], 'iconStyle' => 'far'],
                    ['label' => 'Schedule', 'url' => ['../frontend/web/schedule'], 'iconStyle' => 'far'],
                    ['label' => 'Discounts', 'url' => ['../frontend/web/discounts'], 'iconStyle' => 'far'],
                    ['label' => 'About', 'url' => ['../frontend/web/about'], 'iconStyle' => 'far'],

                    ['label' => 'Yii2 PROVIDED', 'header' => true],
                    ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank', 'badge' => '<span class="right badge badge-danger">New</span>'],
                    ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    
                    
                    ['label' => 'TABLE DATA', 'header' => true],
                    ['label' => 'Important', 'iconStyle' => 'far', 'iconClassAdded' => 'text-danger', 'url' => ['/user'],],
                    ['label' => 'Warning', 'iconClass' => 'nav-icon far fa-circle text-warning'],
                    ['label' => 'Informational', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
