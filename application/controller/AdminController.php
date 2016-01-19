   <?php

   class AdminController extends Controller
{

   public function index()
    {
      $this->View->render('admin/index');
    }
    
    public function adminlogin()
    {
      $this->View->render('admin/adminlogin');
    }

    public function admin_page()
    {
    	$this->View->render('admin/admin_page');
    }

    public function add_train()
    {
      $this->View->render('admin/add_train');
    }

    public function rem_train()
    {
      $this->View->render('admin/rem_train');
    }

    public function full_p()
    {
      $this->View->render('admin/full_p');
    }

    public function logout1()
    {
      $this->View->render('admin/logout1');
    }

    public function add()
    {
      $this->View->render('admin/add');
    }
    
    public function rem()
    {
      $this->View->render('admin/rem');
    }

    public function thankadmin()
    {
      $this->View->render('admin/thankadmin');
    }

    public function p_result()
    {
      $this->View->render('admin/p_result');
    }

    public function presult()
    {
      $this->View->render('admin/presult');
    }

    public function search_p()
    {
      $this->View->render('admin/search_p');
    }

 
}