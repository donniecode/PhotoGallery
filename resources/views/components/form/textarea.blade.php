<div class="form-group">
    <label for="">
        {{ Form::label($name) }}
        {{ Form::textarea($name, $value, $attributes) }}
    </label>
</div>