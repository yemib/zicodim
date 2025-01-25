<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use App\add_category;
use App\add_product;
use App\slider;
use App\page_content;
use App\pickup;
use App\order_list;
use App\user_admin;
use App\vendor_list;
use App\client;
use App\saved_item;
use App\cart_list;
use App\email_subscribe;
use App\font;
use App\color;
use App\database_my;
use Illuminate\Support\Facades\Input;
use  App\all_functions;
use App\Http\Controllers\all;
use Illuminate\Support\Facades\Route;

//paystack here

Route::post('/pay', 'PaymentController@send_order')->name('pay');

Route::resource('/article', 'article');

Route::get('order_details/{id}' ,  "all@orderdetails" );



Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
Route::get('shop'   ,  'all@shop');


// mail direction

Route::get('/sendmail',  'mailcontroller@send');

Route::get('/',  function(){
	 return  view('home');
	
});

Route::get('/posts',  function(){
	 return  view('posts');
	
});

Route::get( '/print_invoice/{id}' , function($id){
	
	
	return   view('print')->with('id', $id); 
												
												});





Route::post('/email_config',  'mailcontroller@mail_config');


Route::get('/email_messages',  function(){
	if(session('admin')){
	 return  view('admin_folder.message_deliver');
	}
	return  back();
});



Route::post('/email_messages', 'mailcontroller@save_messages');



Route::get('/email_config',  function(){
	if(session('admin')){
		
	 return  view('admin_folder.email_config');
	
	}
	
	return  back();
	
});



Route::get('/account_detail',  function(){
	
	
	if(session('vendor')) { 
	 return  view('vendor.vendor_account');
	}
	
	
});





Route::post('/account_detail', 'vendorController@account_detail');
Route::post('/update_account', 'vendorController@update_account');

Route::post('/checkpassword', 'vendorController@checkpassword');







Route::get('/revenue',  function(){
	
	
	if(session('vendor')) { 
	 return  view('vendor.revenue');
	}
	
	
});


Route::get('/contact_details',  function(){
	
	if(session('admin')) { 
	
	 return  view('admin_folder.contact');
	
	}
	return  redirect("/");
	
});




Route::get('/font_change',  function(){
	if(session('admin')) { 
	
	 return  view('admin_folder.font');
	}
	
});





Route::get('/admin',  function(){
	
	 return  view('admin_folder.dashbaord');
	
});



Route::get('/vendor_per',  function(){
	
	if(session('admin')) { 
	 return  view('admin_folder.vendorper');
	}
});





Route::get('/color',  function(){
	
	if(session('admin')) { 
	 return  view('admin_folder.color');
	}
});



Route::post('/color',  function(  request $request){
	// updaee color

	if(session('admin')) {  
		
	$update_color  = color::first();
	
	$update_color->name1  = $request->name1;
	$update_color->name2  = $request->name2;
	
	$update_color->textcolor1  = $request->textcolor1;
	$update_color->textcolor2  = $request->textcolor2;
	
	
	$update_color->save();
	
	
	
	?>
	
	<script>  alertcon('  Color   Change ', 2000)  </script>
	<?php 
	 return  view('admin_folder.color');
	
	
	
	}
});





Route::get('/reset_password',  function(){
	 return  view('reset_password');
	
});





Route::post('/delivery_address',  function(request  $request){
	
	//upadte client
	
	if(session('client')){
		
		
		$client  = client::where('id'  , session('client')['id'] )->first();
		
		
		$home_address  = ($request->home_address  != null) ?  $request->home_address  :  ' ';
		
		$client->home_address = $home_address;
		
		$client->save();
	}
	
	
	 return  redirect('/delivery_address');
	
	
	
});


//email subscribe options here 


Route::post('/email_subscribe',  function(request  $request){
		
	$email  = email_subscribe::where('email'  , $request->email)->first();
	
	if(count($email)  == 0)  {  		
		
		$subcribe_email  = new email_subscribe();
		
		$subcribe_email->email = $request->email;
		
		$subcribe_email->save();

	 }

	
});


