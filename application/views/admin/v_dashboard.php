**********************************
Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Selamat Datang, <?php echo $this->session->userdata('name') ?></h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Member</th>
                                        <th>Project</th>
                                        <th>Jumlah</th>
                                        <th>Waktu Pembelian</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""><img width="75" src="" alt=""></a>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td><span></span></td>
                                        <td><span></span></td>
                                        <td>
                                            <div class="custom-control custom-switch">
                                             <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
                                             <input type="checkbox" class="custom-control-input konfirmasi" id="switch1" value="">
                                             <label class="custom-control-label" for="switch1">Konfirmasi</label>
                                         </div>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                     </div> -->
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
        <!--**********************************
            Content body end
            ***********************************-->
            <?php 
            $this->load->view('admin/partial/v_footer');
            ?>
            <script type="text/javascript">
                var button_modal = $(".konfirmasi");
                for (let i = 0; i < button_modal.length; i++) {
                    button_modal[i].onclick = function () {
                        var project=$(this).data('project');
                        var id=$(this).data('id');
                        var status = $(this).val();
                        var method = '_post';
                        var csrf=$('input[name=csrf_test_name]').val(); 
                        $.ajax({
                            url: "<?php echo base_url('adminsystem') ?>",
                            type:'POST',
                            data:{
                                id:id,
                                applied:status,
                                _post:method,
                                csrf_test_name:csrf
                            },
                            success: function(e){
                                Swal.fire({    
                                    icon: 'success',
                                    title: 'Berhasil Dikonfirmasi',
                                    showConfirmButton: false,
                                    timer: 1000
                                });
                                setTimeout(function (){
                                    window.location.href="<?php echo base_url('adminsystem/order/') ?>"+project;
                                }, 1000);
                            }
                        });
                    }
                }
            </script>