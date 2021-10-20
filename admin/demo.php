<?php 
class donvi
{
    private $madv;
    private $tendv;
    private $diachi;
    private $email;
    private $website;
    private $sdt;

    
    public function __construct($madv, $tendv, $diachi, $email,$website,$sdt)
    {
      $this->madv = $madv;
      $this->tendv = $tendv;
      $this->diachi = $diachi;
      $this->email = $email;
      $this->website = $website;
      $this->sdt = $sdt;
    }
   
    public function getmasv()
    {
      return $this->madv;
    }
   
    public function gettendv()
    {
      return $this->tendv;
    }
   
    public function getremail()
    {
      return $this->email;
    }
    public function getdiachi()
    {
      return $this->diachi;
    }
    public function getwebsite()
    {
      return $this->website;
    }
    public function getsdt()
    {
      return $this->sdt;
    }
  }
?>