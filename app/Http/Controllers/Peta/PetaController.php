<?php

namespace App\Http\Controllers\Peta;

use App\Http\Controllers\Controller;
use App\Model\DesaModel;
use App\Model\DetailAreaModel;
use App\Model\KecamatanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class PetaController extends Controller
{
    public function showPeta(){

        return view('content.peta');
    }

    function getAllMap(){
        // $data = DetailAreaModel::select('kecamatan_id','pola_ruang','koordinat')->get();
        $data = DB::table('detail_area')
                ->join('desa', 'detail_area.desa_id', '=', 'desa.id')
                ->join('kecamatan', 'detail_area.kecamatan_id', '=', 'kecamatan.id')
                ->select('detail_area.pola_ruang','kecamatan.name AS kecamatan','desa.name AS desa' , 'detail_area.luas', 'detail_area.sumber', 'detail_area.keterangan', 'detail_area.koordinat')
                ->get();
        $geojson = array(
            'type'          => 'FeatureCollection',
            'features'      => array()
        );

        foreach ($data as $detail) {
            $feature = array(
                    'type' => 'Feature',
                    'geometry' => array(
                        'type' => 'Polygon',
                        'coordinates' => json_decode($detail->koordinat)
                    ),
                    'properties' => array(
                        'polygon_type'  => 'desa',
                        'pola_ruang' => $detail->pola_ruang,
                        'kecamatan' => $detail->kecamatan,
                        'desa' => $detail->desa,
                        'luas' => $detail->luas,
                        'sumber' => $detail->sumber,
                        'keterangan' => $detail->keterangan,
                    )
                );
            array_push($geojson['features'], $feature);
        }

        // $this->output->set_content_type('application/json');
        // $this->output->set_status_header(200);
        // $this->output->set_output(json_encode($geojson));
        return json_encode($geojson);
    }
    function getMapByKecamatan($id){
        // $data = DetailAreaModel::where('kecamatan_id',$id)->get();
        $data = DB::table('detail_area')
                ->join('desa', 'detail_area.desa_id', '=', 'desa.id')
                ->join('kecamatan', 'detail_area.kecamatan_id', '=', 'kecamatan.id')
                ->select('detail_area.pola_ruang','kecamatan.name AS kecamatan','desa.name AS desa' , 'detail_area.luas', 'detail_area.sumber', 'detail_area.keterangan', 'detail_area.koordinat')
                ->where('kecamatan.id',$id)
                ->get();
        $geojson = array(
            'type'          => 'FeatureCollection',
            'features'      => array()
        );

        foreach ($data as $detail) {
            $feature = array(
                    'type' => 'Feature',
                    'geometry' => array(
                        'type' => 'Polygon',
                        'coordinates' => json_decode($detail->koordinat)
                    ),
                    'properties' => array(
                        'polygon_type'  => 'desa',
                        // 'kecamatan_id' => $detail->kecamatan_id,
                        'pola_ruang' => $detail->pola_ruang,
                        'kecamatan' => $detail->kecamatan,
                        'desa' => $detail->desa,
                        'luas' => $detail->luas,
                        'sumber' => $detail->sumber,
                        'keterangan' => $detail->keterangan,
                    )
                );
            array_push($geojson['features'], $feature);
        }

        // $this->output->set_content_type('application/json');
        // $this->output->set_status_header(200);
        // $this->output->set_output(json_encode($geojson));
        return json_encode($geojson);
    }

    public function getIdKecamatan($kecamatan){
        $kec = KecamatanModel::where('name',$kecamatan)->get();
        return $kec;
    }

    public function getIdDesa($desa){
        $des = DesaModel::where('name',$desa)->get();
        return $des;
    }

    public function addDataDetail($param){
        $data = new DetailAreaModel();
        $data->kecamatan_id = $param['kecamatanId'];
        $data->desa_id = $param['desaId'];
        $data->pola_ruang = $param['polaRuang'];
        $data->luas = $param['luas'];
        $data->sumber = $param['sumber'];
        $data->keterangan = $param['keterangan'];
        $data->koordinat = $param['koordinat'];
        $data->save();
    }

    public function kmlInserting(){
        $xml = simplexml_load_file(resource_path('kml/mahakamulu.kml'));
        $folders = $xml->Document->Folder;

        // echo $this->getIdKecamatan('Lahammmm');
        // print_r($folders->Placemark[0]->ExtendedData->SchemaData->SimpleData);
        // echo "<br><br>";
        // echo($folders->Placemark[0]->ExtendedData->SchemaData->SimpleData[1]['name']);
        // echo "<br>";

        $countAllData = 0;
        $countLoadData = 0;
        for ($i=0; $i < count($folders->Placemark); $i++) {
            $kecamatanId = "";
            $desaId = "";
            $polaRuang = "";
            $luas = "";
            $sumber = "";
            $keterangan = "";
            $koordinat = "";
            echo $i;
            echo "<br>";
            for ($j=0; $j < count($folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData); $j++) {
                if('Kecamatan_'== $folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j]['name']){
                    $kc = substr($folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j],5);
                    $kcResult = $this->getIdKecamatan($kc);
                    if(count($kcResult)!=0){
                        $kecamatanId = $kcResult[0]->id;
                        echo $kcResult[0]->id;
                        echo "<br>";
                    }else{
                        $kecamatanId = 0;
                        echo "error ".$kc;
                        echo "<br>";
                    }
                    // $countLoadData++;
                }
                if('Desa_1'== $folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j]['name']){
                    // $desa = $folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j];
                    $dsResult = $this->getIdDesa($folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j]);
                    if(count($dsResult)!=0){
                        $desaId = $dsResult[0]->id;
                        echo $dsResult[0]->id;
                        echo "<br>";
                    }else{
                        $desaId = 0;
                        echo "error ".$folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j];
                        echo "<br>";
                    }
                    $countLoadData++;
                }
                if('PR'== $folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j]['name']){
                    $polaRuang = $folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j];
                    echo($folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j]);
                    echo "<br>";
                }
                if('Luas_ha'== $folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j]['name']){
                    $luas = $folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j];
                    echo($folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j]);
                    echo "<br>";
                    // $countLoadData++;
                }
                if('Sumber'== $folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j]['name']){
                    $sumber = $folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j];
                    echo($folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j]);
                    echo "<br>";
                    // $countLoadData++;
                }
                if('Keterangan'== $folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j]['name']){
                    $keterangan = $folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j];
                    echo($folders->Placemark[$i]->ExtendedData->SchemaData->SimpleData[$j]);
                    echo "<br>";
                    // $countLoadData++;
                }
            }

            $coordinates = $folders->Placemark[$i]->MultiGeometry->Polygon->outerBoundaryIs->LinearRing->coordinates;
            $split = explode(" ", $coordinates);
            $coordinates_array = "";
            $coordinates_array .= "[[[" . $split[0] . "],";
            for ($k = 1; $k < sizeof($split) - 2; $k++) {
                $coordinates_array .= "[" . $split[$k] . "],";
            }
            $coordinates_array .= "[" . $split[sizeof($split) - 2] . "]]]";
            $coordinates_array_fix = preg_replace('/\s+/', '', $coordinates_array);
            $koordinat = $coordinates_array_fix;
            print_r($coordinates_array_fix);
            echo "<br><br>";

            $param = [
                'kecamatanId' => $kecamatanId,
                'desaId' => $desaId,
                'polaRuang' => $polaRuang,
                'luas' => $luas,
                'sumber' => $sumber,
                'keterangan' => $keterangan,
                'koordinat' => $koordinat,
            ];

            $this->addDataDetail($param);

            $countAllData++;
        }

        echo "All Data ".$countAllData;
        echo "<br>";
        echo "Load Data ".$countLoadData;
    }
}
