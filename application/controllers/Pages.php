<?php

class Pages extends CI_Controller {
		

		public function __Construct() {
			parent::__Construct();
			$this->load->model("authentication_model");
		}


        public function view($page = 'dashboard')
        {
			if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
					show_404();
			}

			$data['title'] = ucfirst($page); // Capitalize the first letter


			if($page == 'section' || $page == 'subject' || $page == 'student' || $page == 'marksheet' || $page == 'accounting' || $page == 'admin') {
				$this->load->model('model_classes');
				$data['classData'] = $this->model_classes->fetchClassData();

				$this->load->model('model_teacher');
				$data['teacherData'] = $this->model_teacher->fetchTeacherData();

				
				$this->load->model('model_accounting');
				$data['totalIncome'] = $this->model_accounting->totalIncome();
				$data['totalExpenses'] = $this->model_accounting->totalExpenses();
				$data['totalBudget'] = $this->model_accounting->totalBudget();
			}

			if($page == 'setting') {
				$this->load->model('model_users');
				$this->load->library('session');
				$userId = $this->session->userdata('id');
				$data['userData'] = $this->model_users->fetchUserData($userId);
			}
			
			if($page == 'admin') {
				$this->load->model('Admin_model');
				$this->load->library('session');
				$userId = $this->session->userdata('id');
				$data['userData'] = $this->model_users->fetchUserData($userId);
			}

			if($page == 'dashboard') {
				$this->load->model('model_student');
				$this->load->model('model_teacher');
				$this->load->model('model_classes');
				$this->load->model('model_marksheet');
				$this->load->model('model_accounting');

				$data['countTotalStudent'] = $this->model_student->countTotalStudent();
				$data['countTotalTeacher'] = $this->model_teacher->countTotalTeacher();
				$data['countTotalClasses'] = $this->model_classes->countTotalClass();
				$data['countTotalMarksheet'] = $this->model_marksheet->countTotalMarksheet();

				$data['totalIncome'] = $this->model_accounting->totalIncome();
				$data['totalExpenses'] = $this->model_accounting->totalExpenses();
				$data['totalBudget'] = $this->model_accounting->totalBudget();
			}
			
			if( $this->session->userdata('logged_in') ) {
				$this->load->view('inc/header', $data);
				$this->load->view('pages/'.$page, $data);
				$this->load->view('inc/footer', $data);
			} else {
				redirect(base_url('authentication/logout'));
			}

        }


}