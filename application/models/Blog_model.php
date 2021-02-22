<?php class Blog_model extends CI_Model {

	public function __construct()
	{
		  $this->load->database();
	}

	public function get_posts()
	{

			
			$query = $this->db->query('select u.name, m.id, m.user_id, m.content, m.created_at, m.updated_at, m.likes from users as u inner join (microposts as m) on (u.id=m.user_id) order by m.updated_at desc');
			return $query->result_array();
			

	}

	public function register_user()
	{
	
		$pass1_utilizador = $this->input->post('pass1_utilizador');	
		/*md5('$pass') -> encripta a password*/
		
		$seed = substr(time(),-4);
        $passe = substr($seed . md5($seed. $_POST['pass1_utilizador']),0,32);
		
		/*Guarda os dados do Cliente*/
		$present_date = date("Y-m-d H:i:s");
		$query = "INSERT INTO users (password_digest,name,email, created_at, updated_at)
					VALUES('" .$passe. "','" . $this->input->post('apelido_utilizador') . "','" . $this->input->post('email') . "','" . $present_date . "','" . $present_date . "')";
		return $this->db->query($query);
																																						}
																																						public function validate_user()	
																																						{
		$query  = "SELECT * FROM users
                            WHERE email = '" . $_POST['username_login'] . "'";

		$result = $this->db->query($query);
		$tupple = $result->row();
		
		if (isset($tupple))
		{
			$seed = substr($tupple -> password_digest, 0, 4);
			$hash = substr($seed . md5($seed. $_POST['pass_utilizador']),0,32);
			
			if ($hash == $tupple -> password_digest) {
				return $tupple;
			}
			else {
				return NULL;
			}
		}
		else {
			return NULL;
		}
	}
	
	public function validate_email()	
																																						{
		$query  = "SELECT * FROM users
						   WHERE email = '" . $_POST['username_login'] . "'";												
		$result = $this->db->query($query);
		return $result->row();
	}
	
	
	public function new_blog()
	{
		$present_date = date("Y-m-d H:i:s");
		$mysql_query = "INSERT INTO microposts (user_id, content,created_at, updated_at)
					VALUES('" . $_SESSION['id'] . "','" . $_POST['blog'] . "','" . $present_date . "','". $present_date . "')"  ;
		return $this->db->query($mysql_query);
	}
	
	public function update_blog($blog_id)
	{
		$present_date = date("Y-m-d H:i:s");	
		$mysql_query = "UPDATE microposts SET content='" . $_POST['blog'] . "' , updated_at='" . $present_date .  "'WHERE id='" . $blog_id . "'" ;
		return $this->db->query($mysql_query);
	}
	
	public function get_blog($blog_id)
	{
		$query = "SELECT * FROM microposts  WHERE id ='" . $blog_id . "'";
		$result = $this->db->query($query);
		return $result->row();
	}
	
//PONHA O SEU CODIGO ABAIXO DESTA LINHA
			

	public function get_users(){
		$sql = "SELECT * FROM users";
		$result = $this->db->query($sql);
		return $result->result_array();
	}	

	/*public function add_friend($id){
		$status = 1;
		$date = date("Y-m-d H:i:s");
		$sql = "INSERT INTO friends (user_id, friend_user_id, created_at, status) VALUES('" . $_SESSION['id'] . "','". $id ."','" . $date ."','" . $status ."')" ;
		return $this->db->query($sql);
	}		*/	

	public function get_friend($id){
		$sql = "SELECT friend_user_id FROM friends WHERE user_id = 1";
		$result = $this->db->query($sql);
		echo $result;
		
	}																															

}
