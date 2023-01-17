
<br><br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?= $this->session->flashdata('message');?>
		</div>
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<td>Tanggal</td>
						<td>Nama Barang</td>
                        <td>Brand</td>
						<td>Harga</td>
						<td>Jumlah</td>
						<td>Sub Total</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody>
					<form action="<?= base_url('index.php/Dashboard/pesanan/'); ?>" method="POST" enctype="multipart/form-data">
						<?php
                        function rupiah($angka){
                            $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                            return $hasil_rupiah;
                        }
                        $i = 1;
                        $total_bayar = 0;
                        $total_p = 0; ?>
						<?php foreach ($cart as $us) :$total_bayar += $us['total'];?>
						<tr>
							<td><?= $us['tanggal']; ?></td>
							<td><?= $us['nama']; ?></td>
							<td><?= ucfirst($us['brand']); ?></td>
							<td><?= $us['harga']; ?></td>
							<td><?= $us['jumlah']; ?></td>
							<td><?= $us['total']; ?></td>
							<td><a href="<?= base_url('index.php/Dashboard/delkeranjang/') . $us['id']; ?>" class="btnbtn-danger"><i class="fa fa-trash"></a></td>
						</tr>
						<input type="hidden" name="barang[]" value="<?= $us['id_barang']; ?>">
						<input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
						<input type="hidden" name="harga" value="<?= $us['harga']; ?>">
						<input type="hidden" name="jumlah_p[]" value="<?= $us['jumlah']; ?>">
						<input type="hidden" name="total_p[]" value="<?= $us['total']; ?>">
						<?php $i++; ?>
						<?php endforeach; ?>
						<tr>
							<td>Alamat Pengiriman</td>
							<td colspan="5"><input name="alamat" type="text" class="form-control" id="alamat"></td>
						</tr>
						<tr>
							<td>Pembayaran</td>
							<td colspan="5">
								<select name="pembayaran" id="pembayaran" class="form-control">
									<option value="">Pilih Bank</option>
									<option value="BRI">BRI - 1111-11111-11111-1111</option>
									<option value="MANDIRI">MANDIRI - 2222-2222-2222</option>
									<option value="BNI">BNI - 3333-3333-3333</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Bukti Transfer</td>
							<td colspan="5">
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="gambar" id="gambar">

									<label for="gambar" class="custom-file-label">Choose File</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td colspan="5"><input name="keterangan" type="text" class="form-control" id="keterangan">
							</td>
						</tr>
						<tr>
							<td colspan="4" align="right"><strong>Total : </strong></td>
							<td><?= rupiah($total_bayar); ?></td>
							<td>
								<input type="hidden" name="no_penjualan" value="PJ<?= time() ?>" readonly
									class="form-control">

								<input type="hidden" name="bayar" value="<?= $total_bayar; ?>">

								<?php if (isset($_SESSION['email']) ) {?>
								<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Pesan</button>
								<?php } else { ?>
								<a  data-toggle="modal" data-target="#notif" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Pesan</a>
								<?php } ?>

							</td>
						</tr>
					</form>
				</tbody>
			</table>
			<div class="modal fade" tabindex="-1" role="dialog" id="notif" data-backdrop="static">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Alert!</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true"><i class="fa fa-times"></i></span>
							</button>
						</div>
						<div class="modal-body">
							<div class="container-fluid">
								<div class="row">
									<div class="col-12">
										<img class="img-about mx-auto d-block"
											src="<?=base_url('assets/interface/oops.png')?>">
									</div>
								</div>
								<div class="row pt-3">

									<div class="col-12">
										<h4 class="text-justify mx-3"> <b>Anda Harus Login Terlebih Dahulu</b></h4>
									</div>
								</div>

							</div>
						</div>
						<div class="modal-footer">
							<a href="<?=base_url('index.php/Auth/')?>" class="btn btn-success mx-auto d-block">Login Sekarang</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>