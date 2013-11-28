<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template_Base extends Controller_Template
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

    if ($this->auto_render)
    {
      // keep the last url if it's not home/language
      if(Request::current()->action() != 'language') {
        Session::instance()->set('controller', Request::current()->uri());
      }
      
      if (Auth::instance()->logged_in('participant'))
      {
        $this->template->loged = TRUE;
      }
      
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
      $styles = array(
        URL::base('http').'/assets/css/bootstrap.css' => 'all',
        URL::base('http').'/assets/css/navbar-fixed-top.css' => 'all',
        URL::base('http').'/assets/css/third-level-menu.css' => 'all',
      );

      $scripts = array(
        '//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js',
        URL::base('http').'/assets/js/bootstrap.min.js',
      );
  
      $this->template->styles = array_merge( $this->template->styles, $styles );
      $this->template->scripts = array_merge( $this->template->scripts, $scripts );
    }
    parent::after();
  }
}