<?php

class mtk_Model extends CI_Model
{


    public function getMatakuliah()
    {

        $this->db->select('*');
        $this->db->from('mst_matakuliah');
        $query = $this->db->get();
        return $query->result();
    }

    public function simpanmtk($data)
    {
        $respon = $this->db->insert('mst_matakuliah', $data);
        if ($respon) {
            return true;
        } else {
            return false;
        }
    }

    public function getMatakuliahBykd($param)
    {
        $this->db->select('*');
        $this->db->from('mst_matakuliah');
        $this->db->where('kd_matakuliah', $param);
        $query = $this->db->get();
        return $query->row();
    }

    public function updateMtk($data)
    {
        $this->db->where('kd_matakuliah',$data['kd_matakuliah']);
        $respon = $this->db->update('mst_matakuliah', $data);
        if ($respon) {
            return true;
        } else {
            return false;
        }
    }

}