<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Dompdf\Dompdf;
use App\Models\ModelSiswa;

class PdfController extends BaseController
{
    protected $modelSiswa;

    public function __construct()
    {
        $this->modelSiswa = new ModelSiswa();
    }

    public function index()
    {
        $data['data'] = $this->modelSiswa->findAll();
        return view('/datasiswa/pdf_view', $data);
    }

    public function generate()
    {
        $data['data'] = $this->modelSiswa->findAll();

        $filename = date('y-m-d-H-i-s') . '-Form-Regist';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('datasiswa/pdf_view', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'Landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
}
