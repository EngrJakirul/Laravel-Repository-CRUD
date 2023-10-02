@extends('web.master')
@section('title')
    ADD-USER
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center text-uppercase">Add user</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('user.create')}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Name <span style="color: red">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="" />
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email <span style="color: red">*</span></label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" />
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="tel" class="form-control" name="mobile" />
                                        @error('mobile')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">DOB <span style="color: red">*</span></label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" name="dob" />
                                        @error('dob')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="address" class="col-sm-3 col-form-label">Gender <span style="color: red">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="radio" name="gender" value="1" id="1" >
                                        <label for="1">Male</label>
                                        <input type="radio" name="gender" value="0" id="0">
                                        <label for="0">Female</label>
                                        @error('gender')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" name="" value="SUBMIT" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
