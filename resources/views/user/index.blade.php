@extends('layouts.layout')                        
@section('content')

                                    <!-- Page-body start -->
<div class="page-body">
<div class="row">
    <div class="col-sm-12">
        <!-- Zero config.table start -->
        <div class="card">
            <div class="card-header">
                <h5>User List</h5>

            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable"
                        class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>S\L</th>
                                <th>User Name</th>
                                <th>Full Name</th>
                                <th>Designation</th>
                                <th>E-mail</th>
                                <th>Base Station</th>
                                <th>Phone No</th>
                                <th>Nation ID</th>
                                <th>Create Date</th>
                                <th>Action</th>

                                <?php
		                        $number = 1;
		                        $numElementsPerPage = 10; // How many elements per page
		                        $pageNumber = isset($_GET['page']) ? (int)$_GET['page'] : 1;
		                        $currentNumber = ($pageNumber - 1) * $numElementsPerPage + $number;
                        		?>

                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($userData as $data)
                            <tr>
                            	<td><label class="label label-success">{{$currentNumber++}}</label></td>
                                <td>@if(isset($data->username)){{ $data->username }} @else NO @endif</td>
                                <td>@if(isset($data->name)){{ $data->name }} @else NO @endif</td>
                                <td>@if(isset($data->designation)){{ $data->designation }} @else NO @endif</td>
                                <td>@if(isset($data->email)){{ $data->email }} @else NO @endif</td>
                                <td>@if(isset($data->base_station)){{ $data->base_station }} @else NO @endif</td>
                                <td>@if(isset($data->phone_number)){{ $data->phone_number }} @else NO @endif</td>
                                <td>@if(isset($data->nid)){{ $data->nid }} @else NO @endif</td>
                                <td>{{ \Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }} </td>
                                <td><button class="btn btn-warning btn-round" data-toggle="modal" data-target="#exampleModal{{ $data->id }}">Edit</button></td>
                                
                             </tr>   


                             <!-- Modal -->
							<div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg" role="document">
							    <div class="modal-content">
							    <form action="{{ url('user-udate',$data->id) }}" method="POST" enctype="multipart/form-data">
							    	{{csrf_field()}}

    								
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">@if(isset($data->name)){{ $data->name }} @else NO @endif</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      
							      <div class="modal-body">
				                        <div class="form-group row">
				                            <label
				                                class="col-sm-2 col-form-label">Username</label>
				                            <div class="col-sm-10">
				                                <input type="text" class="form-control" name="username" value="{{ $data->username }}">
				                            </div>
				                        </div>


										<div class="form-group row">
				                            <label
				                                class="col-sm-2 col-form-label">Full name</label>
				                            <div class="col-sm-10">
				                                <input type="text" class="form-control" name="name" value="{{ $data->name }}">
				                            </div>
				                        </div>

							           <div class="form-group row">
			                            <label
			                                class="col-sm-2 col-form-label">Phone</label>
			                            <div class="col-sm-10">
			                                <input type="text" class="form-control" name="phone_no" value="{{ $data->phone_number }}">
			                            </div>
			                         </div>

			                        <div class="form-group row">
			                            <label
			                                class="col-sm-2 col-form-label">Nation ID</label>
			                            <div class="col-sm-10">
			                                <input type="text" class="form-control" name="nid" value="{{ $data->nid }}">
			                            </div>
			                        </div>
			                        <div class="form-group row">
			                            <label
			                                class="col-sm-2 col-form-label">User ID</label>
			                            <div class="col-sm-10">
			                                <input type="text" class="form-control" name="user_id" value="{{ $data->user_id }}" disabled>
			                            </div>
			                        </div>
			                      	
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        <button type="submit" class="btn btn-primary">Update</button>
							      </div>
							  </form>
							    </div>
							  </div>
							</div>

                           @endforeach
                            
                        </tbody>
                        <tfoot>
                        	

                           
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- Page-body end -->


@endsection
            
                   