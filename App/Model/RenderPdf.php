<?php
namespace Models;

use \Core\Model;
use \Dompdf\Dompdf;

class RenderPdf extends Model
{
    private $dompdf;
    public function __construct()
    {
        $this->dompdf = new Dompdf();
    }

    public function structPdf($dirHtml)
    {
        global $config;
        $this->dompdf->loadHtml(get_file_contents($config['link']).$dirHtml);
        $this->dompdf->setPaper('A4');
    }
    public function renderPdf()
    {
      $this->dompdf->render();
    }
    public function outputPdf()
    {
        $this->dompdf->stream();
    }
}
