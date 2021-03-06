<div class="main-page" style="heigth: 100%;">
    <div class="container-fluid">
        <div class="row page-title-div">
            <div class="col-sm-6">
                    <h2 class="title">Detail Siswa</h2>
                    <p class="sub-title">SIMBMS (Sistem Informasi Bank Mini Sekolah)</p>
                <label>
            </div>
        </div>
        <!-- /.row -->
        <div class="row breadcrumb-div">
            <div class="col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url('/') ?>"><i class="fa fa-home"></i>Home</a></li>
                    <li>Data Master</li>
                    <li class="active">Siswa</li>
                </ul>
            </div>
            <!-- /.col-sm-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <section class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <?= $this->session->flashdata('alert'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5>Jurnal</h5>
                            </div>
                        </div>
                        <div class="panel-body p-20">
                            <div class="container-fluid">                        
                                <div class="row mt-20">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                                                	
                                    <table class="table">
                                                    <tr>
                                                        <td>NIS</td>
                                                        <td>:</td>
                                                        <td><?= $datasiswa['nis']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>RFID</td>
                                                        <td>:</td>
                                                        <td><?= $datasiswa['rfid']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td>:</td>
                                                        <td><?= $datasiswa['namasiswa']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin</td>
                                                        <td>:</td>
                                                        <td><?= $datasiswa['jk']; ?></td>
                                                    </tr> 
                                                    <tr>
                                                        <td>Kelas</td>
                                                        <td>:</td>
                                                        <?php if($datasiswa['id_kelas'] != 0): ?>
                                                        <?php $kelas = $this->db->get_where('tb_kelas', ['id_kelas' => $datasiswa['id_kelas']])->row()->kelas; ?>
                                                        <td><?= $kelas; ?></td>
                                                        <?php else: ?>
                                                        <td>Belum Punya Kelas</td>
                                                        <?php endif; ?>
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat, Tanggal Lahir</td>
                                                        <td>:</td>
                                                        <td><?= $datasiswa['tempat_lahir']; ?>, <?= $datasiswa['tgl_lahir']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td>:</td>
                                                        <td><?= $datasiswa['alamat']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kecamatan/Kota/Provinsi</td>
                                                        <td>:</td>
                                                        <td><?= $this->db->get_where('tb_kecamatan', ['id_kecamatan' => $datasiswa['kecamatan']])->row()->kecamatan.'/'.$this->db->get_where('tb_kota', ['id_kota' => $datasiswa['kota']])->row()->name_kota.'/'.$this->db->get_where('tb_provinsi', ['id_provinsi' => $datasiswa['provinsi']])->row()->name_prov ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Username</td>
                                                        <td>:</td>
                                                        <td><?= $datasiswa['nis']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Password</td>
                                                        <td>:</td>
                                                        <td><?= $datasiswa['password']; ?></td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <td>status</td>
                                                        <td>:</td>
                                                        <td><?= $datasiswa['status']; ?></td>
                                                    </tr> -->
                                                 <!--    <tr>
                                                        <td>Terakhir Di Update</td>
                                                        <td>:</td>
                                                        <td><?= $datasiswa['tglupdate']; ?></td>
                                                    </tr> -->
                                                </table>
                                                <a href="<?= base_url('siswa/') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
                                                <a href="<?= base_url('siswa-edt/').$datasiswa['nis'] ?>" class="btn btn-warning"><i class="fa fa-pencil"></i>Ubah</a>
                                                <a href="<?= base_url('siswa-hps/').$datasiswa['nis'] ?>" class="btn btn-danger" onclick="return confirm('Yakin untuk menghapus?')"><i class="fa fa-trash"></i>Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.section -->
</div>
<!-- /.main-page -->
<!-- /.right-sidebar -->
</div>
<!-- /.content-container -->
</div>