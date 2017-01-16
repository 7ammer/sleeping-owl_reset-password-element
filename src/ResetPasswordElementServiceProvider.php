<?php namespace	Jai\Contact;
/**
 *
 * @author kora jai <kora.jayaram@gmail>
 */
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
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
		$this->registerContact();
		config([
			'config/contact.php',
		]);
	}

	private function registerContact()
	{
		$this->app->bind('contact',function($app){
			return new Contact($app);
		});
	}
}
