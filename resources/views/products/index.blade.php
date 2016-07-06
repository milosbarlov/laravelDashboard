@extends('layouts.app')

@section('content')
    <h2 style="display:inline-block;position:relative;top:-15px;">All products</h2>
    <a href="{{ url('/products/create') }}" class="btn btn-lg btn-primary btn-block pull-right" style="width:120px;"> Add product</a>

    @if(count($models) == 0)
        <h2>There is no products. Please add product</h2>
     @else
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Description</th>
                        <th>User</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($models as $model)
                        <tr class="odd">
                            <td>{{ $model->id }}</td>
                            <td>{{ $model->description }}</td>
                            <td>{{ $model->user_id }}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!--End Advanced Tables -->
    @endif
@endsection