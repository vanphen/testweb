<?php 

class PhanSo{

	public $tu;
	public $mau;

	public function setPhanSo($_tu,$_mau){
		if($_mau == 0){
			echo 'mau khong the la 0';
			return 0;
		}else{
			$this->tu = $_tu;
			$this->mau = $_mau;
		}
	}


	public function getPhanSo(){
		echo $this->tu/$this->mau;
	}

	public function Cong($_tu,$_mau){
		echo 'phep cong 2 so = '.($this->tu *$_mau + $_tu * $this->mau)/($this->mau * $_mau).'<br>';


	}
	public function Tru($_tu,$_mau){
		echo 'phep tru 2 so = '.($this->tu *$_mau - $_tu * $this->mau)/($this->mau * $_mau).'<br>';


	}

	public function Nhan($_tu,$_mau){
		echo 'phep nhan 2 so = '.($this->tu * $_tu)/($this->mau *  $_mau).'<br>';
	}

	public function Chia($_tu,$_mau){
		echo 'phep chia 2 so = '.($this->tu * $_mau)/($this->mau * $_tu).'<br>';


	}



}

$phanso = new PhanSo();

$phanso->setPhanSo(1,2);

$phanso->Cong(3,2);

$phanso->Tru(1,1);

$phanso->Chia(1,4);

$phanso->Nhan(2,1);



 ?>