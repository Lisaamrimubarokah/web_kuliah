<?php

namespace App\Controllers;

use App\Models\DataDosenModel;
use App\Models\MatkulModel;
use App\Models\MhsModel;
use App\Models\KonkulModel;
use App\Models\UserModel;
use TCPDF;

class Kuliah extends BaseController
{
    protected $dosenModel;
    protected $matkulModel;
    protected $mhsModel;
    protected $konkulModel;
    protected $userModel;

    public function __construct(){
        $this->dosenModel = new DataDosenModel();
        $this->matkulModel = new MatkulModel();
        $this->mhsModel = new MhsModel();
        $this->konkulModel = new KonkulModel();
        $this->userModel = new UserModel();
        
    }

	public function index()
	{
        
        $data = [
            'title'=> 'Halaman Utama | Web Perkuliahan'
            
        ];
        
		return view('Tugas/index',$data);
	}

    public function data_dosen(){
        
        $dosen = $this->dosenModel->findAll();
        $data = [
            'title' => 'Data Dosen | Web Perkuliahan',
            'Tugas' => $dosen
        ];

        
        return view('Tugas/data_dosen',$data);
    }

     public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Dosen',
            'validation' => \Config\Services::validation()
        ];

        return view('Tugas/create',$data);
    }

    public function save()
    {
        
        //validasi input
        if(!$this->validate([
            'id' => [
                'rules' => 'required|is_unique[data_dosen.id]',
                'errors' => [
                    'required'=>'{field} Dosen harus diisi.',
                    'is_unique' => '{field} Dosen sudah terdaftar'
                ]

            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} harus diisi.'
                ]
            ],
            'nohp'=>[
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} harus diisi.'
                ]
            ]
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/Kuliah/create')->withInput()->with('validation',$validation);
        }

        $this->dosenModel->save([
            'id' => $this->request->getVar('id'),
            'nama' => $this->request->getVar('nama'),
            'nohp' => $this->request->getVar('nohp')
        ]);
        session()->setFlashdata('pesan','Data Berhasil Ditambahkan.');
        return redirect()->to('/Kuliah/data_dosen');

    
    }

    public function delete($id){
        $this->dosenModel->delete($id);
        session()->setFlashdata('pesan','Data Berhasil Dihapus.');
        return redirect()->to('/Kuliah/data_dosen');
    }

    public function edit($id){
        $data = [
            'title' => 'Form Ubah Data Dosen',
            'validation' => \Config\Services::validation(),
            'Tugas' =>$this->dosenModel->getDosen($id)
        ];

        return view('Tugas/edit',$data);
    }

    public function update($id){
        $this->dosenModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'matkul' => $this->request->getVar('matkul'),
            'nohp' => $this->request->getVar('nohp')
        ]);
        session()->setFlashdata('pesan','Data Berhasil Diubah.');
        return redirect()->to('/Kuliah/data_dosen');
    }

    public function matkul(){
        $matkul = $this->matkulModel->getAllMatkul();
        $data = [
            'title' => 'Data Matkul | Web Perkuliahan',
            'Tugas' => $matkul
        ];
        return view('Tugas/data_matkul',$data);
    }

    public function create_matkul()
    {
        
        // session();
        $data = [
            'title' => 'Form Tambah Data MataKuliah',
            'validation' => \Config\Services::validation()
            
        ];
        $data['dosen']=$this->dosenModel->getAllDosen();

        return view('Tugas/create_matkul',$data);
    }

    public function save_matkul()
    {
        
        //validasi input
        if(!$this->validate([
            'id_matkul' => [
                'rules' => 'required|is_unique[matkul.id_matkul]',
                'errors' => [
                    'required'=>'{field} Matakuliah harus diisi.',
                    'is_unique' => '{field} Matakuliah sudah terdaftar'
                ]

            ],
            'id' => [
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} harus diisi.'
                ]
            ],
            'nama_matkul' => [
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} harus diisi.'
                ]
            ],
            
            'sks' => [
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field}  harus diisi.'
                ]
            ],
            'hari' => [
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} harus diisi.'
                ]
            ],
            'waktu' => [
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} harus diisi.'
                ]
            ],
            'tempat' => [
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} harus diisi.'
                ]
            ]
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/Kuliah/create_matkul')->withInput()->with('validation',$validation);
        }

        $this->matkulModel->save([
            'id_matkul' => $this->request->getVar('id_matkul'),
            'id' => $this->request->getVar('id'),
            'nama_matkul' => $this->request->getVar('nama_matkul'),
            'sks' => $this->request->getVar('sks'),
            'hari' => $this->request->getVar('hari'),
            'waktu' => $this->request->getVar('waktu'),
            'tempat' => $this->request->getVar('tempat')

        ]);
        session()->setFlashdata('pesan','Data Berhasil Ditambahkan.');
        return redirect()->to('/Kuliah/matkul');

    
    }

    public function delete_matkul($id){
        $this->matkulModel->delete($id);
        session()->setFlashdata('pesan','Data Berhasil Dihapus.');
        return redirect()->to('/Kuliah/matkul');
    }

    public function edit_matkul($id){
        $data = [
            'title' => 'Form Ubah Data MataKuliah',
            'validation' => \Config\Services::validation(),
            'Tugas' =>$this->matkulModel->getMatkul($id)
        ];

        return view('Tugas/edit_matkul',$data);
    }

    public function update_matkul($id){
        $this->matkulModel->save([
            'id_matkul' => $id,
            'nama_matkul' => $this->request->getVar('nama_matkul'),
            'sks' => $this->request->getVar('sks'),
            'hari' => $this->request->getVar('hari'),
            'waktu' => $this->request->getVar('waktu'),
            'tempat' => $this->request->getVar('tempat')


        ]);
        session()->setFlashdata('pesan','Data Berhasil Diubah.');
        return redirect()->to('/Kuliah/matkul');
    }

    public function mahasiswa(){
        $mhs = $this->mhsModel->findAll();
        $data = [
            'title' => 'Data Mahasiswa | Web Perkuliahan',
            'Tugas' => $mhs
        ];

        
        return view('Tugas/data_mhs',$data);
    }

    public function create_mhs()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Mahasiswa',
            'validation' => \Config\Services::validation()
        ];

        return view('Tugas/create_mhs',$data);
    }

    public function save_mhs()
    {
        
        //validasi input
        if(!$this->validate([
            'nim' => [
                'rules' => 'required|is_unique[data_mahasiswa.nim]',
                'errors' => [
                    'required'=>'{field} mahasiswa harus diisi.',
                    'is_unique' => '{field} mahasiswa sudah terdaftar'
                ]

            ],
            'nama_mhs' => [
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} harus diisi.'
                ]
            ],
            'jurusan' => [
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field}  harus diisi.'
                ]
            ],
            'semester'=>[
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} harus diisi.'
                ]
            ]
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/Kuliah/create_mhs')->withInput()->with('validation',$validation);
        }

        $this->mhsModel->save([
            'nim' => $this->request->getVar('nim'),
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'jurusan' => $this->request->getVar('jurusan'),
            'semester' => $this->request->getVar('semester')
        ]);
        session()->setFlashdata('pesan','Data Berhasil Ditambahkan.');
        return redirect()->to('/Kuliah/mahasiswa');

    }

    public function delete_mhs($id){
        $this->mhsModel->delete($id);
        session()->setFlashdata('pesan','Data Berhasil Dihapus.');
        return redirect()->to('/Kuliah/mahasiswa');
    }

    public function edit_mhs($id){
        $data = [
            'title' => 'Form Ubah Data Mahasiswa',
            'validation' => \Config\Services::validation(),
            'Tugas' =>$this->mhsModel->getMhs($id)
        ];

        return view('Tugas/edit_mhs',$data);
    }

    public function update_mhs($id){
        $this->mhsModel->save([
            'nim' => $id,
            'nama_mhs' => $this->request->getVar('nama_mhs'),
            'jurusan' => $this->request->getVar('jurusan'),
            'semester' => $this->request->getVar('semester')
        ]);
        session()->setFlashdata('pesan','Data Berhasil Diubah.');
        return redirect()->to('/Kuliah/mahasiswa');
    }

    public function data_konkul(){
        
        $konkul = $this->konkulModel->getAllKonkul();
        $data = [
            'title' => 'Data Kontrak Kuliah | Web Perkuliahan',
            'Tugas' => $konkul
        ];

        
        return view('Tugas/data_konkul',$data);
    }

    public function create_konkul()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Mahasiswa',
            'validation' => \Config\Services::validation()
        ];

        $data['nim']=$this->mhsModel->getAllMhs();
        $data['id_matkul']=$this->matkulModel->getAllMatakul();
        $data['id']=$this->dosenModel->getAllDosen();

        return view('Tugas/create_konkul',$data);
    }

    public function save_konkul()
    {
        
        //validasi input
        if(!$this->validate([
            'nim' => [
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} harus diisi.'
                ]
            ],
            'id_matkul' => [
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field} harus diisi.'
                ]
            ],
            
            'id' => [
                'rules' => 'required',
                'errors' => [
                    'required'=>'{field}  harus diisi.'
                ]
            ]
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/Kuliah/create_konkul')->withInput()->with('validation',$validation);
        }

        $this->konkulModel->save([
            'id_kontrak' => $this->request->getVar('id_kontrak'),

            'nim' => $this->request->getVar('nim'),
            'id_matkul' => $this->request->getVar('id_matkul'),
            'id' => $this->request->getVar('id')

        ]);
        session()->setFlashdata('pesan','Data Berhasil Ditambahkan.');
        return redirect()->to('/Kuliah/data_konkul');
    }

    public function delete_konkul($id){
        $this->konkulModel->delete($id);
        session()->setFlashdata('pesan','Data Berhasil Dihapus.');
        return redirect()->to('/Kuliah/data_konkul');
    }

    public function edit_konkul($id){
        $data = [
            'title' => 'Form Ubah Data Mahasiswa',
            'validation' => \Config\Services::validation(),
            'Tugas' =>$this->konkulModel->getKonkul($id),
            'nim' => $this->mhsModel->getAllMhs(),
            'id_matkul' => $this->matkulModel->getAllMatakul(),
            'id' => $this->dosenModel->getAllDosen()
        ];
       
        return view('Tugas/edit_konkul',$data);
    }

    public function update_konkul($id){
        $this->konkulModel->save([
            'id_kontrak' => $id,
            'nim' => $this->request->getVar('nim'),
            'id_matkul' => $this->request->getVar('id_matkul'),
            'id' => $this->request->getVar('id')
        ]);
        
        session()->setFlashdata('pesan','Data Berhasil Diubah.');
        return redirect()->to('/Kuliah/data_konkul');
    }

    public function login(){
        return view ('/login');
    }

    public function process(){
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $this->userModel->getUser($username);

        if ($dataUser){
            if ($password == $dataUser['password']) {
                session()->set([
                    'username' => $dataUser['username'],
                    'name' => $dataUser['nama'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('/Kuliah'));
            } else {
                session()->setFlashdata('error','Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error','if akhir');
            return redirect()->back();
        }

    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function exportPDF()
    {
        $data['Tugas'] = $this->konkulModel->getAllKonkul();
        $data['nim']=$this->mhsModel->getAllMhs();
        $data['id_matkul']=$this->matkulModel->getAllMatakul();
        $data['id']=$this->dosenModel->getAllDosen();
        $html_view = view('Tugas/report', $data);

        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // $pdf = new TCPDF('landscape', PDF_UNIT, 'A4', true, 'UTF-8', false);


        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Lisa Amri Mubarokah');
        $pdf->SetTitle('Daftar Kontrak Kuliah');
        $pdf->SetSubject('Praktikum Desain dan Pemrograman Web');

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->AddPage();
        $pdf->writeHTML($html_view, true, false, true, false, '');
        $this->response->setContentType('application/pdf');
        $pdf->Output('report.pdf', 'I');
    }

}
