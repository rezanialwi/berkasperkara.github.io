<?php $this->load->view("admin/v_header.php") ?>
  <!-- =============================================== -->
	<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?php echo site_url('admin/dasboard') ?>">Home</a>
							</li>

							<li>
								<a href="<?php echo site_url('akun') ?>">User</a>
							</li>
							<li class="active">Data User</li>
						</ul><!-- /.breadcrumb -->
            
						
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

				


								<div class="row">
									<div class="col-xs-12">

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Data Peminjaman Detail
                                        </div>
                                        <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron">
                            <h2 class="display-3">Nama Peminjaman : <?php echo $detail->nama_peminjam ?></h2>
                            <hr class="my-4">
                            <p class="lead">Berkas Nomor : <?php echo $detail->berkas_dipinjam ?></p>
                            <hr class="my-4">
                            <p class="lead">Tanggal Pinjam : <?php echo $detail->tgl_pinjam ?></p>
                            <hr class="my-4">
                            <p class="lead">Tanggal Kembali : <?php echo $detail->tgl_kembali ?></p>
                            <hr class="my-4">
                            <p class="lead">Keperluan : <?php echo $detail->tujuan ?></p>
                            <hr class="my-4">
                            <p class="lead">Status Berkas : <?php echo $detail->status ?></p>
                            <!-- <hr class="my-4">
                            <p class="lead">Pegawai Arsip :<?php echo $detail->nama_pegawai ?></p> -->
                        </div>
                    </div>
                </div>
                	<a href="<?php echo site_url('admin') ?>" class="btn btn-warning">	<i class="ace-icon fa fa-home bigger-110">Kembali</i></a>
            </div>
                                     
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->


  <?php $this->load->view("admin/v_footer.php") ?>