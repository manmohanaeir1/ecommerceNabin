


<a href="{{ $url_edit }}" class="btn btn-sm btn-info" title="Edit : {{ $model->name }}">
    <i class="fa fa-edit"></i>
</a>


<a href="{{ $url_delete }}" class="btn btn-sm btn-danger btn-delete" rel="{{ $model->id }}" rel1="delete-tag"  title="Delete : {{ $model->name }}">
    <i class="fa fa-trash"></i>
</a>
