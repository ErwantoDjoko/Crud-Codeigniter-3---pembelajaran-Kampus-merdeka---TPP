<?php

class mhs_Model extends CI_Model
{



    public function getMahasiswa()
    {

        $this->db->select('*');
        $this->db->from('mst_mahasiswa');
        $query = $this->db->get();
        return $query->result();
    }

    public function getMahasiswaByNim($param)
    {

        $this->db->select('*');
        $this->db->from('mst_mahasiswa');
        $this->db->where('nim', $param);
        $query = $this->db->get();
        return $query->row();
    }

    public function getMatakuliahByNim($param)
    {

        $this->db->select('*');
        $this->db->from('list_sks');
        $this->db->join('mst_matakuliah', 'mst_matakuliah.kd_matakuliah=list_sks.kd_matakuliah');
        $this->db->where('list_sks.nim', $param);
        $query = $this->db->get();
        return $query->result();
    }


    public function registerMhs($data)
    {
        $respon = $this->db->insert('mst_mahasiswa', $data);
        if ($respon) {
            return true;
        } else {
            return false;
        }
    }
    public function updateMhs($data)
    {
        $this->db->where('nim',$data['nim']);
        $respon = $this->db->update('mst_mahasiswa', $data);
        if ($respon) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteMhs($nim)
    {
        $this->db->where('nim',$nim);
        $respon = $this->db->delete('mst_mahasiswa');
        if ($respon) {
            return true;
        } else {
            return false;
        }
    }



}