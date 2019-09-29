@extends('layouts.admin')
@section('content')
<h6 class="c-grey-900">
    {{ trans('global.show') }} {{ trans('cruds.role.title') }}
</h6>
<div class="mT-30">
    <div class="mb-2">
        <table class="table table-bordered table-striped">
            <tbody>
            <tr>
                <th>
                    {{ trans('cruds.role.fields.id') }}
                </th>
                <td>
                    {{ $role->id }}
                </td>
            </tr>
            <tr>
                <th>
                    {{ trans('cruds.role.fields.title') }}
                </th>
                <td>
                    {{ $role->title }}
                </td>
            </tr>
            <tr>
                <th>
                    Permissions
                </th>
                <td>
                    @foreach($role->permissions as $id => $permissions)
                        <span class="label label-info label-many">{{ $permissions->title }}</span>
                    @endforeach
                </td>
            </tr>
            </tbody>
        </table>
        <a style="margin-top:20px;" class="btn btn-primary" href="{{ url()->previous() }}">
            {{ trans('global.back_to_list') }}
        </a>
    </div>
</div>
@endsection
