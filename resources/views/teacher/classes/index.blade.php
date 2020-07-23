@extends('layouts.teacherApp')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                @can('classes-create')
                    <a class="btn btn-success" href="{{ route('classes.create') }}"> Create New Class</a>
                @endcan
            </div>
        </div>

    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Address</th>
            <th>Teacher</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($classes as $class)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $class->cls_name }}</td>
                <td>{{ $class->cls_desc }}</td>
                <td>{{ $class->cls_address }}</td>
                <td>{{ $class->cls_teach_id }}</td>
                <td>
                    <form action="{{ route('classes.destroy',$class->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('classes.show',$class->id) }}">Show</a>
                        @can('classes-edit')
                            <a class="btn btn-primary" href="{{ route('classes.edit',$class->id) }}">Edit</a>
                        @endcan


                        @csrf
                        @method('DELETE')
                        @can('classes-delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


    {!! $classes->links() !!}


    <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection