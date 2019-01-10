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
                <form method="post" action="{{route('admin::content.upload')}}" enctype="multipart/form-data"
                      class="dropzone" id="dropzone">
                    {{ csrf_field() }}

                    {{--<input type="file" name="file" />--}}

                </form>

                <script type="text/javascript">
                    Dropzone.options.dropzone =
                        {
                            maxFilesize: 100,
                            renameFile: function (file) {
                                var dt = new Date();
                                var time = dt.getTime();
                                return time + file.name;
                            },
                            acceptedFiles: ".mp4",
                            addRemoveLinks: true,
                            timeout: 5000,
                            success: function (file, response) {
                                console.log(response);
                            },
                            error: function (file, response) {
                                return false;
                            }
                        };
                </script>
            </div>
        </div>
    </div>
@endsection