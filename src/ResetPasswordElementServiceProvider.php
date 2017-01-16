<?php namespace	Jammer\ResetPasswordElement;

use Illuminate\Support\ServiceProvider;

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
		AdminFormElement::register([
			'resetPassword' => ResetPasswordElement::class,
		]);
	}
}
