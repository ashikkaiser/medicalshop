<div class="btn-group btn-group-sm">
    @isset($edit_url)
        <a href="{{ $edit_url }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
    @endisset
    @isset($del_url)
        <button type="button" class="btn btn-danger delete" data-url="{{ $del_url }}" data-table="{{ $table }}"><i
                class="fa fa-trash"></i></button>
    @endisset
</div>
