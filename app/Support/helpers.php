<?php

declare(strict_types=1);

if (! function_exists('csrf_field')) {
    /**
     * Generate a CSRF token form field.
     *
     * @return string
     */
    function csrf_field($name = '_token')
    {
		return '<input type="hidden" name="'. $name .'" value="' . csrf_token() . '">';
    }
}

if (! function_exists('csrf_token')) {
    /**
     * Get the CSRF token value.
     *
     * @return string
     */
    function csrf_token()
	{
		$container = \Hyperf\Utils\ApplicationContext::getContainer();
		$session = $container->get(\Hyperf\Contract\SessionInterface::class);

		if ($session->has('CSRF_TOKEN')) {
			return $session->get('CSRF_TOKEN');
		}

		$csrfToken = \Hyperf\Utils\Str::random(40);
		$session->set('CSRF_TOKEN', $csrfToken);

		return $csrfToken;
	}
}
