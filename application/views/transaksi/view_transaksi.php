<div class="content-wrapper" id="tambah_property">
    <div class="container">
        <form id="form_transaksi" action="<?= base_url() ?>transaksi/inserttransaksi" method="post">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body p-1">
                        <div class="row">
                            <div class="col-sm-4 p-4">
                                <h4 class="dark txt_title d-inline-block">Transaksi SPR</h4>
                            </div>
                            <div class="col-sm-4 pt-2">
                                <div class="form-group">
                                <label for="">No PPJB</label>
                                    <input type="text" class="form-control" name="txt_ppjb" id="txt_ppjb" placeholder="Masukkan PPJB">
                                </div>
                            </div>
                            <div class="col-sm-4 p-4">
                                <img id="logo_perusahaan" width="50px" src="<?= base_url().'assets/uploads/images/properti/'.$img->logo_perusahaan ?>" class="float-right" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="d-inline-block">Data Konsumen</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="select_konsumen">Pilih Konsumen</label>
                                    <select name="select_konsumen" class="form-control p-2" id="select_konsumen">
                                        <option value="">Pilih Konsumen</option>
                                        <?php foreach ($konsumen as $key => $value) : ?>
                                            <option value="<?= $value->id_konsumen ?>"><?= $value->nama_konsumen ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>    
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_card">Card</label>
                                    <input type="text" name="txt_card" class="form-control" id="txt_card" disabled>
                                </div>        
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_telp">Telp</label>
                                    <input type="text" name="txt_telp" class="form-control" id="txt_telp" disabled>
                                </div> 
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_email">Email</label>
                                    <textarea class="form-control" name="txt_email" id="txt_email" rows="3" disabled></textarea>
                                </div>  
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="txt_alamat">Alamat</label>
                                    <textarea class="form-control" name="txt_alamat" id="txt_alamat" rows="3" disabled></textarea>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="d-inline-block">Data Transaksi</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="select_unit">Pilih Unit</label>
                                    <select name="select_unit" class="form-control p-2" id="select_unit">
                                        <option value="">Unit Properti</option>
                                        <?php foreach ($unit as $key => $value) : ?>
                                            <option value="<?= $value->id_unit ?>"><?= $value->nama_unit?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>         
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="txti_nama">Properti</label>
                                    <input type="text" name="txt_properti" class="form-control" id="txt_properti" disabled>
                                </div>   
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="txt_type">Type Unit</label>
                                    <input type="text" name="txt_type" class="form-control" id="txt_type" disabled>
                                </div> 
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="txt_bangunan">Luas Bangunan</label>
                                    <input type="text" name="txt_bangunan" class="form-control" id="txt_bangunan" disabled>
                                </div> 
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="txt_bangunan">Luas Tanah</label>
                                    <input type="text" name="txt_tanah" class="form-control" id="txt_tanah" disabled>
                                </div> 
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="txt_harga">Harga</label>
                                    <input type="text" name="txt_harga" class="form-control" id="txt_harga" value="<?= number_format(0,2,',','.') ?>" disabled>
                                </div> 
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-end">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="txt_nama_tambah" class="col-sm-5 col-form-label f-29">Kesepakatan Harga</label>
                                    <div class="col-sm-7">
                                    <input type="text" name="txt_kesepakatan" class="form-control" id="txt_kesepakatan">
                                    <small class="form-text text-danger">* digunakan untuk mengecek total harga</small>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body" id="clone_form">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="d-inline-block">Data Tambahan</h5>
                                <button type="button" class="btn btn-sm btn-primary float-right" id="tambah_form">Tambah</button>
                            </div>
                        </div>
                        <hr>
                        <div class="form-clone">
                            <div class="form-tambah">
                                <small class="tambah_txt">Penambahan</small>
                                <button type="button" class="btn btn-sm btn-danger float-right" id="hapus_form">Hapus</button>
                                <div class="row mt-2">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="txt_nama_tambah">Nama</label>
                                            <input type="text" name="txt_nama_tambah[]" class="form-control" id="txt_nama_tambah">
                                        </div>   
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="txt_volume_tambah">Volume</label>
                                            <input type="number" name="txt_volume_tambah[]" class="form-control" id="txt_volume_tambah">
                                        </div> 
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="txt_satuan_tambah">Satuan</label>
                                            <input type="text" name="txt_satuan_tambah[]" class="form-control" id="txt_satuan_tambah">
                                        </div> 
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="txt_harga_tambah">Harga per M2</label>
                                            <input type="text" name="txt_harga_tambah[]" class="form-control" id="txt_harga_tambah">
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-end">
                            <!-- <div class="col-sm-2"> -->    
                            <!-- </div> -->
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-2 pt-4">
                                        <button type="button" class="btn btn-sm btn-info btn-kunci"><i class="mdi mdi-lock-outline"></i></button>     
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <label for="txt_total">Total Tambahan</label>
                                            <input type="text" name="txt_total_tambahan" class="form-control" id="txt_total_tambahan" value="0" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body" id="clone_form">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="d-inline-block">Total</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-2 periode_row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="txt_tanda_jadi">Tanda Jadi</label>
                                    <input type="text" name="txt_tanda_jadi" class="form-control" id="txt_tanda_jadi">
                                </div>
                                <div class="form-radio form-radio-flat">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input btn-check" name="radio_tj" id="radio2" value="tidak_masuk_harga_jual">Tidak masuk harga jual
                                    </label>
                                </div>
                                <div class="form-radio form-radio-flat">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input btn-check" name="radio_tj" id="radio1" value="masuk_harga_jual">Masuk harga jual
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="txt_ttl_transaksi">Total Transaksi</label>
                                    <input type="text" name="txt_ttl_transaksi" class="form-control" id="txt_ttl_transaksi" Readonly>
                                </div> 
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="periode_Um">Periode Uang Muka</label>
                                    <select name="periode_Um" id="periode_Um" class="form-control form-control-sm">
                                        <option value="">Pilih Periode</option>
                                        <?php $p = 36; for ($i=1; $i < $p ; $i++) { ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                        <?php } ?>
                                    </select>
                                </div> 
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-end">
                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <div class="col-sm-7">
                                        <input type="text" name="txt_uang_muka" class="form-control" id="txt_uang_muka" Readonly>
                                    </div>
                                    <label for="txt_uang_muka" class="col-sm-5 f-29 col-form-label">Uang Muka</label>
                                </div> 
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label for="txt_nama_tambah" class="col-sm-5 col-form-label f-29 border-left border-dark">Total Akhir</label>
                                    <div class="col-sm-7">
                                    <input type="text" name="txt_ttl_akhir" class="form-control" id="txt_ttl_akhir" Readonly>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-2">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="d-inline-block">Pembayaran dan Tanggal Penting</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 bayar">
                                <div class="form-group">
                                    <label for="txt_type_pembayaran">Type Pembayaran</label>
                                    <select name="txt_type_pembayaran" id="txt_type_pembayaran" class="form-control form-control-sm">
                                        <option value="">Pilih Type</option>
                                        <?php foreach ($type as $key => $value): ?>
                                            <option value="<?= $value['id_type_bayar'] ?>"><?= $value['type_bayar'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div> 
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="txt_type_pembayaran">Tanggal Tanda Jadi</label>
                                    <input type="date" class="form-control" name="tgl_tanda_jadi" id="tgl_tanda_jadi">
                                </div> 
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="txt_type_pembayaran">Tanggal Uang Muka</label>
                                    <input type="date" class="form-control" name="tgl_uang_muka" id="tgl_uang_muka">
                                </div> 
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="txt_type_pembayaran">Tanggal Pembayaran</label>
                                    <input type="date" class="form-control" name="tgl_pembayaran" id="tgl_pembayaran">
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" id="btn_simpan_properti" class="btn btn-success mr-2">Simpan</button>
                                <a href="<?= base_url() ?>properti" id="btn_batal_properti" class="btn btn-dark mr-2">Batal</a>
                            </div>  
                        </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>