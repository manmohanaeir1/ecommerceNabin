<a href="{{ $url_show }}" class="btn btn-dark btn-sm btn-show" title="View : {{ $model->post_title }}">
    <i class="fa fa-eye"></i>
</a>


<a href="{{ $url_edit }}" class="btn btn-sm btn-info" title="Edit : {{ $model->post_title }}">
    <i class="fa fa-edit"></i>
</a>


<a href="{{ $url_delete }}" class="btn btn-sm btn-danger btn-delete" rel="{{ $model->id }}" rel1="delete-post"  title="Delete : {{ $model->post_title }}">
    <i class="fa fa-trash"></i>
</a>
