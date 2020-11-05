<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Prueba extends CI_Controller {

	

	public function index()
	{

    $mpdf = new \Mpdf\Mpdf();
    
    // Define the Headers before writing anything so they appear on the first page
    $mpdf->SetHTMLHeader('
    <div style="text-align: right; font-weight: bold;">
       El rincón de la mascota
    </div>','O');
    $mpdf->SetHTMLHeader('<div style="border-bottom: 1px solid #000000;">EL rincón de la mascota</div>','E');

    $mpdf->SetHTMLFooter('
        <table width="100%">
            <tr>
                <td width="33%">{DATE j-m-Y}</td>
                <td width="33%" align="center">{PAGENO}/{nbpg}</td>
                <td width="33%" style="text-align: right;">My document</td>
            </tr>
        </table>');
    $html=$this->load->view('superadministrador/informes/compra_view',[],TRUE);
    $mpdf->WriteHTML($html);
    $mpdf->Output();
	
	}

}