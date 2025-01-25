<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Http\Response;
use App\add_product;


use App\cart_list;
use App\client;

use App\saved_item;
use App\order_address;
use App\order_list;
use App\pickup;
use App\now_address;
use App\contact_detail;
use App\all_functions;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CartController extends Controller
{


	public function __construct()
	{


		if (!Schema::hasColumn('cart_lists',  'description')) {
			DB::statement("ALTER TABLE cart_lists ADD COLUMN  `description` TEXT");
			DB::statement("ALTER TABLE cart_lists ADD COLUMN  pictures TEXT");
		}
	}


	public function index()
	{

		if (!session('client')) {
			// set cookie period
			if (!isset($_COOKIE["session_id"])) {

				$number_of_digits = 5;

				// Generate random number with specified number of digits
				$random_number = rand(pow(10, $number_of_digits - 1), pow(10, $number_of_digits) - 1);

				// Get current timestamp
				$timestamp = time();

				// Combine random number with timestamp
				$random_with_time = $random_number . $timestamp;
				$session_id =     $random_with_time . generateRandomNumbers();
				$cookie_name = "session_id";
				$cookie_value = $session_id;

				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

				return  back();
			} else {

				return   view('cart.cart');
			}
		} else {

			return   view('cart.cart');
		}
	}

	public function addItem(request $request, $id, $static)
	{

		if ($request->session()->has('client')) {

			$email_ids  = $request->session()->get('client')['id'];
			$session_id = '';
		} else {


			$number_of_digits = 5;

			// Generate random number with specified number of digits
			$random_number = rand(pow(10, $number_of_digits - 1), pow(10, $number_of_digits) - 1);

			// Get current timestamp
			$timestamp = time();

			// Combine random number with timestamp
			$random_with_time = $random_number . $timestamp;
			$session_id =     $random_with_time . generateRandomNumbers();
			$email_ids  = "";
			$cookie_name = "session_id";

			if (!isset($_COOKIE[$cookie_name])) {

				$cookie_value = $session_id;
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


			} else {
				$session_id =    $_COOKIE[$cookie_name];
			}
		}

		// search the cart database if the product is available or not 
		if ($request->session()->has('client')) {

			$email_address  = $request->session()->get('client')['id'];
			$search_product  = cart_list::where('product_id', $id)->where('email', $email_address)->first();
		} else {

			$search_product  = cart_list::where('product_id', $id)->where('session_id', $session_id)->first();
		}

		if (!isset($search_product->id)) {

			$enter  =  new  cart_list();
			$search_product = add_product::find($id);

			$enter->session_id = $session_id;
			$enter->product_id = $id;
			$enter->email = $email_ids;

			$enter->vendor_email = $search_product->email;

			$enter->quantity = 1;


			$enter->pick_up_available = $search_product->pick_up_available;

			$enter->save();
		} else {


			$total_quantity  =	$search_product->quantity + 1;

			$update_cart  = cart_list::find($search_product->id);

			$update_cart->quantity =  $total_quantity;

			$update_cart->save();

			// update cart  here 



		}

		if ($static == 'next') {
			return   redirect('/cart');
		} else {

			if (session('client')) {

				$checking_cart  = cart_list::where('email', session('client')['id'])->get();
			} else {

				//if (isset($_COOKIE['session_id'])) {

					$checking_cart  = cart_list::where('session_id', $session_id)->get();
				//}
			}


			return  view('cart.cart_list')->with('checking_cart', $checking_cart);
		}
	}

	public function destroy($id)
	{

		$delete_value = cart_list::find($id);
		$delete_value->delete();
		return   redirect('/cart');
	}

	public function update(Request $request, $id)
	{
	}



	public  function save_item(request $request,  $id)
	{


		if (session('client')) {

			$enter  = new saved_item();
			$enter->email  = $request->session()->get('client')['id'];

			$enter->product_id  = $id;
			$search_product = add_product::find($id);

			$enter->vendor_email  = $search_product->email;

			$enter->save();
		} else {
		}
	}



	public  function checkout()
	{


		if (session('client')) {

			return   view('cart.checkout');
		} else {

			return   redirect("/signup")->with('info',  '<span  style="color:green">Sign up or login to complete your order</span>');
		}
	}




	public  function add_new_address(request $request)
	{
		$direction_option  = ($request->direction != null) ? $request->direction  : '';
		$enter   = new  order_address();

		$enter->first_name	  = $request->first_name;
		$enter->mobile_number = $request->mobile_number;
		$enter->direction  = $direction_option;
		$enter->city  = $request->city;
		$enter->last_name  = $request->last_name;
		$enter->street_address  = $request->street_address;
		$enter->state   = $request->state;
		$enter->lga    = $request->lga;
		$enter->email    = $request->session()->get('client')['id'];

		$enter->save();


?>
		<script>
			$('#new_address').hide(500);
			$('#define_addressess').hide(500);

			$('#personal_addresses').show(500);
		</script>

		<div id="" style="" class="col-sm-12">

			<?php $my_pickup  = order_address::where('email', $request->session()->get('client')['id'])->paginate(10) ?>

			<div>
				<?php foreach ($my_pickup  as $pickups) {   ?>

					<div class="col-sm-6">


						<div class="pickup" id="">
							<label for="pickup<?php echo $pickups->id  ?>">
								<input type="radio" id="pickup<?php echo $pickups->id  ?>" name="pickup" value="<?php echo $pickups->id ?>" /><strong>Select This Pickup Location</strong>

								<p> <?php echo  $pickups->first_name  ?> </p>

							</label>
						</div>
					</div>
				<?php  } ?>
			</div>
		</div>

<?php
		//return   view('cart.checkout');
		//  echo all the addresses here okay 

	}

	public  function order_progress(request  $request, $pay_state)
	{

		$cartv = cart_list::where('email', $request->session()->get('client')['id'])->get();
		// clear cart here 
		$cart_clear  = cart_list::where('email', $request->session()->get('client')['id']);


		$now_address  = now_address::where('email', session('client')['id'])->first();

		// update the order here period 
		// get all the value in the carh

		if (count($cartv)  != 0  && isset($now_address->id)) {

			$pickup = pickup::find($now_address->pickup_id);
			echo (count($cartv));

			foreach ($cartv  as $cart) {

				// get product detyails 
				$enter  = new order_list();

				$product  =  add_product::where('id', $cart->product_id)->first();

				$product_number_reduction  =  add_product::where('id', $cart->product_id);

				$enter->email = $request->session()->get('client')['id'];

				$enter->product_id   = $product->id;
				//searh vendor email

				$enter->vendor_email   = $product->email;

				$enter->quantity = $cart->quantity;

				$enter->order_id = $product->id . generateRandomNumbers();
				$enter->pay = $pay_state;
				$enter->delivery_address  = $pickup->address;

				$enter->delivery_amount  = $pickup->price;

				$enter->price  = $product->price;

				$enter->coupon_price  = $product->coupon_price;

				$enter->picture  = $product->picture;

				$enter->state  = 'progress';

				$enter->save();

				//reduce the number of   product quantity
				//$reduce_quantity  =	$product->quantity  ;
				////$product_number_reduction->quantity=$reduce_quantity;
				//$product_number_reduction->save();	



				$contact_detail =  contact_detail::first();			//send an email 



				$to  = $contact_detail->email;

				$subject   = 	'New Product ordered check your Dashboard ';


				$message = '<html>
<head>
<meta charset="utf-8">
<title>' . config('app.name') . '</title>
</head>

<body>

<div>
<h3>  An  Order has being created check your Dashboard   </h3>

</div>
</body>
</html>';

				// single message insert for refrence 
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				// More headers
				$headers .= 'From:<' . session('client')['email'] . '>' . "\r\n";


				try {

					all_functions::send_email($subject,  $message, $to, "Admin Panel ",  "https://" . $_SERVER['HTTP_HOST'] . "/admin");


					all_functions::send_email($subject,  $message, "moi.supplies@gmail.com", "Admin Panel ",  "https://" . $_SERVER['HTTP_HOST'] . "/admin");

					//mail($to,$subject,$message,$headers);
				} catch (Exception $e) {
				}
			}


			$cart_clear->delete();


			return   redirect('/my_order');
		} else {

			return  back();
		}





		//all delete files from cart ok 



		// reduce the quantity of the product 





	}


	public  function order_pay_on_delivery(request  $request)
	{


		$cartv = cart_list::where('email', $request->session()->get('client')['id'])->where('pick_up_available',  'yes')->get();
		// clear cart here 
		$cart_clear  = cart_list::where('email', $request->session()->get('client')['id'])->where('pick_up_available',  'yes');


		$now_address  = now_address::where('email', session('client')['id'])->first();

		// update the order here period 
		// get all the value in the carh

		if (count($cartv)  != 0  && isset($now_address->id)) {

			if ($now_address->pickup_id   !=  0) {
				$pickup = pickup::find($now_address->pickup_id);
			}


			echo (count($cartv));

			foreach ($cartv  as $cart) {

				// get product detyails 
				$enter  = new order_list();

				$product  =  add_product::where('id', $cart->product_id)->first();

				$product_number_reduction  =  add_product::where('id', $cart->product_id);

				$enter->email = $request->session()->get('client')['id'];

				$enter->product_id   = $product->id;
				//searh vendor email


				$enter->quantity = $cart->quantity;

				$enter->order_id = $product->id . generateRandomNumbers();

				$enter->pay = 'Pay On Delivery';

				if ($now_address->pickup_id   !=  0) {


					$enter->delivery_address  = $pickup->address;


					$enter->delivery_amount  = $pickup->price;
				} else {

					// get the client home address . period
					$client_address  = client::where('id', session('client')['id'])->first();


					$addres_f  = $client_address->home_address    . ','  . $client_address->state . ','  .  $client_address->country;



					$enter->delivery_address  = $addres_f;

					$enter->delivery_amount  =  0;
				}






				$enter->price  = $product->price;

				$enter->ref  = $product->id . generateRandomNumbers();



				$enter->picture  = $product->picture;

				$enter->state  = 'progress';

				$enter->save();

				//reduce the number of   product quantity
				//$reduce_quantity  =	$product->quantity  ;
				////$product_number_reduction->quantity=$reduce_quantity;
				//$product_number_reduction->save();	



				$contact_detail =  contact_detail::first();			//send an email 



				$to  = $contact_detail->email . ',' .  $product->email;

				$subject   = 	'Pay on Delivery   Product  had been   ordered check your Dashboard ';


				$message = '<html>
<head>
<meta charset="utf-8">
<title>LaptopWorld</title>
</head>

<body>

<div>
<h3> pay  on delivery product has being  Ordered  check your Dashboard   </h3>

</div>
</body>
</html>';

				// single message insert for refrence 
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				// More headers
				$headers .= 'From:<' . session('client')['email'] . '>' . "\r\n";



				$contact_detail =  contact_detail::first();			//send an email 

				//$toh  = $contact_detail->email .','.  $product->email;

				$toh = $contact_detail->email;


				$user = "Pay On Delivery Order";

				/* Mail::send('mail.payondelivery', ['user' => 'pay on Delivery'], function ($m) use ($user, $toh ) {
			
            $m->from($toh, config('app.name'));

            $m->to($toh, config('app.name'))->subject('Pay on Delivery   Product  has been   ordered check your Dashboard');
			
			
        });
		*/

				// single message insert for refrence 
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



				try {
					all_functions::send_email($subject,  $message, $toh, "Admin Panel ",  "https://" . $_SERVER['HTTP_HOST'] . "/admin");

					all_functions::send_email($subject,  $message, "moi.supplies@gmail.com", "Admin Panel ",  "https://" . $_SERVER['HTTP_HOST'] . "/admin");
					//mail($to,$subject,$message,$headers);
				} catch (Exception $e) {
				}



				//mail($toh,$subject,$message,$headers);


			}


			$cart_clear->delete();


			return   redirect('/my_order');
		} else {

			return  back();
		}





		//all delete files from cart ok 



		// reduce the quantity of the product 





	}


	public	function calculation_price($quant, $id)
	{
	}



	public  function increase_cart($id)
	{

		$delivery_amount = 0;

		if (session('client')) {

			$now_address  = now_address::where('email',  session('client')['id'])->first();

			if (isset($now_address->id)) {

				if ($now_address->pickup_id != 0) {

					$pickup  = pickup::where('id', $now_address->pickup_id)->first();

					$delivery_amount = 	 $pickup->price;
				}
			}
		}

		$increase  = cart_list::find($id);

		$increase_value = $increase->quantity + 1;

		$product_individual  = add_product::find($increase->product_id);

		$individual_total  = $product_individual->price *  $increase_value;


		$individual_total_delivery = $individual_total;


		$increase->quantity = $increase_value;

		// create a limit in the increase okay  

		$product  = add_product::find($increase->product_id);

		if ($increase->quantity <=   $product->quantity) {

			$increase->save();
		}

		if (session('client')) {

			$checking_cart  = cart_list::where('email', session('client')['id'])->get();
		} else {

			if (isset($_COOKIE['session_id'])) {

				$checking_cart  = cart_list::where('session_id', $_COOKIE['session_id'])->get();
			}
		}


		$subtotal = 0;
		$subtotal = 0;
		$delivery =  $delivery_amount;
		$number_item = 0;
		$recent = 0;

		foreach ($checking_cart as $checking_carts) {

			$products  = add_product::find($checking_carts->product_id);




			$y = $products->price * $checking_carts->quantity;

			$subtotal  =  $subtotal  +  $y;

			$number_item =   $number_item  + $checking_carts->quantity;
		}

		$total =  $subtotal   +  $delivery;

		$realtotal  = $total * 100;

		if ($increase->quantity <=   $product->quantity) {
			$maximum = ' ';
		} else {
			$maximum = 'Maximum';
		}

		return response()->json([
			'maximum' => $maximum,
			'increase_value'   => $increase_value,
			'total' => number_format($total),
			'subtotal' => number_format($subtotal),
			'number_item' => $number_item,
			'individual_total' => number_format($individual_total),
			'individual_total_delivery' => $individual_total_delivery,
			'realtotal' => $realtotal

		]);
	}


	public  function decrease_cart($id)
	{


		$delivery_amount = 0;

		if (session('client')) {

			$now_address  = now_address::where('email',  session('client')['id'])->first();

			if (isset($now_address->id)) {

				if ($now_address->pickup_id  != 0) {


					$pickup  = pickup::where('id', $now_address->pickup_id)->first();

					$delivery_amount = 	 $pickup->price;
				}
			}
		}

		$increase  = cart_list::find($id);

		$increase_value = $increase->quantity - 1;

		$product_individual  = add_product::find($increase->product_id);

		$individual_total  = $product_individual->price *  $increase_value;


		$individual_total_delivery = $individual_total;


		$increase->quantity = $increase_value;

		if ($increase->quantity  >=  1) {

			$increase->save();
		}

		if (session('client')) {

			$checking_cart  = cart_list::where('email', session('client')['id'])->get();
		} else {

			if (isset($_COOKIE['session_id'])) {

				$checking_cart  = cart_list::where('session_id', $_COOKIE['session_id'])->get();
			}
		}


		$subtotal = 0;
		$subtotal = 0;
		$delivery =  $delivery_amount;
		$number_item = 0;
		$recent = 0;

		foreach ($checking_cart as $checking_carts) {

			$products  = add_product::find($checking_carts->product_id);




			$y = $products->price * $checking_carts->quantity;

			$subtotal  =  $subtotal  +  $y;





			$number_item =   $number_item  + $checking_carts->quantity;
		}

		$total =  $subtotal   +  $delivery;

		$realtotal  = $total * 100;


		return response()->json([
			'maximum' => ' ',
			'increase_value'   => $increase_value,
			'total' => number_format($total),
			'subtotal' => number_format($subtotal),
			'number_item' => $number_item,
			'individual_total' => number_format($individual_total),
			'individual_total_delivery' => $individual_total_delivery,
			'realtotal' => $realtotal

		]);
	}





	public function destroy_save($id)
	{

		$delete_value = saved_item::find($id);
		$delete_value->delete();
		return  back();
	}
}
