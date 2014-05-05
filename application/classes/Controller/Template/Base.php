<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template_Base extends Controller_Template_Resources
{

  public $template = 'template/base';

  /**
   * The before() method is called before your controller action.
   * In our template controller we override this method so that we can
   * set up default values. These variables are then available to our
   * controllers if they need to be modified.
   */
  public function before()
  {
    parent::before();

    // Chequeamos si está logueado excepto para el controlador Account y el método login.
    if (!Auth::instance()->logged_in('participant') & $this->request->controller() != 'Account')
    {
      // Guardo en sesion la url pedida
      $this->redirect('account/login');
    }

    if ($this->auto_render)
    {
      // keep the last url if it's not home/language
      if(Request::current()->action() != 'language') {
        Session::instance()->set('controller', Request::current()->uri());
      }

      if($this->is_account_login())
      {
        $this->template = View::factory('template/login');        
      }
      $this->template->loged = TRUE;
      
      // Initialize empty values
      $this->template->title   = '';
      $this->template->content = '';
      
      $this->template->styles = array();
      $this->template->scripts = array(); 
      // Load $sidebar into the template as a view
      $this->template->menu = View::factory('shared/menu');
      $this->template->footer = View::factory('shared/footer');
      $this->template->error_messages = View::factory('shared/errors');
}
  }
   
  /**
   * The after() method is called after your controller action.
   * In our template controller we override this method so that we can
   * make any last minute modifications to the template before anything
   * is rendered.
   */
  public function after()
  {
    if ($this->auto_render)
    {
      if($this->is_account_login())
      {
        $styles = array(
          URL::base('http').'/assets/css/bootstrap.css' => 'all',
          URL::base('http').'/assets/css/signin.css' => 'all',
        );
      } else
      {
        $styles = array(
          URL::base('http').'/assets/css/bootstrap.css' => 'all',
          URL::base('http').'/assets/css/navbar-fixed-top.css' => 'all',
          URL::base('http').'/assets/css/third-level-menu.css' => 'all',
          'http://harvesthq.github.io/chosen/chosen.css' => 'all',
        );
      }

      $scripts = array(
        // 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js',
        URL::base('http').'/assets/js/bootstrap.min.js',
        'http://harvesthq.github.io/chosen/chosen.jquery.js'
      );
  
      $this->template->styles = array_merge( $this->template->styles, $styles );
      $this->template->scripts = array_merge( $this->template->scripts, $scripts );
    }
    parent::after();
  }

  public function is_account_login()
  {
    if($this->request->controller() == "Account" && $this->request->action() == 'login')
    {
      return TRUE;
    }
    return FALSE;
  }
}