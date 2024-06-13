<div class="row mt-3 mb-1">
    <div class="form-group col-md-6">
        {!! html()->label('Name')->for('name')->class('form-label') !!}
        {!! html()->text('name')->class('form-control')->placeholder('Enter Name')->required()->value($students->user?->name ?? '') !!}

    </div>
    <div class="form-group col-md-6">
        {!! html()->label('Email')->for('email')->class('form-label') !!}
        {!! html()->email('email')->class('form-control')->placeholder('Enter Email')->required()->value($students->user?->email ?? '') !!}
        @error('email')
            <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="row mt-3 mb-1">
    <div class="form-group col-md-6">
        {!! html()->label('Phone')->for('phone')->class('form-label') !!}
        {!! html()->text('phone')->class('form-control')->required()->placeholder('Enter Phone') !!}

    </div>
    <div class="form-group col-md-6">
        {!! html()->label('CNIC')->for('cnic')->class('form-label') !!}
        {!! html()->text('cnic')->class('form-control')->required()->placeholder('Enter CNIC') !!}
        @error('cnic')
            <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="row mt-3 mb-1">
    <div class="form-group col-md-6">
        {!! html()->label('City')->for('city')->class('form-label') !!}
        {!! html()->text('city')->class('form-control')->placeholder('Enter City') !!}

    </div>
    <div class="form-group col-md-6">
        {!! html()->label('Gender')->for('gender')->class('form-label') !!}
        {!! html()->text('gender')->class('form-control')->required()->placeholder('Enter Gender') !!}

    </div>
</div>

<div class="row mt-3 mb-1">
    <div class="form-group col-md-6">
        {!! html()->label('Address')->for('address')->class('form-label') !!}
        {!! html()->text('address')->class('form-control')->required()->placeholder('Enter Address') !!}

    </div>
    <div class="form-group col-md-6">
        {!! html()->label('Zip Code')->for('zipcode')->class('form-label') !!}
        {!! html()->text('zipcode')->class('form-control')->required()->placeholder('Enter Zip Code') !!}

    </div>
</div>

<div class="row mt-3 mb-1">
    <div class="form-group col-md-6">
        {!! html()->label('Father\'s Name')->for('f_name')->class('form-label') !!}
        {!! html()->text('f_name')->class('form-control')->required()->placeholder('Enter Father\'s Name') !!}

    </div>
    <div class="form-group col-md-6">
        {!! html()->label('Father\'s Phone')->for('f_phone')->class('form-label') !!}
        {!! html()->text('f_phone')->class('form-control')->required()->placeholder('Enter Father\'s Phone') !!}

    </div>
</div>

<div class="row mt-3 mb-1">
    <div class="form-group col-md-6">
        {!! html()->label('Father\'s CNIC')->for('f_cnic')->class('form-label') !!}
        {!! html()->text('f_cnic')->class('form-control')->required()->placeholder('Enter Father\'s CNIC') !!}
        @error('f_cnic')
            <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group col-md-6">
        {!! html()->label('Password')->for('password')->class('form-label') !!}
        {!! html()->password('password')->class('form-control')->placeholder('Enter Password') !!}

    </div>
</div>

<div class="row mt-3 mb-1">
    <div class="form-group col-md-12">
        {!! html()->label('Image')->for('image')->class('form-label') !!}
        {!! html()->file('image')->class('form-control') !!}

    </div>
</div>

<div class="row mt-3 mb-1">
    <div class="form-group col-md-6">
        {!! html()->label('Department')->for('dropdownd')->class('form-label') !!}
        {!! html()->select('department_id', \App\Services\DropdownService::department_dropdown())->class('form-control')->required()->placeholder('Select Department') !!}
    </div>
    <div class="form-group col-md-6">
        {!! html()->label('Class')->for('dropdownc')->class('form-label') !!}
        {!! html()->select('class_id', \App\Services\DropdownService::class_dropdown())->class('form-control')->required()->placeholder('Select Class') !!}
    </div>
</div>
<div class="row mt-3 mb-1">
    <div class="form-group col-md-6">
        {!! html()->label('Session')->for('dropdowns')->class('form-label') !!}
        {!! html()->select('session_id', \App\Services\DropdownService::session_dropdown())->class('form-control')->required()->placeholder('Select Session') !!}
    </div>
    
</div>




