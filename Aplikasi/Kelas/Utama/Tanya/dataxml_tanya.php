<?php
namespace Aplikasi\Tanya; //echo __NAMESPACE__; 
class Dataxml_Tanya extends \Aplikasi\Kitab\Tanya
{
#===========================================================================================================
#----------------------------------------------------------------------------------------------------------#
	public function __construct() { parent::__construct(); }
#----------------------------------------------------------------------------------------------------------#
	public function medanUbah2($cariID)
	{
		$senaraiMedan = 'no,Nama_Penuh nama,email,nohp';

		return $senaraiMedan; # pulangkan pemboleubah
	}
#----------------------------------------------------------------------------------------------------------#
	public function tatasusunanCariID($jadual, $medan, $cari, $susun) 
	{
		# ada nilai
		$hasil = array ( '0' => array (
				'newss' => '000000123654',
				'ssm' => 'fulan@mail.com',
				'nama' => 'Fulan Bin Fulan',
				'operator' => 'Fulan2 Bin Fulan2',
				'alamat' => 'no 1000, ' . "\r" 
					. 'jalan 2000, ' . "\r" 
					. 'taman 3000 ' . "\r" 
					. 'poskod 40000',
				));

		$hasil2 = array(); # tiada nilai

		return $hasil; # pulangkan pemboleubah
	}
#----------------------------------------------------------------------------------------------------------#
	public function tatasusunanCariMFG($jadual, $medan, $cari, $susun)
	{
		# ada nilai
		$hasil = array ( '0' => array (
				'newss' => '000000123654',
				'ssm' => 'fulan@mail.com',
				'nama' => 'Fulan Bin Fulan',
				'operator' => 'Fulan2 Bin Fulan2',
				'kumpulanIndustri' => 'MFG',
				'terimaProsesan' => 'J001',
				));

		$hasil2 = array(); # tiada nilai

		return $hasil; # pulangkan pemboleubah
	}
#----------------------------------------------------------------------------------------------------------#
	public function tatasusunanCariPPT($jadual, $medan, $cari, $susun)
	{
		# ada nilai
		$hasil = array ( '0' => array (
				'newss' => '000000123654',
				'ssm' => 'fulan@mail.com',
				'nama' => 'Fulan Bin Fulan',
				'operator' => 'Fulan2 Bin Fulan2',
				'kumpulanIndustri' => 'PPT',
				'hantar_prosesan' => 'J001',
				));

		$hasil2 = array(); # tiada nilai

		return $hasil; # pulangkan pemboleubah
	}
#----------------------------------------------------------------------------------------------------------#
	public function tatasusunanUbah2A($jadual, $medan, $cari, $susun) 
	{
		# ada nilai - cantum semua tatasusunan dalam satu
		$hasil = array (
			'msic2008' => array (
				0 => array (
						'S' => 'S',
						'msic2000' => '93099p',
						'msic' => '96094',
						'keterangan' => 'Perkhidmatan jagaan haiwan(2)',
						'notakaki' => '(2) Termasuk: penumpangan, perapian, mendudukkan '
						. 'dan melatih binatang peliharaan',
					),
				),
			'msic_v1' => array (
				0 => array (
						'msic' => '96094',
						'kp' => '85',
						'staf' => NULL,
						'keterangan' => 'Perkhidmatan jagaan haiwan',
						'notakaki' => 'Pet care services INCLUDE boarding, grooming, '
						. 'sitting and training pets '
						. 'NOT INCLUDE veterinary activities, see 7500 activities of '
						. 'fitness centres, see 93118',
					),
			),
			'msic_bandingan' => array (
				0 => array (
						'sv_newss' => '332',
						'sv_sidap' => '85',
						'msic2000p' => '93099p',
						'msic2000' => '93099',
						'msic' => '96094',
						'keterangan' => 'Aktiviti Perkhidmatan Persendirian',
						'Sektor' => 'Perkhidmatan (Lain-lain)',
					),
			),
			'msic2000' => array (),
			'msic2000_notakaki' => array (),
		);

		# ada nilai - pecah tatasusunan kepada beberapa bahagian
		$hasil1['satu'] = array ( 
			'0' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'1' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'2' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1')
			);
		$hasil1['dua'] = array ( 
			'0' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'1' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'2' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1')
			);
		$hasil1['tiga'] = array ( 
			'0' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'1' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'2' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1')
			);

		$hasil2 = array(); # tiada nilai

		return $hasil; # pulangkan pemboleubah
	}
#----------------------------------------------------------------------------------------------------------#
	public function medanUbah($cariID) 
	{
		# Set pemboleubah
		# buat link
		$alamat1 = 'http://xxx/crud/ubah2/",kp,"/'.$cariID.'/2010/2015/'; 
		$url1 = '" <a target=_blank href=' . $alamat1 . '>SEMAK 1</a>"';
		$url2 = 'concat("<a target=_blank href=' . $alamat1 . '>SEMAK 2</a>")';
		# Set pemboleubah untuk sql
        $senaraiMedan = 'id,'
			. 'concat_ws("|",nama,operator,' . $url1 . ',' . $url2 . ') nama,'
			. ' concat_ws("|",' . "\r"
			. ' 	concat_ws("="," hasil",format(hasil,0)),' . "\r"
			. ' 	concat_ws("="," belanja",format(belanja,0)),' . "\r"
			. ' 	concat_ws("="," gaji",format(gaji,0)),' . "\r"
			. ' 	concat_ws("="," aset",format(aset,0)),' . "\r"
			. ' 	concat_ws("="," staf",format(staf,0)),' . "\r"
			. ' 	concat_ws("="," stok akhir",format(stok,0))' . "\r"
 			. ' ) as data5P,'
			. ' concat_ws("|",' . "\r"
			. ' 	concat_ws("="," tel",tel),' . "\r"
			. ' 	concat_ws("="," fax",fax),' . "\r"
			. ' 	concat_ws("="," orang",orang),' . "\r"
			. ' 	concat_ws("="," notel",notel),' . "\r"
			. ' 	concat_ws("="," nofax",nofax)' . "\r"
 			. ' ) as dataHubungi,'
			. 'concat_ws(" ",alamat1,alamat2,poskod,bandar) as alamat,' . "\r"
			//. 'concat_ws(" ",no,batu,( if (jalan is null, "", concat("JALAN ",jalan) ) ),'
			//. 'tmn_kg,poskod,dp_baru) alamat_baru,' . "\r"
			. 'tel,notel,fax,nofax,responden,orang,email,esurat,'
			. 'hasil,belanja,gaji,aset,staf,stok' . "\r" 
			. '';

		# pulangkan pemboleubah
		return $senaraiMedan;
	}
#----------------------------------------------------------------------------------------------------------#
	public function semakPost($senarai, $nilaiRM, $medanID, $dataID) 
	{
        foreach ($_POST as $myTable => $value)
        {   if ( in_array($myTable,$senarai) )
            {   foreach ($value as $kekunci => $papar)
				{	$posmen[$myTable][$kekunci]= 
						( in_array($kekunci,$nilaiRM) ) ? # $nilaiRM rujuk line 154
						str_replace( ',', '', bersih($papar) ) # buang koma	
						: bersih($papar);
				}	$posmen[$myTable][$medanID] = $dataID;
            }
        }

		return $posmen; # pulangkan nilai
	}
#----------------------------------------------------------------------------------------------------------#
	public function semakPosmen($posmen, $jadual) 
	{
		# valid guna gelung foreach
		foreach ($nilaiRM as $keyRM) # $nilaiRM rujuk line 154
		{# kod php untuk formula matematik
			$data = null;
			if(isset($posmen[$jadual][$keyRM])):
				eval( '$data = (' . $posmen[$jadual][$keyRM] . ');' );
				$posmen[$jadual][$keyRM] = $data;
			endif;
		}/*$nilaiTEKS = array('no','batu','jalan','tmn_kg');
		foreach ($nilaiTEKS as $keyTEKS)
		{# kod php untuk besarkan semua huruf aka uppercase
			if(isset($posmen[$jadual][$keyTEKS])):
				$posmen[$jadual][$keyTEKS] = strtoupper($posmen[$jadual][$keyTEKS]);
			endif;
		}//*/ # valid guna if
		if (isset($posmen[$jadual]['email']))
			$posmen[$jadual]['email']=strtolower($posmen[$jadual]['email']);
		//if (isset($posmen[$jadual]['dp_baru']))
		//	$posmen[$jadual]['dp_baru']=ucwords(strtolower($posmen[$jadual]['dp_baru']));
		if (isset($posmen[$jadual]['responden']))
			$posmen[$jadual]['responden']=mb_convert_case($posmen[$jadual]['responden'], MB_CASE_TITLE);
		if (isset($posmen[$jadual]['password']))
		{
			//$pilih = null;
			$pilih = 'md5'; # Hash::rahsia('md5', $posmen[$jadual]['password'])
			//$pilih = 'sha256'; # Hash::create('sha256', $posmen[$jadual]['password'], HASH_PASSWORD_KEY)
			if (empty($posmen[$jadual]['password']))
				unset($posmen[$jadual]['password']);
			elseif ($pilih == 'md5')
				$posmen[$jadual]['password'] = 
				\Aplikasi\Kitab\Hash::rahsia('md5', $posmen[$jadual]['password']);
			elseif ($pilih == 'sha256')
				$posmen[$jadual]['password'] = 
				\Aplikasi\Kitab\Hash::create('sha256', $posmen[$jadual]['password'], HASH_PASSWORD_KEY);
		}//*/

		return $posmen; # pulangkan nilai
	}
#----------------------------------------------------------------------------------------------------------#
	public function medanCari($cariID) 
	{ 
		# Set pemboleubah untuk sql
        $senaraiMedan = ''
			. 'msic,keterangan,'
			. ' concat_ws("|",' . "\r"
			. ' 	concat_ws("","",seksyen),' . "\r"
			. ' 	concat_ws("","",bahagian),' . "\r"
			. ' 	concat_ws("","",kumpulan),' . "\r"
			. ' 	concat_ws("","",kelas)' . "\r"
 			. ' ) as jenis,'
			. 'msic2000,'
			. 'notakaki'
			. '';

		# pulangkan pemboleubah
		return $senaraiMedan;
	}
#----------------------------------------------------------------------------------------------------------#
	public function medanCari2($cariID) 
	{ 
		# Set pemboleubah untuk sql
        $senaraiMedan = ''
			. 'msic,kod_produk,keterangan,'
			. ' concat_ws("-",' . "\r"
			. ' 	concat_ws("","",msic),' . "\r"
			. ' 	concat_ws("","",p),' . "\r"
			. ' 	concat_ws("","",a)' . "\r"
 			. ' ) as jenis,'
			. 'mcpa2005,unit,code'
			. '';

		# pulangkan pemboleubah
		return $senaraiMedan;
	}
#----------------------------------------------------------------------------------------------------------#
	public function tukar_data_xml($dataCantum,$xml_user_info)
	{
		# function call to convert array to xml
		$xmlData = new \Aplikasi\Kitab\Tatasusunan;
		$xmlData->array_to_xml($dataCantum,$xml_user_info);

		# saving generated xml file
		//$namafail = 'sumber/fail/xml/emsic2008.xml';
		$namafail = 'sumber/fail/xml/emcpa2009.xml';
		$xml_file = $xml_user_info->asXML($namafail);
		//$xml_file = $xml_user_info->asXML();

		# success and error message based on xml creation
		if($xml_file)
		{
			echo 'XML file have been generated successfully.'
			. '<a target="_blank" href="' . URL . $namafail . '">Click here</a> | '
			. '<a href="' . URL . 'ruangtamu/pelawat">Ruang Legar</a>';
			//echo $xml_file;
		}
		else
		{
			echo 'XML file generation error.';
		}
		//*/
	}
#----------------------------------------------------------------------------------------------------------#
	public function susunDataMysql()
	{
		$data = array(
		'(BUSINESS MANAGEMENT CONSULTAN','(CARPET AND RUG SHAMPOOING, AN','(INSTALLATION OF DOORS, WINDOW',
		'(INTERIOR AND EXTERIOR PAINTIN','(LAUNDERING AND DRY-CLEANING,','(MANUFACTURE OF LUGGAGE, HANDB',
		'(RAISING, BREEDING AND PRODUCT','(RETAIL SALE OF ARTICLES OF CL','(RETAIL SALE OF FOOTWEAR)',
		'(RETAIL SALE OF FRESH OR PRESE','(RETAIL SALE OF RICE, FLOUR, O','(WHOLESALE AND RETAIL OF NEW M',
		'(WHOLESALE OF HABERDASHERY)','(WHOLESALE OF STATIONERY, BOOK','2. MOBILE PARTS SALES & SERVIC',
		'3. MENJUAL MAKANAN DAN MINUMAN','3. MOBILE RELOAD AGENT','4. COMMISSION AGENT',
		'> MEMBEKAL DAN MENJUAL PRODUK','ADVERTISING AND PROMOTION','AGEN HARTANAH',
		'AKSESORI','AKSESORI WANITA','ALAT TULIS, PEMBERSIHAN KAWASA','ARTIST MANAGEMENT',
		'BANDAR BUKIT BERUNTUNG','BANDAR DAMAI PERDANA','BANDAR MAHKOTA CHERAS','BANDAR PERDA',
		'BANDAR PUTRA BERTAM','BANDAR SERI ALAM','BANDAR SRI PERMAISURI','BANDAR TASEK MUTIARA',
		'BANDAR TUN RAZAK, CHERAS','BANDAR UTAMA','BANTUAN MENGAJAR, PAKAIAN SUKA','BATU 9',
		'BATU KAWAN','BENUT','BINJAI','BUKIT RAHMAN PUTRA','BUSINESS MANAGEMENT','DESA PANDAN',
		'FOOD & BEVERAGES','FOTOGRAFI','FROZEN FOOD','GAT LEBUH MACALLUM','GROCERY','HUMAN RESOURCES',
		'INDAHPURA','INTERIOR DESIGN','JALAN AMPANG PUTRA','JALAN KENANGA','JALAN MERU','JALAN PJS 9/1,',
		'JALAN PJU 8/1, DAMANSARA PERDA','JALAN SULTAN ISMAIL','JELUTONG','JUALAN BORONG DAN RUNCIT SEMUA',
		'JUALAN BORONG PAKAIAN','JUALAN RUNCIT PERABOT ISI RUMA','KANCHONG DARAT,','KATERING,','KELAPA SAWIT',
		'KEPONG BARU','KG BUKIT BELIMBING','KOTA KEMUNING, SEKSYEN 31','KUBANG SEMANG,','KUCHAI ENTREPRENEURS PARK',
		'MAKANAN','MAKANAN BERMASAK ISLAM','MAKANAN DAN MINUMAN, PENYEDIAA','MEMBEKAL DAN MENJUAL MAKANAN B',
		'MEMBEKAL DAN MENJUAL MAKANAN D','MEMBORONG, MEMBEKAL DAN MENJUA','MENCUCI KERETA','MENJUAL DAN MEMBEKAL PAKAIAN',
		'MENJUAL DAN MEMBELI ALAT GANTI','MENJUAL KOSMETIK','MENJUAL MAKANAN','MENJUAL PAKAIAN MUSLIMAH',
		'MENJUAL PRODUK KECANTIKAN DAN ','MENJUAL TUDUNG','MENYEDIAKAN PERKHIDMATAN PENGH','OFF JALAN KLANG LAMA',
		'PEMBEKAL ALAT TULIS ','PEMBERSIHAN SEMUA JENIS BANGUN','PENGURUSAN ACARA','PENTERNAKAN, PEMBIAKAN DAN PEN',
		'PERCETAKAN','PERFUME','PERKHIDMATAN MAKANAN DAN MINUM','PERUNDINGAN KOMPUTER','PLUMBING ','PUSAT PERDAGANGAN SERI KEMBANG',
		'RENGIT','SEGAMBUT','SEKSYEN 20','SELLING CLOTHING','SENTUL','SUNGAI BAKAP','TAMAN BAYU PERDANA','TAMAN BIDARA','TAMAN BUKIT INDAH,'
		,'TAMAN BUKIT KINRARA','TAMAN BUKIT MEWAH','TAMAN BUKIT SERDANG','TAMAN BUKIT SUBANG','TAMAN CHERAS','TAMAN INDAH',
		'TAMAN KINRARA','TAMAN KOTA','TAMAN KOTA JAYA','TAMAN LEMBAH MAJU','TAMAN MALURI','TAMAN MEGAH','TAMAN MOLEK,',
		'TAMAN MUTIARA CEMPAKA,','TAMAN MUTIARA,','TAMAN NUSA BESTARI','TAMAN NUSA BESTARI 2','TAMAN PANDAN INDAH','TAMAN PERLING',
		'TAMAN PRIMA SAUJANA','TAMAN PUTRA PERDANA','TAMAN PUTRI','TAMAN PUTRI KULAI,','TAMAN RINTING','TAMAN SAGA',
		'TAMAN SERDANG PERDANA','TAMAN SERI GOMBAK','TAMAN SETIA INDAH,','TAMAN SRI ANDALAS,','TAMAN SRI MANJA','TAMAN SUTERA,',
		'TAMAN UNGKU TUN AMINAH','TAMAN UNIVERSITI, SKUDAI','TAMAN USAHAWAN KEPONG UTARA','TAMAN UTAMA','TAMAN WANGSA PERMAI',
		'TANDA DAN ','TMN PUTRA','TONGKANG PECAH','TRAINING ','TRANSPORTATION SERVICES','USJ 1','WANGSA MELAWATI','WEDDING PLANNER'
		);

		return $data;
	}
#----------------------------------------------------------------------------------------------------------#
	public function susunDataMysql2()
	{
		$data = array(
		'TAMAN CENTURY','TAMAN CHUKAI UTAMA, FASA 3','TAMAN DAYA,','TAMAN DEDAP','TAMAN DELIMA','TAMAN DESA','TAMAN DESA CHERAS','TAMAN DESA DAMAI','TAMAN DESA PUTEH','TAMAN DESA SKUDAI','TAMAN EMAS','TAMAN GAYA','TAMAN GEMILANG','TAMAN GUAR PERAHU','TAMAN HARMONI','TAMAN INDAH, ','TAMAN KAJANG UTAMA','TAMAN KEMPAS','TAMAN KENANGAN, SUNGAI KARANGA','TAMAN KENARI','TAMAN KENARI,','TAMAN KERIAN PERMAI','TAMAN KERIAN SENTOSA,','TAMAN KOSAS','TAMAN KOSKAM','TAMAN KOTA JAYA,','TAMAN KOTA MASAI','TAMAN KOTA MASAI,','TAMAN LIMAU MANIS','TAMAN MAKMUR,','TAMAN MAYANG JAYA','TAMAN MEDAN JAYA','TAMAN MELATI','TAMAN MERANTI','TAMAN MEWAH','TAMAN MINAMAH','TAMAN MULIA, BUKIT GAMBIR,','TAMAN MUTIARA RINI,','TAMAN NANYANG, JINJANG UTARA','TAMAN PANDAN CAHAYA','TAMAN PERINDUSTRIAN PUCHONG UT','TAMAN PERTAMA','TAMAN SAUJANA INDAH','TAMAN SEJAHTERA','TAMAN SELASIH','TAMAN SELATAN','TAMAN SELAYANG INDAH','TAMAN SEMARAK,','TAMAN SEMBERONG BARAT','TAMAN SERAI WANGI','TAMAN SERI EMAS','TAMAN SERI JAYA','TAMAN SETAPAK ','TAMAN SETIA TROPIKA, KEMPAS','TAMAN SINARAN, TELOK PULAI','TAMAN SKUDAI BARU','TAMAN SRI ANGSANA HILIR','TAMAN SRI GOMBAK','TAMAN SRI GOMBAK,','TAMAN SRI LALANG','TAMAN SRI MUDA, SEKSYEN 25','TAMAN SRI PULAI PERDANA','TAMAN SRI RAMBAI,','TAMAN SRI TANJUNG','TAMAN SUBANG PERDANA','TAMAN SUNTEX, BT. 9','TAMAN SURIA','TAMAN SURIA,','TAMAN TAMING JAYA,JALAN BALAKO','TAMAN TAMPOI UTAMA','TAMAN USAHAWAN KEPONG,','TAMAN USAHAWAN KEPONG, KEPONG ','TAMAN WAWASAN','TAMAN ZAMRUD','TELOK GONG','TELUK KUMBAR','TEMASYA INDUSTRIAL PARK,','TEPOH','TERNAKAN IKAN AIR TAWAR','TMN DESA MILLENNIA','TMN MAJU JAYA, CHERAS','TMN MALURI','TMN PINGGIRAN PUTRA','TMN SRI PETALING','TMN SRI SERDANG','TMN SUTERA UTAMA','TO PROVIDE LORRY AND TRUCK REN','UKAY PERDANA','ULU TIRAM','VIDEO PRODUCTION','VIDEO SHOOTING','VISTA MILLENIUM JALAN DM1,','WAKIL PENGANGKUTAN','WANGSA MAJU','WHOLESALE OF BISCUITS, CAKES, ','WIRING','YAP TAU SAH	2','');

		return $data;
	}
#----------------------------------------------------------------------------------------------------------#
#===========================================================================================================
}