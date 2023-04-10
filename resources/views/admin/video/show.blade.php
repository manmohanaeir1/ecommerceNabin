<table class="table table-hover">
    <tr>
        <th>Post Image</th>
        <td>
            @if(!empty($model->image))
                <img src="{{ asset('uploads/posts/'.$model->image) }}" alt="" width="300">
            @else
                <img src="{{ asset('default/noimage.jpg') }}" width="300">
            @endif
        </td>
    </tr>



     <tr>
         <th>Post Title</th>
         <td>{{ $model->post_title }}</td>
     </tr>

    <tr>
        <th>Post Slug</th>
        <td>{{ $model->slug }}</td>
    </tr>

    <tr>
        <th>Under Category</th>
        <td>
            {{ $model->category->category_name ?? '' }}
        </td>
    </tr>

    <tr>
        <th>Status</th>
        <td>
            @if($model->status == "Published")
                <span class="badge badge-success">Active</span>
            @else
                <span class="badge badge-danger">In Active</span>
            @endif
        </td>
    </tr>



    <tr>
        <th>Created At</th>
        <td>
            {{ toFormattedNepaliDate($model->created_at) }}
        </td>
    </tr>
</table>
