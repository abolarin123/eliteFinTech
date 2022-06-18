<!--begin::Actions-->
<div class="text-center">
	<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-lg btn-primary transition']) }}>
    {{ $slot }}
	</button>
</div>
<!--end::Actions-->