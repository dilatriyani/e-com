<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style type="text/css">
        .div_center {
            padding-top: 40px;

        }

        .h2_font {
            font-size: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.header')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="div_center">
                        <h1 class="h2_font">Add Product</h1>

                        <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card px-4 py-4">
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-4 col-form-label">Product Title</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="" name="title"
                                            placeholder="Write a title" required="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-4 col-form-label">Product Description</label>
                                    <div class="col-sm-8">
                                        <textarea type="text" class="form-control" id="" name="description" placeholder="Write your description"
                                            required=""></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-4 col-form-label">Product Price</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="" name="price"
                                            name="price" required="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-4 col-form-label">Discount_price</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="" name="dis_price"
                                            required="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-4 col-form-label">Product quantity</label>
                                    <div class="col-sm-8">
                                        <input type="number" min="0" class="form-control" id=""
                                            name="quantity" required="">
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <label for="" class="col-sm-4 col-form-label">Product Category</label>
                                    <div class="col-sm-8">
                                        <select class="form-select form-select-sm"
                                            aria-label=".form-select-sm example"required="">
                                            <option selected>Select Category</option>

                                            @foreach ($category as $category)
                                                <option value="{{ $category->category_name }}">
                                                    {{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="" class="col-sm-4 col-form-label">Product image</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="image">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary col-sm-4"
                                    >Submit</button>
                            </div>
                    </div>
                    </form>

                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    @include('admin.script')
</body>

</html>
