<div class='form-group
    {{$header_group_class}}
    {{ $errors->first($name) ? "has-error" : "" }}'
    id='form-group-{{$name}}'
    style="{{ $formInput['style']}}">
    <label class='control-label col-sm-2'>{{$label}} {!!$required ? "<span class='text-danger' title='".cbTrans('this_field_is_required')."'>*</span>":"" !!}</label>

    <div class="{{$col_width?:'col-sm-10'}}">
        <input type='text' title="{{$label}}"
               {{$required}} {{$readonly}} {!!$placeholder!!} {{$disabled}} {{ $validation['max'] ? "maxlength=".$validation['max'] : "" }} class='form-control'
               name="{{$name}}" id="{{$name}}" value='{{$value}}'/>

        {!! underField($formInput['help'], $errors->first($name)) !!}
    </div>
</div>