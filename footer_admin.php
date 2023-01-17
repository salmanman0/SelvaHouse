<footer class="footer pt-3  ">
	<div class="container-fluid">
		<div class="row align-items-center justify-content-lg-between">
			<div class="col-lg-6 mb-lg-0 mb-4">
				<div class="copyright text-center text-sm text-muted text-lg-start">
					© <script>
						document.write(new Date().getFullYear())

					</script>,
					made with <i class="fa fa-heart"></i> by
					<a href="#" class="font-weight-bold" target="_blank">Selva House</a>
					for a better web.
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
</main>
<div class="fixed-plugin">
	
	<div class="card shadow-lg ">
		<div class="card-header pb-0 pt-3 ">
			<div class="float-start">
				<h5 class="mt-3 mb-0">Selva House</h5>
			</div>
			<div class="float-end mt-4">
				<button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
					<i class="fa fa-close"></i>
				</button>
			</div>
			<!-- End Toggle Button -->
		</div>
		<hr class="horizontal dark my-1">
		<div class="card-body pt-sm-3 pt-0">
			<!-- Sidebar Backgrounds -->
			<div>
				<h6 class="mb-0">Sidebar Colors</h6>
			</div>
			<a href="javascript:void(0)" class="switch-trigger background-color">
				<div class="badge-colors my-2 text-start">
					<span class="badge filter bg-gradient-primary active" data-color="primary"
						onclick="sidebarColor(this)"></span>
					<span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
					<span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
					<span class="badge filter bg-gradient-success" data-color="success"
						onclick="sidebarColor(this)"></span>
					<span class="badge filter bg-gradient-warning" data-color="warning"
						onclick="sidebarColor(this)"></span>
					<span class="badge filter bg-gradient-danger" data-color="danger"
						onclick="sidebarColor(this)"></span>
				</div>
			</a>
		</div>
	</div>
</div>
<!--   Core JS Files   -->
<script src="<?= base_url('assets2/') ?>js/core/popper.min.js"></script>
<script src="<?= base_url('assets2/') ?>js/core/bootstrap.min.js"></script>
<script src="<?= base_url('assets2/') ?>js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets2/') ?>js/plugins/smooth-scrollbar.min.js"></script>
<script src="<?= base_url('assets2/') ?>js/plugins/chartjs.min.js"></script>
<script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                foreach ($totalb as $data) {
                    echo "'" . $data['tb_barang'] . "',";
                }
                ?>
            ],
            datasets: [{
                label: 'Jumlah Barang Terjual',
                backgroundColor: "#4e73df",
                hoverBackgroundColor: "#2e59d9",
                borderColor: "#4e73df",
                data: [
                    <?php
                    foreach ($totalb as $data) {
                        echo $data['jum'] . ", ";
                    }
                    ?>
                ]
            }]
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'sembako'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 20
                    },
                    maxBarThickness: 50,
                }],
                yAxes: [{
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
        }
    });
</script>

<script>
	var ctx = document.getElementById("chart-bars").getContext("2d");

	new Chart(ctx, {
		type: "bar",
		data: {
			labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			datasets: [{
				label: "Sales",
				tension: 0.4,
				borderWidth: 0,
				borderRadius: 4,
				borderSkipped: false,
				backgroundColor: "#fff",
				data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
				maxBarThickness: 6
			}, ],
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			plugins: {
				legend: {
					display: false,
				}
			},
			interaction: {
				intersect: false,
				mode: 'index',
			},
			scales: {
				y: {
					grid: {
						drawBorder: false,
						display: false,
						drawOnChartArea: false,
						drawTicks: false,
					},
					ticks: {
						suggestedMin: 0,
						suggestedMax: 500,
						beginAtZero: true,
						padding: 15,
						font: {
							size: 14,
							family: "Open Sans",
							style: 'normal',
							lineHeight: 2
						},
						color: "#fff"
					},
				},
				x: {
					grid: {
						drawBorder: false,
						display: false,
						drawOnChartArea: false,
						drawTicks: false
					},
					ticks: {
						display: false
					},
				},
			},
		},
	});


	var ctx2 = document.getElementById("chart-line").getContext("2d");

	var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

	gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
	gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
	gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

	var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

	gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
	gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
	gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

	new Chart(ctx2, {
		type: "line",
		data: {
			labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			datasets: [{
					label: "Mobile apps",
					tension: 0.4,
					borderWidth: 0,
					pointRadius: 0,
					borderColor: "#cb0c9f",
					borderWidth: 3,
					backgroundColor: gradientStroke1,
					fill: true,
					data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
					maxBarThickness: 6

				},
				{
					label: "Websites",
					tension: 0.4,
					borderWidth: 0,
					pointRadius: 0,
					borderColor: "#3A416F",
					borderWidth: 3,
					backgroundColor: gradientStroke2,
					fill: true,
					data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
					maxBarThickness: 6
				},
			],
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			plugins: {
				legend: {
					display: false,
				}
			},
			interaction: {
				intersect: false,
				mode: 'index',
			},
			scales: {
				y: {
					grid: {
						drawBorder: false,
						display: true,
						drawOnChartArea: true,
						drawTicks: false,
						borderDash: [5, 5]
					},
					ticks: {
						display: true,
						padding: 10,
						color: '#b2b9bf',
						font: {
							size: 11,
							family: "Open Sans",
							style: 'normal',
							lineHeight: 2
						},
					}
				},
				x: {
					grid: {
						drawBorder: false,
						display: false,
						drawOnChartArea: false,
						drawTicks: false,
						borderDash: [5, 5]
					},
					ticks: {
						display: true,
						color: '#b2b9bf',
						padding: 20,
						font: {
							size: 11,
							family: "Open Sans",
							style: 'normal',
							lineHeight: 2
						},
					}
				},
			},
		},
	});

</script>
<script>
	var win = navigator.platform.indexOf('Win') > -1;
	if (win && document.querySelector('#sidenav-scrollbar')) {
		var options = {
			damping: '0.5'
		}
		Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
	}

</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></scrip>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url('assets2/') ?>js/soft-ui-dashboard.min.js?v=1.0.6"></script>
</body>

</html>
