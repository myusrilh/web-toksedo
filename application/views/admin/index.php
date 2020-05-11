<div class="container" style="min-height:768 px">
<?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="mt-3 alert alert-info" role="alert">
            Data admin <strong>berhasil</strong> <?= $this->session->flashdata('flash-data'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <div class="row py-5">
        <div class="col py-5 mx-auto">
            <h2 class="text text-info text-center"> Selamat Datang, <?php echo $this->session->userdata('nama');?> !</h2>
            <p style="font-size: 30px;" class="text text-info text-center"> (<?php echo $this->session->userdata('level');?>)</p>
        </div>
    </div>
    
</div>
