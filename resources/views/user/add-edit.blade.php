@extends('layouts.layout')                        
@section('content')
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Basic Form Inputs card start -->
            <div class="card">
                <div class="card-header">
                    <h5>User Registration</h5>
                </div>
                <div class="card-block">
                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    	{{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email Address
                                Input</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  placeholder="Enter Email" name="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control"
                                    placeholder="Password" name="password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                    placeholder="Contact No" name="phone_no">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Designation</label>
                            <div class="col-sm-10">
                                <select  class="form-control" name="designation">
                                    <option value="1">Select Designation
                                    </option>
                                    <option value="RSM">Regional Sales Manager</option>
                                    <option value="ASM">Assistant Sales Manager</option>
                                    <option value="TSE">Territory Sales Manager</option>
                                    <option value="ADMIN">System Admin</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                    placeholder="User name" name="username">
                            </div>
                        </div>

						<div class="form-group row">
                            <label
                                class="col-sm-2 col-form-label">Full name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                    placeholder="Full name" name="name">
                            </div>
                        </div>

						<div class="form-group row">
                            <label
                                class="col-sm-2 col-form-label">Nation ID</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                    placeholder="National Id Card number" name="nid">
                            </div>
                        </div>

						<div class="form-group row">
                            
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-info" data-container="body"
                                                            data-toggle="popover" title="Info color states"
                                                            data-placement="bottom">Submit</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                                    <!-- Page body end -->
@endsection