Route::get( '/reset_password/{q}' , function($q){
	
	
	return   view('reset_password')->with('q', $q); 
												
												});



Route::post('/reset_password/{q}',  function(request  $request  , $q){
	$email = $request->email;
    $password = $request->password;
	
    $confirmpassword = $request->confirmpassword;
    $hash =$request->q ;
    // Use the same salt from the forgot_password.php file
    $salt = "498#2D83B631%3800EBD!801600D*7E3CC13";
    // Generate the reset key
    $resetkey = hash('sha512', $salt.$email);
    // Does the new reset key match the old one?
    if ($resetkey == $hash)
    {
		//we can now change the password
		
        if ($password == $confirmpassword)
        {

			
			
			$clients  =  client::where('email' , $request->email )->first();
			
			$change  =  client::find($clients->id);
			
			$change->password = $request->password ;
			
			$change->save();
			
			
		
			
			
			?>
		
<script>  
	
	alert('your password is reset succesfully');  

	setTimeout(function(){ $('.container_login').fadeIn();$('#form_contain_login').show();
	
	$('.side_cart').hide();  } , 2000);

</script>
					
					
						
			<?php 
			
			return  view('home');
			
			
 		}else{
			
			
			
		
			
			?>
			
			<script>  alert('Your password do not match.') </script>
			
			
			
			<?php
			
			return  view('reset_password')->with('q' , $q);
			
		}
		
		
	}else{
		
	    
		?>
		<script>  alert('Wrong key supplied');  </script>
		<?php  
		
		return  view('reset_password')->with('q' , $q);
		
	}
	
});




Route::post('/recover_password',  function(request  $request){
	
	
	$email  = client::where('email'  , $request->email)->orwhere('phone'  ,  $request->email )->first();
	
	if(isset($email->id))  {  	
		
	$salt = "498#2D83B631%3800EBD!801600D*7E3CC13";
         // Create the unique user password reset key
  
    $password = hash('sha512', $salt.$request->email);
         // Create a url which we will direct them to reset their password
        $button = "https://".$_SERVER['HTTP_HOST'];
        // Mail them their key
        $mailbody = "Dear     ".$email->first_name.",\n\n This is your login Details <br/>  ";

		$mailbody  =  "Email  :  $email->email   <br/>  Phone :  $email->phone";
		
    $from = "From:support@".$_SERVER['HTTP_HOST'];
		$subject  =  "Password Reset (".config('app.name').") "  ;  
		
		$message  =  $mailbody  ;
		
		$to  = $request->email;
		$button  = $button;  
		
		$button_url  = $button;
		
		
	$mail_return  =  	all_functions::send_email($subject,  $message  , $to  ,  $button  ,  $button_url);


	if(!$mail_return ){

				
	return ('Fail to send try again');

	}
		
		
		//mail($request->email, "Password Reset (".config('app.name').") ", $mailbody,$from);
		
		
	return ('Your login details have been sent to your email address. <br/>  If you cannot find it in your inbox Check your Spam . ');
		
		
		
	} else{
		
		return ('Email address or phone number provided  is not found in our database.  ');
		
	}
	
	
});









//password recovery here 





// admin controller
Route::get('/dashboard', 'admin_controller@dashboard');
Route::get('/email_accounts', 'admin_controller@email_accounts');



Route::post('/contact_details', 'admin_controller@contact_details');

Route::post('/vendor_percentage', 'admin_controller@vendor_percentage');


Route::get('/product', 'admin_controller@product');
Route::get('/add_category', 'admin_controller@add_category');


Route::post('/add_category', 'admin_controller@add_category_database');
Route::get('/list_category', 'admin_controller@list_category');
Route::get('/delete_category/{id}', 'admin_controller@delete_category');

Route::get('/edit_category/{id}', 'admin_controller@edit_category');

Route::post('/edit_category/{id}', 'admin_controller@update_category');

