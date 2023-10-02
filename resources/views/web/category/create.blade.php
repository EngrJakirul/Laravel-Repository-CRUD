@extends('web.master')
@section('title')
    ADD-CATEGORY
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center text-uppercase">Add category</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('category.create')}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Name <span style="color: red">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="{{old('name')}}" />
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description" id="description" placeholder="Enter Description">{{old('description')}}</textarea>
                                        @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="address" class="col-sm-3 col-form-label">Status <span style="color: red">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="radio" name="status" value="1" id="1">
                                        <label for="1">Active</label>
                                       <input type="radio" name="status" value="0" id="0">
                                        <label for="0">Inactive</label>
                                        @error('status')
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
