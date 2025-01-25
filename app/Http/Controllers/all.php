<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


use App\client;
use App\add_category;
use App\add_product;
use App\all_functions;
use App\vendor_list;
use App\order_list;
use App\cart_list;
use App\contact_detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class all extends Controller
{


	public function __construct()
	{

		if (!Schema::hasColumn('clients', 'name')) {

			DB::statement("ALTER TABLE  clients  ADD COLUMN  `name`  TEXT");
		}


		if (!Schema::hasColumn('order_lists', 'description')) {

			DB::statement("ALTER TABLE  order_lists  ADD COLUMN  `description`  TEXT");
		}
	}







	function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
	{


		switch ($theType) {

			case "image":
				$theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
				break;

			case "text":
				$theValue = ($theValue != "") ?  htmlentities($theValue)  : "NULL";
				break;

			case "long":
			case "int":
				$theValue = ($theValue != "") ? intval($theValue) : "NULL";
				break;
			case "double":
				$theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
				break;
			case "date":
				$theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
				break;
			case "defined":
				$theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
				break;
		}
		return $theValue;
	}


			function  orderdetails($id){

					$order  =  order_list::find($id);

				return  view('client.order_details')->with('order' ,  $order)  ; 


			}


	function  place_order(Request  $request)
	{

		if (!session('client')) {

			$this->register_client($request);
		}


		// Validate the request to ensure only picture files are uploaded
		$validator = Validator::make($request->all(), [
			'pictures.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
		]);


		if ($request->hasFile('pictures')) {


			if ($validator->fails()) {
				return response()->json(['errors' => $validator->errors()], 400);
			}


			$files = $request->file('pictures');
			$savedFiles = [];

			foreach ($files as $file) {
				$new_name = rand() . '.' . $file->getClientOriginalExtension();

				$getsize = $file->getSize();
				$original_name = $file->getClientOriginalName();
				$real_path = $file->getRealPath();

				$file->move(public_path('order_pictures'), $new_name);

				$savedFiles[] = [
					'new_name' => "/order_pictures/" . $new_name,
					'size' => $getsize,
					'original_name' => $original_name,
					'real_path' => $real_path
				];
			}

			$new_name = json_encode($savedFiles);
			// Optionally, you can return or save the information about the saved files

		}


		$save =   new   order_list();

		$save->email  =  session('client')['id'];
		$save->description  =  $request->description;
		$save->quantity =  $request->quantity;

		$save->order_id = generateRandomNumbers();
		if (isset($new_name)) {

			$save->picture  =  $new_name;
		}
		$save->product_id  =  $request->product_id;

		$save->state  =  "progress";

		$save->save();
		//send a mail to admin  with the  link to the order .... 

		$contact_details  = contact_detail::first();
		//add the product details  to the order....  
		//send a message and close it a

		$button = "https://" . $_SERVER['HTTP_HOST'] . "/order_details/" . $save->id;
		// Mail them their key
		$mailbody = "New Order is placed please click 
	   the link below to check details";

		$mailbody  =  "<br/> <a  href='$button'>   $button  </a> <br/>";

		$from = "From:support@" . $_SERVER['HTTP_HOST'];
		$subject  =  "New Order";

		$message  =  $mailbody;

		$to  = $contact_details->email;
		$button  = $button;

		$button_url  =  $button;


		$mail_return  =  	all_functions::send_email($subject,  $message, $to,  $button,  $button_url);



		return  redirect('my_order')->with('message',  "Successful");
	}


	function save_cart(Request  $request , $id)
	{



		// Validate the request to ensure only picture files are uploaded
		$validator = Validator::make($request->all(), [
			'pictures.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
		]);


		if ($request->hasFile('pictures')) {


			if ($validator->fails()) {
				return response()->json(['errors' => $validator->errors()], 400);
			}


			$files = $request->file('pictures');
			$savedFiles = [];

			foreach ($files as $file) {
				$new_name = rand() . '.' . $file->getClientOriginalExtension();

				$getsize = $file->getSize();
				$original_name = $file->getClientOriginalName();
				$real_path = $file->getRealPath();

				$file->move(public_path('order_pictures'), $new_name);

				$savedFiles[] = [
					'new_name' => "/order_pictures/" . $new_name,
					'size' => $getsize,
					'original_name' => $original_name,
					'real_path' => $real_path
				];
			}

			$new_name = json_encode($savedFiles);
			// Optionally, you can return or save the information about the saved files

		}


		$save =      cart_list::find($id);

		$save->description  =  $request->description;
		
		if (isset($new_name)) {

			$save->pictures  =  $new_name;
		}
		
		$save->save();
		//send a mail to admin  with the  link to the order .... 

		
		return  "Successful";
	}


	public function category($category)
	{



		$select =  add_product::Where('category', $category)->where('status', 'public')->orderBy('id', 'desc')->paginate(20);

		$all = array('select' => $select, 'category' => $category);


		return view('category')->with($all);
	}


	public function shop()
	{

		$select =  add_product::where('status', 'public')->orderBy('id', 'desc')->paginate(30);
		$all = array('select' => $select, 'category' => "Shop");


		return view('shop')->with($all);
	}




	public function filter_price($category, $filter)
	{


		$select =  add_product::Where('category', $category)->where('status', 'public')->orderBy('price', $filter)->paginate(20);

		$all = array('select' => $select, 'category' => $category);


		return view('category')->with($all);
	}


	public function signup()
	{
		return view('signupclient');
	}


	public function sell_on_Silk_Stones_Global_Limited()
	{
		return view('vendor_bregister');
	}


	public function vendor_register()
	{
		return view('register_vendor');
	}

	public function vendor_save(request  $request)
	{


		$check = vendor_list::where('email',  $request->email)->orWhere('store_name', $request->store_name)->first();




		if (!isset($check->id)) {

			$store_name = all::GetSQLValueString($request->store_name, 'text');
			$store_url = all::GetSQLValueString($request->store_url, 'text');

			$store_url = ' ';
			$description = all::GetSQLValueString($request->description, 'text');
			$email = all::GetSQLValueString($request->email, 'text');
			$password = all::GetSQLValueString($request->password, 'text');
			$title = all::GetSQLValueString($request->title, 'text');
			$first_name  = all::GetSQLValueString($request->first_name, 'text');
			$last_name  = all::GetSQLValueString($request->last_name, 'text');
			$phone = all::GetSQLValueString($request->phone, 'text');
			$str_add = all::GetSQLValueString($request->str_add, 'text');
			$state = all::GetSQLValueString($request->state, 'text');
			$lga = all::GetSQLValueString($request->lga, 'text');

			$city = all::GetSQLValueString($request->city, 'text');

			$store = new vendor_list();
			$store->store_name = $store_name;
			$store->store_url = $store_url;
			$store->description = $description;
			$store->email  = $email;
			$store->password   = $password;
			$store->title    = $title;
			$store->first_name    = $first_name;
			$store->last_name    = $last_name;
			$store->phone    = $phone;
			$store->str_add    = $str_add;
			$store->state    = $state;
			$store->lga    = $lga;
			$store->city    = $city;
			$store->save();



			// create session vendor here 

			$request->session()->put('vendor',  $request->email);
			$request->session()->forget('admin');


			return redirect('/vendors');
		} else {


?>
			<script>
				sweetmessage("error", "Email   Or Store Name already exist change it");
			</script>

<?php

			return   view('/register_vendor');
		}
	}







	public function logout_client(request  $request)
	{

		$request->session()->forget('client');
		return redirect('/account');
	}


	public function register_client(request   $request)
	{

		//change the 

		//search for email address if available and stop the signup
		$check_tesst  =   client::where([
			['email', $request->email],
			['phone',   $request->phone]
		])->first();

		if (!isset($check_tesst->id)) {

			$name  =    all::GetSQLValueString($request->name, 'text');

			$email  =    all::GetSQLValueString($request->email, 'text');
			$phone  =    all::GetSQLValueString($request->phone, 'text');

			$address  =  (isset($request->home_address)  ?  $request->home_address   :  " ");

			$home_address  =    all::GetSQLValueString($address, 'text');


			$enter  = new  client();
			$enter->name = $name;

			$enter->email   =  $email;
			$enter->phone   =  $phone;
			$enter->home_address    =  $home_address;
			$enter->save();



			$request->session()->put('client', $enter);
			//update the email address of the cpookie 

			if (isset($_COOKIE["session_id"])) {
				//update the database where the session_id  = coookie 

				$cartlist  = cart_list::where('session_id', $_COOKIE["session_id"])->get();


				if (count($cartlist) >  0) {


					foreach ($cartlist  as  $list_cart) {

						//update here

						$update_cart = cart_list::find($list_cart->id);

						$update_cart->email  = session('client')['id'];

						$update_cart->save();
					}
					return redirect('/checkout/complete-order');
				}
			}



			return redirect('/my_order');
		} else {
			$request->session()->put('client', $check_tesst);
			return view('signupclient');
		}
	}



	public function login_client(request   $request)
	{

		$enter  = client::where('email', $request->email)->where('phone', $request->phone)->first();

		if (isset($enter->id)) {
			$request->session()->put('client', 	$enter);
			if (isset($_COOKIE["session_id"])) {
				//update the database where the session_id  = coookie 

				$cartlist  = cart_list::where('session_id', $_COOKIE["session_id"])->get();


				if (count($cartlist) >  0) {


					foreach ($cartlist  as  $list_cart) {

						//update here

						$update_cart = cart_list::find($list_cart->id);

						$update_cart->email  = session('client')['id'];

						$update_cart->save();
					}

					return redirect('/checkout/complete-order');
				}
			}





			return redirect('/account_profile');
		} else {



			return  back()->with('info',  '<span style ="color:red">Wrong Details</span>');
		}
	}





	public function account()
	{

		return view('client');
	}


	public function product($id)
	{
		$find_product  = add_product::find($id);

		return view('product')->with('product', $find_product);
	}




	public function createschool(request  $request)
	{

		if ($request->session()->has('course')) {

			$section_num = section::Where('email', $request->session()->get('username'))->Where('course_id', $request->session()->get('course'))->count();




			return view('body.curriculum')->with('section_num', $section_num);
		} else if ($request->session()->has('username')) {


			return view('body.course');
		} else {

			return view('body.login');
		}
	}


	public function createschoolstart(request  $request)
	{


		$request->session()->forget('course');
		return view('body.course');
	}





	public function register()
	{
		return view('body.register');
	}





	public function register_todatabase(request  $request)
	{

		$enter  =   new  register();

		$enter->name = $request->input('name');
		$enter->email = $request->input('email');
		$enter->password = $request->input('password');

		$enter->save();

		$request->session()->put('username', $request->input('email'));


		return  redirect('/create_school');
	}




	public function insert_database_course(request  $request)
	{

		$enter  =   new  course();

		$enter->title = $request->input('title');
		$enter->description = $request->input('description');
		$enter->email = $request->session()->get('username');

		$enter->save();

		$request->session()->put('course', $enter->id);


		return  redirect('/create_school');
	}



	public function login()
	{

		return  view('body.login');
	}




	public function enter(request $request)
	{

		// check the login status 


		$heading = register::Where('email', $request->email)->Where('password', $request->password)->first();

		if ($heading != '') {
			$request->session()->put('username',  $request->email);
			return redirect('/create_school');
		} else {

			return redirect('/register');
		}
	}





	public function  cart(request $request, $id)
	{

		$cookie_name = 'pontikis_net_php_cookie';
		$cookie_value = 'test_cookie_set_with_php';
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');
		return  view('cart',  $request->cookie('pontikis_net_php_cookie'));
	}


	public function  retcart(request $request, $id)
	{


		view('cart')->with('cart', $request->cookie);
	}

	public  function account_profile()
	{

		return view('client.profile');
	}

	public  function client_saved()
	{

		return view('client.saved_item');
	}
	public  function delivery_address()
	{
		return view('client.delivery_address');
	}

	public  function my_order()
	{

		return view('client.orders');
	}

	public  function cancel_order($id)
	{

		$order_list  = order_list::where('email', session('client')['id'])->where('id', $id)->first();

		if (count($order_list)   == 1) {

			$change_state  = order_list::find($order_list->id);


			$change_state->state = 'cancel';

			$change_state->save();
		}

		echo ('tahnks');
	}



	public   function faqs()
	{

		return  view('faqs');
	}
	public   function contact()
	{

		return  view('contact');
	}
}
