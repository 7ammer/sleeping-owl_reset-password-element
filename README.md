#Installation

#####composer.json
```
"repositories": [
  {
    "type": "vcs",
	"url": "git@github.com:7ammer/sleeping-owl_reset-password-element.git"
  }
],
"require": {
  "jammer/sleeping-owl_reset-password-element": "dev-master"
}
```

#####app/Admin/boostrap.php
```
AdminFormElement::register([
	'resetPassword' => \WYD\CustomElements\ResetPasswordElement::class,
]);

```

##Example Useage
See sleepingOwls 'password' form element for more methods.

```
AdminFormElement::resetPassword('password', 'Password')
	->required()->unique()
	->hashWithBcrypt()
	->setVisibilityCondition(function($model) {
		return auth()->user()->hasRole("super-admin");
	});
```
