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
/*
(BROKERAGE FOR SHIP AND AIRCRA	2
(CAMPING GROUNDS/SITES AND REC	2
(CONSTRUCTION OF OTHER ENGINEE	2
(ELECTRICAL WIRING AND FITTING	2
(FOOD OR BEVERAGE, FOOD AND BE	2
(MANUFACTURE OF OTHER FURNITUR	2
(MANUFACTURE OF PREPARED MEALS	2
(MOBILE FOOD CARTS)	2
(ORGANIZATION, PROMOTIONS AND/	2
(RENTING AND OPERATIONAL LEASI	2
(RETAIL SALE OF CAMPING GOODS)	2
(RETAIL SALE OF COMPUTERS, COM	2
(RETAIL SALE OF DAIRY PRODUCTS	2
(RETAIL SALE OF GAMES AND TOYS	2
(RETAIL SALE OF SECOND-HAND EL	2
(RETAIL SALE OF TELECOMMUNICAT	2
(RETAIL SALES OF DIETARY SUPPL	2
(SERVICES OF GRAPHIC DESIGNERS	2
(SWIMMING POOL CLEANING AND MA	2
(WASHING AND POLISHING (CAR WA	2
(WHOLESALE OF CLOTHING ACCESSO	2
(WHOLESALE OF FLOWERS AND PLAN	2
(WHOLESALE OF OTHER FOODSTUFFS	2
(WHOLESALE OF TEXTILES, CLOTHI	2
* MEMBEKAL & MENJUAL PERALATAN	2
-	2
- AKTIVITI PERNIAGAAN BARANGAN	2
- ERGONOMICS; HUMAN CAPITAL; T	2
- EVENT MANAGEMENT	2
- GRAPHIC DESIGN	2
- KATERING MAKANAN	2
- MAKANAN	2
- PAKAIAN	2
- PEMBUAT	2
- RENOVATION	2
- SELLING FOOD AND DRINK USING	2
-HIASAN DALAMAN	2
-KERJA-KERJA BESI DAN AWNING	2
-MEMBUAT DAN MEMA	2
-MENAWARKAN PERKHIDMATAN PENYE	2
-MENGUBAHSUAI DAN MEMBAIKPULIH	2
-MENJUAL PAKAIAN DAN AKSESORI 	2
-PEMASANGAN, SERVIS AIRCOND DA	2
-STATIONERY 	2
1 JALAN 1/149E, BDR BARU SRI P	2
2) MENERIMA TEMPAHAN PERKHIDMA	2
2)PERKHIDMATAN MEMBERSIH KAWAS	2
2. INTERIOR DESIGN	2
2. MENJUAL MAKANAN DAN MINUMAN	2
2. PENYEDIAAN MAKANAN DAN MINU	2
3. GRAPHIC DESIGN	2
3. PAKAIAN	2
65, JALAN MACALISTER	2
84,JALAN RAJA CHULAN	2
99, JALAN AMPANG	2
> MEMBEKAL,MENDAWAI,MEMASANG,M	2
ACTIVITIES OF INTERIOR DECORAT	2
ADVERTISING.	2
AGEN KOMISEN AM	2
AIRCOND SERVICES	2
AKTIVITI PENGURUSAN KEMUDAHAN 	2
ALAM DAMAI	2
ALAT TULIS	2
ALMA	2
ARA DAMANSARA	2
ARA JAYA PJU 1A	2
B5-12, JALAN WANGSA 5, BUKIT A	2
BAGAN AJAM	2
BAKERY	2
BANDAR BARU PERMAS JAYA	2
BANDAR BARU PERMAS,	2
BANDAR BARU SALAK TINGGI	2
BANDAR BARU SELAYANG	2
BANDAR BARU SERI PETALING	2
BANDAR BARU SERI PETALING,	2
BANDAR BARU SUNGAI BULOH	2
BANDAR BARU SUNGAI BULOH,	2
BANDAR BARU UDA	2
BANDAR BARU,	2
BANDAR BUKIT PUCHONG 2	2
BANDAR BUKIT TINGGI 2	2
BANDAR BUKIT TINGGI,	2
BANDAR MACHANG BUBOK	2
BANDAR PERAI JAYA	2
BANDAR PUTERA	2
BANDAR PUTERI KLANG	2
BANDAR PUTERI PUCHONG	2
BANDAR PUTRA BERTAM,	2
BANDAR PUTRA PERMAI	2
BANDAR SERI PUTRA	2
BANGI BUSINESS PARK	2
BANGI BUSINESS PARK, JALAN MED	2
BARANGAN TERPAKAI	2
BATU 20	2
BATU 3	2
BATU 7	2
BATU 9 CHERAS	2
BATU 9, JALAN CHERAS	2
BAYAN BARU,	2
BDR BARU AMPANG	2
BRANDING CONSULTANT	2
BROADCASTING	2
BUKIT BAKRI	2
BUKIT BERUNTUNG	2
BUKIT JALIL	2
BUKIT JELUTONG	2
BUKIT KEMUNING	2
BUKIT RIMAU	2
BUKIT SENTOSA	2
BUSINESS ADVISORY	2
BUSINESS CONSULTATION	2
CAR RENTAL	2
CENDERAMATA, 	2
CHERAS,	2
CLEANING	2
CLEANING SERVICES	2
COMMISSION AGENTS	2
CONSTRUCTION WORKS	2
COSMETIC	2
CREATING AND MAINTAINING CLIEN	2
DAMANSARA	2
DAMANSARA DAMAI	2
DAN AKSESORI/KONDUKTOR, LAMPU 	2
DATARAN SUNWAY, KOTA DAMANSARA	2
DECORATION	2
DESA AMAN PURI, KEPONG	2
DESA DENGKIL	2
DESA PINGGIRAN PUTRA	2
DESA SRI PUTERI	2
DESIGN SERVICE	2
DINGIN, MESIN-MESIN PEJABAT, A	2
EDUCATION MATERIAL 	2
ELECTRICAL 	2
ENDAH RIA CONDO,	2
ENGINEERING	2
EVENT ORGANIZER	2
EXAMPLE CUSTOMER REQUEST TO HA	2
EXHIBITION AND BOOTH	2
FACEBOOK MARKETING	2
FACIAL	2
FASA 2	2
FASHION	2
FELDA BUKIT WAHA,	2
FILEM, PRODUKSI IKLAN, KLIP VI	2
FRIM KEPONG	2
GERAI/PENJAJA MAKANAN , MAKANA	2
GIFTS & PREMIUMS	2
GLENMARIE,	2
GUAR JERING,	2
GYM	2
HADIAH, BAHAN BINAAN, PERABOT,	2
		*/
		return $data;
	}
#----------------------------------------------------------------------------------------------------------#
#===========================================================================================================
}