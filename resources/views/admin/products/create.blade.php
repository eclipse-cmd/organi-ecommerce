<div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any"
    data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h5 class="nk-block-title">New Product</h5>
            <div class="nk-block-des">
                <p>Add information and add new product.</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <form action="{{ route('admin.products.store') }}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label" for="product-title">Product Title</label>
                        <div class="form-control-wrap">
                            <input type="text" name="name" class="form-control" id="product-title"
                                value="{{ old('name') }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="regular-price">Regular Price</label>
                        <div class="form-control-wrap">
                            <input type="text" name="regular_price" class="form-control" id="regular-price"
                                value="{{ old('regular_price') }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="sale-price">Sale Price</label>
                        <div class="form-control-wrap">
                            <input type="text" name="sales_price" class="form-control" id="sale-price"
                                value="{{ old('sales_price') }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="stock">Stock</label>
                        <div class="form-control-wrap">
                            <input type="text" name="stock" class="form-control" id="stock"
                                value="{{ old('stock') }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="SKU">SKU</label>
                        <div class="form-control-wrap">
                            <input type="text" name="sku" class="form-control" id="SKU"
                                value="{{ old('sku') }}">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <label class="form-label" for="category">Category</label>
                            <select class="form-select" name="category"
                                aria-label="multiple select example">
                                <option selected>Open this select menu</option>
                                <option value="cat_1">One</option>
                                <option value="cat_2">Two</option>
                                <option value="cat_3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label" for="tags">Tags</label>
                        <div class="form-control-wrap">
                            <input type="text" name="tags" class="form-control" id="tags"
                                value="{{ old('tag') }}">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label" for="tags">Description</label>
                        <div class="form-control-wrap">
                            <textarea name="description" class="form-control" required cols="30" rows="10"
                                placeholder="Product description">{{ old('description') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="upload-zone small bg-lighter my-2">
                        <div class="dz-message">
                            <span class="dz-message-text" name="images">Drag and drop file</span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add
                            New</span></button>
                </div>
            </div>
        </form>
    </div><!-- .nk-block -->
</div>
