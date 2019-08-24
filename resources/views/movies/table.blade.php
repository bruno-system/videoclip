<div class="table-responsive">
    <table class="table" id="movies-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Img</th>
        <th>Video</th>
        <th>Description</th>
        <th>Show</th>
        <th>Id Category</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
            <tr>
                <td>{!! $movie->title !!}</td>
            <td>{!! $movie->img !!}</td>
            <td>{!! $movie->video !!}</td>
            <td>{!! $movie->description !!}</td>
            <td>{!! $movie->show !!}</td>
            <td>{!! $movie->id_category !!}</td>
                <td>
                    {!! Form::open(['route' => ['movies.destroy', $movie->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('movies.show', [$movie->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('movies.edit', [$movie->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
