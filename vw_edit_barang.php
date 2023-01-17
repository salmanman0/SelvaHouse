<main class="main-content  mt-0">
	<section>
		<div class="page-header min-vh-75">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
						<div class="card card-plain mt-8">
							<div class="card-header pb-0 text-left bg-transparent">
								<h3 class="font-weight-bolder text-info text-gradient">Edit Data</h3>
								<p class="mb-0">Silahkan Edit Data Barang</p>
							</div>
							<div class="card-body">
								<form role="form" method="POST" enctype="multipart/form-data"
									action="">
									<label>Nama Barang</label>
									<div class="mb-3">
                                    <input type="hidden" class="form-control" placeholder="Nama Barang"
											aria-label="Email" aria-describedby="email-addon" name="id"
											value="<?= $tb_barang ['id']; ?>">
										<input type="text" class="form-control" placeholder="Nama Barang"
											aria-label="Email" aria-describedby="email-addon" name="nama_brg"
											value="<?= $tb_barang ['nama_brg']; ?>">
										<?= form_error('nama_brg', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
									</div>
									<label>Harga</label>
									<div class="mb-3">
										<input type="text" class="form-control" placeholder="Harga"
											aria-label="Email" aria-describedby="email-addon" name="harga"
											value="<?= $tb_barang ['harga']; ?>">
										<?= form_error('harga', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
									</div>
									<label>Stock</label>
									<div class="mb-3">
										<input type="text" class="form-control" placeholder="Stock"
											aria-label="Email" aria-describedby="email-addon" name="stock"
											value="<?= $tb_barang ['stock']; ?>">
										<?= form_error('stock', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
									</div>
									<label>Keterangan</label>
									<div class="mb-3">
										<input type="text" class="form-control" placeholder="Keterangan"
											aria-label="Email" aria-describedby="email-addon" name="keterangan"
											value="<?= $tb_barang ['keterangan']; ?>">
										<?= form_error('keterangan', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
									</div>
									<label>Merk</label>
									<div class="mb-3">
										<input type="text" class="form-control" placeholder="Merk"
											aria-label="Email" aria-describedby="email-addon" name="merk"
											value="<?= $tb_barang ['merk']; ?>">
										<?= form_error('merk', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
									</div>
									<label>Gambar</label>
									<div class="mb-3">
                                        <img src="<?=base_url('assets/interface/').$tb_barang['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
										<input type="file" class="form-control"
											aria-label="Email" aria-describedby="email-addon" name="gambar"
											value="<?= set_value('gambar') ?>">
										<?= form_error('gambar', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
									</div>
									<div class="text-center">
										<button type="submit"
											class="btn bg-gradient-info w-100 mt-4 mb-0">Edit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
							<div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
								style="background-image:url('<?= base_url('assets2/') ?>img/curved-images/curved6.jpg')">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
