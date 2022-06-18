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

        <x-jet-validation-errors class="mb-4" />
					<!--begin::Wrapper-->
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
        <form method="POST" action="{{ route('password.email') }}" class="form w-100" novalidate="novalidate" id="kt_password_reset_form">
            @csrf

            <!--begin::Heading-->
            <div class="text-center mb-10">
            	<!--begin::Title-->
            	<h1 class="text-dark mb-3">Forgot Password ?</h1>
            	<!--end::Title-->
            	<!--begin::Link-->
            	<div class="text-gray-400 fw-bold fs-4">Enter your email to reset your password.</div>
            	<!--end::Link-->
            </div>
            <!--begin::Heading-->
            <div class="fv-row mb-10">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                <x-jet-button class="btn btn-lg btn-primary fw-bolder me-4">
                    
                    <span class="indicator-label">{{ __('Email Password Reset Link') }}</span>
                    <span class="indicator-progress">Please wait... 
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </x-jet-button>
                <a href="{{route('login')}}" class="btn btn-lg btn-light-primary fw-bolder">Cancel</a>
            </div>
        </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
