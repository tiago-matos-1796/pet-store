<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	    public function __construct()
        {
                parent::__construct();
                $this->load->model('blog_model');
                $this->load->helper('url_helper');
				$this->load->library('session');
        }
		
        public function index()
        {
		

						
						
                $data['blogs'] = $this->blog_model->get_posts();
				
                $data['menu1'] = '<a href="' . site_url('blog/index') .    '" class="selected">home</a>';
				if (isset($_SESSION['id']))
				{
					$data['menu2'] = '<a href="' . site_url('blog/logout') .    '">logout</a>';
					$data['menu3'] = '<a href="' . site_url('blog/post') .    '">new post</a>';
					$data['welcome'] = 'Welcome ' . $_SESSION['name'];
					$data['menu4'] = '<a href="/~a52888/EXAME/index.php/blog/friends">friends</a>';
					$data['menu4'] = '<a href="' . site_url('blog/friends') . '">friends</a>';
					$data['session_id'] = $_SESSION['id'];
				}
				else
				{
					$data['menu2'] = '<a href="' . site_url('blog/login') .    '">login</a>';
					$data['menu3'] = '<a href="' . site_url('blog/register') . '">register</a>';
					$data['welcome'] = '';
					
					$data['session_id'] = 0;
				}

   
				$data['image_url'] = base_url('images/microblog.jpg');
				$data['post_url'] = site_url('blog/post/');
		


                $this->smarty->view( 'index_template.tpl', $data );

        }
		
		public function register()
        {
                
				$data['menu1'] = '<a href="' . site_url('blog/index') .    '" class="selected">home</a>';
				$data['menu2'] = '<a href="' . site_url('blog/login') .    '">login</a>';
				$data['image_url'] = base_url('images/microblog.jpg');
		        $data['index_url'] = site_url('blog/index');

				
				$this->load->library('form_validation');


                $this->form_validation->set_rules('apelido_utilizador', 'Username', 'required');
				$this->form_validation->set_rules('pass1_utilizador', 'Password', 'required');
				$this->form_validation->set_rules('pass2_utilizador', 'Password Confirmation', 'required|matches[pass1_utilizador]');
				$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]',
				        array('valid_email'   => 'You have not provided a valid %s.',
								'is_unique'   => 'This %s already exists.'
						)
				);

                        if ($this->form_validation->run() === FALSE)
                        {
				$data['validation_errors']=validation_errors();
				$data['register']=site_url('blog/register');
				$data['apelido_utilizador']=set_value('apelido_utilizador');
				$data['email']=set_value('email');

				$this->smarty->view( 'register_template.tpl', $data );


                        }
                        else
                        {
                                $this->blog_model->register_user();
				$this->smarty->view( 'register_success.tpl', $data );
                        }
        }
		

		

		
		public function login()
		{
				$data['menu1'] = '<a href="' . site_url('blog/index') .    '" class="selected">home</a>';
				$data['menu2'] = '<a href="' . site_url('blog/register') .    '">register</a>';
				$data['message'] = '';

				$data['image_url']=base_url('images/microblog.jpg');
				$data['login_action']=site_url('blog/login_action');
				
				$this->smarty->view('login_template.tpl', $data);
				
		}
		
		public function login_action()
		{
			$tupple = $this->blog_model->validate_user();
			
			if (isset($tupple))
			{
				$_SESSION['id'] 	    = $tupple->id;
				$_SESSION['name'] 		= $tupple->name;
				$_SESSION['email'] 		= $tupple->email;
				
				
				$data['name'] = $_SESSION['name'] ; 
                $data['image_url']=base_url('images/microblog.jpg');
                $data['index_url']=site_url('blog/index');
				
				$this->smarty->view('login_success.tpl', $data);
			}
			else
			{
				$data['menu1'] = '<a href="' . site_url('blog/index') .    '" class="selected">home</a>';
				$data['menu2'] = '<a href="' . site_url('blog/register') .    '">register</a>';
				$data['message'] = 'Login failed' ;

                $data['image_url']=base_url('images/microblog.jpg');
                $data['login_action']=site_url('blog/login_action');
				
				$this->smarty->view('login_template.tpl', $data);
			}

		}
		
		public function post($blog_id = FALSE)
		{
				$data['menu1'] = '<a href="' . site_url('blog/index') .    '" class="selected">home</a>';
				$data['menu2'] = '';
				$data['content'] = '';
				$data['blog_id'] = '';
                                $data['image_url']=base_url('images/microblog.jpg');
                                $data['post_url']=site_url('blog/post/');
                                $data['index_url']=site_url('blog/index');
				
				if ($blog_id)
				{
					$tupple = $this->blog_model->get_blog($blog_id);
					$data['content'] = $tupple->content;
					$data['blog_id'] = $blog_id;
				}
				
				$this->load->library('form_validation');
				$this->form_validation->set_rules('blog', 'Blog', 'required',
				        array('required'   => 'The %s can not be empty')) ;
						
				if ($this->form_validation->run() === FALSE)
				{
					$data['form_validation']=validation_errors();
					$this->smarty->view('blog_template.tpl', $data);
				}
				else
				{
					if ($blog_id == FALSE) 
					{
						$this->blog_model->new_blog();
					}
					else 
					{
						$this->blog_model->update_blog($blog_id);
					}
				redirect('/blog');		
				} 
		}
		
		public function logout()
		{
			$data['name'] = $_SESSION['name'] ;
                        $data['image_url']=base_url('images/microblog.jpg');
                        $data['index_url']=site_url('blog/index');

			$this->session->sess_destroy();
			$this->smarty->view('logout_success.tpl', $data);	
		}
		
//PONHA O SEU CODIGO ABAIXO DESTA LINHA

		public function friends(){

			$data['users'] = $this->blog_model->get_users();
			$data['image_url'] = base_url('images/microblog.jpg');
			$this->smarty->view( 'friends_template.tpl', $data);
		}	

		public function makefriend($id = FALSE){
			$data['user.id'] = '';
			$data['friend'] = $this->blog_model->add_friend($id);
			$this->smarty->view( 'friends_template.tpl', $data);
		}	

		public function show_friends(){
			$this->load->library('session');
			$session_id = $_SESSION['id'];
			echo $session_id;
			$id = 1;
			$data['friends'] = $this->blog_model->get_friend();
			$this->smarty->view('friends_template.tpl', $data);
		}
}
