
<div class="content-body">
    <!-- row -->
    <form action="<?php echo admin_url('harga/'.$this->uri->segment(3).'/'.$this->uri->segment(4)) ?>" method="POST">
        <?php echo method('_patch') ?>
        <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
        <?php foreach ($produk_detil as $key => $value): ?>
            <div class="container-fluid">
                <h1 class="text-center"><?php echo $value['nama'] ?></h1>
                <div class="row">
                    <?php foreach ($this->M_Harga->harga_fitur($value['id_produk']) as $key => $value): ?>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title"><?php echo $value['nama'] ?></h2>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="id_harga_fitur[]" value="<?php echo $value['id_harga_fitur'] ?>" hidden>
                                    <div class="form-group">
                                        <label for="inputEmail4">Title</label>
                                        <input type="text" class="form-control" id="inputEmail4" value="<?php echo $value['nama'] ?>" name="title[]">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail4">Tagline</label>
                                        <input type="text" class="form-control" id="inputEmail4" value="<?php echo $value['tagline'] ?>" name="tagline[]">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail4">Harga</label>
                                        <input type="text" class="form-control" id="inputEmail4" value="<?php echo $value['harga'] ?>" name="harga[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary">Kirim Perubahan</button>
                </div>
            </div>
        <?php endforeach ?>
    </form>
    <?php foreach ($produk_detil as $key => $value): ?>
        <div class="container-fluid mt-4">
            <!-- <h1 class="text-center mt-4">Sub Fitur</h1> -->
            <div class="row">
                <?php foreach ($this->M_Harga->harga_fitur($value['id_produk']) as $key => $values): ?>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Tambah Sub Fitur</h2>
                            </div>
                            <div class="card-body">
                                <?php foreach ($this->M_Harga->sub_fitur($values['id_harga_fitur']) as $key => $value): ?>
                                    <form action="<?php echo admin_url('harga/sub_fitur/').$this->uri->segment(3).'/'.$this->uri->segment(4) ?>" method="POST">
                                       <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
                                       <?php echo method('_patch') ?>
                                       <div class="input-group mb-3">
                                        <input type="text" name="id_sub_fitur" value="<?php echo $value['id_sub_fitur'] ?>" hidden>
                                        <input type="text" class="form-control font-weight-bold" id="inputEmail4" value="<?php echo $value['nama'] ?>" name="sub_fitur">
                                        <div class="input-group-append">
                                            <button class="btn btn-sm btn-outline-success" id="basic-addon2" type="submit"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-outline-danger" id="basic-addon2" type="button" data-toggle="modal" data-target="#sub_fitur_hapus<?php echo $value['id_sub_fitur'] ?>"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <form action="<?php echo admin_url('harga/sub_fitur/').$this->uri->segment(3).'/'.$this->uri->segment(4) ?>" method="POST">
                                    <div class="modal fade" id="sub_fitur_hapus<?php echo $value['id_sub_fitur'] ?>">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
                                            <?php echo method('_get') ?>
                                            <?php echo get_id($value['id_sub_fitur']) ?>
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Konfirmasi Hapus</h4>
                                                    <a type="button" class="close" data-dismiss="modal">&times;</a>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-outline-primary">Hapus</button>
                                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <?php foreach ($this->M_Harga->isi_fitur($value['id_sub_fitur']) as $key => $value): ?>
                                    <form action="<?php echo admin_url('harga/isi_fitur/').$this->uri->segment(3).'/'.$this->uri->segment(4) ?>" method="POST">
                                        <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
                                        <?php echo method('_patch') ?>
                                        <?php echo get_id($value['id_isi_fitur']) ?>
                                        <div class="pl-4">
                                            <?php if ($value['coret']==1): ?>
                                                <?php echo '<s class="text-danger">' ?>
                                            <?php endif ?>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="inputEmail4" value="<?php echo $value['isi'] ?>" name="isi">
                                                <div class="input-group-append">
                                                    <button class="btn btn-sm btn-outline-success" id="basic-addon2" type="submit"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-outline-danger" id="basic-addon2" type="button" data-toggle="modal" data-target="#isi_fitur_hapus<?php echo $value['id_isi_fitur'] ?>"><i class="fas fa-trash"></i></button>
                                                    <div class="btn btn-outline-warning custom-form custom-switch pr-0 mr-0">
                                                        <input type="checkbox" class="custom-control-input isi-fitur" id="switch<?php echo $value['id_isi_fitur'] ?>" value="<?php echo $value['coret'] ?>" data-id=<?php echo $value['id_isi_fitur'] ?> <?php if ($value['coret']==1): ?>
                                                        <?php echo 'checked' ?>
                                                        <?php endif ?>>
                                                        <label class="custom-control-label" for="switch<?php echo $value['id_isi_fitur'] ?>"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if ($value['coret']==1): ?>
                                                <?php echo '</s>' ?>
                                            <?php endif ?>
                                        </div>
                                    </form>
                                    <form action="<?php echo admin_url('harga/isi_fitur/').$this->uri->segment(3).'/'.$this->uri->segment(4) ?>" method="POST">
                                        <div class="modal fade" id="isi_fitur_hapus<?php echo $value['id_isi_fitur'] ?>">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
                                                <?php echo method('_get') ?>
                                                <?php echo get_id($value['id_isi_fitur']) ?>
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Konfirmasi Hapus</h4>
                                                        <a type="button" class="close" data-dismiss="modal">&times;</a>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-outline-primary">Hapus</button>
                                                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <?php endforeach ?>
                                <form action="<?php echo admin_url('harga/isi_fitur/').$this->uri->segment(3).'/'.$this->uri->segment(4) ?>" class="pl-4" method="POST">
                                    <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
                                    <?php echo method('_post') ?>
                                    <input type="text" name="id_sub_fitur" value="<?php echo $value['id_sub_fitur'] ?>" hidden>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="inputEmail4" value="" name="isi">
                                        <div class="input-group-append">
                                            <div class="btn btn-outline-warning custom-form custom-switch pr-0 mr-0">
                                                <input type="checkbox" class="custom-control-input" name="coret" id="switchtambah<?php echo $value['id_sub_fitur'] ?>" value="1">
                                                <label class="custom-control-label" for="switchtambah<?php echo $value['id_sub_fitur'] ?>"></label>
                                            </div>
                                            <button class="btn btn-sm btn-outline-primary" type="submit" id="basic-addon2"><i class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                </form>
                            <?php endforeach ?>
                            <form action="<?php echo admin_url('harga/sub_fitur/').$this->uri->segment(3).'/'.$this->uri->segment(4) ?>" method="POST">
                               <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
                               <?php echo method('_post') ?>
                               <div class="form-group">
                                <label for="inputEmail4">Tambah Sub Fitur</label>
                                <input type="text" name="id_harga_fitur" value="<?php echo $values['id_harga_fitur'] ?>" hidden>
                                <div class="input-group-append">
                                    <input type="text" class="form-control" id="inputEmail4" value="" name="sub_fitur">
                                    <button class="btn btn-sm btn-outline-primary" id="basic-addon2"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<?php endforeach ?>
