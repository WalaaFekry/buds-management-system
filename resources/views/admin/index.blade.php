@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
	<div class="container-full">

	<section class="content">
		<div class="row">
			<div class="col-xl-3 col-6">
				<div class="box overflow-hidden pull-up hov-rs">
					<div class="box-body text-center">							
						<div class="icon bg-success-light rounded w-60 h-60 mx-auto">
						<i class="text-success mr-0 font-size-24 mdi mdi-school"></i>
						</div>
						<div>
							<p class="text-mute mt-20 mb-0 font-size-16">Total Buds</p>
							<h3 class="text-dark mb-0 font-weight-500">00</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-6">
				<div class="box overflow-hidden pull-up hov-rs">
					<div class="box-body text-center">							
						<div class="icon bg-warning-light rounded w-60 h-60 mx-auto">
						<i class="text-warning mr-0 font-size-24 fa fa-users" aria-hidden="true"></i>
						</div>
						<div>
							<p class="text-mute mt-20 mb-0 font-size-16">Total Users</p>
							<h3 class="text-dark mb-0 font-weight-500">00</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-6">
				<div class="box overflow-hidden pull-up hov-rs">
					<div class="box-body text-center">							
						<div class="icon bg-info-light rounded w-60 h-60 mx-auto">
						<i class="text-info mr-0 font-size-24 fa fa-mortar-board" aria-hidden="true"></i>	
						</div>
						<div>
							<p class="text-mute mt-20 mb-0 font-size-16">New Buds</p>
							<h3 class="text-dark mb-0 font-weight-500">00</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-6">
				<div class="box overflow-hidden pull-up hov-rs">
					<div class="box-body text-center">							
						<div class="icon bg-danger-light rounded w-60 h-60 mx-auto">
						<i class="text-danger mr-0 font-size-24 fa fa-user" aria-hidden="true"></i>
						</div>
						<div>
							<p class="text-mute mt-20 mb-0 font-size-16">New Users</p>
							<h3 class="text-dark mb-0 font-weight-500">00</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="box">
					<div class="box-header">
						<h4 class="box-title align-items-start flex-column">
							All Buds
						</h4>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table class="table no-border">
								<thead>
									<tr class="text-uppercase bg-lightest">
										<th style="min-width: 250px"><span class="text-dark">products</span></th>
										<th style="min-width: 100px"><span class="text-dark">pruce</span></th>
										<th style="min-width: 100px"><span class="text-dark">deposit</span></th>
										<th style="min-width: 150px"><span class="text-dark">agent</span></th>
										<th style="min-width: 130px"><span class="text-dark">status</span></th>
										<th style="min-width: 120px"><span class="text-dark">Action</span></th>
									</tr>
								</thead>
								<tbody>
									<tr>										
										<td class="pl-0 py-8">
											<div class="d-flex align-items-center">
												<div class="flex-shrink-0 mr-20">
													<div class="bg-img h-50 w-50" style="background-image: url(backend/images/gallery/creative/img-1.jpg)"></div>
												</div>

												<div>
													<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
													<span class="text-mute d-block">Pharetra, Nulla , Nec, Aliquet</span>
												</div>
											</div>
										</td>
										<td>
											<span class="text-mute font-weight-500 d-block font-size-16">
												Paid
											</span>
											<span class="text-dark">
												$45,800k
											</span>
										</td>
										<td>
											<span class="text-mute font-weight-500 d-block font-size-16">
												Paid
											</span>
											<span class="text-dark">
												$45k
											</span>
										</td>
										<td>
											<span class="text-mute font-weight-500 d-block font-size-16">
												Sophia
											</span>
											<span class="text-dark">
												Pharetra
											</span>
										</td>
										<td>
											<span class="badge badge-primary-light badge-lg">Approved</span>
										</td>
										<td class="text-right">
											<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
											<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>  
			</div>
		</div>
	</section>
	</div>
</div>

@endsection