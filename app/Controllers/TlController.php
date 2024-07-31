<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LaporanModel;
use App\Models\AlatModel;
use App\Models\PetugasModel;
use CodeIgniter\HTTP\ResponseInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class TlController extends BaseController
{
    public $laporanModel;
    public $alatModel;
    public $petugasModel;

    public function __construct(){
        $this->laporanModel = new LaporanModel();
        $this->alatModel = new AlatModel();
        $this->petugasModel = new PetugasModel();
    }

    public function index()
    {
        $items = [1,2,3,4,5,6,7,8,9,10,11,12];
        $data = [
            'title' => 'Dashboard',
            'UP' => [],
            'Tarahan' => [],
            'Teluk' => [],
            'Tegi' => [],
            'Way' => [],
            'Batu' => [],
        ];
        foreach ($items as $item) {
            $data['UP'][] = $this->alatModel->getTotalRasio($item, 1);
        }
        foreach ($items as $item) {
            $data['Tarahan'][] = $this->alatModel->getTotalRasio($item, 2);
        }
        foreach ($items as $item) {
            $data['Teluk'][] = $this->alatModel->getTotalRasio($item, 3);
        }
        foreach ($items as $item) {
            $data['Tegi'][] = $this->alatModel->getTotalRasio($item, 4);
        }
        foreach ($items as $item) {
            $data['Way'][] = $this->alatModel->getTotalRasio($item, 5);
        }
        foreach ($items as $item) {
            $data['Batu'][] = $this->alatModel->getTotalRasio($item, 6);
        }
        // for ($i = 1; $i <= 6; $i++) {
        //     // dd('hitung'.$i);
        //     $fungsi='hitung'.$i;
        //     $data[$fungsi]=$this->alatModel->$fungsi(1,1);
        // }
        // $data['laporan']=$this->alatModel->hitung2(1,1);
        // dd($data);
        return view('tl/dashboard-user', $data);
    }
    public function laporan(){
        // $items = [1,2,3,4,5,6,7,8,9,10,11,12];
        $alat=['APAT', 'APAR/APAB', 'Box Hydrant Outdoor', 'Box Hydrant Indoor', 'Jockey Pump', 'Electric Pump', 'Emergency Diesel Pump', 'Emergency Sea Water Pump', 'Portable Pump', 'Sprinkle System', 'Gas Sppression system (CO2/Clean Agent)', 'Foam System', 'Water Spray/Water Mist', 'Chemical Dust Suppression', 'Fire Prevention System (Sergi)', 'Panel Alarm System', 'Heat Detector' , 'Smoke Detector', 'Flame Detector', 'Gas Detector', 'Vaccum Dust Collector', 'Vaccum Truck', 'Fire Truck (Mobil Damkar)', 'Self-Contain Breathing Apparatus (SCBA)', 'Ambulance', 'Pintu Kebakaran', 'Tangga Kebakaran', 'Tempat Berhimpun/ Assembly Point', 'Lampu Penerangan Darurat', 'Tanda Petunjuk Arah Jalan Keluar', 'Pressurized Fan', 'Smoke Extract Fan dan Intake Fan', 'Air Handling Unit (AHU)', 'Fire Damper', 'Kesiapan Personil'];
        $data = [
            'title' => 'Dashboard',
            'alat' => [],
            'bulan' => 1
        ];
        if($this->request->getPost()){
            $m = $this->request->getPost('bulan');
            // dd($m);
            foreach ($alat as $item) {
                $data['alat'][] = $this->alatModel->getDataLaporan($item, $m=$m);
            }
            $data['bulan'] = $m;
            return view('tl/laporan-data-alat', $data);
        }
        foreach ($alat as $item) {
            $data['alat'][] = $this->alatModel->getDataLaporan($item, $m=1);
        }

        // $data = [
        //     'title' => 'Laporan',
        //     'laporan' => $this->alatModel->getDataLaporan($nama='APAT', $m=1)
        // ];
        // dd($data['alat']);
        return view('tl/laporan-data-alat', $data);
    }

    public function jadwal(){
        $user = auth()->user();
        $userId = $user->id;
        $petugas = $this->petugasModel->getPetugas($userId);

        $data = [
            'title' => 'Jadwal Pemeriksaan',
            'jadwal' => $this->alatModel->getJadwal(null, $m=1, $lokasi=1)
        ];
        if($this->request->getPost()){
            $m = $this->request->getPost('bulan');
            $lokasi = $this->request->getPost('lokasi');
            // dd($m);
            $data['jadwal'] = $this->alatModel->getJadwal(null, $m , $lokasi);
        }
        // dd($data['jadwal']);
        // dd($data);
        return view('tl/jadwal-pemeriksaan', $data);
    }

    public function petugas(){

        $data = [
            'title' => 'Daftar Petugas',
        ];
        // dd($data);
        return view('tl/jadwal-pemeriksaan', $data);
    }

    public function export($m){
        // dd($m);

        $alat=['APAT', 'APAR/APAB', 'Box Hydrant Outdoor', 'Box Hydrant Indoor', 'Jockey Pump', 'Electric Pump', 'Emergency Diesel Pump', 'Emergency Sea Water Pump', 'Portable Pump', 'Sprinkle System', 'Gas Sppression system (CO2/Clean Agent)', 'Foam System', 'Water Spray/Water Mist', 'Chemical Dust Suppression', 'Fire Prevention System (Sergi)', 'Panel Alarm System', 'Heat Detector' , 'Smoke Detector', 'Flame Detector', 'Gas Detector', 'Vaccum Dust Collector', 'Vaccum Truck', 'Fire Truck (Mobil Damkar)', 'Self-Contain Breathing Apparatus (SCBA)', 'Ambulance', 'Pintu Kebakaran', 'Tangga Kebakaran', 'Tempat Berhimpun/ Assembly Point', 'Lampu Penerangan Darurat', 'Tanda Petunjuk Arah Jalan Keluar', 'Pressurized Fan', 'Smoke Extract Fan dan Intake Fan', 'Air Handling Unit (AHU)', 'Fire Damper', 'Kesiapan Personil'];
        $data=[];
        foreach ($alat as $item) {
            $data[] = $this->alatModel->getDataLaporan($item, $m=$m);
        }

        $merge=['D1:R1', 'D2:R2', 'D3:R3', 'D4:R4', 'D5:R5', 'A8:A10', 'B8:H10', 'I8:T8', 'I9:J9', 'K9:L9', 'M9:N9', 'O9:P9', 'Q9:R9', 'S9:T9', 'B11:H11', 'I11:J11', 'K11:L11', 'M11:N11', 'O11:P11', 'Q11:R11', 'S11:T11', 'I12:J12', 'K12:L12', 'M12:N12', 'O12:P12', 'Q12:R12', 'S12:T12', 'C13:H13', 'D14:H14', 'D15:H15', 'D16:H16', 'D17:H17', 'D18:H18', 'C19:H19', 'I19:J19', 'K19:L19', 'M19:N19', 'O19:P19', 'Q19:R19', 'S19:T19', 'C20:H20', 'D21:H21', 
    'D22:H22', 'D23:H23', 'D24:H24', 'D25:H25', 'C26:H26', 'I26:J26', 'K26:L26', 'M26:N26', 'O26:P26', 'Q26:R26', 'S26:T26', 'D27:H27', 'D28:H28', 'D29:H29', 'D30:H30', 'D31:H31', 'D32:H32', 'C33:H33', 'I33:J33', 'K33:L33', 'M33:N33', 'O33:P33', 'Q33:R33', 'S33:T33', 'D34:H34', 'D35:H35', 'D36:H36', 'D37:H37', 'D38:H38', 'C39:H39', 'C40:H40', 'C41:H41', 'C42:H42', 'C43:H43', 'B44:H44', 'B45:H45', 'I45:J45', 'K45:L45', 'M45:N45', 'O45:P45', 'Q45:R45', 'S45:T45', 'B46:H46', 'I46:J46', 'K46:L46', 'M46:N46', 'O46:P46', 'Q46:R46', 'S46:T46', 'C47:H47', 'C48:H48', 'C49:H49', 'C50:H50', 'C51:H51', 'C52:H52', 
'C53:H53', 'C54:H54', 'C55:H55', 'B56:H56', 'B57:H57', 'I57:J57', 'K57:L57', 'M57:N57', 'O57:P57', 'Q57:R57', 'S57:T57', 'B58:H58', 'I58:J58', 'K58:L58', 'M58:N58', 'O58:P58', 'Q58:R58', 'S58:T58', 'B59:H59', 'B60:H60', 'I60:J60', 'K60:L60', 'M60:N60', 'O60:P60', 'Q60:R60', 'S60:T60', 
'A61:H61', 'A62:H62', 'I62:J62', 'K62:L62', 'M62:N62', 'O62:P62', 'Q62:R62', 'S62:T62'];
        $isiMergecell=['PT PLN (PERSERO) UNIT INDUK PEMBANGKITAN', 'SUMATERA BAGIAN SELATAN', 'DOKUMEN CATATAN', 'FORM CHECKLIST KESIAPAN SISTEM PROTEKSI KEBAKARAN', 'PEJABAT OPERASIONAL K3', 'NO', 'ASPEK', 'KONDISI UPDK & ULPL - '.$data[0][0]['month_name'].' 2024', 'UPDK', 'PLTD/G TARAHAN', 'PLTD TELUK BETUNG', 'PLTD TEGINENENG', 'PLTA BESAI', 'PLTA BATUTEGI', 'PERALATAN SISTEM FIRE FIGHTING', '75%', '75%', '75%', '75%', '75%', 
    '75%', '15%', '15%', '15%', '15%', '15%', '15%', 'PERALATAN SISTEM MANUAL FIRE PROTECTION', 'APAT', 'APAR & APAB', 'Hydrant :', '  Box Hydrant Outdoor', '  Box Hydrant Indoor', 'PERALATAN SISTEM FIRE PUMP', '30%', '30%', '30%', '30%', '30%', '30%', 'Hydrant Pump :', 'Jockey Pump', 'Electric Pump', 'Emergency Diesel Pump', 'Emergency Sea Water Pump', 'Portable Pump', 'AUTOMATION PROTECTION', '15%', '15%', '15%', '15%', '15%', '15%', 'Sprinkle System', 'Gas Sppression system (CO2/Clean Agent)Foam System', 'Foam System', 'Water Spray/Water Mist', 'Chemical Dust Suppression', 'Fire Prevention System (Sergi)', 'ALARM & DETECTION SYSTEM', '15%', 
    '15%', '15%', '15%', '15%', '15%', 'Panel Alarm System', 'Heat Detector', 'Smoke Detector', 'Flame Detector', 'Gas Detector', 'Vaccum Dust Collector', 'Vaccum Truck', 'Fire Truck (Mobil Damkar)', 'Self-Contain Breathing Apparatus (SCBA)', 'Ambulance', 'Kesiapan Peralatan	', 'Pencapaian Persentase Kesiapan', '73%', '73%', '73%', '73%', '73%', '73%', 'SARANA PENYELAMATAN JIWA', '10%', '10%', '10%', '10%', '10%', '10%', 'Pintu Kebakaran', 'Tangga Kebakaran', 'Tempat Berhimpun/ Assembly Point', 'Lampu Penerangan Darurat', 'Tanda Petunjuk Arah Jalan Keluar', 'Pressurized fan', 'Smoke Extract Fan dan Intake Fan', 'Air Handling Unit (AHU)', 'Fire Damper', 'Kesiapan Peralatan', 
    'Pencapaian Persentase Kesiapan', '10%', '10%', '10%', '10%', '10%', '10%', 'KESIAPAN PERSONIL TANGGAP DARURAT', '15%', '15%', '15%', '15%', '15%', '15%', 'Kesiapan Personil', 'Pencapaian Persentase Kesiapan', '15%', '15%', '15%', '15%', '15%', '15%', 'TOTAL KESIAPAN PERALATAN', 'PERSENTASE KESIAPAN', '98.0%', '98.0%', '98.0%', '98.0%', '98.0%', '98.0%'];
    $center=['D1:R1', 'D2:R2', 'D3:R3', 'D4:R4', 'D5:R5', 'A8:A10', 'B8:H10', 'I8:T8', 'I9:J9', 'K9:L9', 'M9:N9', 'O9:P9', 'Q9:R9', 'S9:T9', 'I11:J11', 'K11:L11', 'M11:N11', 'O11:P11', 'Q11:R11', 'S11:T11', 'I12:J12', 'K12:L12', 'M12:N12', 'O12:P12', 'Q12:R12', 'S12:T12', 
             'I19:J19', 'K19:L19', 'M19:N19', 'O19:P19', 'Q19:R19', 'S19:T19', 'I26:J26', 'K26:L26', 'M26:N26', 'O26:P26', 'Q26:R26', 'S26:T26', 'I33:J33', 'K33:L33', 'M33:N33', 'O33:P33', 'Q33:R33', 'S33:T33', 'I45:J45', 'K45:L45', 'M45:N45', 'O45:P45', 'Q45:R45', 'S45:T45', 'I46:J46', 'K46:L46', 'M46:N46', 'O46:P46', 'Q46:R46', 'S46:T46', 
                'I57:J57', 'K57:L57', 'M57:N57', 'O57:P57', 'Q57:R57', 'S57:T57', 'I58:J58', 'K58:L58', 'M58:N58', 'O58:P58', 'Q58:R58', 'S58:T58', 'I60:J60', 'K60:L60', 'M60:N60', 'O60:P60', 'Q60:R60', 'S60:T60', 'A61:H61', 'A62:H62', 'I62:J62', 'K62:L62', 'M62:N62', 'O62:P62', 'Q62:R62', 'S62:T62'];
        $fileName = 'laporan-'.$data[0][0]['month_name'].'.xlsx'; 
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $styleArray = [
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '#ff000000'],
                ],
            ],
        ];
        // dd($data);
        for ($i = 0; $i < count($merge); $i++) {
            // Merge the specified cell range
            $sheet->mergeCells($merge[$i]);
            $sheet->getStyle($merge[$i])->applyFromArray($styleArray);
            // Set the value for the merged cells
            $sheet->setCellValue(explode(':', $merge[$i])[0], $isiMergecell[$i]);
        }
        for ($i = 0; $i < count($center); $i++) {
            // Merge the specified cell range
            $sheet->mergeCells($center[$i]);
            $sheet->getStyle($center[$i])->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $sheet->getStyle($center[$i])->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
            // Set the value for the merged cells
            // $sheet->setCellValue(explode(':', $merge[$i])[0], $isiMergecell[$i]);
        }

        $row_kondisi=['I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T'];
        $row_isi=['14', '15', '17', '18', '21', '22', '23', '24', '25', '27', '28', '29', '30', '31', '32', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', 
                '47', '48', '49', '50', '51', '52', '53', '54', '55', '59'];
                
        for($i=1; $i <= count($row_kondisi); $i++){
            if($i%2 == 0){
                $sheet->setCellValue($row_kondisi[$i-1].'10','BURUK')->getStyle($row_kondisi[$i-1].'10')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
            }else{
                $sheet->setCellValue($row_kondisi[$i-1].'10','BAIK')->getStyle($row_kondisi[$i-1].'10')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
            }
        }
        // $index=0;
        //1
        for($i=1; $i <= count($row_kondisi); $i++){
            $sheet->setCellValue($row_kondisi[$i-1].'44','=SUM('.$row_kondisi[$i-1].'14:'.$row_kondisi[$i-1].'18,'.$row_kondisi[$i-1].'21:'.$row_kondisi[$i-1].'25,'.$row_kondisi[$i-1].'27:'.$row_kondisi[$i-1].'32,'.$row_kondisi[$i-1].'34:'.$row_kondisi[$i-1].'43)')->getStyle($row_kondisi[$i-1].'44')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        }
        for($i=0; $i < count($row_kondisi); $i+=2){
            $sheet->setCellValue($row_kondisi[$i].'45','=(SUM('.$row_kondisi[$i].'14:'.$row_kondisi[$i].'18)/(SUM('.$row_kondisi[$i].'14:'.$row_kondisi[$i].'18)+SUM('.$row_kondisi[$i+1].'14:'.$row_kondisi[$i+1].'18)))*0.15 + (SUM('.$row_kondisi[$i].'21:'.$row_kondisi[$i].'25)/(SUM('.$row_kondisi[$i].'21:'.$row_kondisi[$i].'25)+SUM('.$row_kondisi[$i+1].'21:'.$row_kondisi[$i+1].'25)))*0.3 + (SUM('.$row_kondisi[$i].'27:'.$row_kondisi[$i].'32)/(SUM('.$row_kondisi[$i].'27:'.$row_kondisi[$i].'32)+SUM('.$row_kondisi[$i+1].'27:'.$row_kondisi[$i+1].'32)))*0.15 + (SUM('.$row_kondisi[$i].'34:'.$row_kondisi[$i].'43)/(SUM('.$row_kondisi[$i+1].'34:'.$row_kondisi[$i+1].'43)+SUM('.$row_kondisi[$i].'34:'.$row_kondisi[$i].'43)))*0.15')->getStyle($row_kondisi[$i].'45')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
            $sheet->getStyle($row_kondisi[$i].'45')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        }

        //2
        for($i=1; $i <= count($row_kondisi); $i++){
            $sheet->setCellValue($row_kondisi[$i-1].'56','=SUM('.$row_kondisi[$i-1].'47:'.$row_kondisi[$i-1].'55)')->getStyle($row_kondisi[$i-1].'56')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        }
        for($i=0; $i < count($row_kondisi); $i+=2){
            $sheet->setCellValue($row_kondisi[$i].'57','=('.$row_kondisi[$i].'56/('.$row_kondisi[$i].'56+'.$row_kondisi[$i+1].'56))*0.1')->getStyle($row_kondisi[$i].'57')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
            $sheet->getStyle($row_kondisi[$i].'57')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        }

        //3
        // for($i=1; $i <= count($row_kondisi); $i++){
        //     $sheet->setCellValue($row_kondisi[$i-1].'59','=SUM('.$row_kondisi[$i].'47:'.$row_kondisi[$i].'55)')->getStyle($row_kondisi[$i-1].'59')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        // }
        for($i=0; $i < count($row_kondisi); $i+=2){
            $sheet->setCellValue($row_kondisi[$i].'60','=('.$row_kondisi[$i].'59/('.$row_kondisi[$i].'59+'.$row_kondisi[$i+1].'59))*0.15')->getStyle($row_kondisi[$i].'60')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
            $sheet->getStyle($row_kondisi[$i].'60')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        }

        //total
        for($i=1; $i <= count($row_kondisi); $i++){
            $sheet->setCellValue($row_kondisi[$i-1].'61','='.$row_kondisi[$i-1].'44+'.$row_kondisi[$i-1].'56+'.$row_kondisi[$i-1].'59')->getStyle($row_kondisi[$i-1].'61')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        }

        //persentase kesiapan
        for($i=0; $i < count($row_kondisi); $i+=2){
            $sheet->setCellValue($row_kondisi[$i].'62','='.$row_kondisi[$i].'45+'.$row_kondisi[$i].'57+'.$row_kondisi[$i].'60')->getStyle($row_kondisi[$i].'62')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_PERCENTAGE_00);
            $sheet->getStyle($row_kondisi[$i].'62')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        }
        // dd($data);
        for($i=0; $i<count($row_isi); $i++){
            $index=0;
            for($j=1; $j <= count($row_kondisi); $j++){
                if($j%2 == 0){
                    $sheet->setCellValue($row_kondisi[$j-1].$row_isi[$i], $data[$i][$index]['jumlah_buruk'])->getStyle($row_kondisi[$j-1].$row_isi[$i])->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
                    $index++;
                }else{
                    $sheet->setCellValue($row_kondisi[$j-1].$row_isi[$i], $data[$i][$index]['jumlah_baik'])->getStyle($row_kondisi[$j-1].$row_isi[$i])->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
                }
            }
        }
        // for($i=1; $i <= count($row_kondisi); $i++){
        //     if($i%2 == 0){
        //         $sheet->setCellValue($row_kondisi[$i-1].'14', $data[0][$index]['jumlah_buruk'])->getStyle($row_kondisi[$i-1].'14')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        //         $index++;
        //     }else{
        //         $sheet->setCellValue($row_kondisi[$i-1].'14', $data[0][$index]['jumlah_baik'])->getStyle($row_kondisi[$i-1].'14')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        //     }
        // }
        
        // $sheet->mergeCells('D1:R1');
        
        
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename=' . $fileName);
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;

    }

    public function insert_data_alat(){
        $alat=['APAT', 'APAR/APAB', 'Box Hydrant Outdoor', 'Box Hydrant Indoor', 'Jockey Pump', 'Electric Pump', 'Emergency Diesel Pump', 'Emergency Sea Water Pump', 'Portable Pump', 'Sprinkle System', 'Gas Sppression system (CO2/Clean Agent)', 'Foam System', 'Water Spray/Water Mist', 'Chemical Dust Suppression', 'Fire Prevention System (Sergi)', 'Panel Alarm System', 'Heat Detector' , 'Smoke Detector', 'Flame Detector', 'Gas Detector', 'Vaccum Dust Collector', 'Vaccum Truck', 'Fire Truck (Mobil Damkar)', 'Self-Contain Breathing Apparatus (SCBA)', 'Ambulance', 'Pintu Kebakaran', 'Tangga Kebakaran', 'Tempat Berhimpun/ Assembly Point', 'Lampu Penerangan Darurat', 'Tanda Petunjuk Arah Jalan Keluar', 'Pressurized Fan', 'Smoke Extract Fan dan Intake Fan', 'Air Handling Unit (AHU)', 'Fire Damper', 'Kesiapan Personil'];
        // dd($alat);
        $no=1;
        for ($i = 1; $i <= 6; $i++) {
            foreach ($alat as $al) {
            $data=[
                'id' => $no++,
                'nama' => $al,
                'jumlah' => rand(1, 10),
                'lokasi' => $i
            ];
            // dd($al);
            $this->alatModel->saveAlat($data);
            }
        }
        $judul=[
            'title' => 'Jadwal'
        ];
        return view('tl/jadwal-pemeriksaan', $judul);
    }

    public function insert_data_laporan(){
        $alat=['APAT', 'APAR/APAB', 'Box Hydrant Outdoor', 'Box Hydrant Indoor', 'Jockey Pump', 'Electric Pump', 'Emergency Diesel Pump', 'Emergency Sea Water Pump', 'Portable Pump', 'Sprinkle System', 'Gas Sppression system (CO2/Clean Agent)', 'Foam System', 'Water Spray/Water Mist', 'Chemical Dust Suppression', 'Fire Prevention System (Sergi)', 'Panel Alarm System', 'Heat Detector' , 'Smoke Detector', 'Flame Detector', 'Gas Detector', 'Vaccum Dust Collector', 'Vaccum Truck', 'Fire Truck (Mobil Damkar)', 'Self-Contain Breathing Apparatus (SCBA)', 'Ambulance', 'Pintu Kebakaran', 'Tangga Kebakaran', 'Tempat Berhimpun/ Assembly Point', 'Lampu Penerangan Darurat', 'Tanda Petunjuk Arah Jalan Keluar', 'Pressurized Fan', 'Smoke Extract Fan dan Intake Fan', 'Air Handling Unit (AHU)', 'Fire Damper', 'Kesiapan Personil'];
        // dd($alat);
        $no=1;
        // $data_alat=$this->alatModel->getAlat(null, null, 1);

        // dd($data_alat);
        for ($i = 1; $i <= 6; $i++) {
            $data_alat=$this->alatModel->getAlat(null, null, $i);
            foreach ($data_alat as $da) {
            $data=[
                'id_alat' => $da['id'],
                'NID' => 123,
                'tanggal_periksa' => '2024-01-09',
                'jumlah_baik' => $da['jumlah']-1,
                'jumlah_buruk' => 1,
                'catatan' => 'OKE Semua'
            ];
            // dd($al);
            $this->laporanModel->saveLaporan($data);
            }
        }


        $judul=[
            'title' => 'Jadwal'
        ];
        return view('tl/jadwal-pemeriksaan', $judul);
    }

}
