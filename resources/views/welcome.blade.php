@extends('layouts.template')

@section('content')

@foreach ($proyectos as $proyecto)
@foreach ($proyectos as $proyecto)
<tr>
    <td>{{ ++$i }}</td>
    
    <td>{{ $proyecto->nombre }}</td>
    <td>{{ $proyecto->imagen }}</td>
    <td>{{ $proyecto->descripción }}</td>
    <td>{{ $proyecto->url }}</td>

    <td>
        <form action="{{ route('proyectos.destroy',$proyecto->id) }}" method="POST">
            <a class="btn btn-sm btn-primary " href="{{ route('proyectos.show',$proyecto->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
            <a class="btn btn-sm btn-success" href="{{ route('proyectos.edit',$proyecto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
        </form>
    </td>
</tr>
@endforeach
@endforeach
@endsection
