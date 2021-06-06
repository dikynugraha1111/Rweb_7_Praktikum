<?= $this->extend('layout_admin/template'); ?>

<?php

use function PHPSTORM_META\type;

$this->section('body'); ?>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <b> Form Ubah Data Mahasiswa</b>
            </div>
            <div class="card-body">
                <form action="/Data/saveEdit" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input hidden type="number" name="id" class="form-control" id="id" value="<?= $siswa['id_data_siswa'] ?>">
                        <label for="nisn">nisn</label>
                        <input type="text" name="nisn" class="form-control" id="nisn" value="<?= $siswa['nisn']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="nik">nik</label>
                        <input type="text" name="nik" class="form-control" id="nik" value="<?= $siswa['nik']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="nama">nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $siswa['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">tgl_lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?= $siswa['tgl_lahir']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $siswa['alamat']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="lulus">lulus</label>
                        <input type="text" name="lulus" class="form-control" id="lulus" value="<?= $siswa['lulus']; ?>">
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="fileLama" value="<?= $siswa['ijazah']; ?>">
                        <label for="sertifikas">Ijazah</label>
                        <div class="col-sm-5"><img src="/gambar/ijazah/<?= $siswa['ijazah']; ?>" alt="" class="img-thumbnail img-preview"></div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fileupload" name="fileupload" onchange="
                                    const value = document.getElementById('fileupload');
                                    const newValue = value.value;
                                    const label = document.getElementById('label-file')
                                    label.textContent = newValue;
                                    ">
                            <label class="custom-file-label" for="fileupload" id="label-file"><?= $siswa['ijazah']; ?></label>
                        </div>

                        <!-- <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="fileupload" name="fileupload" onchange="fileupload()">
                                    <label class="custom-file-label" for="fileupload">Pilih file</label>
                                </div> -->
                    </div>

                    <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
                </form>
            </div>
        </div>


    </div>
</div>
<?php $this->endSection('body'); ?>