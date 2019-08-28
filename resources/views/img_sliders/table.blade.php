<div class="table-responsive">
    <table class="table" id="imgSliders-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Img</th>
        <th>Description</th>
        <th>Show</th>
        <th>Id User</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($imgSliders as $imgSlider)
            <tr>
                <td>{!! $imgSlider->title !!}</td>
            <td><img src="{!! $imgSlider->img !!}" class="img-thumbnail" alt="" width="200"></td>
            <td>{!! substr($imgSlider->description,0,200)  !!}</td>
            <td>{!! $imgSlider->show !!}</td>
            <td>{!! $imgSlider->id_user !!}</td>
                <td>
                    {!! Form::open(['route' => ['imgSliders.destroy', $imgSlider->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('imgSliders.show', [$imgSlider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('imgSliders.edit', [$imgSlider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $imgSliders->links()}}
</div>
