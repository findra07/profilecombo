<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Md_Shop extends CI_Model
{
    public function getSemua($id_kategori, $id_merk, $id_subkategori, $limit = null, $start = null)
    {
        if ($id_kategori === "") {
            $filter = "";
        } else {
            $filter = $id_kategori;
        }

        if ($id_merk === "") {
            $filter2 = "";
        } else {
            $filter2 = $id_merk;
        }

        if ($id_subkategori === "") {
            $filter3 = "";
        } else {
            $filter3 = $id_subkategori;
        }


        $status_product = array('0', '4');

        $this->db->select('tb.id_barang, tb.id_satuan, tb.id_subkategori, tb.id_merk, tb.kode_barang, tb.status_product, tb.nama_barang, tb.harga_jual, tb.jenis_barang, tsat.nama_satuan, tsub.id_subkategori, tsub.nama_subkategori, tsub.id_kategori, ts.stok_update, tfot.nama_foto_barang')
            ->from('tabel_barang tb')
            ->join('tabel_subkategori tsub', 'tb.id_subkategori = tsub.id_subkategori', 'inner')
            ->join('tabel_satuan tsat', 'tb.id_satuan = tsat.id_satuan', 'inner')
            ->join('tabel_merk tm', 'tb.id_merk = tm.id_merk', 'inner')
            ->join('tabel_stok ts', 'tb.id_barang = ts.id_barang', 'inner')
            ->join('tabel_foto_barang tfot', 'tfot.id_barang = tb.id_barang', 'inner')
            ->where_in('tb.status_product', $status_product)->where('tb.status_barang', 0)
            ->like('tsub.id_kategori', $filter, 'both')
            ->like('tm.id_merk', $filter2, 'both')
            ->like('tsub.id_subkategori', $filter3, 'both')
            ->limit($limit, $start)
            ->order_by('tb.kode_barang', 'ASC');

        $query = $this->db->get()->result();
        return $query;
    }

    public function getTampilKategori()
    {
        $data = $this->db->query("SELECT * FROM tabel_kategori WHERE status_kategori= 0 ")->result();
        return $data;
    }

    public function getTampilMerk($id_kategori)
    {
        if ($id_kategori === "") {
            $filter_id = "";
        } else {
            $filter_id = "WHERE d.id_kategori = '$id_kategori'";
        }
        $data = $this->db->query("SELECT DISTINCT a.*, d.id_kategori FROM tabel_merk a 
                                    JOIN tabel_barang b ON a.id_merk = b.id_merk
                                    JOIN tabel_subkategori c ON b.id_subkategori = c.id_subkategori
                                    JOIN tabel_kategori d ON c.id_kategori = d.id_kategori
                                    $filter_id")->result();

        return $data;
    }

    public function getTotalProduk($id_kategori, $id_merk, $id_subkategori, $limit = null, $start = null)
    {

        if ($id_kategori === "") {
            $filter = "";
        } else {
            $filter = $id_kategori;
        }

        if ($id_merk === "") {
            $filter2 = "";
        } else {
            $filter2 = $id_merk;
        }

        if ($id_subkategori === "") {
            $filter3 = "";
        } else {
            $filter3 = $id_subkategori;
        }


        $status_product = array('0', '4');

        $this->db->select('tb.id_barang, tb.id_satuan, tb.id_subkategori, tb.id_merk, tb.kode_barang, tb.status_product, tb.nama_barang, tb.harga_jual, tb.jenis_barang, tsat.nama_satuan, tsub.id_subkategori, tsub.nama_subkategori, tsub.id_kategori, ts.stok_update, tfot.nama_foto_barang')
            ->from('tabel_barang tb')
            ->join('tabel_subkategori tsub', 'tb.id_subkategori = tsub.id_subkategori', 'inner')
            ->join('tabel_satuan tsat', 'tb.id_satuan = tsat.id_satuan', 'inner')
            ->join('tabel_merk tm', 'tb.id_merk = tm.id_merk', 'inner')
            ->join('tabel_stok ts', 'tb.id_barang = ts.id_barang', 'inner')
            ->join('tabel_foto_barang tfot', 'tfot.id_barang = tb.id_barang', 'inner')
            ->where_in('tb.status_product', $status_product)->where('tb.status_barang', 0)
            ->like('tsub.id_kategori', $filter, 'both')
            ->like('tm.id_merk', $filter2, 'both')
            ->like('tsub.id_subkategori', $filter3, 'both')
            ->limit($limit, $start)
            ->order_by('tb.kode_barang', 'ASC');

        $query = $this->db->get();
        return $query;
    }

    public function contentsingle($id_barang)
    {
        $detail = $this->db->query("select tb.id_barang, tb.kode_barang, tb.nama_barang, tb.deskripsi_barang, tb.harga_jual, tfb.nama_foto_barang, ts.stok_update, tb.jenis_barang from tabel_barang tb 
                            LEFT JOIN tabel_foto_barang tfb ON tb.id_barang = tfb.id_barang
                            INNER JOIN tabel_stok ts ON ts.id_barang = tb.id_barang
                            where tb.id_barang='$id_barang' order by tfb.created_at ASC LIMIT 1")->row();

        return $detail;
    }
}

/* End of file Md_Shop.php */
