<div class="table-responsive">
    <table class="table" id="movieCategories-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($movieCategories as $movieCategory)
            <tr>
                <td>{!! $movieCategory->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['movieCategories.destroy', $movieCategory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('movieCategories.show', [$movieCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('movieCategories.edit', [$movieCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
