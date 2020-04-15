<?php

class Blog extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('server/Blog_model');
    }

	public function index()
	{
		$data['blog'] = $this->Blog_model->getAllBlog();
		$this->load->view('client/blog/blog', $data);
	}

	public function detail($id_blog){
		$data['blog'] = $this->Blog_model->getBlogById($id_blog);
		$data['blg'] = $this->Blog_model->getAllBlogSide();
        $this->load->view('client/blog/detail', $data);
    }
}