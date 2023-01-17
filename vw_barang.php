<div class="row my-4">
		<div class="">
			<div class="card">
				<div class="card-header pb-0">
					<div class="row">
						<div class="col-lg-6 col-7">
							<a class="btn bg-gradient-info mb-0" href="<?= base_url('index.php/Barang/tambah')?>"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah Data</a>
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
										Nama Barang</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Harga</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Stock</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Keterangan</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Merk</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Gambar</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($tb_barang as $br) : ?>
								<tr>
									<td class="align-middle text-center text-sm"><span
											class="text-xs font-weight-bold"><?=$i; ?>.</span></td>
									<td class="align-middle text-center text-sm"><span
											class="text-xs font-weight-bold"><?=$br['nama_brg']; ?></span></td>
									<td class="align-middle text-center text-sm"><span
											class="text-xs font-weight-bold"><?=$br['harga']; ?></span></td>
									<td class="align-middle text-center text-sm"><span
											class="text-xs font-weight-bold"><?=$br['stock']; ?></span></td>
									<td class="align-middle text-center text-sm"><span
											class="text-xs font-weight-bold"><?=$br['keterangan']; ?></span></td>
									<td class="align-middle text-center text-sm"><span
											class="text-xs font-weight-bold"><?=$br['merk']; ?></span></td>
									<td class="align-middle text-center text-sm"><span
											class="text-xs font-weight-bold"><img src="<?=base_url('assets/interface/').$br['gambar']; ?>" width="100" ></span></td>
									<td class="align-middle text-center text-sm">
										<a href="<?= base_url('index.php/Barang/hapus/') . $br['id']; ?>" class="badge bg-gradient-danger">Hapus</a>
										<a href="<?= base_url('index.php/Barang/edit/') . $br['id']; ?>" class="badge bg-gradient-success">Edit</a>
									</td>
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
