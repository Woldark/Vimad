@extends('Admin.layout.base')

@section('sidebar')
    <ul class="sidebar-menu">
        <li @if (Route::is('admin::home')) class="active" @endif>
            <a href="{{ route('admin::home') }}">
                <i class="fa fa-dashboard"></i> <span>پیشخوان</span>
            </a>
        </li>

        <li class="treeview
        @if (Route::is('admin::categories.index')) active @endif
        @if (Route::is('admin::category.create')) active @endif
                ">
            <a href="#"><i class="fa fa-book"></i> <span>دسته بندی ها</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin::categories.index') }}"><i class="fa fa-circle-o"></i>لیست دسته بندی ها</a>
                </li>
                <li>
                    <a href="{{ route('admin::category.create') }}"><i class="fa fa-circle-o"></i> دسته بندی جدید</a>
                </li>
            </ul>
        </li>

        <li class="treeview
        @if (Route::is('admin::fields.index')) active @endif
        @if (Route::is('admin::field.create')) active @endif
                ">
            <a href="#"><i class="fa fa-building"></i> <span>زمینه ها</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin::fields.index') }}"><i class="fa fa-circle-o"></i> لیست زمینه ها</a>
                </li>
                <li>
                    <a href="{{ route('admin::field.create') }}"><i class="fa fa-circle-o"></i> زمینه جدید</a>
                </li>
            </ul>
        </li>

        <li class="treeview
        @if (Route::is('admin::jobs.index')) active @endif
        @if (Route::is('admin::job.create')) active @endif
                ">
            <a href="#"><i class="fa fa-flag"></i> <span>شغل ها</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin::jobs.index') }}"><i class="fa fa-circle-o"></i> لیست شغل ها</a>
                </li>
                <li>
                    <a href="{{ route('admin::job.create') }}"><i class="fa fa-circle-o"></i> شغل جدید</a>
                </li>
            </ul>
        </li>

        <li class="treeview
        @if (Route::is('admin::tags.index')) active @endif
        @if (Route::is('admin::tag.create')) active @endif
                ">
            <a href="#"><i class="fa fa-user"></i> <span>تگ ها</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin::tags.index') }}"><i class="fa fa-circle-o"></i> لیست تگ ها</a>
                </li>
                <li>
                    <a href="{{ route('admin::tag.create') }}"><i class="fa fa-circle-o"></i> تگ جدید</a>
                </li>
            </ul>
        </li>

        <li class="treeview
        @if (Route::is('admin::tags.index')) active @endif
        @if (Route::is('admin::tag.create')) active @endif
                ">
            <a href="#"><i class="fa fa-user"></i> <span>اخبار</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin::tags.index') }}"><i class="fa fa-circle-o"></i> لیست اخبار</a>
                </li>
                <li>
                    <a href="{{ route('admin::tag.create') }}"><i class="fa fa-circle-o"></i> خبر جدید</a>
                </li>
            </ul>
        </li>

        <li class="treeview
        @if (Route::is('admin::tags.index')) active @endif
        @if (Route::is('admin::tag.create')) active @endif
                ">
            <a href="#"><i class="fa fa-user"></i> <span>مقالات</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin::tags.index') }}"><i class="fa fa-circle-o"></i> لیست مقالات</a>
                </li>
                <li>
                    <a href="{{ route('admin::tag.create') }}"><i class="fa fa-circle-o"></i> مقاله جدید</a>
                </li>
            </ul>
        </li>

        <li class="treeview
        @if (Route::is('admin::tags.index')) active @endif
        @if (Route::is('admin::tag.create')) active @endif
                ">
            <a href="#"><i class="fa fa-user"></i> <span>محتوا</span>
                <i class="fa fa-angle-left pull-left"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin::tag.create') }}"><i class="fa fa-circle-o"></i> ایجاد محتوا</a>
                </li>
            </ul>
        </li>


        <li class="treeview">
            <a href="#"><i class="fa fa-info-circle"></i> <span>وضعیت</span>
                <i class="fa fa-angle-left pull-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> سرور</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> دیتابیس</a></li>
            </ul>
        </li>
    </ul>
@endsection