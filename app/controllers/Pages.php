<?php

    class Pages extends Controller{
        protected $PageMode;

        public function __construct() {
            $this->PageMode = $this->model('Page');
        }

        public function index()
        {
            $this->view('home/index');
        }

        public function book()
        {
            $this->view('home/book');
        }
    }