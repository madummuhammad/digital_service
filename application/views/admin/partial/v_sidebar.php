            <!--**********************************
            Sidebar start
            ***********************************-->
            <div class="quixnav">
                <div class="quixnav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label first">Main Menu</li>
                        <li><a href="<?php echo admin_url() ?>" aria-expanded="false"><i class="icon icon-chart-bar-33"></i><span class="nav-text">Dashboard</span></a></li>
                        <li class="nav-label">Pengaturan</li>
                        <li><a href="<?php echo admin_url('website') ?>" target="_blank" ><i
                            class="icon icon-world-2"></i><span class="nav-text">Website</span></a></li>

                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Paket dan Harga</span></a>
                                <ul aria-expanded="false">
                                    <?php foreach ($paket as $key => $value): ?>
                                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><?php echo $value['nama'] ?></a>
                                            <ul aria-expanded="false">
                                                <?php foreach ($this->M_Harga->produk($value['id_paket']) as $key => $value): ?>
                                                    <li><a href="<?php echo admin_url('harga/').$value['id_paket'].'/'.$value['id_produk'] ?>"><?php echo $value['nama'] ?></a></li>
                                                <?php endforeach ?>
                                            </ul>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </li>

                            <?php if ($this->session->userdata('role_id')==1): ?>
                                <li class="nav-label">Admin</li>
                                <li><a href="<?php echo admin_url('admin') ?>" aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">Admin</span></a></li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
        <!--**********************************
            Sidebar end
            ***********************************-->