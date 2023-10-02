@extends('web.master')
@section('title')
    ADD PRODUCT
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center text-uppercase">Add product</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('product.create')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">User <span style="color: red">*</span></label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="user_id" id="user_id">
                                            <option disabled selected>--select a user</option>
                                            @foreach($users as $user)
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('user_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Category <span style="color: red">*</span></label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="category_id" id="">
                                            <option disabled selected>--select a category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
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
                                    <label for="" class="col-md-3">Price <span style="color: red">*</span></label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="price" value="{{old('price')}}" />
                                        @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description" id="description" placeholder="Enter Description">{{old('description')}}</textarea>
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Image <span style="color: red">*</span></label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control-file" name="image" >
                                        @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" name="" value="New Product" />
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
