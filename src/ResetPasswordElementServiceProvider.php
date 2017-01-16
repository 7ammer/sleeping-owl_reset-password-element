<?php namespace	Jai\Contact;
/**
 *
 * @author kora jai <kora.jayaram@gmail>
 */
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Jammer\ResetPasswordElement\ResetPasswordElement;

class ResetPasswordElementServiceProvider extends ServiceProvider {
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot()
	{
		$this->loadViewsFrom(realpath(__DIR__.'/../views'), 'resetPasswordElement');
	}

	public function register()
	{
		AdminFormElement::register([
			'resetPassword' => ResetPasswordElement::class,
		]);
	}
}
