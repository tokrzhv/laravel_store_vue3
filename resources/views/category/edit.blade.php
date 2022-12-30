@extends('layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update the <i class="text-cyan">{{ $category->title }}</i> category</h1>
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
                    <form action="{{ route('category.update', $category->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <input type="text" name="title" value="{{ $category->title }}" class="form-control" placeholder="Enter title">
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
