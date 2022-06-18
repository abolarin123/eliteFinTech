<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!-- <x-jet-authentication-card-logo /> -->
        </x-slot>

        

<!--begin::Wrapper-->
<div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
        <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" method="POST" action="{{ route('register') }}">
            <!--begin::Heading-->
			<div class="mb-10 text-center">
				<!--begin::Title-->
				<h1 class="text-dark mb-3">Create an Account</h1>
				<!--end::Title-->
				<!--begin::Link-->
				<div class="text-gray-400 fw-bold fs-4">Already have an account? 
				<a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in here</a></div>
				<!--end::Link-->
			</div>
			<!--end::Heading-->
            <x-jet-validation-errors class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row p-5 mb-10" />
			<!--begin::Action-->
			<button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
			<img alt="Logo" src="https://preview.keenthemes.com/metronic8/demo4/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Sign in with Google</button>
			<!--end::Action-->
			<!--begin::Separator-->
			<div class="d-flex align-items-center mb-10">
				<div class="border-bottom border-gray-300 mw-50 w-100"></div>
				<span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
				<div class="border-bottom border-gray-300 mw-50 w-100"></div>
			</div>
			<!--end::Separator-->
            @csrf

            
            <div class="fv-row mb-7">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="fv-row mb-7">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mb-10 fv-row" data-kt-password-meter="true">
                <!--begin::Wrapper-->
				<div class="mb-1">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                
                <!--begin::Input wrapper-->
					<div class="position-relative mb-3">
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
						<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
							<i class="bi bi-eye-slash fs-2"></i>
							<i class="bi bi-eye fs-2 d-none"></i>
						</span>
					</div>
					<!--end::Input wrapper-->
					<!--begin::Meter-->
					<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
						<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
						<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
						<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
						<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
					</div>
					<!--end::Meter-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Hint-->
				<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
				<!--end::Hint-->
            </div>

            <div class="fv-row mb-5">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <!--begin::Input group-->

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="fv-row mb-10">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" value="1"/>

                            <span class="form-check-label fw-bold text-gray-700 fs-6">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="ms-1 link-primary">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="ms-1 link-primary">'.__('Privacy Policy').'</a>',
                                ]) !!}
                                </span>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <x-jet-button class="ml-4" id="kt_sign_up_submit">
                    <span class="indicator-label">{{ __('Register') }}</span>
		            <span class="indicator-progress">Please wait... 
		            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </x-jet-button>
        </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
