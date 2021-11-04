{{--

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
--}}

<x-guest-layout>

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ============================ Signup Wrap ================================== -->
    <section>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
                    <x-jet-validation-errors class="mb-4" />
                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="crs_log_wrap">
                            <div class="crs_log__thumb">
                                {{--<img src="https://via.placeholder.com/1920x1200" class="img-fluid" alt="" />--}}
                            </div>
                            <div class="crs_log__caption">
                                <div class="rcs_log_123">
                                    <div class="rcs_ico"><i class="fas fa-user"></i></div>
                                </div>

                                <div class="rcs_log_124">
                                    <div class="Lpo09"><h4>Register Your Account</h4></div> {{--
                                    <div class="form-group row mb-0">
                                                                                 <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                                                   <div class="form-group">
                                                                                        <label>Name</label>
                                                                                        <input type="name" class="form-control" placeholder="Name" :value="name" required autocomplete="name"/>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Email</label>
                                                                                <input type="email" class="form-control" name="name" placeholder="@gmail" :value="old('email')" required/>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Password</label>
                                                                                <input type="password" class="form-control" name="password" placeholder="password" required autocomplete="new-password"/>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Confirm Password</label>
                                                                                <input type="password" class="form-control" name="password_confirmation " placeholder="confirm password" required autocomplete="new-password"/>
                                                                            </div> --}}

                                    <div class="mt-4">
                                        <x-jet-label for="name" value="{{ __('Name') }}" />
                                        <x-jet-input id="name" class="form-control" placeholder="Name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    </div>
                                    <div class="mt-4">
                                        <x-jet-label for="email" value="{{ __('Email') }}" />
                                        <x-jet-input id="email" class="form-control" placeholder="@gmail.com" type="email" name="email" :value="old('email')" required />
                                    </div>

                                    <div class="mt-4">
                                        <x-jet-label for="password" value="{{ __('Password') }}" />
                                        <x-jet-input id="password" class="form-control" placeholder="Password" type="password" name="password" required autocomplete="new-password" />
                                    </div>

                                    <div class="mt-4">
                                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                        <x-jet-input id="password_confirmation" class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation" required autocomplete="new-password" />
                                    </div>

                                    {{-- <div class="form-group">
                                         <button type="button" class="btn full-width btn-md theme-bg text-white">Sign Up</button>
                                     </div> --}}
                                    <x-jet-button class="btn full-width btn-md theme-bg text-white">
                                        {{ __('Register Now') }}
                                    </x-jet-button>
                                </div>
                                {{-- <div class="rcs_log_125">
                                     <span>Or SignUp with Social Info</span>
                                 </div>
                                 <div class="rcs_log_126">
                                     <ul class="social_log_45 row">
                                         <li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-facebook text-info"></i>Facebook</a></li>
                                         <li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-google text-danger"></i>Google</a></li>
                                         <li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-twitter theme-cl"></i>Twitter</a></li>
                                     </ul>
                                 </div> --}}
                            </div>
                            <div class="crs_log__footer d-flex justify-content-between">
                                <div class="fhg_45"><p class="musrt">Already have account? <a href="{{route('login')}}" class="theme-cl">Login</a></p></div>
                                {{--   <div class="fhg_45"><p class="musrt"><a href="forgot.html" class="text-danger">Forgot Password?</a></p></div>
                             --}}  </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Signup Wrap ================================== -->
</x-guest-layout>
