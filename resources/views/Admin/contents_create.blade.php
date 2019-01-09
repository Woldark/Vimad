@extends('Admin.layout.admin')

@section('header')
    <section class="content-header">
        <h1>
            محتوا ها
            <br>
            <small>محتوای جدید</small>
        </h1>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">مشخصات محتوا</h3>
                </div>
                <div class="box-body">
                    <form method="post" action="{{ route('admin::content.create') }}">
                        {{ csrf_field() }}
                        <div class="col-md-4 col-md-offset-4">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" style="text-align: center"
                                       class="form-control" placeholder="نام"
                                       name="name" tabindex="1" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="submit" tabindex="2" name="publish"
                                       class="btn center-block btn-success" value="ذخیره">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{route('admin::content.dropzone')}}" class="dropzone" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection