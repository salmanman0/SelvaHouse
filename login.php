
<body>
	<div class="bg-form"></div>
	<form class="" method="post" action="<?= base_url('index.php/auth/'); ?>">
		<div class="container">
			<div class="row p-cart-con">
				<div class="offset-lg-3"></div>
				<div class="col-lg-6 col-12">
					<div class="card mt-cart">
						<div class="card-header">
							<h4 class="text-center mt-2"> Login Selva House </h4>
						</div>
						<div class="card-body">
						<?= $this->session->flashdata('message'); ?>
							<div class="row">
								<div class="col-12">
									<i class="fa fa-user"></i> Email
								</div>
								<div class="col-12">
									<input type="email" name="email" id="email" class="form-custom mt-3" placeholder="Email anda..">
									<?=form_error('email','<small class="text-danger pl-3">','</small>');?>	
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<i class="fa fa-lock mt-4"></i> Password
								</div>
								<div class="col-12">
									<input type="password" name="password"id="password" 
									class="form-custom mt-3"placeholder="Password anda..">
									<?= form_error('password','<small class="text-danger pl-3">', '</small>');?>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<button type="submit" class="btn btn-primary form-control mt-4 mx-auto d-block w-50"> Login </button><br>
									<center><a class="small" href="<?=base_url('index.php/Auth/registrasi/');?>"
										style="color:black; font-size:15px;">Create an Account!</a></center>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="offset-lg-3"></div>
			</div>
		</div>
	</form>
</body>
</html>