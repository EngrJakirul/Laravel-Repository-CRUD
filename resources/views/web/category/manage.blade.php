@extends('web.master')

@section('title')
    CATEGORY MANAGE
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card text-dark text-uppercase ">
                <div class="card-header">
                    <h2 class="text-center text-uppercase">Manage Category</h2>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr class="table-primary">
                            <th class="">SL NO</th>
                            <th class="">Name</th>
                            <th class="">Description</th>
                            <th class="">Status</th>
                            <th class="">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td class="table-primary text-center">{{$loop->iteration}}</td>
                                <td class="table-secondary text-start">{{$category->name}}</td>
                                <td class="table-warning text-center">{{$category->description}}</td>
                                <td class="table-success text-center text-black">{{$category->status == 1 ? 'Active' : 'Inactive'}}</td>
                                <td class="table-primary text-center">
                                    <a href="{{ route('category.edit', [$category->id]) }}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{ route('category.delete',$category->id) }}" onclick="return confirm('Are you sure want to Delete ?')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
