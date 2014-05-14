<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Clase para implementar Cross Site Request Forgery
 * https://gist.github.com/kemo/2624359
 */
class Helper_Security extends Kohana_Security {

    protected static $_logout_token_name = 'logout_token_key';

    public static $csrf_field = 'token';

    /**
     * Creates a validation object to check if the field specified
     * is a valid CSRF token inside of Requests POST / GET
     *
     * If no field is passed, Security::$csrf_field will be used as the name
     *
     * @param  Request $request
     * @param  string  $field (optional)
     * @return Validation
     */
    public static function csrf_validation(Request $request, $field = NULL)
    {
        if ($field === NULL)
        {
            $field = Security::$csrf_field;
        }

        // Decide if POST or GET should be checked...
        $data = ($request->method() === Request::POST) ? $request->post() : $request->query();

        // Return the newly created Validation object
        return Validation::factory($data)
            ->rule($field, 'not_empty')
            ->rule($field, 'Security::check');
    }

    /**
     * Returns the token required for logout (for GET-based CSRF prevention)
     *
     * @return string token
     */
    public static function logout_token()
    {
        $session = Session::instance();

        $token = $session->get(Security::$_logout_token_name);

        if ( ! $token)
        {
            $token = sha1(uniqid(NULL, TRUE));

            $session->set(Security::$_logout_token_name, $token);
        }

        return $token;
    }

}