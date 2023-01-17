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
									Tanggal</th>
								<th
									class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									Total</th>
									<th
									class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									Detail</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($tb_penjualan as $br) : ?>
							<tr>
								<td class="align-middle text-center text-sm"><span
										class="text-xs font-weight-bold"><?=$i; ?>.</span></td>
								<td class="align-middle text-center text-sm"><span
										class="text-xs font-weight-bold"><?=$br['no_penjualan']; ?></span></td>
								<td class="align-middle text-center text-sm"><span
										class="text-xs font-weight-bold"><?=$br['nama']; ?></span></td>
								<td class="align-middle text-center text-sm"><span
										class="text-xs font-weight-bold"><?=$br['tanggal']; ?></span></td>
								<td class="align-middle text-center text-sm"><span
										class="text-xs font-weight-bold"><?=$br['total_bayar']; ?></span></td>
								<td class="align-middle text-center text-sm"><span
										class="text-xs font-weight-bold"><?=$br['status']; ?></span></td>
								<td> 
										<a href="<?= base_url('index.php/Penjualan/detail/') . $br['id']; ?>" class="badge bg-gradient-warning">Detail</a></td>
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
