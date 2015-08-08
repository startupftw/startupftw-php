<?php defined('SYSPATH') or die('No direct script access.');

class View_LoginPage
{
    public $pagetitle = 'Startupftw - LoginPage';

    
    public $meta_keywords = '';
    public $meta_copyright = '';

    public $meta_description = '';
   
    public function __construct()
    {

    }

    public function base()
    {
            return URL::base(Request::$initial, TRUE);
    }

    
}