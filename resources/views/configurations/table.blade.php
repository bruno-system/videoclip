<div class="table-responsive">
    <table class="table" id="configurations-table">
        <thead>
            <tr>
                <th>Direccion</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Horarios</th>
        <th>Facebook</th>
        <th>Instagram</th>
        <th>Social</th>
        <th>Mensaje</th>
        <th>Popup</th>
        <th>Paginatea</th>
        <th>Paginateb</th>
        <th>Style</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($configurations as $configuration)
            <tr>
                <td>{!! $configuration->direccion !!}</td>
            <td>{!! $configuration->email !!}</td>
            <td>{!! $configuration->phone !!}</td>
            <td>{!! $configuration->horarios !!}</td>
            <td>{!! $configuration->facebook !!}</td>
            <td>{!! $configuration->instagram !!}</td>
            <td>{!! $configuration->social !!}</td>
            <td>{!! $configuration->mensaje !!}</td>
            <td>{!! $configuration->popup !!}</td>
            <td>{!! $configuration->paginateA !!}</td>
            <td>{!! $configuration->paginateB !!}</td>
            <td>{!! $configuration->style !!}</td>
                <td>
                    {!! Form::open(['route' => ['configurations.destroy', $configuration->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('configurations.show', [$configuration->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('configurations.edit', [$configuration->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
