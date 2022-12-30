@extends('layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $color->title }}</h1>
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
                <div class="card col-6">
                    <div class="card-header d-flex p-3">
                        <div class="mr-3">
                            <a href="{{ route('color.edit', $color->id) }}" class="btn btn-primary">Update</a>
                        </div>
                        <form action="{{ route('color.delete', $color->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </div>


                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                            <tr>
                                <td>Id</td>
                                <td>{{ $color->id }}</td>
                                <td>Preview</td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td>{{ $color->title }}</td>
                                <td><div style="width: 16px; height: 16px; background: {{ '#' . $color->title }}"></div></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
