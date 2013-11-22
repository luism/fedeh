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
  public function before() {
    parent::before();
    if ($this->auto_render) {
      // keep the last url if it's not home/language
      if(Request::current()->action() != 'language') {
        Session::instance()->set('controller', Request::current()->uri());
      }

      if (Auth::instance()->logged_in('participant'))
      {
        $this->template->loged = TRUE;
      }
      // Initialize empty values
      $this->template->title   = 'Fundacion FEDEH';
      $this->template->content = '';
      $this->template->styles = array();
      $this->template->scripts = array();
    }
  }

  /**
  * The after() method is called after your controller action.
  * In our template controller we override this method so that we can
  * make any last minute modifications to the template before anything
  * is rendered.
  */
  public function after() {
    if ($this->auto_render) {
      $styles = array(
        'assets/css/website.css' => 'screen, projection',
      );
      $scripts = array(
        'http://code.jquery.com/jquery.min.js',
      );
      $this->template->styles = array_merge( $this->template->styles, $styles );
      $this->template->scripts = array_merge( $this->template->scripts, $scripts );
    }
    parent::after();
  }
}