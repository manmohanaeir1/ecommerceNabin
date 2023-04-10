<a href="{{ $url_show }}" class="btn btn-dark btn-sm btn-show" title="View : {{ $category->category_name }}">
    <i class="fa fa-eye"></i>
</a>


<a href="{{ $url_edit }}" class="btn btn-sm btn-info" title="Edit : {{ $category->category_name }}">
    <i class="fa fa-edit"></i>
</a>


<a href="{{ $url_delete }}" class="btn btn-sm btn-danger btn-delete" rel="{{ $category->id }}" rel1="delete-category"  title="Delete : {{ $category->category_name }}">
    <i class="fa fa-trash"></i>
</a>
