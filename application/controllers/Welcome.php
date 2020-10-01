<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_Model', 'Blog');
	}
	public function index()
	{
		redirect('Welcome/beranda');
	}

	public function beranda()
	{
		$data['blogs'] = $this->Blog->getBlogList();
		$this->loadView('welcome/beranda', 'Beranda', $data);
	}

	public function profil_sekolah($subjudul = '')
	{
		switch ($subjudul) {
			case "visi_misi":
				$data['headerTitle'] = "Visi &amp; Misi";
				$this->loadView('welcome/visi_misi', 'Visi Misi', $data);
				break;
			default:
				redirect('Welcome/profil_sekolah/visi_misi');
				break;
		}
	}

	public function profil_guru()
	{
		$data['headerTitle'] = 'Profil Guru';
		$data['teachers'] = $this->dataGuru();
		$this->loadView('welcome/profil_guru', 'Profil Guru', $data);
	}

	public function galeri()
	{
		$data['headerTitle'] = 'Galeri';
		$data['photos'] = $this->dataGaleri();
		$this->loadView('welcome/galeri', 'Galeri', $data);
	}

	public function events()
	{
		$this->load->view('events');
	}

	public function dataGuru()
	{
		return [
			[
				"nip" => "197811172008012011",
				"nama_guru" => "Widya Sary",
				"jabatan_guru" => "Guru IPS",
				"foto_guru" => "woman.png"
			],
			[
				"nip" => "198606192010012006",
				"nama_guru" => "Dwi Eka Fitri, S.Pd",
				"jabatan_guru" => "Guru PPKN",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "198302092014072003",
				"nama_guru" => "Lusi Febriani",
				"jabatan_guru" => "Pegawai Tata Usaha",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "196904221989032005",
				"nama_guru" => "Afriyanti",
				"jabatan_guru" => "Pegawai Tata Usaha",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Syahrul",
				"jabatan_guru" => "Penjaga Sekolah",
				"foto_guru" => "man.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Ance Widyastuti, S.I.Kom",
				"jabatan_guru" => "Pegawai Tata Usaha",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Rasti Ardianis S.Pd",
				"jabatan_guru" => "Guru Seni Budaya",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Syuhada Novriana",
				"jabatan_guru" => "",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "196605131994032005",
				"nama_guru" => "Revina Ermitha, S.Pd",
				"jabatan_guru" => "Guru Bahasa Indonesia",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Sumastri Dewi, S.Pd",
				"jabatan_guru" => "Guru Bahasa Inggris",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "198108022008012010",
				"nama_guru" => "Walni Fitri,S.Pd",
				"jabatan_guru" => "Guru IPS",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Zulfan Setyanto, S.T, M.Kom",
				"jabatan_guru" => "Wakil Kepala Sekolah",
				"foto_guru" => "man.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Drs. Supriyanto",
				"jabatan_guru" => "Waka Manajement Mutu dan ICT",
				"foto_guru" => "man.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Bukhori, S.Ag",
				"jabatan_guru" => "Waka Kurikulum",
				"foto_guru" => "man.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Yessi Murami, S.Kom",
				"jabatan_guru" => "Guru",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Dhea Kurnia Hidayati, S.Pd",
				"jabatan_guru" => "Guru",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "197910102005012010",
				"nama_guru" => "Oktafia Yuzika, S.Pd",
				"jabatan_guru" => "Guru IPA",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Rahmi Yasmaulina, S. Kom",
				"jabatan_guru" => "Pegawai Tata Usaha",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Alwinsyah",
				"jabatan_guru" => "Pegawai Tata Usaha",
				"foto_guru" => "man.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Aprialdi, S.Si",
				"jabatan_guru" => "Guru BK TIK",
				"foto_guru" => "man.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Sugeng Bambang Waluyo, S.Si",
				"jabatan_guru" => "Guru TIK",
				"foto_guru" => "man.png",
			],
			[
				"nip" => "196812161995122001",
				"nama_guru" => "Sri Wartini",
				"jabatan_guru" => "Guru MTK",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "196602012007012004",
				"nama_guru" => "Sri Endah",
				"jabatan_guru" => "Guru Muda",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "197304051998022001",
				"nama_guru" => "Arnita Sari, S.Pd",
				"jabatan_guru" => "Guru Madya",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "196710112014072003",
				"nama_guru" => "Asmawati Tambusai, S.Ag",
				"jabatan_guru" => "Guru BK",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Misa Rahma Yani, S.Pd",
				"jabatan_guru" => "Guru IPA",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "197907102006042037",
				"nama_guru" => "Syari Dewi, M.Pd",
				"jabatan_guru" => "Guru Bahasa Inggris",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "197907102006042037",
				"nama_guru" => "Syari Dewi, M.Pd",
				"jabatan_guru" => "Guru Bahasa Inggris",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "198709062010012016",
				"nama_guru" => "Pamula Trisna Suri, S.Pd. Jas",
				"jabatan_guru" => "Guru",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "196907021998022001",
				"nama_guru" => "Surati Puji Lestari",
				"jabatan_guru" => "Guru Madya",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "196605181991032008",
				"nama_guru" => "Hj. Tuty Indriati, MP.d",
				"jabatan_guru" => "Guru",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "1965041987032006",
				"nama_guru" => "Hj. Diah Dian Astuti, M.Pd",
				"jabatan_guru" => "Guru",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "196809221997022001",
				"nama_guru" => "Dra. Fadhli Naida",
				"jabatan_guru" => "Guru",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "196501281986012001",
				"nama_guru" => "Khairina, S.Pd",
				"jabatan_guru" => "Pegawai Tata Usaha",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "197108181999032002",
				"nama_guru" => "Yurhagusfiani, S.Pd.",
				"jabatan_guru" => "Guru",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "197111151998022002",
				"nama_guru" => "Erlindawaty",
				"jabatan_guru" => "Guru IPA",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "197411302003122004",
				"nama_guru" => "Novita Sari, M.Pd",
				"jabatan_guru" => "Guru",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "197210142014072002",
				"nama_guru" => "Pelfriede Anita Sihotang, S.Pd",
				"jabatan_guru" => "Guru PAK",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "196203041985112001",
				"nama_guru" => "Nurmanengsih, S.Pd",
				"jabatan_guru" => "Guru",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Dedi Wijaya, S.Si",
				"jabatan_guru" => "Guru IPA",
				"foto_guru" => "man.png",
			],
			[
				"nip" => "197008042000122002",
				"nama_guru" => "Susanti, S.Pd",
				"jabatan_guru" => "Guru",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "197011111997032008",
				"nama_guru" => "Sri Romadhona, M.Pd",
				"jabatan_guru" => "Guru Madya",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "197204021997032004",
				"nama_guru" => "Loviza Ulfarina, M.Pd",
				"jabatan_guru" => "Guru",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "196501311998032002",
				"nama_guru" => "Ermidani, S.Pd",
				"jabatan_guru" => "Guru Seni Budaya",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "196908052007012004",
				"nama_guru" => "Dra. Feniwati",
				"jabatan_guru" => "Penata",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "196803222006041002",
				"nama_guru" => "Drs. Efendi",
				"jabatan_guru" => "Waka Kesiswaan",
				"foto_guru" => "man.png",
			],
			[
				"nip" => "196604131987022001",
				"nama_guru" => "Hj. Erwita, S.Pd",
				"jabatan_guru" => "Pegawai Tata Usaha",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Mardian Saputra",
				"jabatan_guru" => "Pegawai Tata Usaha",
				"foto_guru" => "man.png",
			],
			[
				"nip" => "196409181990032003",
				"nama_guru" => "Dra. Zetti Sepriza",
				"jabatan_guru" => "Guru",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Sawiyah, S.Ag",
				"jabatan_guru" => "Guru",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Alamsyah, S.Pd.I",
				"jabatan_guru" => "Guru Agama Islam",
				"foto_guru" => "man.png",
			],
			[
				"nip" => "198610292014071003",
				"nama_guru" => "Recky Zulmi, S.Pd",
				"jabatan_guru" => "Guru Penjas",
				"foto_guru" => "man.png",
			],
			[
				"nip" => "197501272006041002",
				"nama_guru" => "Faisol, S.Pd",
				"jabatan_guru" => "Guru Penjas",
				"foto_guru" => "man.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Sri Andriyeni. F",
				"jabatan_guru" => "Pegawai Tata Usaha",
				"foto_guru" => "woman.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Mukhrizal",
				"jabatan_guru" => "Penjaga Sekolah",
				"foto_guru" => "man.png",
			],
			[
				"nip" => "-",
				"nama_guru" => "Dr. Rukiah, M.Pd",
				"jabatan_guru" => "Kepala Sekolah",
				"foto_guru" => "woman.png",
			],
		];
	}

	public function dataGaleri()
	{
		return [
			[
				"ket" => "Ekstrakurikuler Paskibra",
				"foto_kegiatan" => "1.JPG"
			],
			[
				"ket" => "Kegiatan Membaca Kitab Suci Sesuai Agama Masing - Masing",
				"foto_kegiatan" => "2.JPG"
			],
			[
				"ket" => "Kegiatan Membaca Kitab Suci Sesuai Agama Masing - Masing",
				"foto_kegiatan" => "3.jpg"
			],
			[
				"ket" => "Kegiatan Membaca Kitab Suci Sesuai Agama Masing - Masing",
				"foto_kegiatan" => "4.jpg"
			],
			[
				"ket" => "Bersalaman dengan Guru Sebelum Memasuki Gerbang",
				"foto_kegiatan" => "5.JPG"
			],
			[
				"ket" => "Bersalaman dengan Guru Sebelum Memasuki Gerbang",
				"foto_kegiatan" => "6.JPG"
			],
			[
				"ket" => "Lomba Poster antar Kelas",
				"foto_kegiatan" => "7.JPG"
			],
			[
				"ket" => "Lomba Poster antar Kelas",
				"foto_kegiatan" => "13.JPG"
			],
			[
				"ket" => "Lomba Poster antar Kelas",
				"foto_kegiatan" => "14.JPG"
			],
			[
				"ket" => "Fashion Show Pakaian Daerah",
				"foto_kegiatan" => "8.JPG"
			],
			[
				"ket" => "Fashion Show Pakaian Daerah",
				"foto_kegiatan" => "9.JPG"
			],
			[
				"ket" => "Fashion Show Pakaian Daerah",
				"foto_kegiatan" => "10.JPG"
			],
			[
				"ket" => "Lomba antar Kelas",
				"foto_kegiatan" => "11.JPG"
			],
			[
				"ket" => "Lomba antar Kelas",
				"foto_kegiatan" => "12.JPG"
			],
			[
				"ket" => "Kegiatan Guru",
				"foto_kegiatan" => "15.JPG"
			]
		];
	}


	/** 
	 * Load View
	 *
	 * Function untuk Manggil View Sekalian dengan Template Header dan Footernya 
	 *
	 * @param String $view halaman yang ingin dipanggil dari folder view
	 * @param String $title jadi judul dititle bar browser
	 * @param Array $data (optional) untuk mengirim data ke halaman
	 * @return void
	 */
	private function loadView(String $view, String $title, $data = [])
	{
		$titlee['title'] = $title;
		$this->load->view('templates/header', $titlee);
		$this->load->view('templates/navbar', $data);
		$this->load->view($view, $data);
		$this->load->view('templates/footer');
	}
}
