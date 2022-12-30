@extends('layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update the <i class="text-cyan">{{ $user->name }}</i> user</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Main</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <form action="{{ route('user.update', $user->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <input type="text" value="{{$user->name ?? old('name') }}" name="name" class="form-control" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{$user->surname ?? old('surname') }}" name="surname" class="form-control" placeholder="Enter surname">
                        </div>
                        <div class="form-group">
                            <input type="number" value="{{$user->age ?? old('age') }}"name="age" class="form-control" placeholder="Enter age">
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{$user->address ?? old('address') }}" name="address" class="form-control" placeholder="Enter address">
                        </div>
                        <div class="form-group">
                            <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                                <optin disabled selected >Gender</optin>
                                <option {{ $user->gender == 1 || old('gender') == 1 ? ' selected' : "" }} value="1">Male</option>
                                <option {{ $user->gender == 2 || old('gender') == 2 ? ' selected' : "" }} value="2">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-primary" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
