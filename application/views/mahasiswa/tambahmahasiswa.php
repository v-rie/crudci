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
                                    <form role="form" action="simpanMhs" method="POST">
                                        <div class="form-group">
                                            <label>Nama Mahasiswa</label>
                                            <input class="form-control" name="namamhs" id="namamhs" type="text">
                                            <p class="help-block">Ketik nama lengkap mahasiswa.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamatmhs" id="alamatmhs" type="text">
                                            <p class="help-block">Ketik alamat lengkap mahasiswa.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <input class="form-control" name="jurusanmhs" id="jurusanmhs" type="text">
                                            <p class="help-block">Ketik jurusan lengkap mahasiswa.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Semester</label>
                                            <input class="form-control" name="semestermhs" id="semestermhs" type="text">
                                            <p class="help-block">Ketik semester lengkap mahasiswa.</p>
                                        </div>
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                            <button type="reset" class="btn btn-danger">Batal</button>
                                        </div>
                                    </form>
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