</div>
</div>
        <!--**********************************
            Content body end
            ***********************************-->
            <?php 
            $this->load->view('admin/partial/v_footer');
            ?>
            <script type="text/javascript">
                var button_modal = $(".isi-fitur");
                for (let i = 0; i < button_modal.length; i++) {
                    button_modal[i].onclick = function () {
                        var id=$(this).data('id');
                        var coret = $(this).val();
                        var method = '_coret';
                        var csrf=$('input[name=csrf_test_name]').val();
                        $.ajax({
                            url: "<?php echo admin_url('harga/isi_fitur/').$this->uri->segment(3).'/'.$this->uri->segment(4) ?>",
                            type:'POST',
                            data:{
                                id:id,
                                coret:coret,
                                _coret:method,
                                csrf_test_name:csrf
                            },
                            success: function(e){
                                Swal.fire({ 
                                    icon: 'success',
                                    title: 'Berhasil Diubah',
                                    showConfirmButton: false,
                                    timer: 1000
                                });
                                setTimeout(function (){
                                    window.location.href="<?php echo admin_url('harga/isi_fitur/').$this->uri->segment(3).'/'.$this->uri->segment(4) ?>";
                                }, 200);
                            }
                        });
                    }
                }
            </script>
            <script type="text/javascript">
                $(document).ready(function(){
                    <?php if (null !== $this->session->flashdata('message')): ?>
                            toastr.<?php echo $this->session->flashdata('type') ?> (<?php echo "'".$this->session->flashdata('message')."'" ?>,<?php echo "'".$this->session->flashdata('request')."'" ?>, {
                                timeOut: 1000,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
                                positionClass: "toast-top-center",
                                preventDuplicates: !0,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                tapToDismiss: !1
                            })
                 
                    
                    <?php endif ?>
                })
            </script>