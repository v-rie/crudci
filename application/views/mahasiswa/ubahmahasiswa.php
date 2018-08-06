        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?=$title;?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <?=$title;?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php foreach ($data_mhs as $ubah_mhs): ?>
                                    <form role="form" action="<?=base_url();?>home/simpanubahMhs" method="POST">
                                        <div class="form-group">
                                            <label>Nama Mahasiswa</label>
                                            <input class="form-control" name="namamhs" id="namamhs" type="text" value="<?=$ubah_mhs['namamhs'];?>">
                                            <p class="help-block">Ketik nama lengkap mahasiswa.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamatmhs" id="alamatmhs" type="text" value="<?=$ubah_mhs['alamat']?>">
                                            <p class="help-block">Ketik alamat lengkap mahasiswa.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <input class="form-control" name="jurusanmhs" id="jurusanmhs" type="text" value="<?=$ubah_mhs['jurusan']?>">
                                            <p class="help-block">Ketik jurusan lengkap mahasiswa.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Semester</label>
                                            <input class="form-control" name="semestermhs" id="semestermhs" type="text" value="<?=$ubah_mhs['semester']?>">
                                            <p class="help-block">Ketik semester lengkap mahasiswa.</p>
                                        </div>
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                            <button type="reset" class="btn btn-danger">Batal</button>
                                        </div>
                                        <input name="id_mhs" id="id_mhs" type="hidden" value="<?=$ubah_mhs['id_mhs'];?>">
                                    </form>
                                    <?php endforeach;?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->