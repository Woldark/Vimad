@extends('Admin.layout.admin')

@section('style')
    <style>
        .link {
            text-decoration: none !important;
            color: #00a65a;
            margin-left: 5px;
        }

        .link:hover {
            text-decoration: none !important;
            color: #00a65a;
        }
    </style>
@endsection

@section('header')
    <section class="content-header">
        <h1>
            زمینه ها
            <br>
            <small>لیست زمینه ها</small>
        </h1>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">لیست زمینه ها</h3>
                </div>
                <div class="box-body">
                    <ul class="todo-list">
                        @foreach($fields as $field)
                            <li>
                                <span class="text" style="margin-right: 10px">{{ $field->name }}</span>
                                <div class="tools">
                                    <a href="{{ route('admin::field.edit', $field->id) }}" class="link">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('admin::field.delete', $field->id) }}" class="link">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="box-footer clearfix no-border">
                    <a class="btn btn-success pull-right" href="{{ route('admin::field.create') }}">زمینه جدید</a>
                </div>
            </div>
        </div>
    </div>
@endsection