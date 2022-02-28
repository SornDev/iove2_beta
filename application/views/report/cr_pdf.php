<?php
class MYPDF extends TCPDF {
	public function Header() {
		$image_file = base_url().'images/sd_logo.jpg';
		$this->SetFont('phetsarathot', 'B', 9);
		$this->Cell(0, 12, 'Doc-Manager V2 Beta2 By SornDev', 0, false, 'R', 0, '', 0, false, 'M', 'M');
		$this->Image($image_file, 8, 5, 20, '', 'JPG', 0, 'T', false, 300, '', false, false, 0, false, false, false);
	}
	public function Footer() {
		$this->SetY(-15);
		$this->SetFont('phetsarathot', 'I', 8);
		$this->Cell(0, 5, 'ໜ້າທີ່ '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
		$this->Cell(0, 10, 'ພິມເມື່ອ: '.date("d/m/Y H:i:s"), 0, false, 'R', 0, '', 0, false, 'T', 'M');
	}
}
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('ລາຍງານ ໂປຼແກມຂາເຂົ້າ-ຂາອອກ');
$pdf->SetSubject('ລາຍງານ ໂປຼແກມຂາເຂົ້າ-ຂາອອກ');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 061', PDF_HEADER_STRING);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(PDF_MARGIN_LEFT, '27', PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}
$pdf->SetFont('phetsarathot', '', 10);
$pdf->AddPage();
$html = <<<EOF
<!-- EXAMPLE OF CSS STYLE -->
<style>
.table {padding:8px; width: 500px; max-width: 100%; } .text-center {text-align: center; } td,thead,tr,tfoot {padding: 8px; line-height: 1.42857143; vertical-align: top; border-top: 1px solid #ddd; } .table-bordered {border: 1px solid #ddd; } .table-bordered {border-bottom-width: 2px; } .num{width:60px; } .titledo{width:390px; padding:0px; } .rdate{width:170px; } .by{font-size: small; padding:0px; margin:0px; } .tdh{font-size: 12pt; border-bottom: 1px solid #dddf; background-color:#f9f9f9; border: 1px solid #ddd; } .htitle{font-size:18pt; text-align: center; margin-top:-10px; } .dre{font-size: 10pt; text-align: right; }
</style>
EOF;

if($mtype=='td'){
	$newdm = 'ວັນທີ່';
} else {
	if($mtype=='tm'){
		$newdm = 'ເດືອນ';
	}
}
if($doc_in_out=='in'){
	$in_out = 'ຂາເຂົ້າ';
} else { $in_out = 'ຂາອອກ'; }
$html .= '
<div class="table-responsive">
<h1 class="htitle">ໃບລາຍງານເອກະສານ '.$in_out.'</h1>
<div class="dre">ປະຈຳ'.$newdm.' '.$date_month.' </div>
<table  class="table table-striped table-bordered">
<thead >
<tr class="tdh">
<th class="text-center num" >ເລກທີ່</th>
<th class="titledo">ຫົວຂໍ້ເອກະສານ</th>
<th class="text-center rdate">ວັນທີບັນທຶກ</th>
</tr>
</thead>
<tbody>
';
foreach($show_re_day as $data){
	if($data["user_name"]=='admin'){
		$user = $data["user_name"];
	}
	else{
		if($data["sex"]=='ຊາຍ'){
			$user = 'ທ '.$data["user_name"];
		}
		else
		{
			$user = 'ນ '.$data["user_name"];
		}
	}
	$html .= '<tr>
	<td class="text-center num">'.sprintf("%03d",$data['num_in']).'</td>
	<td class="titledo"> '.$data["name"].' <br>
	<span class="by"> ໝວດເອກະສານ: '.$data["grono_name"].' </span>
	</td>
	<td class="text-center rdate"><span class="by"> '.date("d/m/Y H:i:s",strtotime($data["doc_date"])).' <br>  ໂດຍ: '.$user.'</span></td>
	</tr>
	';
}
$html .= '</tbody></table></div>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();
$pdf->Output(dirname(__FILE__)."/.."."/.."."/.."."/report/report.pdf", "F");