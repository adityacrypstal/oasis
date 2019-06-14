<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {

	
	public function view($page = 'home',$offset = 0){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			if( $page==='gallery'){
				$config['per_page'] = 12;
				$config['base_url'] = base_url() . 'index.php/first/view/gallery';
				$config['total_rows'] = $this->db->count_all('gallery');
			}
			else{
				$config['per_page'] = 5;
				$config['base_url'] = base_url() . 'index.php/first/view/blog';
				$config['total_rows'] = $this->db->count_all('blog');
			}
			$data['title'] = ucfirst($page); 
			
			$data['notification'] = $this->Notify->get_notify();

			
			// Pagination Config	
			
			
			
			$config['uri_segment'] = 4;
			$config['attributes'] = array('class' => 'pagination-link');
			$config['full_tag_open'] = "<ul class='pagination'>";
    		$config['full_tag_close'] = '</ul>';
    		$config['num_tag_open'] = '<li>';
   		 $config['num_tag_close'] = '</li>';
   		 $config['cur_tag_open'] = '<li class="active"><a href="#">';
   		 $config['cur_tag_close'] = '</a></li>';
   		 $config['prev_tag_open'] = '<li>';
   		 $config['prev_tag_close'] = '</li>';
    	 $config['first_tag_open'] = '<li>';
    	 $config['first_tag_close'] = '</li>';
   		 $config['last_tag_open'] = '<li>';
    	 $config['last_tag_close'] = '</li>';



   		$config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
    	$config['prev_tag_open'] = '<li>';
    	$config['prev_tag_close'] = '</li>';


    	$config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
    	$config['next_tag_open'] = '<li>';
   		$config['next_tag_close'] = '</li>';
			// Init Pagination

			$this->pagination->initialize($config);
			$data['blogs'] = $this->Notify->get_blog(FALSE, $config['per_page'],$offset);
			$data['gallery'] = $this->Notify->get_images(FALSE, $config['per_page'],$offset);
			$this->load->view('header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('footer');
		}

    public function sendmail(){           
                                            //Send the email
        			$this->load->model('notify');
$this->load->library('email');
                   	if($this->notify->sendemail($_POST)===TRUE)
                   		{
                   		redirect(base_url('index.php/first/view/contacts'));
                        } 
    }    
public function delete_notif()
    {
        $data['Id']=$_POST['delete_id'];
        $this->load->model('notify');
        $this->notify->delete_notif($data);
        redirect('index.php/first/admin');
    }     
    
	               		

                     
    public function create(){
    			$this->load->database();
    			$config['upload_path'] = './assets/upload/blog';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$post_image = 'noimage.jpg';
				} else {
					$datas['upload'] = array('upload_data' => $this->upload->data());
					$data['Id']='';
					$data['header']=$_POST['headers'];
					$data['image'] = $_FILES['userfile']['name'];
					$data['text']=$_POST['texts'];
					$data['date']=date("Y/m/d");
					$data['author']=$_POST['authors'];
					$this->load->database();
					$this->db->insert('blog', $data);
					
				}
				redirect(base_url('index.php/first/admin'));
				

    }
    public function gallery(){
                $this->load->library('session');
    			$this->load->database();
    			$config['upload_path'] = './assets/upload/gallery';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$post_image = 'noimage.jpg';
				} else {
					$datas['upload'] = array('upload_data' => $this->upload->data());
					$date['Id']='';
					$data['image'] = $_FILES['userfile']['name'];
					$data['caption']=$_POST['caption'];
					
					$this->db->insert('gallery', $data);
					
				}
				redirect(base_url('index.php/first/admin'));
				

    }
    public function notification(){
    	$data['Id'] = '';
    	$data['item'] = $_POST['item'];
    	$data['date'] = $_POST['date'];
    	$data['link'] = $_POST['link'];
    	$this->load->database();
    	$this->db->insert('notification', $data);
    	redirect(base_url('index.php/first/admin'));
    	

    }
    public function admin(){
        $this->load->library('session');
        $adhi=$this->session->userdata('use');
        if(isset($adhi)){
            $this->load->model('notify');
            $data['images']=$this->notify->get_images();
            $data['blogs'] = $this->notify->get_blog();
$data['noti'] = $this->notify->get_notify();
            $this->load->view('admin',$data);
    }else{redirect(base_url('index.php/first/login'));}
        
       /* */
    }

    public function more_blog()
    {
    	$data['Id']=$_GET['more'];
    	$this->load->model('notify');
    	$data['return_blog'] = $this->notify->get_more($data);
    	
   
    	$this->load->view('header');
		$this->load->view('pages/bloger', $data);
		$this->load->view('footer');


    }
    public function delete_image()
    {
    	$data['Id']=$_POST['delete_id'];
    	$this->load->model('notify');
    	$this->notify->delete_image($data);
    	redirect('index.php/first/admin');
    }
    public function delete_blog()
    {
    	$data['Id']=$_POST['delete_id'];
    	$this->load->model('notify');
    	$this->notify->delete_blog($data);
    	redirect('index.php/first/admin');
    }   
    public function log_in()
    {
    	$user['use']=$_POST['username'];
    	$this->load->library('session');
    	if('admin@oasis'==$_POST['username'] && 'oasisit2017'==$_POST['password'])
    	{
    		$this->load->model('notify');
    		$this->session->set_userdata($user);
			$data['images']=$this->notify->get_images();
    		$data['blogs'] = $this->notify->get_blog();
$data['noti'] = $this->notify->get_notify();
    		$this->load->view('admin',$data);
    		

    	}else{$this->load->view('pages/login');
    	}

    	
    }       
    
    public function login(){$this->load->view('pages/login');
    $this->load->library('session');
        }

    
    public function log_out(){
        $this->load->library('session');
        $this->session->unset_userdata('use');
      redirect(base_url('index.php/first/login'));}
}
?>