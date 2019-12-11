@extends('layout.main')

@section('content')

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
		  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-users"></i> Group Management</h6>
		</div>
			<div class="card-body">
			  <div class="table-responsive">
			    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			      <thead class="thead-light">
			        <tr>
                      <th>No</th>
			          <th>Group Name</th>
			          <th>Group Type</th>
			          <th>Create Date</th>
			          <th>Tools</th>
			         
			        </tr>
			      </thead>

			      <tbody>
			        <tr>
			          <td>1</td>
			          <td>System Architect</td>
			          <td>Edinburgh</td>
			          
			          <td>2011/04/25</td>
                      <td>
                        <button class="btn-sm btn btn-outline-info"><i class="fas fa-info-circle"></i></button>
                        <button class="btn-sm btn btn-outline-warning"><i class="fas fa-edit"></i></button>
                        <button class="btn-sm btn btn-outline-danger"><i class="fas fa-trash"></i></button>
			          </td>

			        </tr>
			        <tr>
			          <td>2</td>
			          <td>Accountant</td>
			          <td>Tokyo</td>
			         
			          <td>2011/07/25</td>
                      <td>
                        <button class="btn-sm btn btn-outline-info"><i class="fas fa-info-circle"></i></button>
                        <button class="btn-sm btn btn-outline-warning"><i class="fas fa-edit"></i></button>
                        <button class="btn-sm btn btn-outline-danger"><i class="fas fa-trash"></i></button>
			          </td>

			        </tr>
			        <tr>
			          <td>3</td>
			          <td>Junior Technical Author</td>
			          <td>San Francisco</td>
			          
			          <td>2009/01/12</td>
                      <td>
                        <button class="btn-sm btn btn-outline-info"><i class="fas fa-info-circle"></i></button>
                        <button class="btn-sm btn btn-outline-warning"><i class="fas fa-edit"></i></button>
                        <button class="btn-sm btn btn-outline-danger"><i class="fas fa-trash"></i></button>
			          </td>

			        </tr>
			        <tr>
			          <td>4</td>
			          <td>Senior Javascript Developer</td>
			          <td>Edinburgh</td>
			          
			          <td>2012/03/29</td>
			           <td>
                        <button class="btn-sm btn btn-outline-info"><i class="fas fa-info-circle"></i></button>
                        <button class="btn-sm btn btn-outline-warning"><i class="fas fa-edit"></i></button>
                        <button class="btn-sm btn btn-outline-danger"><i class="fas fa-trash"></i></button>
			          </td>

			        </tr>

			      </tbody>
			    </table>
			  </div>
			</div>
	</div>

@endsection