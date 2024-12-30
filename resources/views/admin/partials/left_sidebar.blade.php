<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
<script src="https://kit.fontawesome.com/e1528f4468.js" crossorigin="anonymous"></script>
<nav id="sidebar" class="sidebar js-sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="{{url('admin_dashboard')}}">
			<span class="align-middle">NetTechnoCrats</span>
		</a>

		<ul class="sidebar-nav">
			<li class="sidebar-header">
				Pages
			</li>

			<li class="sidebar-item dashboard">
				<a class="sidebar-link" href="{{url('admin_dashboard')}}">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
				</a>
			</li>

			<!-- <li class="sidebar-item portfolio">
				<a class="sidebar-link" data-bs-toggle="dropdown" href="{{url('PortfolioForAdmin')}}">
					<i class="align-middle" data-feather="user"></i> <span class="align-middle">PortFolio</span>

				</a>
			</li> -->
			<li class="sidebar-item">

				<a class="nav-link" data-bs-toggle="collapse" href="#b2b-general-pages" aria-expanded="false"

					aria-controls="b2b-general-pages">

					<span class="menu-title text-white"><i class="fa-solid fa-diagram-project ps-3 pe-2"></i>&nbsp; Portfolio &nbsp;<i class="fa-solid fa-chevron-right"></i></span>

				</a>

				<div class="collapse ms-4" id="b2b-general-pages">

					<ul class="nav flex-column sub-menu">

						<li class="nav-item marketing-portfolio">
							<a class="nav-link" href="{{ url('PortfolioForAdmin/Digital_Marketing') }}" onclick="markVisited(this)">
								<i class="fa-solid fa-bullhorn me-2" style="color:#fff; padding:2px; margin-left:0px;"></i>
								<span class="menu-title text-white">Marketing Portfolio</span>
							</a>

						</li>

						<li class="nav-item devlopment-portfolio">
							<a class="nav-link" href="{{ url('PortfolioForAdmin/Development') }}" onclick=" markVisited(this)"><i class="fa-solid fa-code me-2" style="color:#fff; padding:2px; margin-left:0px;"></i>
								<span class="menu-title text-white">Development PortFolio</span>
							</a>
							
						</li>


					</ul>

				</div>

			</li>
			<!-- <li class="sidebar-item portfolio">
				<a class="sidebar-link" href="{{url('PortfolioForAdmin')}}">
					<i class="align-middle" data-feather="user"></i> <span class="align-middle">Marketing Portfolio</span>
				</a>
			</li>
			<li class="sidebar-item portfolio">
				<a class="sidebar-link" href="{{url('PortfolioForAdmin')}}">
					<i class="align-middle" data-feather="user"></i> <span class="align-middle">Development PortFolio</span>
				</a>
			</li> -->

			<li class="sidebar-item blog">
				<a class="sidebar-link" href="{{url('listBlogsForAdmin')}}">
					<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Blogs</span>
				</a>
			</li>

			<!-- <li class="sidebar-item blog">
				<a class="sidebar-link" href="{{url('listBlogsForAdmin')}}">
					<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Blog Comment</span>
				</a>
			</li> -->

			<li class="sidebar-item enquires">
				<a class="sidebar-link" href="{{url('listEnquiriesForAdmin')}}">
					<i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Enquires</span>
				</a>
			</li>

			<!-- <li class="sidebar-item">
				<a class="sidebar-link" href="pages-blank.html">
					<i class="align-middle" data-feather="book"></i> <span class="align-middle">Settings</span>
				</a>
			</li>

			<li class="sidebar-header">
				Tools & Components
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="ui-buttons.html">
					<i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span> -->
			<!-- </a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="ui-forms.html">
					<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="ui-cards.html">
					<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="ui-typography.html">
					<i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="icons-feather.html">
					<i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
				</a>
			</li>

			<li class="sidebar-header">
				Plugins & Addons
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="charts-chartjs.html">
					<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="maps-google.html">
					<i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
				</a> -->
			</li>
		</ul>

		<div class="sidebar-cta">
			<div class="sidebar-cta-content">
				<div class="d-grid">
					<a href="{{url('/')}}" class="btn btn-primary">Go to Site</a>
				</div>
			</div>
		</div>
	</div>
</nav>