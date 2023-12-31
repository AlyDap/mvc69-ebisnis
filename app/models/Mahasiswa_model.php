<?php

class Mahasiswa_model
{
  private $table = 'mahasiswa';
  private $db;
  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllMahasiswa()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }
  public function getMahasiswaById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
  public function tambahDataMahasiswa()
  {
    $query = "INSERT INTO mahasiswa
                VALUES
              ('', :nama, :nim, :email, :jurusan)";
    $this->db->query($query);
    $this->db->bind('nama', $_POST['nama']);
    $this->db->bind('nim', $_POST['nim']);
    $this->db->bind('email', $_POST['email']);
    $this->db->bind('jurusan', $_POST['jurusan']);
    $this->db->execute();
    return $this->db->rowCount();
  }
  public function hapusDataMahasiswa($id)
  {
    $query = "DELETE FROM mahasiswa WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
  public function ubahDataMahasiswa()
  {
    $query = "UPDATE mahasiswa SET
              nama = :nama,
              nim = :nim,
              email = :email,
              jurusan = :jurusan
              WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('nama', $_POST['nama']);
    $this->db->bind('nim', $_POST['nim']);
    $this->db->bind('email', $_POST['email']);
    $this->db->bind('jurusan', $_POST['jurusan']);
    $this->db->bind('id', $_POST['id']);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