Route::get('/add_product', 'admin_controller@add_product');
Route::post('/add_product', 'admin_controller@add_product_database');


Route::get('/list_user', 'admin_controller@list_user');
Route::get('/add_user', 'admin_controller@add_user');

Route::post('/add_user', 'admin_controller@add_user_database');



Route::get('/edit_user/{id}', 'admin_controller@edit_user');


Route::get('/delete_user/{id}', 'admin_controller@delete_user');




Route::get('/list_product', 'admin_controller@list_product');
Route::get('/delete_product/{id}', 'admin_controller@delete_product');

Route::get('/edit_product/{id}', 'admin_controller@edit_product');

Route::post('/update_product_image/{id}', 'admin_controller@update_product_image');

Route::get('/pages/{pages}', 'admin_controller@pages');
Route::get('/delete_vendor/{id}', 'admin_controller@delete_vendor');

Route::post('/pages/{pages}', 'admin_controller@update_pages');
Route::post('/edit_product/{id}', 'admin_controller@update_product');


Route::get('/progress_order', 'admin_controller@order_progress');

Route::get('/complete_order', 'admin_controller@order_complete');


Route::get('/cancel_order', 'admin_controller@cancel_order');


Route::get('/order_action/{id}/{state}', 'admin_controller@order_action');

Route::get('/cancel_order_client/{id}', 'admin_controller@cancel_order_client');


//pick up route


	Route::get('/add_pickup', 'admin_controller@add_pickup');
	Route::post('/add_pickup', 'admin_controller@store_pickup');
	Route::get('/list_pickup', 'admin_controller@list_pickup');
	Route::get('/delete_pickup/{id}', 'admin_controller@delete_pickup');
	Route::get('/edit_pickup/{id}', 'admin_controller@edit_pickup');
	Route::post('/update_edit/{id}', 'admin_controller@update_pickup');
	Route::post('/update_user/{id}', 'admin_controller@update_user');




//customer admin

Route::get('/customer', 'admin_controller@customer');
Route::get('/vendor_list', 'admin_controller@vendor_list');


Route::post('/submenu/', 'admin_controller@submenu');
Route::get('/sliders', 'admin_controller@slider');
Route::get('/iconses', 'admin_controller@icons');


Route::get('/logo', 'admin_controller@logo');

Route::post('/logo', 'admin_controller@logo_change');


Route::post('/font_change', 'admin_controller@font_change');





Route::get('/banner1', 'admin_controller@banner1');
Route::post('/banner1', 'admin_controller@banner1_change');


Route::get('/banner2', 'admin_controller@banner2');
Route::post('/banner2', 'admin_controller@banner2_change');

//portfolio



Route::post('/slider_store', 'admin_controller@slider_store');
Route::post('/icon_store', 'admin_controller@icon_store');
Route::get('/list_sliders', 'admin_controller@list_sliders');
Route::get('/list_icons', 'admin_controller@list_icons');
Route::get('/delete_slide/{id}', 'admin_controller@delete_slide');
Route::get('/delete_icon/{id}', 'admin_controller@delete_icon');




Route::get('/admin_signin', 'admin_controller@admin_signin');
Route::post('/admin_signin', 'admin_controller@admin_signin_redirect');
Route::get('/admin_logout', 'admin_controller@admin_logout');
Route::get('/vendor_product_list', 'admin_controller@vendor_product_list');

Route::get('/delete_customer/{id}', 'admin_controller@delete_custom');

Route::get('/customer_signing/{email}', 'admin_controller@customer_signin');
//vendor





// all   controller



Route::get('category/{category}', 'all@category');



Route::get('/category/{category}/{filter}', 'all@filter_price');


Route::get('/product/{id}', 'all@product');
Route::get('/account', 'all@account');
Route::get('/sell_on_Silk_Stones_Global_Limited', 'all@sell_on_Silk_Stones_Global_Limited');
Route::get('/vendor register', 'all@vendor_register');
Route::post('/vendor register', 'all@vendor_save');
Route::get('/cart/{id}', 'all@cart');

