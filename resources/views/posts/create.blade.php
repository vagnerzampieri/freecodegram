@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-8 offset-2">
        <div class="form-group row">
            <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
            <input id="caption" 
                   type="text"
                   class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}"
                   caption="caption"
                   value="{{ old('caption') }}"
                   autocomplete="caption" autofocus>

            @if ($errors->has('caption'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('caption') }}</strong>
                </span>
            @endif
        </div>
        <div class="row">
            <label for="image" class="col-md-4 col-form-label">Post Image</label>
            <input type="file" class="form-control-file" id="image" name="image">

            @if ($errors->has('image'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
@endsection
