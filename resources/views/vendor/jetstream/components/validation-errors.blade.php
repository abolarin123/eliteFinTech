@if ($errors->any())
    <div {{ $attributes }}>
        <!--begin::Icon-->
        <span class="svg-icon svg-icon-2hx svg-icon-primary me-4 mb-5 mb-sm-0"><i class="las la-exclamation-circle fs-2x"></i>
</span>
        <!--end::Icon-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column pe-0 pe-sm-10">
            <!--begin::Title-->
            <h4 class="fw-bold">{{ __('Whoops! Something went wrong.') }}</h4>
            <!--end::Title-->
            <!--begin::Content-->
            <ul class="">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <!--end::Content-->
        </div>        
    </div>
@endif