<?php
defined('BASEPATH') or exit('No Direct script access allowed');
class Laporan extends CI_Controller
{

public function buku()
{
    $data['title']      = 'Laporan Data Buku';
    $data['user']       = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    // Menggunakan pagination
    // CONFIG
    $config['base_url'] = 'http://localhost/pustaka/laporan/buku';
    $config['total_rows'] = $this->Buku_model->countAllBook();
    $config['per_page'] = 5;
    // STYLE
    $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul> </nav>';
    $config['first_link']   = 'First';
    $config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li">';
    $config['last_link']   = 'Last';
    $config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li">';
    $config['next_link']   = '&raquo';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li">';
    $config['prev_link']   = '&laquo';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li">';
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li">';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li">';
    $config['attributes'] = array('class' => 'page-link');
    // INITIALIZE
    $this->pagination->initialize($config);
    // EKSEKUSI
    $data['start']      = $this->uri->segment(3);
    $data['buku']       = $this->Buku_model->getBukuPag($config['per_page'], $data['start']);
    $data['anggota']    = $this->User_model->getUserLimit()->result_array();
    $this->load->view('templates/admin/header', $data);
    $this->load->view('templates/admin/sidebar', $data);
    $this->load->view('templates/admin/topbar', $data);
    $this->load->view('admin/laporan/laporan_buku', $data);
    $this->load->view('templates/admin/footer');
}

public function buku_pdf()
	{
		$this->load->library('dompdf_gen');

		$data['item'] = $this->Buku_model->getBuku()->result_array();

		$this->load->view('admin/laporan/laporan_pdf_buku', $data);

		$paper_size = 'A4'; // ukuran kertas
		$orientation = 'landscape'; //tipe format kertas portrait atau landscape
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);
		//Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_data_buku.pdf", array('Attachment' => 0));
		//nama file pdf yang di hasilkan
	}

public function anggota_pdf()
{
    $this->load->library('dompdf_gen');

		$data['anggota'] = $this->User_model->getUser()->result_array();

		$this->load->view('admin/laporan/laporan_pdf_anggota', $data);

		$paper_size = 'A4'; // ukuran kertas
		$orientation = 'landscape'; //tipe format kertas portrait atau landscape
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);
		//Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_data_anggota.pdf", array('Attachment' => 0));
		//nama file pdf yang di hasilkan
}

public function export_excel()
{
    $data = array('title' => 'Laporan Buku', 'buku' => $this->Buku_model->getBuku()->result_array());
    $this->load->view('admin/laporan/export_excel_buku', $data);
}

public function export_excel_anggota()
{
    $data = array('title' => 'Laporan Anggota', 'anggota' => $data['anggota']  = $this->User_model->getUserPag());
    $this->load->view('admin/laporan/export_excel_anggota', $data);
}

public function pinjam()
{
    $data['start']   = $this->uri->segment(3);
    $data['title']   = 'Laporan Data Peminjaman';
    $data['items'] = $this->db->query("SELECT no_pinjam,name,tgl_pinjam,tgl_kembali,tgl_pengembalian,total_denda,status FROM pinjam INNER JOIN user ON pinjam.id = user.id")->result_array();
    $data['item'] = $this->db->query("SELECT judul_buku FROM buku INNER JOIN pinjam_detail ON buku.id = pinjam_detail.id_buku")->result_array();
    $data['pinjam'] = $this->Pinjam_model->joinData();
    $data['user']    = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/admin/header', $data);
    $this->load->view('templates/admin/sidebar');
    $this->load->view('templates/admin/topbar', $data);
    $this->load->view('admin/laporan/pinjam', $data);
    $this->load->view('templates/admin/footer');
}

public function cetak_laporan_pinjam()
{
    $data['start']   = $this->uri->segment(3);
    $data['items'] = $this->db->query("SELECT no_pinjam,name,tgl_pinjam,tgl_kembali,tgl_pengembalian,total_denda,status FROM pinjam INNER JOIN user ON pinjam.id = user.id")->result_array();
    $data['item'] = $this->db->query("SELECT judul_buku FROM buku INNER JOIN pinjam_detail ON buku.id = pinjam_detail.id_buku")->result_array();
    $this->load->view('admin/laporan/laporan-print-pinjam', $data);
}

public function cetak_laporan_buku()
{
    $data['buku'] = $this->Buku_model->getBuku()->result_array();
    $data['kategori'] = $this->Buku_model->getKategori()->result_array();

    $this->load->view('admin/laporan/laporan_print_buku', $data);
}
public function cetak_laporan_anggota()
{
    $data['anggota']  = $this->User_model->getUserPag();
    $this->load->view('admin/laporan/laporan_print_anggota', $data);
}

public function laporan_pinjam_pdf()
{

    $this->load->library('dompdf_gen');

    $data['items'] = $this->db->query("SELECT no_pinjam,name,tgl_pinjam,tgl_kembali,tgl_pengembalian,total_denda,status FROM pinjam INNER JOIN user ON pinjam.id = user.id")->result_array();
    $data['item'] = $this->db->query("SELECT judul_buku FROM buku INNER JOIN pinjam_detail ON buku.id = pinjam_detail.id_buku")->result_array();
    $this->load->view('admin/laporan/laporan-pdf-pinjam', $data);

    $paper_size = 'A4'; // ukuran kertas
    $orientation = 'landscape'; //tipe format kertas potrait atau landscape
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);
    //Convert to PDF
    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("laporan_data_peminjaman.pdf", array('Attachment' => 0));
    // nama file pdf yang di hasilkan

}

public function export_excel_pinjam()
{
    $data['start']   = $this->uri->segment(3);
    $data['title']   = 'Laporan Data Peminjaman';
    $data['items'] = $this->db->query("SELECT no_pinjam,name,tgl_pinjam,tgl_kembali,tgl_pengembalian,total_denda,status FROM pinjam INNER JOIN user ON pinjam.id = user.id")->result_array();
    $data['item'] = $this->db->query("SELECT judul_buku FROM buku INNER JOIN pinjam_detail ON buku.id = pinjam_detail.id_buku")->result_array();
    $this->load->view('admin/laporan/export-excel-pinjam', $data);
}

public function anggota()
{
    $data['start']   = $this->uri->segment(3);
    $data['anggota']  = $this->User_model->getUserPag();
    $data['title']   = 'Laporan Data Anggota';
    $data['user']    = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/admin/header', $data);
    $this->load->view('templates/admin/sidebar');
    $this->load->view('templates/admin/topbar', $data);
    $this->load->view('admin/laporan/anggota', $data);
    $this->load->view('templates/admin/footer');
}
}