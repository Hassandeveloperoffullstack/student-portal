{{-- <section class="text-center">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    
</section> --}}

<div class="container mx-auto">
    <div class="row">

        <div class=" col-12    px-4">
            <h2 class="fw-bold text-white"> Profile</h2>
            <div class="mb-3" style="font-size: 14px; ">
                <a href="{{route('dashboard')}}" class="text-secondary text-decoration-none">Dashboard</a>
                <span class="text-secondary"> > </span>
                <a href="{{route('profile.edit')}}" class="text-secondary text-decoration-none">Profile</a>
            </div>
        </div>

      

        <div class=" col-md-4  mb-4  px-4">
            <div class="bg-white p-3 p-md-4 rounded shadow-sm">
                
                <h5 class="mb-3 fw-bold">Profile</h5>
                <img src="{{ asset('storage') }}/{{ $student->image }}" class="rounded-circle align-items-center w-100" >
                <br>
                <form method="POST" action="{{route('updateUserImage',Auth::user()->student_id)}}" enctype="multipart/form-data">
                    @csrf
                    <label class="form-label mt-2 ">NEW Profile</label>
                    <input required name="image" type="file" accept=".jpg, .jpeg, .png, .webp" class="form-control shadow-none mb-4">
                    <button class="btn btn-primary  btn-sm " type="submit">Save Changes</button>
                </form>
            </div>
        </div>

        <div class=" col-md-8 mb-4  px-4">
            <div class="bg-white p-3 p-md-4 rounded shadow-sm">
                <h5 class="mb-3 fw-bold">Change Password</h5>

                        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('put')
                    
                            <div class="col-md-11 " >
                                <x-input-label for="update_password_current_password" :value="__('Current Password')" class="my-2"  />
                                <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" placeholder="Current Password" class=" form-control mx-auto" />
                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                            </div>
                    
                            <div class="col-md-11 ">
                                <x-input-label for="update_password_password" :value="__('New Password')" class="my-2"/>
                                <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" placeholder="New Password" class=" form-control" />
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                            </div>
                    
                            <div class="col-md-11 ">
                                <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" class="my-2"/>
                                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" placeholder="Confirm Password" class=" form-control" />
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                            </div>
                    
                            <div class="flex items-center gap-4">
                                <button class="btn btn-primary mt-3">
                                    {{ __('Save') }}
                    
                                </button>
                    
                    
                                @if (session('status') === 'password-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600"
                                    >{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
            </div>
        </div>

    </div>
</div>
