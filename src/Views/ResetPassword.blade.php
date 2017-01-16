<?php $rand_id = str_random(8); ?>

<!--'"element-reset-password-' . $rand_id . '"'-->
<div class='form-group form-element-password {{ $errors->has($name) ? 'has-error' : '' }}' id=<? echo '"reset-password-' . $rand_id . '"'; ?>>
	<label for="{{ $name }}" class="control-label">
		{{ $label }}

		@if($required)
			<span class="form-element-required">*</span>
		@endif
	</label>

	<div class="input-group">
		<span class="reset-password__btn-group">
			<button class="reset-password__btn btn btn-primary" type="button">Reset Password</button>
		</span>
		<input type="password"
		       data-name="{{ $name }}"
		       id="{{ $name }}"
		       @if($readonly) readonly @endif
		       name="{{ $name }}"
		       autocomplete='new-password'
		       class="reset-password__input hidden form-control">
	</div>

	@include(AdminTemplate::getViewPath('form.element.partials.helptext'))
	@include(AdminTemplate::getViewPath('form.element.partials.errors'))
</div>

<script>

	var resetPasswordElement = {
		hidePassword: function(el){
			el.find('.reset-password__btn-group').removeClass('input-group-btn');
			el.find('.reset-password__btn').addClass('btn-primary').removeClass('btn-danger').text('Reset Password');
			el.find('.reset-password__input').addClass('hidden');
		},

		showPassword: function(el){
			el.find('.reset-password__btn-group').addClass('input-group-btn');
			el.find('.reset-password__btn').removeClass('btn-primary').addClass('btn-danger').text('Cancel');
			el.find('.reset-password__input').removeClass('hidden');
		}
	};

	$(<? echo '"#reset-password-' . $rand_id . '"'; ?>).each(function(){
		var x = false, that = $(this);
		$(this).find('.reset-password__btn').on('click', function(){
			if (!x){
				resetPasswordElement.showPassword(that);
				x = true;
			}
			else {
				resetPasswordElement.hidePassword(that);
				x = false;
			}
		});
	});

</script>
