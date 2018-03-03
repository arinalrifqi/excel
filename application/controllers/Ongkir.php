<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ongkir extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}

	//tampilkan province
	public function showProvince(){
		/* get province data */
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
        CURLOPT_RETURNTRANSFER =>true,
        CURLOPT_ENCODING =>"",
        CURLOPT_MAXREDIRS =>10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "key: 8ee33ef8c2115e4e3cf86bac84717452"
        ),
        ));

        $response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
  			echo "cURL Error #:" . $err;
		} else {
  		echo $response;
		}
	}
	
	//menampilkan data kabupaten/kota berdasarkan id provinsi
	public function showCity($province){
		$curl = curl_init();
 
		curl_setopt_array($curl, array(
 		CURLOPT_URL => "http://rajaongkir.com/api/starter/city?province=$province",
 		CURLOPT_RETURNTRANSFER => true,
 		CURLOPT_ENCODING => "",
 		CURLOPT_MAXREDIRS => 10,
 		CURLOPT_TIMEOUT => 30,
 		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 		CURLOPT_CUSTOMREQUEST => "GET",
 		CURLOPT_HTTPHEADER => array(
 			"key: 8ee33ef8c2115e4e3cf86bac84717452"
 		),
		));
 
		$response = curl_exec($curl);
		$err = curl_error($curl);
		$k = json_decode($response, true);
 
		curl_close($curl);
 
		if ($err){
			$result = 'error';
			return 'error';
		}else{
			return $response;
		}
	}
	
	//hitung ongkir
	public function ongkirPos($origin,$destination,$weight){
		$curl = curl_init();

		curl_setopt_array($curl, array(
  		CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
  		CURLOPT_RETURNTRANSFER => true,
  		CURLOPT_ENCODING => "",
  		CURLOPT_MAXREDIRS => 10,
  		CURLOPT_TIMEOUT => 30,
  		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  		CURLOPT_CUSTOMREQUEST => "POST",
  		CURLOPT_POSTFIELDS => "origin=$origin&destination=$destination&weight=$weight&courier=pos",
  		CURLOPT_HTTPHEADER => array(
    		"content-type: application/x-www-form-urlencoded",
    		"key: 8ee33ef8c2115e4e3cf86bac84717452"
  		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);
		
		$data=json_decode($response,true);

		curl_close($curl);

		if ($err) {
  			echo "cURL Error #:" . $err;
		} else {
			$courier=$data['rajaongkir']['query']['courier'];
			$desitiny=$data['rajaongkir']['origin_details']['city_name'];

			echo "<table>";
  			 for($i=0;$i<count($data['rajaongkir']['results']);$i++) {
  			 	if (count($data['rajaongkir']['results'][$i]['costs'])){
  				echo "<tr><td colspan='4' class='text-center'><h4>".$data['rajaongkir']['results'][$i]['name']."</h4><input type='hidden' name='kota_tujuan' value='".$desitiny."'></td></tr>";
  				 for ($j=0; $j<count($data['rajaongkir']['results'][$i]['costs']); $j++){
  					echo "<tr>";
  					echo "<td><input type='radio' class='ongkir-radio' name='courier' id='courier' value='";
  					echo $data['rajaongkir']['results'][$i]['costs'][$j]['cost'][0]['value']."' val-data='".$courier." ".$data['rajaongkir']['results'][$i]['costs'][$j]['service']."'></td>";
  					echo "<td><p>".$data['rajaongkir']['results'][$i]['costs'][$j]['service']."</p><small>";
  					echo $data['rajaongkir']['results'][$i]['costs'][$j]['description']."</small></td>";
  					echo "<td class='text-center'>".$data['rajaongkir']['results'][$i]['costs'][$j]['cost'][0]['etd']."</td>";
  					echo "<td><h4> Rp ".number_format($data['rajaongkir']['results'][$i]['costs'][$j]['cost'][0]['value'])."</h4></td></tr>";
  				 }
  				}
  			 }
  			echo "</table>";
			
		}
	}

	public function ongkirJne($origin,$destination,$weight){
		$curl = curl_init();

		curl_setopt_array($curl, array(
  		CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
  		CURLOPT_RETURNTRANSFER => true,
  		CURLOPT_ENCODING => "",
  		CURLOPT_MAXREDIRS => 10,
  		CURLOPT_TIMEOUT => 30,
  		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  		CURLOPT_CUSTOMREQUEST => "POST",
  		CURLOPT_POSTFIELDS => "origin=$origin&destination=$destination&weight=$weight&courier=jne",
  		CURLOPT_HTTPHEADER => array(
    		"content-type: application/x-www-form-urlencoded",
    		"key: 8ee33ef8c2115e4e3cf86bac84717452"
  		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);
		
		$data=json_decode($response,true);


		curl_close($curl);
		//print_r($data);exit();

		if ($err) {
  			echo "cURL Error #:" . $err;
		} else {
			$courier=$data['rajaongkir']['query']['courier'];
			$desitiny=$data['rajaongkir']['origin_details']['city_name'];

			echo "<table>";
  			 for($i=0;$i<count($data['rajaongkir']['results']);$i++) {
  			 	if (count($data['rajaongkir']['results'][$i]['costs'])){
  				echo "<tr><td colspan='4' class='text-center'><h4>".$data['rajaongkir']['results'][$i]['name']."</h4></td></tr>";
  				 for ($j=0; $j<count($data['rajaongkir']['results'][$i]['costs']); $j++){
  					echo "<tr>";
  					echo "<td><input type='radio' class='ongkir-radio' name='courier' id='courier' value='";
  					echo $data['rajaongkir']['results'][$i]['costs'][$j]['cost'][0]['value']."' val-data='".$courier." ".$data['rajaongkir']['results'][$i]['costs'][$j]['service']."'></td>";
  					echo "<td><p>".$data['rajaongkir']['results'][$i]['costs'][$j]['service']."</p><small>";
  					echo $data['rajaongkir']['results'][$i]['costs'][$j]['description']."</small></td>";
  					echo "<td class='text-center'>".$data['rajaongkir']['results'][$i]['costs'][$j]['cost'][0]['etd']."</td>";
  					echo "<td><h4> Rp ".number_format($data['rajaongkir']['results'][$i]['costs'][$j]['cost'][0]['value'])."</h4></td></tr>";
  				 }
  				}
  			 }
  			echo "</table>";
		}
	}

	public function ongkirTiki($origin,$destination,$weight){
		$curl = curl_init();

		curl_setopt_array($curl, array(
  		CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
  		CURLOPT_RETURNTRANSFER => true,
  		CURLOPT_ENCODING => "",
  		CURLOPT_MAXREDIRS => 10,
  		CURLOPT_TIMEOUT => 30,
  		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  		CURLOPT_CUSTOMREQUEST => "POST",
  		CURLOPT_POSTFIELDS => "origin=$origin&destination=$destination&weight=$weight&courier=tiki",
  		CURLOPT_HTTPHEADER => array(
    		"content-type: application/x-www-form-urlencoded",
    		"key: 8ee33ef8c2115e4e3cf86bac84717452"
  		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);
		
		$data=json_decode($response,true);

		curl_close($curl);

		if ($err) {
  			echo "cURL Error #:" . $err;
		} else {
			$courier=$data['rajaongkir']['query']['courier'];
			$desitiny=$data['rajaongkir']['origin_details']['city_name'];

			echo "<table>";
  			 for($i=0;$i<count($data['rajaongkir']['results']);$i++) {
  			 	if (count($data['rajaongkir']['results'][$i]['costs'])){
  				echo "<tr><td colspan='4' class='text-center'><h4>".$data['rajaongkir']['results'][$i]['name']."</h4></td></tr>";
  				 for ($j=0; $j<count($data['rajaongkir']['results'][$i]['costs']); $j++){
  					echo "<tr>";
  					echo "<td><input type='radio' class='ongkir-radio' name='courier' id='courier' value='";
  					echo $data['rajaongkir']['results'][$i]['costs'][$j]['cost'][0]['value']."' val-data='".$courier." ".$data['rajaongkir']['results'][$i]['costs'][$j]['service']."'></td>";
  					echo "<td><p>".$data['rajaongkir']['results'][$i]['costs'][$j]['service']."</p><small>";
  					echo $data['rajaongkir']['results'][$i]['costs'][$j]['description']."</small></td>";
  					echo "<td class='text-center'>".$data['rajaongkir']['results'][$i]['costs'][$j]['cost'][0]['etd']."</td>";
  					echo "<td><h4> Rp ".number_format($data['rajaongkir']['results'][$i]['costs'][$j]['cost'][0]['value'])."</h4></td></tr>";
  				 }
  				}
  			 }
  			echo "</table>";
  			}
	}

	public function hitungOngkir($origin,$destination,$weight){
		$this->ongkirPos($origin,$destination,$weight);
		$this->ongkirJne($origin,$destination,$weight);
		$this->ongkirTiki($origin,$destination,$weight);
	}

	public function process($act='',$province='',$origin='',$destination='',$weight='',$courier=''){
		
		if(isset($act)):
			switch ($act) {
			case 'showprovince': $province = $this->showProvince();break;
			default:echo $province;break;
			case 'showcity':
				$idprovince = $province;
				$city = $this->showCity($idprovince);
			echo $city;break;
			default:
			case 'cost':
				//$origin = $_GET['origin'];
				//$destination = $_GET['destination'];
				//$weight = $_GET['weight'];
				//$courier = $_GET['courier'];
				//$cost = $this->hitungOngkir($origin,$destination,$weight,$courier);
//parse json
				$costarray = json_decode($cost);
				$results =$costarray->rajaongkir->results;
				if(!empty($results)):
				foreach($results as $r):
				foreach($r->costs as $rc):
				foreach($rc->cost as $rcc):
				echo "<tr><td>$r->code</td><td>$rc->service</td><td>$rc->description</td><td>$rcc->etd</td><td>".number_format($rcc->value)."</td></tr>";
				endforeach;
				endforeach;
				endforeach;
			endif;
			//end of parse json
			break;

			}
		endif;
	}

}
?>