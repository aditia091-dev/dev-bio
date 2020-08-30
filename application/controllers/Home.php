<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
 
 public function index() {
 
 	$data=array('title'=>'Bioxsine Indonesia','isi' =>'home/index_home');
 
 	$this->load->view('layout/wrapper',$data); 
 }

 public function about() {
 
 	$data=array('title'=>'About - Bioxsine Indonesia','isi' =>'home/about');
 	$this->load->view('home/about',$data); 
 }
}