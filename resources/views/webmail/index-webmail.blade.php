@extends('master')
@section('title')
    WebMail
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Add WebMails</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('add.webMail')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label fro">Type</label>
                                    <input class="form-control" type="text" placeholder="Enter Type" name="type">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Username</label>
                                <input class="form-control" type="text" placeholder="Username" name="username">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Password</label>
                                <input class="form-control" type="password" placeholder="Password" name="password">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Price</label>
                                <input class="form-control" type="number" placeholder="Price" name="price">
                            </div>

                            <div class="mt-2">
                                <input class="form-control btn btn-primary" type="submit" value="Submit" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">WebMails Info</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>ID</th>
                                <th>WebMail</th>
                                <th>Country</th>
                                <th>Hosting</th>
                                <th>Type</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th>Actions</th>
                            </tr>

                            @php $i=1 @endphp
                            @foreach($webMails as $webMail)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$webMail->username}}</td>
                                    <td></td>
                                    <td>{{$webMail->hosting}}</td>
                                    <td>{{$webMail->type}}</td>
                                    <td>{{$webMail->category}}</td>
                                    <td>{{$webMail->price}}</td>
                                    @if($webMail->status == 1)
                                        <td>Enable</td>
                                    @else
                                        <td>Disable</td>
                                    @endif
                                    <td>{{$webMail->added}}</td>
                                    <td>
                                        <a href="{{route('edit.webMail',['id'=>$webMail->id])}}" class="btn btn-primary btn-sm">Update</a>
                                        <form action="{{route('delete.webMail',['id'=>$webMail->id])}})}}" method="post" id="delete">
                                            @csrf
                                            <input type="hidden" value="{{$webMail->id}}">
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure??')">Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
