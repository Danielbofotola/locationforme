<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ url('./assets/images/favicon.ico" type="image/x-icon') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ url('./assets/css/style.css') }}">
    
    

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="{{url('./asset/images/Sans titre - 2.png')}}" alt="User-Profile-Image">
						<div class="user-details">
							<span>John Doe</span>
							<div id="more-details">UX Designer<i class="fa fa-chevron-down m-l-5"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
							<li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="index.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Page layouts</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="layout-vertical.html" target="_blank">Vertical</a></li>
					        <li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
					    </ul>
					</li>
					
					
					
				</ul>
				
				
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<img src="{{url('./asset/images/Sans titre - 2.png')}}" alt="" class="logo w-50">
						<img src="{{url('./asset/images/Sans titre - 2.png')}}" alt="" class="logo-thumb">
					</a>
					
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
									Dropdown
								</a>
								<div class="dropdown-menu profile-notification ">
									<ul class="pro-body">
										<li><a href="user-profile.html" class="dropdown-item"><i class="fas fa-circle"></i> Profile</a></li>
										<li><a href="email_inbox.html" class="dropdown-item"><i class="fas fa-circle"></i> My Messages</a></li>
										<li><a href="auth-signin.html" class="dropdown-item"><i class="fas fa-circle"></i> Lock Screen</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown mega-menu">
								<a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
									Mega
								</a>
								<div class="dropdown-menu profile-notification ">
									<div class="row no-gutters">
										<div class="col">
											<h6 class="mega-title">UI Element</h6>
											<ul class="pro-body">
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Alert</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Button</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Badges</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Cards</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Modal</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Tabs & pills</a></li>
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Forms</h6>
											<ul class="pro-body">
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Elements</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Validation</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Masking</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Wizard</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Picker</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Select</a></li>
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Application</h6>
											<ul class="pro-body">
												<li><a href="#!" class="dropdown-item"><i class="feather icon-mail"></i> Email</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-clipboard"></i> Task</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-check-square"></i> To-Do</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-image"></i> Gallery</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-help-circle"></i> Helpdesk</a></li>
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Extension</h6>
											<ul class="pro-body">
												<li><a href="#!" class="dropdown-item"><i class="feather icon-file-plus"></i> Editor</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-file-minus"></i> Invoice</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-calendar"></i> Full calendar</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-upload-cloud"></i> File upload</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-scissors"></i> Image cropper</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown">
									<i class="icon feather icon-bell"></i>
									<span class="badge badge-pill badge-danger">5</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right notification">
									<div class="noti-head">
										<h6 class="d-inline-block m-b-0">Notifications</h6>
										<div class="float-right">
											<a href="#!" class="m-r-10">mark as read</a>
											<a href="#!">clear all</a>
										</div>
									</div>
									
									<div class="noti-footer">
										<a href="#!">show all</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown drp-user">
								
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										
										<span>Admin</span>
										<a href="{{ url('./welcome.blade.php') }}" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- table card-1 start -->
          
            <!-- table card-1 end -->
            <!-- table card-2 start -->
            <div class="col-md-12 col-xl-4">
                <div class="card flat-card">
                    <div class="row-table">
                        <div class="col-sm-6 card-body br">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-clock text-c-blue mb-1 d-block"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>{{ $pendingReservationsCount ?? 0 }}</h5>
                                    <span>En attente (futures)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-calendar text-c-blue mb-1 d-block"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>{{ $todayReservationsCount ?? 0 }}</h5>
                                    <span>Aujourd'hui</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-table">
                        <div class="col-sm-6 card-body br">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-rotate-ccw text-c-blue mb-1 d-block"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>{{ $weekReservationsCount ?? 0 }}</h5>
                                    <span>Cette semaine</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-shopping-cart text-c-blue mb-1 d-blockz"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>{{ $monthReservationsCount ?? 0 }}</h5>
                                    <span>Ce mois-ci</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card start -->
                <div class="card flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4>{{ $consumedReservationsCount ?? 0 }}</h4>
                            <h6>Réservations déjà consommées</h6>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
            <!-- table card-2 end -->
            <!-- Widget primary-success card start -->
            <div class="col-md-12 col-xl-4">
                <div class="card support-bar overflow-hidden">
                    <div class="card-body pb-0">
                        <h2 class="m-0">{{ $reservationsCount ?? 0 }}</h2>
                        <span class="text-c-blue">Réservations</span>
                        <p class="mb-3 mt-3">Nombre total de réservations enregistrées.</p>
                    </div>
                    <div id="support-chart"></div>
                    <div class="card-footer bg-primary text-white">
                        <div class="row text-center">
                            <div class="col">
                                <h4 class="m-0 text-white">{{ $listeReservelocalCount ?? 0 }}</h4>
                                <span>Liste réservations</span>
                            </div>
                            <div class="col">
                                <h4 class="m-0 text-white">{{ $usersCount ?? 0 }}</h4>
                                <span>Utilisateurs</span>
                            </div>
                            <div class="col">
                                <h4 class="m-0 text-white">{{ $reservationsCount ?? 0 }}</h4>
                                <span>Total</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widget primary-success card end -->

            <!-- prject ,team member start -->
            <div class="col-xl-6 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Dernières réservations</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Client</th>
                                        <th>Téléphone</th>
                                        <th>Date</th>
                                        <th class="text-right">Montant</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($latestReservations ?? [] as $reservation)
                                        <tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <div class="d-inline-block">
                                                        <h6>{{ $reservation->nom }} {{ $reservation->prenom }}</h6>
                                                        <p class="text-muted m-b-0">
                                                            Participants : {{ $reservation->nombre_participants }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $reservation->phone }}</td>
                                            <td>{{ \Illuminate\Support\Carbon::parse($reservation->date_reservation)->format('d/m/Y') }}</td>
                                            <td class="text-right">
                                                <span class="badge badge-light-primary">
                                                    {{ number_format($reservation->prix_total, 2, ',', ' ') }} $
                                                </span>
                                            </td>
                                            <td class="text-right">
                                                <form
                                                    action="{{ route('admin.template.reservations.destroy', $reservation) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Supprimer cette réservation ?');"
                                                >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        Supprimer
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">
                                                Aucune réservation trouvée.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="card latest-update-card">
                    <div class="card-header">
                        <h5>Dernières mises à jour</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="latest-update-box">
                            @forelse(($latestReservations ?? []) as $reservation)
                                <div class="row p-t-30 p-b-30">
                                    <div class="col-auto text-right update-meta">
                                        <p class="text-muted m-b-0 d-inline-flex">
                                            {{ \Illuminate\Support\Carbon::parse($reservation->created_at)->diffForHumans() }}
                                        </p>
                                        <i class="feather icon-calendar bg-c-red update-icon"></i>
                                    </div>
                                    <div class="col">
                                        <a href="#!">
                                            <h6>
                                                Nouvelle réservation de
                                                {{ $reservation->nom }} {{ $reservation->prenom }}
                                            </h6>
                                        </a>
                                        <p class="text-muted m-b-0">
                                            Date : {{ \Illuminate\Support\Carbon::parse($reservation->date_reservation)->format('d/m/Y') }}
                                            • Participants : {{ $reservation->nombre_participants }}
                                            • Montant : {{ number_format($reservation->prix_total, 2, ',', ' ') }} $
                                        </p>
                                    </div>
                                </div>
                            @empty
                                <div class="row p-t-30 p-b-30">
                                    <div class="col text-center">
                                        <p class="text-muted m-b-0">Aucune réservation récente.</p>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                        <div class="text-center">
                            <a href="{{ route('admin.template') }}" class="b-b-primary text-primary">
                                Voir toutes les réservations
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- prject ,team member start -->
            <!-- seo start -->
          
          

       
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

    <!-- Apex Chart -->
    <script src="assets/js/plugins/apexcharts.min.js"></script>

    <!-- Graphique d'évolution des réservations -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const labels = @json($reservationsEvolutionLabels ?? []);
            const values = @json($reservationsEvolutionValues ?? []);

            if (document.querySelector('#support-chart') && typeof ApexCharts !== 'undefined') {
                const options = {
                    chart: {
                        type: 'area',
                        height: 200,
                        toolbar: { show: false },
                        zoom: { enabled: false },
                    },
                    dataLabels: { enabled: false },
                    stroke: {
                        curve: 'smooth',
                        width: 3,
                    },
                    series: [{
                        name: 'Réservations',
                        data: values,
                    }],
                    xaxis: {
                        categories: labels,
                        labels: {
                            style: { colors: '#ffffff' },
                        },
                    },
                    yaxis: {
                        labels: {
                            style: { colors: '#ffffff' },
                        },
                        min: 0,
                        forceNiceScale: true,
                    },
                    colors: ['#ffffff'],
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.4,
                            opacityTo: 0.1,
                            stops: [0, 90, 100],
                        },
                    },
                    grid: { show: false },
                    legend: { show: false },
                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return val + ' réservation' + (val > 1 ? 's' : '');
                            },
                        },
                    },
                };

                const chart = new ApexCharts(document.querySelector('#support-chart'), options);
                chart.render();
            }
        });
    </script>
</body>

</html>
