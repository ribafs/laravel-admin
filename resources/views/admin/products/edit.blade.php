@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('includes.sidebar')

            @role('super', 'manager')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-success">Edit Product #{{ $product->id }}</div>
                    <div class="card-body bg-light">
                        <a href="{{ url('/admin/products') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/products/' . $product->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.products.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
            @endrole
        </div>
    </div>
@endsection