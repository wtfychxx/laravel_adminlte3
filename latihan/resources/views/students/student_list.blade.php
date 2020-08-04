@extends('partials/base_view')

@section('title', $title)

@section('content')
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<button class="btn btn-primary float-right" type="button" id="btn_add_student"><i class="fas fa-plus"></i> Add Student</button>
				</div>

				<div class="table-responsive">
					<table class="table table-bordered" id="table_data">
						<thead>
							<th> NIS </th>
							<th> Nama </th>
							<th> Majority </th>
							<th></th>
						</thead>

						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
@endsection