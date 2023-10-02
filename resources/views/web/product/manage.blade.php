@extends('web.master')
@section('title')
    Manage Product Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-header">
                        <h2 class="text-center text-uppercase">Manage Product</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-border table-hover">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->FrontUser->name}}</td>
                                    <td>{{$product->FrontUser->email}}</td>
                                    <td>{{$product->Category->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>
                                        <img src="{{asset('images/'.$product->image)}}" width="100" height="100" class="" alt="...">
                                    </td>
                                    <td>
                                        <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-success btn-sm">Edit</a>
                                        <form action="{{route('product.delete', ['id' => $product->id])}}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" href="" onclick="return confirm('Are you sure want to Delete ?')" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
{{--                        {{ $products->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
