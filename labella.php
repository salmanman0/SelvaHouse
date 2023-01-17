<div class="container" id="app">
	<div class="row pt-5">
		<div class="col-12">
			<h3 class="text-center mt-5"><img src="<?= base_url('assets/interface/logoLabella1.jpeg')?>" class="logo" alt="">Labella
			</h3>
			<label for="" class="font-weight-bold mr-2">Rentang Harga</label>
			<input type="number" class="form-control w-25" v-model="harga">
		</div>
		<input type="range" class="custom-range" min="0" max="500000" v-model="harga">
	</div>
	<div class="row pb-4">
		<div class="card-columns mt-4 pt-3 mt-prod">
			<?php $i = 1 ?>
			<?php foreach ($barang as $br): ?>
			<?php if(ucfirst($br['merk'])=="Labella") {?>
			<div class="card" v-if="Number(<?= $br['harga']?>) <= harga">
				<img src="<?= base_url('assets/interface/'). $br['gambar']?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title judul-about text-center"><?=$br['nama_brg']?></h5>
					<p class="card-text"><?= $br['keterangan']?></p>
					<button class="btn btn-danger ml-5" data-toggle="modal" data-target="#modal<?= $i?>"><i
							class="fa fa-shopping-cart"></i> See More</button>

					<?php if(isset($_SESSION['email'])) { ?> 
						<a href="<?= base_url('index.php/Dashboard/cart/') . $br['id'] ?>" 
						class="btn btn-success ml-4" data-toggle="modal" data-target="#modal<?= $i?>"><i
							class="fa fa-shopping-cart"></i> Buy Now</a>
					<?php } else { ?>
						<a data-toggle="modal" data-target="#notif" 
						class="btn btn-success ml-3"data-toggle="modal" data-target="#modal<?= $i?>"><font color="#fffff"><i
							class="fa fa-shopping-cart"></i> Buy Now</font></a>
					<?php } ?>

				</div>
			</div>
			<?php $i++; ?>
			<?php } ?>
			<?php endforeach; ?>
		</div>
	</div>
</div>
</div>
<?php $i = 1 ?>
<?php foreach ($barang as $br): ?>
<?php if(ucfirst($br['merk'])=="Labella") {?>
<div class="modal fade" tabindex="-1" role="dialog" id="modal<?=$i?>" data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><?=$br['nama_brg']?></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="fa fa-times"></i></span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<img class="img-about mx-auto d-block" src="<?= base_url('assets/interface/').$br['gambar']?>">
						</div>
					</div>
					<div class="row">
						<div class="col-4">
							<h5 class="text-center mt-3">Harga</h5>
						</div>
						<div class="col-4">
							<h5 class="text-center mt-3">Stok</h5>
						</div>
						<div class="col-4">
							<h5 class="text-center mt-3">Brand</h5>
						</div>
						<div class="col-4">
							<p class="text-center"><?= $br['harga']?></p>
						</div>
						<div class="col-4">
							<p class="text-center"><?= $br['stock']?></p>
						</div>
						<div class="col-4">
							<p class="text-center"><?= ucfirst($br['merk'])?></p>
						</div>
						<div class="col-12">
							<p class="text-justify mt-2"><?= $br['keterangan']?></p>
						</div>
					</div>

				</div>
			</div>
			<div class="modal-footer">
			<?php if(isset($_SESSION['email'])) { ?> 
					<a href="<?= base_url('index.php/Dashboard/cart/') . $br['id'] ?>" 
					class="btn btn-danger mx-auto d-block"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
				<?php } else { ?>
					<a data-toggle="modal" data-target="#notif" 
					class="btn btn-danger mx-auto d-block"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php $i++; ?>
<?php } ?>
<?php endforeach; ?>
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