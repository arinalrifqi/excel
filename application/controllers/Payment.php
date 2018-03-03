<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {



	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'VT-server-qIsboi7gG0l4p0W3cJDr3BVg', 'production' => false);
		$this->load->library('veritrans');
		$this->veritrans->config($params);
		$this->load->helper('url');
    }

	public function index()
	{

		/* Data payment information*/
		$nama=$this->session->userdata('nama_pemesan');
		$address=$this->session->userdata('alamat_pemesan');
		$city=$this->session->userdata('kota_pemesan');
		$phone=$this->session->userdata('tlp_pemesan');
		$email=$this->session->userdata('email_pemesan');
		$kirim=$this->session->userdata('biaya_kirim');
		$kurir=$this->session->userdata('kurir');
		$order_code=$this->session->userdata('order_code');

		$total=$this->cart->total()+$kirim;

		$transaction_details = array(
			'order_id' 		=> $order_code,
			'gross_amount' 	=> $total
		);

		foreach($this->cart->contents() as $value){
			$items[]=array(
				'id' 				=> $value['id'],
				'price' 			=> $value['price'],
				'quantity' 			=> $value['qty'],
				'name' 				=> $value['name']
			);
		}

		// Populate items
		$items[]=array(
				'id' 				=> 'courier',
				'price' 			=> $kirim,
				'quantity' 			=> 1,
				'name' 				=> $kurir
			);
		//;
		$items=$items;


		// Populate customer's billing address
		$billing_address = array(
			'first_name' 		=> $nama,
			'address' 			=> $address,
			'city' 				=> $city,
			'phone' 			=> $phone
			);

		// Populate customer's shipping address
		$shipping_address = array(
			'first_name' 	=> $nama,
			'address' 		=> $address,
			'city' 			=> $city,
			'phone' 		=> $phone
			);

		// Populate customer's Info
		$customer_details = array(
			'first_name' 		=> $nama,
			'email' 			=> $email,
			'phone' 			=> $phone,
			'billing_address' 	=> $billing_address,
			'shipping_address'	=> $shipping_address
			);

		// Data yang akan dikirim untuk request redirect_url.
		// Uncomment 'credit_card_3d_secure' => true jika transaksi ingin diproses dengan 3DSecure.
		$transaction_data = array(
			'payment_type' 			=> 'vtweb', 
			'vtweb' 						=> array(
				'enabled_payments' 	=> array('credit_card','mandiri_clickpay'),
				'credit_card_3d_secure' => true
				//'finish_redirect_url': 'http://www.sneekers.co.id/payment/finish',
    			//'unfinish_redirect_url': 'http://www.sneekers.co.id/payment/unfinish',
    			//'error_redirect_url': 'http://www.sneekers.co.id/payment/error'
			),
			//Set Redirection URL Manually
          	'finish_redirect_url' 	=> 'base_url("payment/finish")',
          	'unfinish_redirect_url' => 'base_url("payment/unfinish")',
          	'error_redirect_url' 	=> 'base_url("payment/error")',
			'transaction_details'	=> $transaction_details,
			'item_details' 			=> $items,
			'customer_details' 	 	=> $customer_details
		);
	
		try
		{
			$vtweb_url = $this->veritrans->vtweb_charge($transaction_data);
			header('Location: ' . $vtweb_url);
		} 
		catch (Exception $e) 
		{
    		echo $e->getMessage();	
		}
	}

	public function notification()
	{
		echo 'test notification handler';
		$json_result = file_get_contents('php://input');
		$result = json_decode($json_result);

		if($result){
		$notif = $this->veritrans->status($result->order_id);
		}

		error_log(print_r($result,TRUE));

		//notification handler sample

		$transaction = $notif->transaction_status;
		$type        = $notif->payment_type;
		$order_id    = $notif->order_id;
		$fraud       = $notif->fraud_status;

		if ($transaction == 'capture') {
		  // For credit card transaction, we need to check whether transaction is challenge by FDS or not
		  if ($type == 'credit_card'){
		    if($fraud == 'challenge'){
		      // TODO set payment status in merchant's database to 'Challenge by FDS'
		      // TODO merchant should decide whether this transaction is authorized or not in MAP
		      echo "Transaction order_id: " . $order_id ." is challenged by FDS";
		      } 
		      else {
		      // TODO set payment status in merchant's database to 'Success'
		      echo "Transaction order_id: " . $order_id ." successfully captured using " . $type;
		      }
		    }
		  }
		else if ($transaction == 'settlement'){
		  // TODO set payment status in merchant's database to 'Settlement'
		  echo "Transaction order_id: " . $order_id ." successfully transfered using " . $type;
		  } 
		  else if($transaction == 'pending'){
		  // TODO set payment status in merchant's database to 'Pending'
		  echo "Waiting customer to finish transaction order_id: " . $order_id . " using " . $type;
		  } 
		  else if ($transaction == 'deny') {
		  // TODO set payment status in merchant's database to 'Denied'
		  echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is denied.";
		}

	}

	public function manual(){

		if($this->session->userdata('member_in')=='YES'){
			if(!empty($this->cart->total_items())){
		//destroy cart data
			$this->cart->destroy();
			$data['code']=$this->session->userdata('order_code');
			$data['list']=$this->m_member->get_sales_order_detail(array("sales_order_code"=>$data['code']));
			$tmp['content'] = $this->load->view('public/manual-invoice',$data, TRUE);
        	$this->load->view('template_public', $tmp);
        	}else{
        		redirect('cart');
        	}
    	}else{
    		redirect('cart');
    	}
	}
}
