<?php
class Notify extends CI_Model{
	public function __construct	(){
		$this->load->database();
	}
    public function get_images($slug=FALSE, $limit = FALSE, $offset = FALSE)
    {   
        if($limit){
                $this->db->limit($limit,$offset);
            }
        if($slug === FALSE){
        $this->db->order_by("Id","desc");
        $query=$this->db->get('gallery');
        return $query->result_array();
        }
    }
    public function get_more($data)
    {
        
        $value=$data['Id'];
       
        $query= $this->db->get_where('blog', array('Id =' => $value));
        return $query->result();
        
    }
public function delete_notif($data)
    {
        $value=$data['Id'];
        $this->db->where('Id', $value);
        $this->db->delete('notification');
    }
    public function delete_image($data)
    {
        $value=$data['Id'];
        $this->db->where('Id', $value);
        $this->db->delete('gallery');
    }
    public function delete_blog($data)
    {
        $value=$data['Id'];
        $this->db->where('Id', $value);
        $this->db->delete('blog');
    }

	public function get_notify($slug=FALSE){

			$this->db->order_by("Id","desc");
			$query=$this->db->get('notification',3,0);

			return $query->result_array();
	}
	public function get_blog($slug=FALSE, $limit = FALSE, $offset = FALSE){
        if($limit){
                $this->db->limit($limit,$offset);
            }
        if($slug === FALSE){
        $this->db->order_by("Id","desc");
		$query=$this->db->get('blog');
		return $query->result_array();
	}
}    	public function sendemail($content){


                     $this->load->library('email');

                    //Initialise the email helper and set the "from"
                    $this->email->initialize(array("mailtype" => "html"));
                    $this->email->from("adityavadityav@gmail,",'My name');

                    //Set the recipient, subject and message based on the page
                    
                            $this->email->to('adityavadityav@gmail.com');
                            $this->email->subject('Website Enquiry');
                            $this->email->message("My name is: {$content["name"]}.
My email address is: {$content["email"]}.
The enquiry is regarding: {$content["subject"]}.
Enquiry: {$content["message"]}");
 $from="adityavadityav@gmail.com";
                    $email="vishnuvc1@gmail.com";
                    $subject=$content["subject"];
                    $msg= "My name is: {$content["name"]}.My email address is: {$content["email"]}.The enquiry is regarding: {$content["subject"]}.Enquiry: {$content["message"]}"; 
                    mail($email, $subject, $msg, 'From:' . $from); 
                    

                     //If the email is sent
                    if($this->email->send())
                    {
                        return true;

                    }
                    else
                    {
                        return false;
                    }



        
	  
    }
    

    


}