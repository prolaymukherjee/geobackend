@extends('layouts.layout')                        
@section('content')

                                    <!-- Page-body start -->
<div class="page-body">
<div class="row">
    <div class="col-sm-12">
        <!-- Zero config.table start -->
        <div class="card">
            <div class="card-header">
                <h5>Region List</h5>
                <div class="row">
                	<div class="col-md-10"></div>
                	<div class="col-md-2">
                		<button class="btn btn-primary btn-round text-right" style="text-align: center;margin-left: 100px;"  data-toggle="modal" data-target="#AddRegionModal">ADD</button>
                	</div>
                </div>
            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable"
                        class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>S\L</th>
                                <th>Region ID</th>
                                <th>Region Name</th>
                                <th>RSM Name</th>
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
                        	@foreach($regionData as $data)
                            <tr>
                            	<td><label class="label label-success">{{$currentNumber++}}</label></td>
                                <td>@if(isset($data->region_id)){{ $data->region_id }} @else NO @endif</td>
                                <td>@if(isset($data->region_name)){{ $data->region_name }} @else NO @endif</td>
                                <td>@if(isset($data->rsm_name)){{ $data->rsm_name }} @else NO @endif</td>
                                <td>{{ \Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }} </td>
                                <td><button class="btn btn-warning btn-round" data-toggle="modal" data-target="#exampleModal{{ $data->id }}">Edit</button></td>
                                
                             </tr>   


                             <!-- Modal -->
							<div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg" role="document">
							    <div class="modal-content">
							    <form action="{{ url('region-udate',$data->id) }}" method="POST" enctype="multipart/form-data">
							    	{{csrf_field()}}

    								
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">@if(isset($data->region_name)){{ $data->region_name }} @else NO @endif</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      
							      <div class="modal-body">
				                        <div class="form-group row">
				                            <label
				                                class="col-sm-2 col-form-label">Region Name</label>
				                            <div class="col-sm-10">
				                                <input type="text" class="form-control" name="region_name" value="{{ $data->region_name }}">
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



                                                 <!-- Modal -->
							<div class="modal fade" id="AddRegionModal" tabindex="-1" role="dialog" aria-labelledby="AddRegionModal" aria-hidden="true">
							  <div class="modal-dialog modal-lg" role="document">
							    <div class="modal-content">
							    <form action="{{ route('region.store') }}" method="POST" enctype="multipart/form-data">
							    	{{csrf_field()}}

							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">ADD Region</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      
							      <div class="modal-body">
				                        <div class="form-group row">
				                            <label
				                                class="col-sm-2 col-form-label">Region Name:</label>
				                            <div class="col-sm-10">
				                                <input type="text" class="form-control" name="region_name" placeholder="Enter Region Name">
				                            </div>
				                        </div>
			                      	
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        <button type="submit" class="btn btn-primary">ADD</button>
							      </div>
							  </form>
							    </div>
							  </div>
							</div>




                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- Page-body end -->


@endsection
            
                   