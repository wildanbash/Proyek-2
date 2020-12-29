<?php

class Home extends CI_Controller {
	function apiAdzan(){
		// dokumentasi nya kunjungi https://aladhan.com/prayer-times-api#GetCalendarByCitys
        $urlApi = 'http://api.aladhan.com/v1/calendarByCity'; //Url API
        $urlApi .= '?city=Kraksaan'; // Ambil kota dari form submit
        $urlApi .= '&country=ID'; // Negara set default Indonesia
        $urlApi .= '&method=11'; // method ke aplikasi
        $urlApi .= '&month=' . date('m'); // Ambil bulan dari form submit
        $urlApi .= '&year=' . date('Y'); // Ambil tahun dari form submit

        $ch = curl_init(); //set curl
        curl_setopt($ch, CURLOPT_URL, $urlApi);  // Ambil Data dari API Url
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);

        $decodeData = json_decode($output); // decode data json dari api

        curl_close($ch);

        $dayNow = ltrim(date('d'), "0"); //hapus 0 di depan untuk mencocokan array hari dari $decodeData dan mengurangi hari karena di array di mulai dari 0
        $data = array();

        if (isset($decodeData->code) == 200) {
            $data['subuh'] = $decodeData->data[$dayNow]->timings->Fajr;
            $data['dzuhur'] = $decodeData->data[$dayNow]->timings->Dhuhr;
            $data['ashar'] = $decodeData->data[$dayNow]->timings->Asr;
            $data['magrib'] = $decodeData->data[$dayNow]->timings->Maghrib;
            $data['isya'] = $decodeData->data[$dayNow]->timings->Isha;
            $data['lokasi'] = 'Kraksaan';
            $data['hijriah'] = $decodeData->data[$dayNow]->date->hijri->date;
        } else {
            $data['subuh'] = "Tidak Tersedia";
            $data['dzuhur'] = "Tidak Tersedia";
            $data['ashar'] = "Tidak Tersedia";
            $data['magrib'] = "Tidak Tersedia";
            $data['isya'] = "Tidak Tersedia";
            $data['lokasi'] = "Tidak Tersedia";
            $data['hijriah'] = "Tidak Tersedia";
		}
		return $data;
	}

    public function index()
    {	
		$this->load->model('Home_model');
		
		$data = $this->apiAdzan();
        $data['title'] = 'Sistem Informasi Masjid';
        $data['artikel'] = $this->Home_model->artikel();
        $data['dokumentasi'] = $this->Home_model->dokumentasi();
		
		$this->load->view('template/header_user', $data);
        $this->load->view('home/index', $data);
        $this->load->view('template/footer_user');
    }

    public function pnf404() {
        $this->load->view('404');
    }

    public function kirim(){
        $this->load->model('Pesan_model');

        $params = array(
            'nama' => $_POST['name'],
            'email' => $_POST['email'],
            'subject' => $_POST['subject'],
            'pesan' => $_POST['message'],
        );
            
        $this->Pesan_model->send_message($params);

        $this->session->set_flashdata('pesan','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Your message has been sent. Thank You!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        echo "<script>alert('Sukses');";
        echo "window.location='".site_url('home')."';</script>";
        
        
    }
}