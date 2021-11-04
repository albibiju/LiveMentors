{{--
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
--}}

<x-guest-layout>
    <!-- ============================ Login Wrap ================================== -->
    <section>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
                    <x-jet-validation-errors class="mb-4" />
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="crs_log_wrap">
                            <div class="crs_log__thumb">
                                {{--<img src="https://via.placeholder.com/1920x1200" class="img-fluid" alt="" />--}}
                            </div>
                            <div class="crs_log__caption">
                                <div class="rcs_log_123">
                                    <div class="rcs_ico"><i class="fas fa-lock"></i></div>
                                </div>

                                <div class="rcs_log_124">
                                    <div class="Lpo09"><h4>Login Your Account</h4></div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Type your email address" :value="old(email)" required autofocus />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="*******" required autocomplete="current-password" />
                                    </div>
                                    {{---
                                    <div class="form-group row">
                                        <div class="col-xl-4 col-lg-4 col-4">
                                            <input id="ADMIN" class="checkbox-custom" name="ADMIN" type="checkbox">
                                            <label for="ADMIN" class="checkbox-custom-label">Admin</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-4">
                                            <input id="USER" class="checkbox-custom" name="USER" type="checkbox" checked>
                                            <label for="USER" class="checkbox-custom-label">Student</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-4">
                                            <input id="CONSULTANT" class="checkbox-custom" name="CONSULTANT" type="checkbox">
                                            <label for="CONSULTANT" class="checkbox-custom-label">Consultant</label>
                                        </div>
                                    </div> --}}

                                    <x-jet-button class="btn full-width btn-md theme-bg text-white">
                                        {{ __('Log in') }}
                                    </x-jet-button>
                                </div>

                            </div>
                            <div class="crs_log__footer d-flex justify-content-between">
                                <div class="fhg_45"><p class="musrt">Don't have account? <a href="{{route('register')}}" class="theme-cl">SignUp</a></p></div>
                                <div class="fhg_45"><p class="musrt"><a href="{{route('password.request')}}" class="text-danger">Forgot Password?</a></p></div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Login Wrap ================================== -->
</x-guest-layout>
