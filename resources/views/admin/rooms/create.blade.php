@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.room.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.rooms.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.room.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="decription">{{ trans('cruds.room.fields.decription') }}</label>
                <textarea class="form-control {{ $errors->has('decription') ? 'is-invalid' : '' }}" name="decription" id="decription">{{ old('decription') }}</textarea>
                @if($errors->has('decription'))
                    <div class="invalid-feedback">
                        {{ $errors->first('decription') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.decription_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="capacity">{{ trans('cruds.room.fields.capacity') }}</label>
                <input class="form-control {{ $errors->has('capacity') ? 'is-invalid' : '' }}" type="number" name="capacity" id="capacity" value="{{ old('capacity', '') }}" step="1">
                @if($errors->has('capacity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('capacity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.capacity_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection