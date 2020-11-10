
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="<?= base_url() ?>data_barang">
                                <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                                Data barang
                            </a>
                            <a class="nav-link" href="<?= base_url() ?>pengaturan">
                                <div class="sb-nav-link-icon"><i class="fas fa-sliders-h"></i></div>
                                Pengaturan
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"><h6>Masuk sebagai: <br><br> <?= $admin['name']; ?></h6></div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
