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
                                    <?php foreach ($data_dos as $ubah_dos): ?>
                                    <form role="form" action="<?=base_url();?>dosen/simpanubahDos" method="POST">
                                        <div class="form-group">
                                            <label>Nama Dosen</label>
                                            <input class="form-control" name="namados" id="namados" type="text" value="<?=$ubah_dos['namados'];?>">
                                            <p class="help-block">Ketik nama lengkap dosen.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamatdos" id="alamatdos" type="text" value="<?=$ubah_dos['alamat']?>">
                                            <p class="help-block">Ketik alamat lengkap dosen.</p>
                                        </div>
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                            <button type="reset" class="btn btn-danger">Batal</button>
                                        </div>
                                        <input name="id_dos" id="id_dos" type="hidden" value="<?=$ubah_dos['id_dos'];?>">
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