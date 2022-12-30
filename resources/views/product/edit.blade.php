@extends('layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update the <i class="text-cyan">{{ $product->model }}</i> product</h1>
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
                    <form action="{{ route('product.update', $product->id) }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <input type="text" name="model" value="{{ $product->model ?? old('model')}}"
                                   class="form-control" placeholder="Enter title">
                            @error('model')
                            <div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="description"
                                   value="{{ $product->description ?? old('description')}}" class="form-control"
                                   placeholder="Enter description">
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <textarea name="content" class="form-control" cols="20" rows="3"
                                      placeholder="Enter content">{{ $product->content ?? old('content')}}</textarea>
                            @error('content')
                            <div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <input type="number" name="price" value="{{ $product->price ?? old('price')}}"
                                       class="form-control" placeholder="Enter price">
                                @error('price')
                                <div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group col-6">
                                <input type="number" name="old_price"
                                       value="{{ $product->old_price ?? old('old_price')}}" class="form-control"
                                       placeholder="Enter old_price">
                                @error('old_price')
                                <div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group col-6">
                                <input type="number" name="count" value="{{ $product->count ?? old('count')}}"
                                       class="form-control" placeholder="Enter count">
                                @error('count')
                                <div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Preview</label>
                            <div class="text-center">
                                @if($product->preview_image)
                                    <img src="{{ Storage::url($product->preview_image) }}" alt="preview"
                                         class="w-50 mb-2">
                                @endif
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="preview_image" type="file" class="custom-file-input">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            <label>Addition</label>

                            @foreach($addition_images as $addition_image)
                                <div class="text-center m-2">
                                    <img src="{{ Storage::url($addition_image->file_path) }}" alt="preview"
                                         class="w-50 mb-2">
                                    <input type="hidden" name="addition_image_file_path[]"
                                           value="{{$addition_image->file_path}}">
                                </div>
                            @endforeach
                            <label>Add next one | max - 3 </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="add_images[]" type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>Select Category</label>
                                <select name="category_id" class="custom-select">
                                    <option selected disabled></option>
                                    @foreach($categories as $category)
                                        <option
                                            value="{{ $category->id }}" {{ $category->id == $product->category_id ? ' selected' : '' }}>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group col-6">
                                <label>Select Group</label>
                                <select name="group_id" class="custom-select">
                                    <option selected disabled></option>
                                    @foreach($groups as $group)
                                        <option
                                            value="{{ $group->id }}" {{ $group->id == $product->group_id ? ' selected' : '' }}>{{ $group->title }}</option>
                                    @endforeach
                                </select>
                                @error('group_id')
                                <div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <div class="select2-lime">
                                    <select name="tags[]" class="select2" multiple="multiple"
                                            data-placeholder="Select a Tags" data-dropdown-css-class="select2-lime"
                                            style="width: 100%;">
                                        @foreach($tags as $tag)
                                            <option {{ is_array($product->tags->pluck('id')->toArray()) &&
                                                       in_array($tag->id, $product->tags->pluck('id')->toArray()) ? ' selected' : "" }}
                                                    value="{{ $tag->id }}" {{ $tag->id == $product->tags->pluck('id')->toArray() ? ' selected' : ''}}>{{ $tag->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('tags')
                                    <div class="text-danger">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <div class="select2-info">
                                    <select name="colors[]" class="select2" multiple="multiple"
                                            data-placeholder="Select a Colors" data-dropdown-css-class="select2-info"
                                            style="width: 100%;">
                                        @foreach($colors as $color)
                                            <option {{ is_array($product->colors->pluck('id')->toArray()) &&
                                                       in_array($color->id, $product->colors->pluck('id')->toArray()) ? ' selected' : "" }}
                                                    value="{{ $color->id }}" {{ $color->id == $product->colors->pluck('id')->toArray() ? ' selected' : "" }} >{{ $color->title }}</option>
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
