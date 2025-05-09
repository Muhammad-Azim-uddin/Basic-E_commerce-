@extends('layouts.backendLayout')
@section('title', 'Manage Category')
@section('backendContent')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('Backend/assets/css/rte_theme_default.css') }}">
    @endpush

    <div class="row">
        <div class="col-lg-10">
            <div class="card shadow ">
                <div class="card-header">
                    <h1>Add Product</h1>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group my-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" class="form-control" id="product_name" name="product_name"
                                        placeholder="Enter Product Name">
                                </div>
                                
                                    <div class="col-lg-6">
                                        <label for="slug">Product Slug</label>
                                        <input type="text" class="form-control" id="slug" name="slug"
                                            placeholder="Enter Product Slug">
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="category">Select Category</label>
                                <select name="category"  id="category" class="form-control select-category">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="brand">Select Brand</label>
                                <select name="brand"  id="" class="form-control">
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group my-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="product_price">Product Price</label>
                                    <input type="number" class="form-control" id="product_price" name="product_price"
                                        placeholder="Enter Product Price">
                                </div>
                                <div class="col-lg-6">
                                    <label for="selling_price">Selling_price</label>
                                    <input type="number" class="form-control" id="selling_price" name="product_quantity"
                                        placeholder="Enter Product Selling Price">
                                </div>
                            </div>
                        </div>
                        <div class="form-group my-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="product_qty">Product Quantity</label>
                                    <input type="number" class="form-control" id="product_qty" name="product_qty"
                                        placeholder="Enter Product Quantity">
                                </div>
                                <div class="col-lg-6">
                                    <label for="alert_qty">Alert Quantity</label>
                                    <input type="number" class="form-control" id="selling_price" name="alert_qty"
                                        placeholder="Alert Quantity">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row my-3">
                                <div>
                                    <label for="short_detail" class="mb-1">Short Detail</label>
                                    <textarea name="short_detail" id="short_detail"></textarea>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div>
                                    <label for="long_detail" class="mb-1">Long Detail</label>
                                    <textarea name="long_detail" id="long_detail"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="from-group">
                            <div class="row mt-3 mb-2">
                                <div class="col-lg-6">
                                    <label for="featured_image">Featured Image</label>
                                    <input type="file" name="featured_image" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    <label for="gallery_image">Gallery Image</label>
                                    <input type="file" multiple name="gallery_image" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group my-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="sku">SKU</label>
                                    <input type="text" class="form-control" id="sku" name="sku"
                                        placeholder="Enter SKU">
                                </div>
                                <div class="col-lg-6">
                                    <label for="video_url">Video URL</label>
                                    <input type="text" name="video_url" id="video_url" class="form-control"
                                        placeholder="Enter Video URL">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12">
                                    <textarea class="form-control" name="additional_info" id="additional_info" placeholder="Additional Information"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('Backend/assets/js/rte.js') }}"></script>
        <script src="{{ asset('Backend/assets/js/all_plugins.js') }}"></script>
        <script>
            let editor1 = new RichTextEditor("#short_detail");
            let editor2 = new RichTextEditor("#long_detail");
        </script>
    @endpush
@endsection
