<div class="header" id="home">

	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h1 class="text-center judul">Selva House</h1>
				<h4 class="text-center sub-judul">Scroll Down To See Our Products</h4>
				<i class="fa fa-angle-down mx-auto d-block mt-5 fa-2x sub-judul"></i>
			</div>
			<div class="col-lg-6 col-md-6">
			</div>
		</div>
	</div>
</div>

<div class="about mb-5" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="<?= base_url('assets/interface/yasmeeraAbout.jpg')?>" class="img-about  mt-5">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h1 class="judul-about text-center mt-5">Yasmeera</h1>
				<p class="text-about text-justify mt-5">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-6 col-lg-6 col-md-6 col-12 d-block d-md-none d-lg-none">
				<img src="<?= base_url('assets/interface/wanojatest.png')?>" class="img-about2">
			</div>
			<div class="col-6 col-lg-6 col-md-6 col-12">
				<h1 class="judul-about text-center mt-5">Wanoja</h1>
				<p class="text-about text-justify mt-5">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div class="col-6 col-lg-6 col-md-6 col-12 d-none d-md-block d-lg-block">
				<img src="<?= base_url('assets/interface/wanojatest.png')?>" class="img-about2 float-right">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="<?= base_url('assets/interface/logoLabella1.jpeg')?>" class="img-about  mt-5">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h1 class="judul-about text-center mt-5">Labella</h1>
				<p class="text-about text-justify mt-5">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
	</div>
</div>

<div class="showcase pt-5 pb-5" id="showcase">
		<h1 class="text-center text-white mt-4">New Arrival</h3>
			<div class="owl-carousel owl-theme mt-4">
				<div class="item pb-3"><img src="<?= base_url('assets/interface/bg-showcase.jpg')?>"><button
						class="btn btn-danger mx-auto d-block mt-3" data-toggle="modal" data-target="#modal7"><i
							class="fa fa-shopping-cart"></i> See More</button></div>
				<div class="item pb-3"><img src="<?= base_url('assets/interface/bg-showcase2.jpg')?>"><button
						class="btn btn-danger mx-auto d-block mt-3" data-toggle="modal" data-target="#modal8"><i
							class="fa fa-shopping-cart"></i> See More</button></div>
				<div class="item pb-3"><img src="<?= base_url('assets/interface/bg-showcase3.jpg')?>"><button
						class="btn btn-danger mx-auto d-block mt-3"><i class="fa fa-shopping-cart" data-toggle="modal"
							data-target="#modal9"></i> See More</button></div>
				<div class="item pb-3"><img src="<?= base_url('assets/interface/bg-showcase4.jpg')?>"><button
						class="btn btn-danger mx-auto d-block mt-3" data-toggle="modal" data-target="#modal10"><i
							class="fa fa-shopping-cart"></i> See More</button></div>
			</div>
	</div>
<!-- <div class="showcase pt-5 pb-5" id="showcase">
	<h1 class="text-center text-white mt-4">New Arrival</h3>
		<?php $max = 0?>
		<?php foreach($barang as $br):?>
		<?php $max++;?>
		<?php endforeach;?>

		<div class="owl-carousel owl-theme mt-4">
			<?php $i = 1 ?>
			<?php foreach($barang as $br): ?>
			<?php if($i > ($max-4)){?>
			<div class="item pb-3"><img src="<?= base_url('assets/interface/').$br['gambar']?>"><button
					class="btn btn-danger mx-auto d-block mt-3" data-toggle="modal" data-target="#modal<?=$i?>"><i
						class="fa fa-shopping-cart"></i> See More</button></div>
			<?php } ?>
			<?php $i++?>
			<?php endforeach;?>
		</div>
</div> -->

<div class="products pt-5 pb-3 mt-4" id="products">
	<div class="container">
		<div class="row">
			<div class="card-columns ">
			<?php $i = 1; $sum = 0; $count = 0?>
				<?php foreach ($barang as $br):?>
					<?php $sum = $sum + $br['stock']; $count++?>
				<?php endforeach;?>
				<?php $mean =  floor($sum / $count)-10?>
				<?php foreach ($barang as $br) : ?>
				<?php if($br['stock']>=$mean) { ?>
				<?php if($i <= 6) { ?>
				<div class="card">
					<img src="<?= base_url('assets/interface/').$br['gambar']?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title judul-about text-center"><?=$br['nama_brg']?></h5>
						<p class="card-text"><?=$br['keterangan']?>.</p>
						<button class="btn btn-danger mx-auto d-block" data-toggle="modal"
							data-target="#modal<?= $i ?>"><i class="fa fa-shopping-cart"></i> See More</button>
					</div>
				</div>
				<?php } ?>
				<?php $i++; ?>
				<?php } ?>
				<?php endforeach;?>

			</div>
		</div>
	</div>
</div>
<?php $i = 1; ?>
<?php foreach ($barang as $br) : ?>
<?php if($br['stock']>=20) { ?>
<?php if($i <= 6) { ?>
<div class="modal fade" tabindex="-1" role="dialog" id="modal<?=$i?>" data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><?= $br['nama_brg']?></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="fa fa-times"></i></span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<img class="img-about mx-auto d-block"
								src="<?= base_url('assets/interface/').$br['gambar']?>">
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
							<?php $x = ucfirst($br['merk'])?>
							<p class="text-center"><?= $x?></p>
						</div>
						<div class="col-12">
							<p class="text-justify mt-2"><?=$br['keterangan']?>.</p>
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
<?php } ?>
<?php $i++; ?>
<?php } ?>
<?php endforeach;?>
<div class="modal fade" tabindex="-1" role="dialog" id="modal7" data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Lorem Ipsum</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="fa fa-times"></i></span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<img class="img-about mx-auto d-block"
								src="<?=base_url('assets/interface/bg-showcase.jpg')?>">
						</div>
					</div>
					<div class="row pt-3">

						<div class="col-12">
							<p class="text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
								sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>

				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-danger mx-auto d-block"><i class="fa fa-shopping-cart"></i> Add
					To Cart</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal8" data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Lorem Ipsum</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="fa fa-times"></i></span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<img class="img-about mx-auto d-block"
								src="<?=base_url('assets/interface/bg-showcase2.jpg')?>">
						</div>
					</div>
					<div class="row pt-3">

						<div class="col-12">
							<p class="text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
								sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>

				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-danger mx-auto d-block"><i class="fa fa-shopping-cart"></i> Add
					To Cart</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal9" data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Lorem Ipsum</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="fa fa-times"></i></span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<img class="img-about mx-auto d-block"
								src="<?=base_url('assets/interface/bg-showcase3.jpg')?>">
						</div>
					</div>
					<div class="row pt-3">

						<div class="col-12">
							<p class="text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
								sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>

				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-danger mx-auto d-block"><i class="fa fa-shopping-cart"></i> Add
					To Cart</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal10" data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Lorem Ipsum</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="fa fa-times"></i></span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<img class="img-about mx-auto d-block"
								src="<?=base_url('assets/interface/bg-showcase4.jpg')?>">
						</div>
					</div>
					<div class="row pt-3">

						<div class="col-12">
							<p class="text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
								sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>

				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-danger mx-auto d-block"><i class="fa fa-shopping-cart"></i> Add
					To Cart</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="popupTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="popupTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            tes
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div>
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