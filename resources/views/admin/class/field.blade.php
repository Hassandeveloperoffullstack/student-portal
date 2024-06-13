<div class="form-group py-2">

    {!! html()->label('Class')->for('name')->class('form-label') !!}
    {!! html()->text('name')->class('form-control')->value($classes->name ?? '')->placeholder('Enter Class')->required() !!}
</div>
{!! html()->submit('Save')->class('btn btn-primary mt-2 rounded-0 px-3') !!}
