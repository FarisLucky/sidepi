<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="dark txt_title d-inline-block mt-2">Kelola Pengeluaran</h4>
                                <img id="logo_perusahaan" width="50px" src="<?= base_url().'assets/uploads/images/properti/'.$img->logo_perusahaan ?>" class="float-right" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="d-inline-block"><i class="fa fa-m"></i>Pengeluaran</h5>
                                <a href="<?= base_url() ?>pengeluaran/tambah"class="btn btn-info btn-sm float-right">Tambah</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-hover" id="tbl_pengeluaran">
                                    <thead>
                                        <th>No</th>
                                        <th>Nama_pengeluaran</th>
                                        <th>Volume</th>
                                        <th>Satuan</th>
                                        <th>Harga_satuan</th>
                                        <th>Kelompok Pengeluaran</th>
                                        <th>Tgl_buat</th>
                                        <th>Bukti_kwitansi</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                <?php 
                                $no = 1;
                                foreach($pengeluaran as $p){ 
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $p->nama_pengeluaran ?></td>
                                    <td><?php echo $p->volume ?></td>
                                    <td><?php echo $p->satuan ?></td>
                                    <td><?php echo $p->harga_satuan ?></td>
                                    <td><?php echo $p->nama_kelompok ?></td>
                                    <td><?php $date = DateTime::createFromFormat("Y-m-d",$p->created_at); echo tanggal($date->format("d"),$date->format("m"),$date->format("Y")) ?></td>
                                    <td>
                                    <img src="<?= base_url('assets/uploads/images/pengeluaran/'.$p->bukti_kwitansi)?>" style="max-width:50px;">
                                    </td>
                                    <td>
                                    <a href="<?= base_url() .'pengeluaran/edit/'.$p->id_pengeluaran ?>" class="btn btn-primary">Edit</a>
                                    <button data-id="<?= $p->id_pengeluaran ?>" class="btn btn-danger btn-hapus">Delete</button>
                                    </td>

                                </tr>
                                <?php } ?>
                                    </tbody>
                                </table>                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
