<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Text extends CI_Controller {
    //example method 

            public function sayhello(){
                echo 'This is Test Controller and the method is sayhello';
            }
            //index method 
            public function index(){
                echo 'This is index-method';
            }

            public function first(){
                $data['fname'] = 'Pham';
                $data['lname']  = 'Huong';
                $this->load->view('text/first', $data);
            }
            public function names(){
                //load model
                $this->load->model('Text_model');
                //call and return vairbale arrays
                $data['customers'] = $this->Text_model->getNames();
                //send data to view
                $this->load->view('text/names', $data);
            }

}