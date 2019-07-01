<div class="content-wrapper">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="dark txt_title d-inline-block mt-2">Tambah Persyaratan Sasaran</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body p-4">
                <form action="<?php echo base_url("persyaratankonsumen/coretambah"); ?>" method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Persyaratan</label>
                                <input type="text" name = "nama" class="form-control" placeholder="Nama Persyaratan">
                                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputName1">Poin Penting</label>
                                <select name="poin" class="form form-control">
                                    <option value="">-- Pilih Poin --</option>
                                    <option value="ps">Penting Sekali</option>
                                    <option value="p">Penting</option>
                                    <option value="s">Sedang</option>
                                    <option value="tp">Tidak Penting</option>
                                </select>
                                <small class="form-text text-danger"><?= form_error('poin'); ?></small>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputName1">Keterangan</label>
                                <input type="text" name = "ket" class="form-control" placeholder="Keterangan">
                                <small class="form-text text-danger"><?= form_error('ket'); ?></small>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i>Simpan</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

