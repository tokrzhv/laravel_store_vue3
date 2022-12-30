@extends('layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add new product</h1>
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
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input type="text" name="model" class="form-control" placeholder="Enter model">
                        </div>
                        <div class="form-group">
                            <input type="text" name="description" class="form-control" placeholder="Enter description">
                        </div>
                        <div class="form-group">
                            <textarea name="content" class="form-control" cols="20" rows="3"
                                      placeholder="Enter content"></textarea>
                        </div>
                        <div class="row">
                            <div class="form-group col-4">
                                <input type="number" name="price" class="form-control" placeholder="Enter price">
                            </div>
                            <div class="form-group col-4">
                                <input type="number" name="old_price" class="form-control" placeholder="Enter old_count">
                            </div>
                            <div class="form-group col-4">
                                <input type="number" name="count" class="form-control" placeholder="Enter count">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Preview image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="preview_image" type="file" class="custom-file-input">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Add some other images</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="product_images[]" type="file" class="custom-file-input">
                                    <label class="custom-file-label" >Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="product_images[]" type="file" class="custom-file-input">
                                    <label class="custom-file-label" >Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="product_images[]" type="file" class="custom-file-input">
                                    <label class="custom-file-label" >Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <select name="category_id" class="custom-select" style="width: 100%;">
                                    <option selected disabled>Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <select name="group_id" class="custom-select" style="width: 100%;">
                                    <option selected disabled>Select Group</option>
                                    @foreach($groups as $group)
                                        <option value="{{ $group->id }}">{{ $group->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <div class="select2-lime">
                                    <select name="tags[]" class="select2" multiple="multiple"
                                            data-placeholder="Select a Tags" data-dropdown-css-class="select2-lime"
                                            style="width: 100%;">
                                        @foreach($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <div class="select2-info">
                                    <select name="colors[]" class="select2" multiple="multiple"
                                            data-placeholder="Select a Colors" data-dropdown-css-class="select2-info"
                                            style="width: 100%;">
                                        @foreach($colors as $color)
                                            <option value="{{ $color->id }}">{{ $color->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
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
