<!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            TAMBAH KOLEKSI BUKU
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <?php if ($this->session->flashdata('success')) {?>
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       <h4>  <i class="icon fa fa-check"></i> Success!</h4>
                      <?php echo $this->session->flashdata('success');?>
                    </div>
                  <?php }elseif ($this->session->flashdata('failed')) {?>
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>  <i class="icon fa fa-check"></i> failed!</h4>
                      <?php echo $this->session->flashdata('failed');?>
                    </div>
                  <?php }?>

                </div><!-- /.box-header -->
                <div class="box-body">
                  <?php echo form_open('admin/dasbor/buku_add/','role="form"');?>

                    <div class="box-body">
                      <div class="form-group">
                        <label>Judul Buku</label>
                        <?php echo form_input('judul','','class="form-control" placeholder="Judul Buku" required');?>
                      </div>
                      <div class="form-group">
                        <label>Penerbit Buku</label>
                        <?php echo form_input('penerbit','','class="form-control" placeholder="Penerbit Buku" required');?>
                      </div>
                      <div class="form-group">
                        <label>Pengarang Buku</label>
                        <?php echo form_input('pengarang','','class="form-control" placeholder="Pengarang Buku" required');?>
                      </div>
                      <div class="form-group">
                        <label>Tahun</label>
                        <?php echo form_input('tahun','','class="form-control" placeholder="Tahun" required');?>
                      </div>
                      <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori">
                          <option value=""    <?php echo  set_select('kategori', '', TRUE); ?> >Pilih Kategori</option>
                          <?php foreach($kategori  as $row){ ?>
                            <option value="<?php echo $row['kategori']?>" <?php echo set_select('kategori', $row['kategori']);?>>
                              <?php echo $row['kategori']?></option>
                          <?php }?>
                        </select>
                      </div> 

                      <div class="form-group">
                        <label>Kelas</label>
                        <select class="form-control" name="kelas">
                          <option value="" <?php echo  set_select('kelas', '', TRUE); ?> >Pilih Kelas</option>
                          <?php foreach($kelas  as $kls){ ?>
                            <option value="<?php echo $kls['kelas']?>" <?php echo set_select('kelas', $kls['kelas']);?>>
                              <?php echo $kls['kelas']?></option>
                          <?php }?>
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label>File Buku</label>

                      <div class="input-group input-group-sm">
                        <input type="text" id="file" name="file" class="form-control">
                        <span class="input-group-btn">
                          <button class="btn btn-info btn-flat" type="button" data-toggle="modal" data-target=".bd-file">Slect</button>
                          <div class="modal fade bd-file" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <iframe  width="1000" height="550" frameborder="0" src="<?php echo base_url()?>filemanager/dialog.php?type=2&field_id=file"></iframe>
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </span>
                      </div>
                      </div>

                      <div class="form-group">
                        <label>Cover Buku</label>
                        <br><span>Ukuran Sampul Buku Width : 300px Heigth :348px</span>

                      <div class="input-group input-group-sm">
                        <input type="text" id="as" name="cover" class="form-control">
                        <span class="input-group-btn">
                          <button class="btn btn-info btn-flat" type="button" data-toggle="modal" data-target=".bd-fm">Slect</button>
                          <div class="modal fade bd-fm" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <iframe  width="1000" height="550" frameborder="0" id='image' src="<?php echo base_url()?>filemanager/dialog.php?type=1&field_id=as"></iframe>
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </span>
                      </div>
                      </div>
                      
                      <div class="form-group">
                        <label>View Cover</label>
                      <div class="form-group">
                        <img src="" id="prev_img" class="img-fluid" style="width: 50%;">
                        <script type="text/javascript">
                          function responsive_filemanager_callback(field_id){
                            var image = $('#' + field_id).val();
                            $('#prev_img').attr('src',image);
                          }
                        </script>
                      </div>
                      </div>

                      

                      <div class="form-group">
                        <label>Status</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="status" id="status1" value="1">
                            Aktif
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="status" id="status2" value="0">
                            Tidak Aktif
                          </label>
                        </div>
                      </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                      <?php echo form_submit('submit', 'Simpan','class="btn btn-primary"');?>
                    </div>
                  <?php echo form_close();?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->