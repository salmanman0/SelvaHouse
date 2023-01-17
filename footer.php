<script src="<?= base_url('assets/interface')?>vendor/jquery/jquery.min.js"></script>
 <script src="<?= base_url('assets/interface')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="<?= base_url('assets/interface')?>vendor/datatables/jquery.dataTables.min.js"></script>
 <script src="<?= base_url('assets/interface')?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <script src="<?= base_url('assets/interface')?>vendor/chart.js/Chart.min.js"></script>
 <!-- Page level custom scripts -->
 <script src="<?= base_url('assets/interface')?>js/demo/datatables-demo.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="<?= base_url('assets/interface')?>vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="<?= base_url('assets/interface')?>js/sb-admin-2.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
 <script src="<?= base_url('assets/app.js')?>"></script>
 <script>
 	$('.custom-file-input').on('change', function () {
 		let fileName = $(this).val().split('\\').pop();
 		$(this).next('.custom-file-label').addClass('selected').html(fileName);
 	})
 	$(document).ready(function () {
 		$("#jumlah").on('keydown keyup change blur', function () {
 			var harga = $("#harga").val();
 			var jumlah = $("#jumlah").val();
 			var total = parseInt(harga) * parseInt(jumlah);
 			$("#total").val(total);
 			if (parseInt($('input[name="stock"]').val()) <=
 				parseInt(jumlah)) {
 				alert('stock tidak tersedia! stok tersedia : ' +
 					parseInt($('input[name="stock"]').val()))
 				reset()
 			}
 		});

 		function reset() {
 			$('input[name="jumlah"]').val('')
 			$('input[name="total"]').val('')
 		}
 	})

 </script>
	<script>
		var swiper = new Swiper('.swiper-container', {
			direction: 'vertical',
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			autoplay: {
				delay: 3000,
			},
		});
	</script>

	<script type="text/javascript">
		(function ($) {
			$(document).ready(function () {

				$("#navbar").hide();

				$(function () {
					$(window).scroll(function () {
						// set distance user needs to scroll before we fadeIn navbar
						if ($(this).scrollTop() > 600) {
							$('#navbar').fadeIn();
						} else {
							$('#navbar').fadeOut();
						}
					});


				});

			});
		}(jQuery));
	</script>

	<script type="text/javascript">
		function scroll() {
			var top = document.getElementById('contact');
			var ypos = window.pageYOffset;
			if (ypos > 3500) {
				top.style.opacity = "1";
			} else {
				top.style.opacity = "0";
			}
		}

		window.addEventListener("scroll", scroll);
	</script>

	<script type="text/javascript">
		$('.owl-carousel').owlCarousel({
			loop: true,
			autoplay: 2000,
			margin: 10,
			nav: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				1000: {
					items: 2
				}
			}
		})
	</script>

	<script>
		$(document).ready(function () {
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
</body>

</html>