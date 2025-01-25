<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\order_list;
use App\cart_list;
use App\add_product;
use App\all_functions;
use App\client;
use App\contact_detail;
use Paystack;


class PaymentController extends Controller
{
	//

	/**
	 * Redirect the User to Paystack Payment Page
	 * @return Url
	 */


	public function send_order()
	{


		if (session('client')) {

			$cart_list  = cart_list::where('email',  session('client')['id'])->get();
			// get the client information  

			$client  = client::where('id', session('client')['id'])->first();



			foreach ($cart_list    as $cart_list_data) {

				$order_list  =  new order_list();

				$order_list->description  =  $cart_list_data->description  ;
				 
				$order_list->picture  =  $cart_list_data->pictures  ;

				$order_list->email = session('client')['id'];

				$order_list->product_id  = $cart_list_data->product_id;


				$add_product_add  = add_product::where('id', $cart_list_data->product_id)->first();

				$order_list->order_id  = generateRandomNumbers();
				$order_list->quantity  = $cart_list_data->quantity;
				$order_list->state  = 'progress';
				//$order_list->pay  = 'online';
				//$order_list->delivery_address  = $client->home_address   .  '    '  .  $client->country;

				// search the course for price  
				$order_list->price  = $add_product_add->price;
				$order_list->delivery_amount  = 0;
				
				

				$order_list->save();
			}

			//cleat cartlist here 
			$cart_delete  = cart_list::where('email',  session('client')['id']);
			$cart_delete->delete();

			//send a mail to the admin to check  new orders on his  platform .  


			$contact_details  = contact_detail::first();
			//add the product details  to the order....  
			//send a message and close it a
	
			$button = "https://" . $_SERVER['HTTP_HOST'] . "/progress_order/";
			// Mail them their key
			$mailbody = "New Order is placed please Login to the admin area to check the orders";
	
			$mailbody  .=  "<br/> <a  href='$button'>   $button  </a> <br/>";
	
			
			$subject  =  "New Order";
	
			$message  =  $mailbody;
	
			$to  = $contact_details->email;
			$button  = $button;
	
			$button_url  =  $button;
	
	
			$mail_return  =  	all_functions::send_email($subject,  $message, $to,  $button,  $button_url);
	
	



			return	   redirect('/my_order');
		}

		return  redirect('cart');
	}


	public function redirectToGateway()
	{


		return Paystack::getAuthorizationUrl()->redirectNow();
	}


	/**
	 * Obtain Paystack payment information
	 * @return void
	 */
	public function handleGatewayCallback(request $request)
	{

		$paymentDetails = Paystack::getPaymentData();

		// dd($paymentDetails);

		// here you confirm the payment period  okay .....

		if ($paymentDetails['message']  == 'Verification successful') {

			if ($request->reference ===  $paymentDetails['data']['reference']) {

				// check if the refrence already exist in the database ...// redirect to another path entirely 
				//insert stuff  into database here 
				// clear cart area and insert into order list  

				//check if the ref exist in order_list database  


				$order_check  = order_list::where('ref',  $request->reference)->first();




				if (!isset($order_check->id)) {

					// check cart_list  


				} else {

					return redirect('/cart');
				}
			} else {

				return  redirect('/cart');
			}
		}
		// Now you have the payment details,
		// you can store the authorization_code in your db to allow for recurrent subscriptions
		// you can then redirect or do whatever you want
	}
}
