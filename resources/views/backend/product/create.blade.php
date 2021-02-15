@extends('backend.layouts.main')
@section('title', 'Create Product')
@section('style')
    <link href="/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css">
    <link href="/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.css" rel="stylesheet" type="text/css">

@endsection
@section('content')
    <div class="contentbar">
        <div class="row justify-content-center">
            <form class="col-md-12 row justify-content-center" action="{{ route('products.store') }}" method="POST" id="choice_form" enctype="multipart/form-data">
                @csrf
                <div class="col-md-8">

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Product Information
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3" for="name">{{ __('Shop') }}</label>
                                <div class="col-md-9">
                                    <select class="select2-multi-select form-control select2" name="shop[]" multiple>
                                        @foreach ($Allshop as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="name">{{ __('Name') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Enter new Product name.." required autofocus>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="decription">{{ __('Decription') }}</label>
                                <div class="col-md-9">
                                    <textarea name="decription" class="form-control" id="" cols="30" rows="5"
                                        required></textarea>

                                </div>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 h6">Product Images</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="signinSrEmail">Gallery Images</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control" name="photos">

                                </div>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 h6">Product Variation
                            </h5>
                        </div>
                        <div class="card-body">

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="meta_title">{{ __('Attributes Type') }}</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control tag" id="choice_attributes" style="width: 100%"
                                        name="choice_attributes[]" multiple="multiple">
                                        <option value="Dose">Dose</option>
                                        <option value="Quantity">Quantity</option>

                                    </select>
                                </div>
                            </div>
                            <div class="customer_choice_options" id="customer_choice_options">

                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 h6">Product price + stock</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3 col-from-label">Unit Price <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                    <input type="number" min="0" value="0" step="0.01" placeholder="Unit Price"
                                        name="unit_price" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-from-label">Tax <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                    <input type="number" min="0" value="0" step="0.01" placeholder="Tax" name="tax"
                                        class="form-control" required="">
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control select2" name="tax_type" tabindex="-98">
                                        <option value="amount">Flat</option>
                                        <option value="percent">Percent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-from-label">Discount <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                    <input type="number" min="0" value="0" step="0.01" placeholder="Discount"
                                        name="discount" class="form-control" required="">
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control select2" name="discount_type" tabindex="-98">
                                        <option value="amount">Flat</option>
                                        <option value="percent">Percent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" id="quantity">
                                <label class="col-md-3 col-from-label">Quantity <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                    <input type="number" min="0" value="0" step="1" placeholder="Quantity"
                                        name="current_stock" class="form-control" required="">
                                </div>
                            </div>
                            <br>
                            <div class="sku_combination" id="sku_combination">

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 h6">SEO Meta Tags</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3 col-from-label">Meta Title</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="meta_title" placeholder="Meta Title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-from-label">Description</label>
                                <div class="col-md-8">
                                    <textarea name="meta_description" rows="8" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="signinSrEmail">Meta Tag</label>
                                <div class="col-md-8">
                                    <textarea name="meta_tag" rows="8" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button id="btn-submit" type="submit"
                            class="btn btn-info float-right">{{ __('Add New Shop') }}</button>
                    </div>
                </div>
               
            </form>
        </div>
    </div>
@endsection
@section('script')

    @include('backend.product.scripts')
    <script>
        var ajax_sku_combination = "{{ route('ajax.sku_combination') }}"
        $('#choice_attributes').on('change', function() {
            $('#customer_choice_options').html(null);
            $.each($("#choice_attributes option:selected"), function() {
                add_more_customer_choice_option($(this).val(), $(this).text());
            });
            update_sku();
        });

        function update_sku() {
            axios.post(ajax_sku_combination, $('#choice_form').serialize()).then((res) => {
                // console.log(res.data)
                $('#sku_combination').html(res.data);
                if (res.data.length > 1) {
                    $('#quantity').hide();
                } else {
                    $('#quantity').show();
                }
            })
        }

        function add_more_customer_choice_option(i, name) {
            $('#customer_choice_options').append(
                '<div class="form-group row"><div class="col-md-3"><input type="hidden" name="choice_no[]" value="' +
                i + '"><input type="text" class="form-control" name="choice[]" value="' + name +
                '" placeholder="Choice Title" readonly></div><div class="col-md-8"><input type="text" class="form-control"  data-role="tagsinput" name="choice_options_' +
                i + '[]" placeholder="Enter choice values" onchange="update_sku()"></div></div>');
            $("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput();
        }

        function delete_variant(em) {
            $(em).closest('.variant').remove();
        }

    </script>
    <script>
        $('.select2').select2()
        $('#choice_attributes').select2()

    </script>
@endsection
