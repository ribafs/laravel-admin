@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('includes.sidebarp')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-success">Client {{ $client->id }}</div>
                    <div class="card-body bg-light">

                        <a href="{{ url('/clientsp') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        @role('super', 'manager')
                        <a href="{{ url('/admin/clientsp/' . $client->id . '/edit') }}" title="Edit Client"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/clientsp' . '/' . $client->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Client" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        @endrole
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $client->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $client->name }} </td></tr><tr><th> Email </th><td> {{ $client->email }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
