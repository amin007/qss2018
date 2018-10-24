<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__; 
class Qss extends \Aplikasi\Kitab\Kawal
{
#==========================================================================================
	function __construct()
	{
		parent::__construct();
		//\Aplikasi\Kitab\Kebenaran::kawalMasuk();
		\Aplikasi\Kitab\Kebenaran::kawalKeluar();
		$this->_folder = huruf('kecil', namaClass($this));
	}
##-----------------------------------------------------------------------------------------
	public function index()
	{
		# Set pemboleubah utama
		$this->papar->tajuk = namaClass($this);
		//echo '<hr> Nama class : ' . namaClass($this) . '<hr>';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder, 'index', $noInclude=0);
	}
##-----------------------------------------------------------------------------------------
	public function paparKandungan($folder, $fail, $noInclude)
	{	# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/' . $fail, $jenis, $noInclude); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}
##-----------------------------------------------------------------------------------------
	public function semakPembolehubah($senarai)
	{
		echo '<pre>$senarai:<br>';
		print_r($senarai);
		echo '</pre>|';//*/
	}
##-----------------------------------------------------------------------------------------
	public function debugKandunganPaparan()
	{
		echo '<hr>Nama class :' . __METHOD__ . '()<hr><pre>';
		$semak = array('idBorang','senarai','myTable','_jadual','carian','c1','c2',
			'medan','bentukJadual01','bentukJadual02','bentukJadual03',
			'_pilih','_5p','template','pilihJadual','template2','pilihJadual2');
		$takWujud = array(); $kira = 0;

		foreach($semak as $apa):
			if(isset($this->papar->$apa)):
				echo '<br>$this->papar->' . $apa . ' : ';
				print_r($this->papar->$apa);
			else:
				$takWujud[$kira++] = '$this->papar->' . $apa;
			endif;
		endforeach;

		echo '<hr><font color="red">tidak wujud : ';
		print_r($takWujud);
		echo '</font></pre>';
	}
##-----------------------------------------------------------------------------------------
	function logout()
	{
		//echo '<pre>sebelum:'; print_r($_SESSION) . '</pre>';
		\Aplikasi\Kitab\Sesi::destroy();
		header('location: ' . URL);
		//exit;
	}
#==========================================================================================
# mula - semak database
###------------------------------------------------------------------------------------------
	function panggilTable($myJadual,$pilih,$medanID)
	{
		# Set pembolehubah utama
		list($medan, $carian, $susun) = $this->tanya->setPencam($pilih,$medanID,$dataID);
		$this->papar->senarai[$pilih] = $this->tanya->//cariSql
			cariSemuaData
			($myJadual, $medan, $carian, $susun);
		# Set pembolehubah untuk Papar
		$this->kandunganPaparan($pilih, $myJadual);
		//$this->debugKandunganPaparan($pilih, $myJadual);
	}
###------------------------------------------------------------------------------------------
# tamat - semak database
#==========================================================================================
#-------------------------------------------------------------------------------------------
	function semaknama($nama)
	{
		# Semak data $_POST
		echo '<pre>$_POST->'; print_r($_POST) . '</pre>| ';
		echo '<pre>$nama->'; print_r($nama) . '</pre>| ';
		echo 'Kod:' . \Aplikasi\Kitab\RahsiaHash::rahsia('md5', $nama) . ': ';
		//echo 'Kod:' . RahsiaHash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY) . ': ';
	}
#-------------------------------------------------------------------------------------------
	public function suku1($action = 'hasil')
	{
		# Set pemboleubah utama
		$this->papar->tajuk = namaClass($this);
		//echo '<hr> Nama class : ' . namaClass($this) . '<hr>';
		$pilihFail = $this->pilihFail($action);

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder, $pilihFail, $noInclude=1);
	}
#-------------------------------------------------------------------------------------------
	public function suku2($medanID = null, $suku = 2,$action = 'hasil')
	{
		# Set pemboleubah utama
		$this->papar->tajuk = namaClass($this);
		//echo '<hr> Nama class : ' . namaClass($this) . '<hr>';
		$this->papar->suku = $suku;
		$this->papar->medanID = $medanID;
		$this->pilihjadual($medanID);
		$pilihFail = $this->pilihFail($action);

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		//$this->paparKandungan($this->_folder, $pilihFail, $noInclude=1);
	}
#-------------------------------------------------------------------------------------------
	function pilihFail($action = 'hasil')
	{
		if($action == 'rangka'):
			$pilihFail = 'tab01_rangka';
		elseif($action == 'hasil'):
			$pilihFail = 'qss01_hasil';
			//$pilihFail = 'tab02_hasil';
		elseif($action == 'aset'):
			$pilihFail = 'tab03_aset';
		elseif($action == 'tambahan'):
			$pilihFail = 'tab04_tambahan';
		endif;

		return $pilihFail;
	}
#-------------------------------------------------------------------------------------------
	function pilihJadual($medanID)
	{
		$senarai = array('01qss2018-q2-mk','02qss2018-q2-ejen_hartanah',
		'03qss2018-q2-kesenian','04qss2018-q2-profesional','05qss2018-q2-penginapan',
		'06qss2018-q2-pengangkutan_penyimpanan','07qss2018-q2-kesihatan',
		'08qss2018-q2-fnb','09qss2018-q2-perkhidmatan_lain',
		'10qss2018-q2-pks','11qss2018-q2-pendidikan');

		foreach($senarai as $myJadual):
			$this->panggilTable($myJadual,'qss',$medanID);
		endforeach;
	}
#-------------------------------------------------------------------------------------------
#==========================================================================================
}