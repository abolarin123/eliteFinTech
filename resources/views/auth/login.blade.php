<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!-- <x-jet-authentication-card-logo /> -->
        </x-slot>

        

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
    <!--begin::Wrapper-->
    <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
        <form method="POST" action="{{ route('login') }}" class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="/">
            @csrf

            <!--begin::Heading-->
            <div class="text-center mb-10">
            	<!--begin::Title-->
            	<h1 class="text-dark mb-3">Sign In to {{ config('app.name', 'EliteFinTech') }}</h1>
            	<!--end::Title-->
            	<!--begin::Link-->
            	<div class="text-gray-400 fw-bold fs-4">New Here? 
            	<a href="{{route('register')}}" class="link-primary fw-bolder">Create an Account</a></div>
            	<!--end::Link-->
            </div>
            <!--begin::Heading-->
            <x-jet-validation-errors class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row p-5 mb-10" />
            <div class="fv-row mb-10">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="fv-row mb-10">
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack mb-2">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <!--begin::Link-->
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">{{ __('Forgot your password?') }}</a>
                @endif
                <!--end::Link-->
                </div>
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="" />
            </div>

            <div class="text-center">
                <x-jet-button class="btn btn-lg btn-primary w-100 mb-5" id="kt_sign_in_submit">
                    {{ __('Log in') }}
                </x-jet-button>
                <!--begin::Separator-->
				<div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
				<!--end::Separator-->
				<!--begin::Google link-->
				<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
				<img alt="Logo" src="https://preview.keenthemes.com/metronic8/demo4/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continue with Google</a>
				<!--end::Google link-->
				<!--begin::Google link-->
				<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
				<img alt="Logo" src="https://preview.keenthemes.com/metronic8/demo4/assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continue with Facebook</a>
				<!--end::Google link-->
            </div>
        </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
