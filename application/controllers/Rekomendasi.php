<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekomendasi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
        parent::__construct();
		$this->load->model("kuesioner_model");
        $this->load->model("rekomendasi_model");
        $this->load->library('form_validation');
    }

	public function index($id = 0)
    {
    	$tingkat=5;
        if (isset($_POST['submit'])) {
			$id_it_process = $id;
			$jumlah_pertanyaan_level0 = 0;
			$jumlah_pertanyaan_level1 = 0;
			$jumlah_pertanyaan_level2 = 0;
			$jumlah_pertanyaan_level3 = 0;
			$jumlah_pertanyaan_level4 = 0;
			$jumlah_pertanyaan_level5 = 0;
			$jumlah_level0 = 0;
			$jumlah_level1 = 0;
			$jumlah_level2 = 0;
			$jumlah_level3 = 0;
			$jumlah_level4 = 0;
			$jumlah_level5 = 0;
			$hasil_bagi_level0 = 0;
			$hasil_bagi_level1 = 0;
			$hasil_bagi_level2 = 0;
			$hasil_bagi_level3 = 0;
			$hasil_bagi_level4 = 0;
			$hasil_bagi_level5 = 0;
			$jumlah_hasil_bagi = 0;
			$normalisasi_level0 = 0;
			$normalisasi_level1 = 0;
			$normalisasi_level2 = 0;
			$normalisasi_level3 = 0;
			$normalisasi_level4 = 0;
			$normalisasi_level5 = 0;
			$jumlah_normalisasi = 0;
			$kontribusi_level0 = 0;
			$kontribusi_level1 = 0;
			$kontribusi_level2 = 0;
			$kontribusi_level3 = 0;
			$kontribusi_level4 = 0;
			$kontribusi_level5 = 0;
			$jumlah_kontribusi = 0;
			$kekurangan = array();

			$nomor_pertanyaan = $this->kuesioner_model->getIdPertanyaan($id_it_process);
			foreach ($nomor_pertanyaan as $value) 
			{
				if(isset($_POST['radio'.$value->id_pertanyaan])){
					$nilai = $_POST['radio'.$value->id_pertanyaan];
					if($nilai == 0)
					{	
						$tingkat = 0;
						array_push($kekurangan, $value->id_pertanyaan);
					}

					$it_process = $value->it_process;
					// echo $nilai;
					// echo "<br>";
					if($value->level == 0)
					{
						$jumlah_pertanyaan_level0++;
						$jumlah_level0 += $nilai;
						// echo "Jumlah sementara level 0: " . $jumlah_level0 . " " . $jumlah_pertanyaan_level0;
						// echo "<br>";
					}
					if($value->level == 1)
					{						
						if($tingkat>1)$tingkat=1;
						$jumlah_pertanyaan_level1++;
						$jumlah_level1 += $nilai;
						// echo "Jumlah sementara level 1: " . $jumlah_level1 . " " . $jumlah_pertanyaan_level1;
						// echo "<br>";
					}
					if($value->level == 2)
					{
						if($tingkat>2)$tingkat=2;
						$jumlah_pertanyaan_level2++;
						$jumlah_level2 += $nilai;
						// echo "Jumlah sementara level 2: " . $jumlah_level2 . " " . $jumlah_pertanyaan_level2;
						// echo "<br>";
					}
					if($value->level == 3)
					{
						if($tingkat>3)$tingkat=3;
						$jumlah_pertanyaan_level3++;
						$jumlah_level3 += $nilai;
						// echo "Jumlah sementara level 3: " . $jumlah_level3 . " " . $jumlah_pertanyaan_level3;
						// echo "<br>";
					}
					if($value->level == 4)
					{
						if($tingkat>4)$tingkat=4;
						$jumlah_pertanyaan_level4++;
						$jumlah_level4 += $nilai;
						// echo "Jumlah sementara level 4: " . $jumlah_level4 . " " . $jumlah_pertanyaan_level4;
						// echo "<br>";
					}
					if($value->level == 5)
					{
						$jumlah_pertanyaan_level5++;
						$jumlah_level5 += $nilai;
						// echo "Jumlah sementara level 5: " . $jumlah_level5 . " " . $jumlah_pertanyaan_level5;
						// echo "<br>";
					}
				}
			}

			if($jumlah_pertanyaan_level0 != 0)
			{
				$hasil_bagi_level0 = $jumlah_level0 / $jumlah_pertanyaan_level0;
			}
			else
			{	
				$hasil_bagi_level0 = 0;
			}

			if($jumlah_pertanyaan_level1 != 0)
			{
				$hasil_bagi_level1 = $jumlah_level1 / $jumlah_pertanyaan_level1;
			}
			else
			{
				$hasil_bagi_level1 = 0;
			}

			if($jumlah_pertanyaan_level2 != 0)
			{
				$hasil_bagi_level2 = $jumlah_level2 / $jumlah_pertanyaan_level2;
			}
			else
			{
				$hasil_bagi_level2 = 0;
			}

			if($jumlah_pertanyaan_level3 != 0)
			{
				$hasil_bagi_level3 = $jumlah_level3 / $jumlah_pertanyaan_level3;
			}
			else
			{
				$hasil_bagi_level3 = 0;
			}

			if($jumlah_pertanyaan_level4 != 0)
			{
				$hasil_bagi_level4 = $jumlah_level4 / $jumlah_pertanyaan_level4;
			}
			else
			{
				$hasil_bagi_level4 = 0;
			}

			if($jumlah_pertanyaan_level5 != 0)
			{
				$hasil_bagi_level5 = $jumlah_level5 / $jumlah_pertanyaan_level5;
			}
			else
			{
				$hasil_bagi_level5 = 0;
			}		
			
			// echo "Hasil bagi level 0: " . $hasil_bagi_level0 . "<br>";
			// echo "Hasil bagi level 1: " . $hasil_bagi_level1 . "<br>";
			// echo "Hasil bagi level 2: " . $hasil_bagi_level2 . "<br>";
			// echo "Hasil bagi level 3: " . $hasil_bagi_level3 . "<br>";
			// echo "Hasil bagi level 4: " . $hasil_bagi_level4 . "<br>";
			// echo "Hasil bagi level 5: " . $hasil_bagi_level5 . "<br>";
			$jumlah_hasil_bagi = $hasil_bagi_level0 + $hasil_bagi_level1 + $hasil_bagi_level2 + $hasil_bagi_level3 + $hasil_bagi_level4 + $hasil_bagi_level5;
			// echo "Jumlah hasil bagi: " . $jumlah_hasil_bagi . "<br>";

			if($jumlah_hasil_bagi != 0)
			{
				$normalisasi_level0 = $hasil_bagi_level0 / $jumlah_hasil_bagi;
				$normalisasi_level1 = $hasil_bagi_level1 / $jumlah_hasil_bagi;
				$normalisasi_level2 = $hasil_bagi_level2 / $jumlah_hasil_bagi;
				$normalisasi_level3 = $hasil_bagi_level3 / $jumlah_hasil_bagi;
				$normalisasi_level4 = $hasil_bagi_level4 / $jumlah_hasil_bagi;
				$normalisasi_level5 = $hasil_bagi_level5 / $jumlah_hasil_bagi;
			}
			else
			{
				$normalisasi_level0 = 0;
				$normalisasi_level1 = 0;
				$normalisasi_level2 = 0;
				$normalisasi_level3 = 0;
				$normalisasi_level4 = 0;
				$normalisasi_level5 = 0;
			}

			$jumlah_normalisasi = $normalisasi_level0 + $normalisasi_level1 + $normalisasi_level2 + $normalisasi_level3 + $normalisasi_level4 + $normalisasi_level5;
			// echo "Jumlah normalisasi: " . $jumlah_normalisasi . "<br>";
			$kontribusi_level1 = $normalisasi_level1 / 1;
			$kontribusi_level2 = $normalisasi_level2 / 2;
			$kontribusi_level3 = $normalisasi_level3 / 3;
			$kontribusi_level4 = $normalisasi_level4 / 4;
			$kontribusi_level5 = $normalisasi_level5 / 5;
			$jumlah_kontribusi = $kontribusi_level0 + $kontribusi_level1 + $kontribusi_level2 + $kontribusi_level3 + $kontribusi_level4 + $kontribusi_level5;
			// echo "Jumlah kontribusi: " . $jumlah_kontribusi . "<br>";
			$nilai_maturity_level = $jumlah_kontribusi;

			if($nilai_maturity_level == 0)
			{
				$level = 0;
			}
			if($nilai_maturity_level >= 0.1 && $nilai_maturity_level <= 1)
			{
				$level = 1;
			}
			if($nilai_maturity_level >= 1.1 && $nilai_maturity_level <= 2)
			{
				$level = 2;
			}
			if($nilai_maturity_level >= 2.1 && $nilai_maturity_level <= 3)
			{
				$level = 3;
			}
			if($nilai_maturity_level >= 3.1 && $nilai_maturity_level <= 4)
			{
				$level = 4;
			}
			if($nilai_maturity_level >= 4.1 && $nilai_maturity_level <= 5)
			{
				$level = 5;
			}

			$data["it_process"] = $it_process;
			$data["nilai_maturity"] = $nilai_maturity_level;
			$data["nilai_maturity_persen"] = $nilai_maturity_level / 5 * 100;
			$data["level"] = $level;
			// if($tingkat>0){
			// 	$data["list_kekurangan"]= $this->rekomendasi_model->getIdLevel($level, $id);
			// }
			// else{
			// 	$data["list_kekurangan"] = $kekurangan;
			// }
			$data["list_kekurangan"] = $kekurangan;
			$data["rekomendasi"] = $this->rekomendasi_model->getRecomend($level);
			$data["tingkat"] = $tingkat;

			$this->load->view('rekomendasi', $data);
        }
    }
}
