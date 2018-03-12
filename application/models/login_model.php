<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
 	
  public function login($u, $p)
 	{
        $password = $p;
        $this->db->where('username_a',$u);
        $this->db->where('password',$p);

        $query = $this->db->get('admin');


			if($query->num_rows()==1)// beriksa baris ada atau tidak 
			{ 
	            foreach ($query->result() as $row){ 
	                $data = array(
                              'username'=> $row->username,
                              'password'=> $row->password,
                              'level'=> $row->level,
	                            'logged_in'=>TRUE
	                        );
	            }

	            $this->session->set_userdata($data);
	            return TRUE;
        	}

        	else
        	{
		        return FALSE;
        	}
    }

  public function login1($u, $p)
  {
        $password = $p;
        $this->db->where('username_p',$u);
        $this->db->where('password',$p);

        $query = $this->db->get('pasien');


      if($query->num_rows()==1)// beriksa baris ada atau tidak 
      { 
              foreach ($query->result() as $row){ 
                  $data = array(
                              'username'=> $row->username,
                              'password'=> $row->password,
                              
                              'logged_in'=>TRUE
                          );
              }

              $this->session->set_userdata($data);
              return TRUE;
          }

          else
          {
            return FALSE;
          }
    }     

    //memriksa login apa tidak, jika tidak , maka akan kembali ke index.php
	//jika login, maka akan ke home.php
	 public function isLoggedIn()
	 { 
        header("cache-Control: no-store, no-cache, must-revalidate");
        header("cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        
        $is_logged_in = $this->session->userdata('logged_in');

        if(!isset($is_logged_in) || $is_logged_in!==TRUE)
        {
            redirect('/'); // tanda "/" merupakan tanda index(login)
            exit;
        }
    }
      
      //get name admin was login 
    public function getnama_admin() 
    {
       $this->db->where('username', $this->session->userdata('username'));
       $this->db->select('namai');
       $hasill = $this->db->get('admin');

       return $hasill -> row_array();
    }

      //get id admin was login 
    public function getid_admin() 
    {
       $this->db->where('username', $this->session->userdata('username'));
       $this->db->select('id_admin');
       $hasill = $this->db->get('admin');

       return $hasill-> row();
    }
}
