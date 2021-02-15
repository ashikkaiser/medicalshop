<div class="card card-default">
    <form method="POST" action="{{ route('category.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <input type="text" name="name" class="form-control" id="name"
                    placeholder="Enter new category name.." required autofocus>
                <div class="invalid-feedback msg-error-name"></div>
            </div>
            <div class="form-group">
                <label for="slug">{{ __('Meta Title') }}</label>
                <textarea name="meta_title" class="form-control" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="slug">{{ __('Meta Decription') }}</label>
                <textarea name="meta_dec" class="form-control" id="" cols="30" rows="5"></textarea>
            </div>
        </div>
        <div class="card-footer">
            <button id="btn-submit" type="submit" class="btn btn-info float-right">{{ __('Add New Category') }}</button>
        </div>
    </form>
</div>
