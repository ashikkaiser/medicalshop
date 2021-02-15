@extends('backend.layouts.main')
@section('title', 'Create Product')
@section('content')
    <div class="contentbar">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form action="{{ route('shop.store') }}" enctype="multipart/form-data" method="POST">
                    <div class="card-body">
                        
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-4 text-right" for="name">{{ __('Name') }}</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Enter new Product name.." required autofocus>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 text-right" for="title">{{ __('Title') }}</label>
                                <div class="col-md-8">
                                    <input type="text" name="title" class="form-control" id="title"
                                        placeholder="Enter new Shop Title.." required autofocus>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 text-right" for="email">{{ __('Shop Email') }}</label>
                                <div class="col-md-8">
                                    <input type="text" name="email" class="form-control" id="email"
                                        placeholder="Enter new shop email.." required autofocus>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 text-right" for="phone">{{ __('Shop Phone No') }}</label>
                                <div class="col-md-8">
                                    <input type="text" name="phone" class="form-control" id="email"
                                        placeholder="Enter new shop phone.." required autofocus>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 text-right" for="shop_logo">{{ __('Shop Logo') }}</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control" name="shop_logo">
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 text-right" for="phone">{{ __('Shop favicon') }}</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control" name="shop_favicon">
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 text-right" for="meta_decription">{{ __('Meta Decription') }}</label>
                                <div class="col-md-8">
                                    <textarea name="decription" class="form-control" id="" cols="30" rows="5"
                                        required></textarea>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 text-right" for="meta_keyword">{{ __('Meta Keyword') }}</label>
                                <div class="col-md-8">
                                    <textarea name="meta_keyword" class="form-control" id="" cols="30" rows="5"
                                        required></textarea>

                                </div>
                            </div>
                       

                    </div>
                    <div class="card-footer">
                        <button id="btn-submit" type="submit"
                            class="btn btn-info float-right">{{ __('Add New Shop') }}</button>
                    </div>
                </form>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection
