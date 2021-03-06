@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.collegeClass.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.college-classes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.collegeClass.fields.id') }}
                        </th>
                        <td>
                            {{ $collegeClass->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.collegeClass.fields.name') }}
                        </th>
                        <td>
                            {{ $collegeClass->name }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.college-classes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#class_lessons" role="tab" data-toggle="tab">
                {{ trans('cruds.lesson.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#class_users" role="tab" data-toggle="tab">
                {{ trans('cruds.user.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="class_lessons">
            @includeIf('admin.collegeClasses.relationships.classLessons', ['lessons' => $collegeClass->classLessons])
        </div>
        <div class="tab-pane" role="tabpanel" id="class_users">
            @includeIf('admin.collegeClasses.relationships.classUsers', ['users' => $collegeClass->classUsers])
        </div>
    </div>
</div>

@endsection