<?php namespace	Jammer\ResetPasswordElement;

use Illuminate\Support\ServiceProvider;
use SleepingOwl\Admin\Facades\FormElement;

class ResetPasswordElementServiceProvider extends ServiceProvider {
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot()
	{
		$this->loadViewsFrom(realpath(__DIR__.'/../views'), 'ResetPasswordElement');
	}

	public function register()
	{
		FormElement::register([
			'resetPassword' => ResetPasswordElement::class,
		]);
	}
}