Route::get('/cart/addItem/{id}/{static}', 'CartController@addItem');
Route::get('/checkout/complete-order', 'CartController@checkout');


Route::get('/cart', 'CartController@index');
Route::get('/cartremove/{id}', 'CartController@destroy');
Route::get('/save_item/{id}', 'CartController@save_item');
//pick up address  
Route::post('/add_new_address', 'CartController@add_new_address');
Route::get('/order_progress/{pay_state}', 'CartController@order_progress');
Route::get('/order_pay_on_delivery', 'CartController@order_pay_on_delivery');
Route::get('/increase_cart/{id}', 'CartController@increase_cart');
Route::get('/decrease_cart/{id}', 'CartController@decrease_cart');
Route::get('/destroy_save/{id}', 'CartController@destroy_save');

Route::get('/signup', 'all@signup');
Route::get('/logout_client', 'all@logout_client');

Route::post('/signup', 'all@register_client');
Route::post('/login/client', 'all@login_client');
Route::get('/account_profile', 'all@account_profile');
Route::get('/client_saved', 'all@client_saved');

Route::get('/delivery_address', 'all@delivery_address');




Route::get('/my_order', 'all@my_order');

//pages


Route::get('/policy',  function(){
	 return  view('policy');
});


Route::get('/login',  function(){
	 return  view('login_sign_phone');
});


Route::get('/Terms_condition',  function(){
	 return  view('term');
	
});



Route::get('/about_us',  function(){
	 return  view('about');
	
});



Route::get('/porfolio',  function(){
	return  view('portfolio');
   
});







Route::get('/faqs', 'all@faqs');



Route::get('/contact', 'all@contact');

// vendor 

Route::get('/vendors', 'vendorController@index');
Route::get('/vendor_signin', 'vendorController@vendor_signin');
Route::post('/vendor_signin', 'vendorController@vendor_signin_redirect');
Route::get('/vendor_logout', 'vendorController@vendor_logout');


Route::get('/made_private/{id}', 'simple_update@made_private');

Route::get('/made_public/{id}', 'simple_update@made_public');
Route::get('/al_category/{id}', 'simple_update@al_category');


Route::get('/vendor/signin/{email}', 'simple_update@vendor_signin');
Route::get('/shop/{email}', 'simple_update@shop');
Route::get('/update_delivery_address/{id}/{name_table}', 'simple_update@update_delivery_address');

Route::any ( '/search', function () {
	
    $q =  $_GET['q'] ;
	
	//category_check
	$cat = add_category::where ( 'name', 'LIKE', '%' . $q . '%' )->first();
	
	$id_cat  = (isset($cat->id)) ?   $cat->id  :  0  ;
	
    $user = add_product::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'category', 'LIKE', '%' . $id_cat  . '%' )->paginate(20);
	
    if (count ( $user ) > 0){ 
        return view ( 'search' )->withSelect ( $user )->withQuery( $q );
	} 
	
		return  view('home')->with('info' , 'No Result Found');
} );






Route::post('/profile_edit',    function(request $request){
	
	// uopdate the client value 
	
	if(session('client')){
	
		$client_det  = client::where('id', session('client')['id'])->first();
		
		// now update the profile. 
		$database_myt = new database_my();
		
		 
		$client_det->name =    $database_myt->GetSQLValueString( $request->name , 'text') ;
		$client_det->home_address  =    $database_myt->GetSQLValueString( $request->home_address , 'text') ;
		
	$client_det->phone  =   $database_myt->GetSQLValueString(  $request->phone , 'text')  ;
		

		
	$client_det->save();
		
		return  back();
		
		
		
		
	}
	
	
	
	
	
	
	
} );



Route::post('place_order' , 'all@place_order' )->name('place_order');
Route::post('save_cart/{id}' , 'all@save_cart' )->name('save_cart');



