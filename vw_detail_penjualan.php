<div class="row mt-4">
	<div class="col-lg-7 mb-lg-0 mb-4">
		<div class="card">
			<div class="card-body p-3">
				<div class="row">
					<div class="col-lg-6">
						<div class="d-flex flex-column h-100">
							<p class="mb-1 pt-2 text-bold">Selva House</p>
							<h5 class="font-weight-bolder">Detail Penjualan</h5>
							<form role="form" method="POST" enctype="multipart/form-data" action="">
								<label>No Penjualan</label>
								<div class="mb-3">
									<input type="hidden" class="form-control" aria-label="Email"
										aria-describedby="email-addon" name="no_penjualan"
										value="<?= $tb_penjualan ['no_penjualan']; ?>" readonly>
								</div>
								<label>Pelanggan</label>
								<div class="mb-3">
									<input type="text" class="form-control" aria-label="Email"
										aria-describedby="email-addon" name="pelanggan"
										value="<?= $tb_penjualan ['nama']; ?>" readonly>
								</div>
								<label>Alamat</label>
								<div class="mb-3">
									<input type="text" class="form-control" aria-label="Email"
										aria-describedby="email-addon" name="alamat"
										value="<?= $tb_penjualan ['alamat']; ?>" readonly>
									<?= form_error('stock', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
								</div>
								<label>Total Pembayaran</label>
								<div class="mb-3">
									<input type="text" class="form-control" aria-label="Email"
										aria-describedby="email-addon" name="total_bayar"
										value="<?= $tb_penjualan ['total_bayar']; ?>">
									<?= form_error('keterangan', '<small class="text-gradient text-primary pl-3">', '</small>'); ?>
								</div>
								<label>Status</label>
								<div class="mb-3">
									<select name="status" id="status" class="form-control">
										<option value="">Pilih Status</option>
										<option value="Pengemasan">Pengemasan</option>
										<option value="Proses Pengiriman">Proses Pengiriman</option>
										<option value="Dikirm">Dikirim</option>
									</select>
									<?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="text-center">
									<button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Edit</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
						<div class="bg-gradient-primary border-radius-lg h-100">
							<img src="<?= base_url('assets2/') ?>img/shapes/waves-white.svg"
								class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
							<div class="position-relative d-flex align-items-center justify-content-center h-100">
								<img class="w-100 position-relative z-index-2 pt-4"
									src="<?= base_url('assets2/') ?>illustrations/rocket-white.png" alt="rocket">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row my-4">
	<div class="">
		<div class="card">
			<div class="card-header pb-0">
				<div class="row">
					<div class="col-lg-6 col-7">
					</div>
				</div>
			</div>
			<div class="card-body px-0 pb-2">
				<div class="table-responsive">
					<table class="table align-items-center mb-0">
						<thead>
							<tr>
								<th
									class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									No</th>
								<th
									class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									No Penjualan</th>
								<th
									class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									Pelanggan</th>
								<th
									class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									Barang</th>
								<th
									class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									Jumlah</th>
								<th
									class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									Total</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($detail_penjualan as $br) : ?>
							<tr>
								<td class="align-middle text-center text-sm"><span
										class="text-xs font-weight-bold"><?=$i; ?>.</span></td>
								<td class="align-middle text-center text-sm"><span
										class="text-xs font-weight-bold"><?=$br['no_penjualan']; ?></span></td>
								<td class="align-middle text-center text-sm"><span
										class="text-xs font-weight-bold"><?=$br['nama']; ?></span></td>
								<td class="align-middle text-center text-sm"><span
										class="text-xs font-weight-bold"><?=$br['barang']; ?></span></td>
								<td class="align-middle text-center text-sm"><span
										class="text-xs font-weight-bold"><?=$br['jumlah']; ?></span></td>
								<td class="align-middle text-center text-sm"><span
										class="text-xs font-weight-bold"><?=$br['total']; ?></span></td>
							</tr>
							<?php $i++;?>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

