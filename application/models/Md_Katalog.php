<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Md_Katalog extends CI_Model
{
    public function totalProduct($product_name, $id_kategori, $id_merk)
    {
        $status_product = array('0', '4');
        $this->db->select('tb.id_barang, tb.id_satuan, tb.id_subkategori, tb.id_merk, tb.kode_barang, tb.status_product, tb.nama_barang, tb.harga_jual, tb.jenis_barang, tsat.nama_satuan, tsub.id_subkategori, tsub.nama_subkategori, tsub.id_kategori, ts.stok_update, tfot.nama_foto_barang')
            ->from('tabel_barang tb')
            ->join('tabel_subkategori tsub', 'tb.id_subkategori = tsub.id_subkategori', 'inner')
            ->join('tabel_satuan tsat', 'tb.id_satuan = tsat.id_satuan', 'inner')
            ->join('tabel_merk tm', 'tb.id_merk = tm.id_merk', 'inner')
            ->join('tabel_stok ts', 'tb.id_barang = ts.id_barang', 'inner')
            ->join('tabel_foto_barang tfot', 'tfot.id_barang = tb.id_barang', 'inner');
        // ->like('tsub.id_kategori', $id_kategori, 'both');

        if ($product_name !== "") {
            $this->db->like('tb.nama_barang', $product_name, 'both');
        }

        if ($id_kategori == "null") {
            "";
        } else {
            $this->db->like('tsub.id_kategori', $id_kategori, 'both');
        }

        if ($id_merk == "null") {
            "";
        } else {
            $this->db->like('tb.id_merk', $id_merk, 'both');
        }


        $this->db->where_in('tb.status_product', $status_product)->where('tb.status_barang', 0)->where('tfot.status_foto_barang', 0);

        // $this->db->limit($limit, $start);
        $this->db->order_by('tb.kode_barang', 'ASC');
        $this->db->group_by('tb.id_barang');

        $data = $this->db->get();

        return $data->num_rows();
    }

    public function getProduct($limit, $start, $product_name, $id_kategori, $id_merk)
    {

        // if ($id_kategori == "null") {
        //     $filter = "";
        // } else {
        //     if ($id_merk == "null") {
        //         $filter = "WHERE tsub.id_kategori LIKE '%$id_kategori%'";
        //     } else {
        //         $filter = "WHERE tsub.id_kategori LIKE '%$id_kategori%' AND tb.id_merk = '$id_merk'";
        //     }
        // }

        $status_product = array('0', '4');

        $this->db->select('tb.id_barang, tb.id_satuan, tb.id_subkategori, tb.id_merk, tb.kode_barang, tb.status_product, tb.nama_barang, tb.harga_jual, tb.jenis_barang, tsat.nama_satuan, tsub.id_subkategori, tsub.nama_subkategori, tsub.id_kategori, ts.stok_update, tfot.nama_foto_barang')
            ->from('tabel_barang tb')
            ->join('tabel_subkategori tsub', 'tb.id_subkategori = tsub.id_subkategori', 'inner')
            ->join('tabel_satuan tsat', 'tb.id_satuan = tsat.id_satuan', 'inner')
            ->join('tabel_merk tm', 'tb.id_merk = tm.id_merk', 'inner')
            ->join('tabel_stok ts', 'tb.id_barang = ts.id_barang', 'inner')
            ->join('tabel_foto_barang tfot', 'tfot.id_barang = tb.id_barang', 'inner');
        // ->like('tsub.id_kategori', $id_kategori, 'both');

        if ($product_name !== "") {
            $this->db->like('tb.nama_barang', $product_name, 'both');
        }

        if ($id_kategori == "null") {
            "";
        } else {
            $this->db->like('tsub.id_kategori', $id_kategori, 'both');
        }

        if ($id_merk == "null") {
            "";
        } else {
            $this->db->like('tb.id_merk', $id_merk, 'both');
        }

        $this->db->where_in('tb.status_product', $status_product)->where('tb.status_barang', 0)->where('tfot.status_foto_barang', 0);
        // $filter;
        $this->db->limit($limit, $start);
        $this->db->order_by('tb.kode_barang', 'ASC');
        $this->db->group_by('tb.id_barang');

        $data = $this->db->get();

        return $data->result();
    }

    // public function getProduct2($limit, $start, $product_name, $id_kategori, $id_merk)
    // {
    //     if ($id_kategori == "null") {
    //         $filter = "";
    //     } else {
    //         if ($id_merk == "null") {
    //             $filter = "WHERE tsub.id_kategori LIKE '%$id_kategori%'";
    //         } else {
    //             $filter = "WHERE tsub.id_kategori LIKE '%$id_kategori%' AND tb.id_merk = '$id_merk'";
    //         }
    //     }

    //     $data = $this->db->query("SELECT tb.id_barang, tb.id_satuan, tb.id_subkategori, tb.id_merk, tb.kode_barang, tb.status_product, tb.nama_barang, tb.harga_jual, tb.jenis_barang, tsat.nama_satuan, tsub.id_subkategori, tsub.nama_subkategori, tsub.id_kategori, ts.stok_update, tfot.nama_foto_barang 
    //                                 FROM tabel_barang tb
    //                                 INNER JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori
    //                                 INNER JOIN tabel_satuan tsat ON tsat.id_satuan = tb.id_satuan
    //                                 INNER JOIN tabel_merk tm ON tm.id_merk = tb.id_merk
    //                                 INNER JOIN tabel_stok ts ON ts.id_barang = tb.id_barang
    //                                 INNER JOIN tabel_foto_barang tfot ON tfot.id_barang = tb.id_barang
    //                                 $filter
    //                                 AND tb.status_product !=2
    //                                 AND tb.status_barang=0  
    //                                 AND tsub.status_subkategori =0 
    //                                 AND tfot.status_foto_barang =0
    //                                 AND tb.nama_barang LIKE '%$product_name%'
    //                                 ORDER BY tb.kode_barang ASC
    //                                 LIMIT $limit, $start ");

    //     // if ($product_name !== "") {
    //     //     $this->db->like('tb.nama_barang', $product_name, 'both');
    //     // }

    //     // $this->db->limit($limit, $start);

    //     // $data = $this->db->get();
    //     return $data->result();
    // }

    public function searchKategori($id, $search)
    {
        if ($id == "") {
            $filter = "";
        } else {
            $filter = " WHERE tsub.id_kategori LIKE '%$id%' AND tb.nama_barang LIKE '%$search%'";
        }

        $data = $this->db->query("SELECT tb.id_barang, tb.nama_barang, tsub.id_subkategori, tsub.nama_subkategori , tfot.nama_foto_barang
                    FROM tabel_subkategori tsub 
                    INNER JOIN tabel_barang tb ON tsub.id_subkategori = tb.id_subkategori  
                    LEFT JOIN tabel_foto_barang tfot ON tb.id_barang = tfot.id_barang
                    $filter
                    AND tb.status_barang=0  
                    AND tsub.status_subkategori =0 
                    and tfot.status_foto_barang =0

                    LIMIT 20 ")->result();


        return $data;
    }

    public function get_listmerk($id)
    {
        if ($id === "") {
            $filter = 'WHERE status_merk = 0 LIMIT 20';
        } else {
            $filter = "WHERE status_merk = 0 AND tk.id_kategori LIKE '%$id%' LIMIT 20";
        }

        $data = $this->db->query("SELECT DISTINCT tm.nama_merk, tb.id_merk, tk.id_kategori, tk.nama_kategori FROM tabel_barang tb
                                    INNER JOIN tabel_merk tm ON tb.id_merk = tm.id_merk
                                    INNER JOIN tabel_subkategori ts ON ts.id_subkategori = tb.id_subkategori
                                    INNER JOIN tabel_kategori tk ON tk.id_kategori = ts.id_kategori " . $filter . "")->result();

        // $data = $this->db->query("SELECT DISTINCT tm.nama_merk, tb.id_merk FROM tabel_barang tb
        //                          INNER JOIN tabel_merk tm ON tb.id_merk = tm.id_merk " . $filter . "")->result();

        return $data;
    }
}

/* End of file Md_Katalog.php */
