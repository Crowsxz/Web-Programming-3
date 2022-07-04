<?php
class Model_latihan1 extends CI_Model
{
	public $nilai1, $nilai2, $hasil;
	public function jumlah($nilai1=null, $nilai2=null)
	{
		$this->nilai1 = $nilai1;
		$this->nilai2 = $nilai2;
		$this->hasil = $this->nilai1 + $this->nilai2;
		return $this->hasil;
	}
} 
?>