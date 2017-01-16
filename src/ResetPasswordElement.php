<?php namespace WYD\CustomElements;

use SleepingOwl\Admin\Form\Element\Password;
use Validator;
use Schema;

class ResetPasswordElement extends Password
{

	public function render()
	{
		$params = $this->toArray();
		$params['value'] = '';

		$view = view('resetPasswordElement::resetPassword')
			->with($params)->render();

		return $view;
	}

}
