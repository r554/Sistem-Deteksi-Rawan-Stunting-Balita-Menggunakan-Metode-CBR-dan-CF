<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->

    <span class="brand-text font-weight-dark brand-link text-center">Sistem Pakar Stunting</span>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url()?>assets/Gambar/foto_profil/default.png" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <?php echo $this->session->userdata('nama') ?>
            </div>
        </div>

        <!-- SidebarSearch Form -->
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
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/Dashboard/tampil_dashboard')?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Beranda
                            <!-- <span class="badge badge-info right">2</span> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>
                            Admin
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/Profil/tampil_profil')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Edit Profil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/Profil/edit_ubahpw')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ubah Password</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">MODUL</li>

                <li class="nav-item">
                    <a href="<?php echo base_url('admin/Penyakit/tampil_penyakit')?>" class="nav-link">
                        <i class="nav-icon fas fa-clinic-medical"></i>
                        <p>
                            Penyakit
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/Faktor/tampil_faktor')?>" class="nav-link">
                        <i class="nav-icon far fa-calendar-plus"></i>
                        <p>
                            Faktor Penyakit
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/Pengetahuan/tampil_pengetahuan')?>" class="nav-link">
                        <i class="nav-icon fas fa-stethoscope"></i>
                        <p>
                            Basis Pengetahuan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/Pengguna/tampil_pengguna')?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Pengguna
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/Login/logout')?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Keluar
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="<?php echo base_url('Frondend/frondend/biodata')?>" class="nav-link">
                        <i class="nav-icon fas fa-stethoscope"></i>
                        <p>
                            Konsultasi
                        </p>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>