<?php namespace Jammer\ResetPasswordElement;

use SleepingOwl\Admin\Form\Element\Password;
use Validator;
use Schema;

class ResetPasswordElement extends Password
{

	public function render()
	{
		$params = $this->toArray();
		$params['value'] = '';

		$view = view('ResetPasswordElement::ResetPassword')
			->with($params)->render();

		return $view;
	}

}
