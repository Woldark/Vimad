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
            اسناد
            <br>
            <small>لیست اسناد</small>
        </h1>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">لیست اسناد</h3>
                </div>
                <div class="box-body">
                    <ul class="todo-list">
                        @foreach($documents as $document)
                            <li>
                                <span class="text" style="margin-right: 10px">{{ $document->name }}</span>
                                <div class="tools">
                                    <a href="{{ route('admin::document.edit', $document->id) }}" class="link">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('admin::content.delete', $document->id) }}" class="link">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="box-footer clearfix no-border">
                    <a class="btn btn-success pull-right" href="{{ route('admin::document.create') }}">سند جدید</a>
                </div>
            </div>
        </div>
    </div>
@endsection