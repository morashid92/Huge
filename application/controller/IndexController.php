<?php

class IndexController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Handles what happens when user moves to URL/index/index - or - as this is the default controller, also
     * when user moves to /index or enter your application at base level
     */
    public function index()
    {
        $this->View->render('index/index');
    }

    public function s_result()
    {
        $this->View->render('index/s_result');
    }

    public function search_t()
    {
        $this->View->render('index/search_t');
    }

    public function passenger()
    {
        $this->View->render('index/passenger');
    }

   public function testing()
    {
      $this->View->render('index/testing');
    }

    public function booking()
    {
      $this->View->render('index/booking');
    }


}
