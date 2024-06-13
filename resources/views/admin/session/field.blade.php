@php
$session = $session ?? collect();
@endphp
<div class="form-group py-2">
    {!! html()->label('Class Name')->for('name')->class('form-label ') !!}
    {!! html()->text('name')->class('form-control')->placeholder('Enter Class')->value(optional($session->first())->name)->required() !!}
    @error('name')
    <p class="invalid-feedback">{{$message}}</p>
@enderror
</div>
{!! html()->submit('Save')->class('btn btn-primary mt-2 rounded-0 px-3') !!}