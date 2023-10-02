@extends('web.master')
@section('title')
    Manage User
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-header">
                        <h2 class="text-center text-uppercase">Manage User</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-border table-hover">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Dob</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td>{{$user->dob}}</td>
                                    <td>{{$user->gender == 1 ? 'Male' : 'Female'}}</td>
                                    <td>
                                        <a href="{{route('user.edit', ['id' => $user->id])}}" class="btn btn-success btn-sm">Edit</a>
                                        <form action="{{route('user.delete', ['id' => $user->id])}}" method="POST">
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
