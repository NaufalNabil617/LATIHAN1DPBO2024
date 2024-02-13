<?php

//Membuat class Dpr
class Dpr{
    //Private attributes dari class Dpr
    private $id = '';
    private $nama = '';
    private $bidang = '';
    private $partai = '';
    private $foto = '';

    //Public methods dari class Dpr
    /*Constructors*/
    //Methods untuk set attributes dari class Dpr dengan parameter
    public function __construct($id = '', $nama = '', $bidang = '', $partai = '', $foto = '')
    {
        //Set attributes pada class Dpr sesuai isi parameter
        $this->id = $id;
        $this->nama = $nama;
        $this->bidang = $bidang;
        $this->partai = $partai;
        $this->foto = $foto;
    }

    /*Getter dan Setter*/

    //Getter dan setter untuk id Dpr
    public function setID($id){
        $this->id = $id;
    }
    public function getID(){
        return $this->id;
    }

    //Getter dan setter untuk nama Dpr
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }

    //Getter dan setter untuk bidang Dpr
    public function setBidang($bidang){
        $this->bidang = $bidang;
    }
    public function getBidang(){
        return $this->bidang;
    }

    //Getter dan setter untuk partai Dpr
    public function setPartai($partai){
        $this->partai = $partai;
    }
    public function getPartai(){
        return $this->partai;
    }

    //Getter dan setter untuk foto Dpr
    public function setFoto($foto){
        $this->foto = $foto;
    }
    public function getFoto(){
        return $this->foto;
    }
}

?>