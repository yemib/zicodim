<?php

namespace App\Http\Controllers;

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
use App\logo;

use App\contact_detail;
use App\vendorper;
use App\now_address;
use App\icons;

use App\banner2;
use App\banner1;
use App\font;
use App\account_detail;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;




class admin_controller extends Controller
{
	//




	public function __construct()
	{

		if (!Schema::hasColumn('contact_details', 'address')) {

			DB::statement("ALTER TABLE contact_details  ADD COLUMN  `address`  TEXT");
			DB::statement("ALTER TABLE contact_details  ADD COLUMN  `address2`  TEXT");
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



	public function contact_details(request $request)
	{
		if (session('admin')) {

			$contact_details  = contact_detail::find(1);


			$facebook = ($request->facebook != "") ? $request->facebook : ' ';
			$twitter = ($request->twitter != "") ? $request->twitter : ' ';
			$support = ($request->support != "") ? $request->support : ' ';
			$whatapp = ($request->whatapp != "") ? $request->whatapp : ' ';
			$instagram = ($request->instagram != "") ? $request->instagram : ' ';
			$tawk = ($request->tawk != "") ? $request->tawk : ' ';
			$email = ($request->email != "") ? $request->email : ' ';
			$address = ($request->address != "") ? $request->address : ' ';

			$contact_details->facebook  = $facebook;
			$contact_details->twitter   = $twitter;
			$contact_details->support   = $support;
			$contact_details->whatapp  = $whatapp;
			$contact_details->instagram  = $instagram;
			$contact_details->tawk   = $tawk;
			$contact_details->email   = $email;
			$contact_details->address = $address;
			$contact_details->save();
		}
		return   back();
	}




	public function  vendor_percentage(request $request)
	{

		if (session('admin')) {


			$contact_details  = vendorper::find(1);


			$percentage = ($request->percentage != "") ? $request->percentage : 0;


			$contact_details->percentage  = $percentage;

			$contact_details->save();

			return   back();
		}
	}


	public  function   dashboard()
	{
		if (session('admin')) {
			return	  view('admin_folder.dashbaord');
		}

		return redirect("/");
	}

	public  function  email_accounts()
	{
		if (session('admin')) {
			return	  view('admin_folder.email_account');
		}

		return redirect("/");
	}




	public   function product()
	{
		if (session('admin')) {
			return   view('admin_folder.product');
		}

		return redirect("/");
	}

	public   function add_category()
	{
		//transfer necessayr info here 
		if (session('admin')) {

			return   view('admin_folder.add_category');
		}

		return redirect("/");
	}



	public   function add_category_database(request  $request)
	{
		if (session('admin')) {
			$image = $request->file('picture');

			if ($image != null  &&  $request->parent == 'none') {

				$this->validate($request, [
					'picture' => 'image|nullable'

				]);


				$getsize =  $image->getSize();
				$original_name = $image->getClientOriginalName();
				$new_name = rand() . '.' . $image->getClientOriginalExtension();
				$real_path  =   $image->getRealPath();
				$image->move(public_path('category2'), $new_name);
			} else {
				$new_name = ' ';
				$original_name = ' ';
			}
			$enter  = new  add_category();
			$enter->name = $request->name;
			$enter->parent   = $request->parent;
			$enter->sub_parent   =  $request->sub_parent;
			$enter->picture   =  $new_name;
			$enter->picture_real_name   =  $original_name;


			$enter->save();

			return   redirect('/list_category');
		} else {

			return  back();
		}
	}


	public  function list_category(request  $request)
	{
		if (session('admin')) {
			$category = add_category::paginate(20);
			return   view('admin_folder.list_category')->with('category', $category);
		} else {

			return  redirect('/');
		}
	}

	public function delete_category(request $request,   $id)
	{

		if (session('admin')) {

			//lecture_contents
			$store  = add_category::where('id', $id)->first();

			$path  = public_path('category2/' . $store->picture);
			//$path = asset('category/'.$store->picture.'/');

			unlink($path);


			//unlink('http://127.0.0.1:8000/category/176548614.jpg');
			$store->delete();

			return   redirect('/list_category');
		} else {

			return  back();
		}
	}

	public function delete_user(request $request,   $id)
	{
		//lecture_contents

		if (session('admin')) {
			$store  = user_admin::find($id);

			$store->delete();

			return   redirect('/list_user');
		}
	}



	public function delete_custom(request $request,   $id)
	{

		if (session('admin')) {



			// delete the cart 

			// delete save item 
			$store  = client::find($id);

			$delete_cart  = cart_list::where('email',  $store->email);

			$delete_cart->delete();


			$delete_order  = order_list::where('email',  $store->email);

			$delete_order->delete();


			$delete_saved  = saved_item::where('email',  $store->email);

			$delete_saved->delete();



			$store->delete();
			$request->session()->forget('client');
		}

		return   redirect('/customer');
	}



	public function delete_vendor(request $request,   $id)
	{

		if (session('admin')) {

			// delete the cart 

			// delete save item 
			$store  = vendor_list::find($id);

			$delete_cart  = cart_list::where('vendor_email',  $store->email);

			$delete_cart->delete();


			$delete_order  = order_list::where('vendor_email',  $store->email);

			$delete_order->delete();


			$delete_saved  = saved_item::where('vendor_email',  $store->email);

			$delete_saved->delete();


			$delete_product  = add_product::where('email',  $store->email);

			$delete_product->delete();





			$store->delete();
			$request->session()->forget('vendor');
		}

		return   back();
	}

	public function edit_category(request $request,   $id)
	{
		if (session('admin')) {
			//lecture_contents
			$store  = add_category::find($id);
			//$path = asset('category/'.$store->picture.'/');
			//unlink('http://127.0.0.1:8000/category/176548614.jpg');
			//$store->delete();

			return   view('admin_folder.add_category')->with('edit_list', $store);
			//return   redirect('/add_category'); 
		}
	}


	public  function update_category(request $request,  $id)
	{
		if (session('admin')) {
			$image = $request->file('picture');
			$parent = add_category::find($id);

			// update add_product everytin .
			$add_product  = add_product::where('category', $parent->name)->get();

			//update the parent of the category  

			$parent_name_change  = add_category::where('parent', $parent->name)->get();





			if ($image != null  &&  $request->parent == 'none') {

				$this->validate($request, [
					'picture' => 'image|nullable'

				]);

				$getsize =  $image->getSize();
				$original_name = $image->getClientOriginalName();
				$new_name = rand() . '.' . $image->getClientOriginalExtension();
				$real_path  =   $image->getRealPath();
				$image->move(public_path('category'), $new_name);

				$parent->picture  = $new_name;
				$parent->picture_real_name  = $original_name;
			} else {

				if ($request->parent != 'none') {
					$parent->picture  = ' ';
					$parent->picture_real_name  = ' ';
				}
			}

			$parent->name  = $request->name;
			$parent->parent  = $request->parent;
			$parent->sub_parent  = $request->sub_parent;


			//$parent->name  = $request->name ;

			$parent->save();

			foreach ($add_product  as $add_product) {

				$update_product = add_product::find($add_product->id);

				$update_product->category  = $request->name;

				$update_product->save();
			}

			foreach ($parent_name_change as $parent_name_change) {

				$update_parent  = add_category::find($parent_name_change->id);
				$update_parent->parent  = $request->name;
				$update_parent->save();
			}





			$success  = 'Successfull';
			return  redirect('/edit_category/' . $id)->with('success', $success);
		}
	}

	public function submenu(request $request)
	{
		//lecture_contents
		//$store  = add_category::where('parent',$root_name)->get();

		//return   view('/submenu');
		if (session('admin')) {

			$checking =  add_category::where('parent',  $request->parent)->where('parent', '!=', 'none')->where('sub_parent', 'none')->get();

			if (count($checking) > 0) {
?>
				<option value="none"> root </option>
				<?php
				foreach ($checking  as $check) { ?>

					<option value=" <?php echo $check->name   ?> "> <?php echo $check->name   ?> </option>

				<?php
				}
			} else {
				?>
				<option value="none"> root </option>
<?php

			}
		}
	}






	public function edit_product(request $request,   $id)
	{
		if (session('admin') or session('vendor')) {
			//lecture_contents
			$store  = add_product::find($id);
			//$path = asset('category/'.$store->picture.'/');
			//unlink('http://127.0.0.1:8000/category/176548614.jpg');
			//$store->delete();
			return  view('admin_folder.edit_product')->with('edit_list', $store);
			//return   redirect('/add_category');
		}


		return  redirect("/");
	}

	public   function add_product()
	{

		//transfer necessayr info here 

		//$all = array('parent'=>$parent);\
		if (session('admin')  or session('vendor')) {

			return   view('admin_folder.add_product');
		} else {

			return  redirect('/');
		}
	}



	public   function add_user()
	{
		//transfer necessayr info here 

		//$all = array('parent'=>$parent);
		if (session('admin')) {
			return   view('admin_folder.add_user');
		}
	}

	public   function add_user_database(request $request)
	{


		if (session('admin')) {

			$user_admin =  new user_admin();

			$user_admin->name = $request->name;
			$user_admin->username = $request->username;
			$user_admin->password = $request->password;

			$user_admin->save();


			return   redirect('/list_user');
		}
	}






	public  function list_product(request  $request)
	{
		if (session('admin')  or session('vendor')) {

			return   view('admin_folder.list_product');
		}

		return redirect("/");
	}
	public  function list_user(request  $request)
	{

		if (session('admin')) {
			return   view('admin_folder.list_user');
		}
	}



	public   function add_product_database(request  $request)
	{


		if (session('admin')  or session('vendor')) {



			$image = $request->file('pictures');			// send a field back if not available

			if ($image != null) {


				$validation =   true;



				/* 	Validator::make($request->all(), [
					'pictures' => 'required',
					//'pictures.*' => 'mimes:jpg,jpeg,png,ico|max:10240' // 10MB max size for each file
				]); 
 */
				//$validation->passes()

				if ($validation) {




					if ($request->hasFile('pictures')) {
						$files = $request->file('pictures');
						$savedFiles = [];

						foreach ($files as $file) {
							$new_name = rand() . '.' . $file->getClientOriginalExtension();

							$getsize =  $file->getSize();
							$original_name = $file->getClientOriginalName();
							$real_path  =   $file->getRealPath();

							$file->move(public_path('products'), $new_name);

							$savedFiles[] = [
								'new_name' => "/products/" . $new_name,
								'size' => $getsize,
								'original_name' => $original_name,
								'real_path' => $real_path
							];
						}


						$new_name  =  json_encode($savedFiles);
						// Optionally, you can return or save the information about the saved files
						// return response()->json(['saved_files' => $savedFiles]);
					}






					$status  = ($request->status != '') ? $request->status : 'private';



					if (session('admin')) {

						$sold_by = 'admin';
						$email = 'admin';
					}


					$name  =	admin_controller::GetSQLValueString($request->name, 'text');

					$quantity  =	admin_controller::GetSQLValueString($request->quantity, 'double');

					$price  =	admin_controller::GetSQLValueString($request->price, 'double');

					$coupon_price  =	admin_controller::GetSQLValueString($request->coupon_price, 'double');
					//$pickup  =	admin_controller::GetSQLValueString($request->pickup, 'text');


					$delivery_price  = ($request->delivery_price != '') ? admin_controller::GetSQLValueString($request->delivery_price, 'double') : 0;

					$category = admin_controller::GetSQLValueString($request->category, 'text');

					$shipping =   ($request->shipping != '') ? $request->shipping : ' ';

					if (session('admin')) {

						$description  =	 ($request->description  != '') ? $request->description : ' ';

						/* 	$warranty  = ($request->warranty != '') ? $request->warranty : ' ';
						$policy  = ($request->policy != '') ? $request->policy : ' '; */
					}

					$enter  = new  add_product();
					$enter->name = $name;
					/* $enter->quantity   = $quantity;
					$enter->price   =  $price;
					$enter->coupon_price   =  $coupon_price;
					$enter->delivery_price   =  $delivery_price; */

					$enter->description   =  $request->description;

					$enter->category   =  $category;

					$enter->vendor_name   =  $sold_by;
					$enter->status   =   $status;
					$enter->picture   =  $new_name;
					$enter->sold_by   =  $sold_by;
					$enter->email   =  $email;
					/* 	$enter->warranty   =  $warranty;
					$enter->policy   =  $policy; */
					//$enter->pick_up_available   =  $pickup;

					//$enter->shipping   =  $shipping;

					$enter->save();

					return   redirect('/list_product');
				} else {
					//$validation->errors()->all()
					return  back()->with('error',  "validation error here");
				}
			} else {

				return   back()->with('error', 'Upload Image ');
			}
		} else {

			return  back()->with('error', 'Permission Not granted ');
		}
	}




	public function update_product($id, request $request)
	{


		if (session('admin')  or session('vendor')) {

			$image = $request->file('pictures');

			$update_product  = add_product::find($id);




			if ($request->hasFile('pictures')) {
				$files = $request->file('pictures');
				$savedFiles = [];

				foreach ($files as $file) {
					$new_name = rand() . '.' . $file->getClientOriginalExtension();

					$getsize =  $file->getSize();
					$original_name = $file->getClientOriginalName();
					$real_path  =   $file->getRealPath();

					$file->move(public_path('products'), $new_name);

					$savedFiles[] = [
						'new_name' => "/products/" . $new_name,
						'size' => $getsize,
						'original_name' => $original_name,
						'real_path' => $real_path
					];
				}


				$new_name  =  json_encode($savedFiles);

				$update_product->picture = $new_name;
				// Optionally, you can return or save the information about the saved files
				// return response()->json(['saved_files' => $savedFiles]);
			}






			$status  = ($request->status != '') ? $request->status : 'private';

			$name  =	admin_controller::GetSQLValueString($request->name, 'text');
			/* $quantity  =	admin_controller::GetSQLValueString($request->quantity, 'double'); */
		/* 	$price  =	admin_controller::GetSQLValueString($request->price, 'double');
			$coupon_price  =	admin_controller::GetSQLValueString($request->coupon_price, 'double');
			$delivery_price  =	admin_controller::GetSQLValueString($request->delivery_price, 'double'); */
			$category  =	admin_controller::GetSQLValueString($request->category, 'text');
			/* $pickup  =	admin_controller::GetSQLValueString($request->pickup, 'text');
			$shipping  =	($request->shipping != '') ? $request->shipping : ' '; */



			if (session('admin')) {

		/* 		$warranty  = ($request->warranty != '') ? $request->warranty : ' ';

				$policy  = ($request->policy != '') ? $request->policy : ' ';

				$description  =	 ($request->description != '') ? $request->description : ' '; */
			} else {
				/* $description  =	 ($request->description != '') ? $request->description : ' ';


				$warranty  = ($request->warranty != '') ? admin_controller::GetSQLValueString($request->warranty, 'text') : ' ';

				$policy  = ($request->policy != '') ? admin_controller::GetSQLValueString($request->policy, 'text') : ' '; */
			}



			$update_product->name = $name;
			$update_product->status = $status;

         
			
			$update_product->description  = $request->description;
			$update_product->category = $category;
		

			//$update_product->delivery_price   = $request->delivery_price   ; 
			$update_product->save();

			return redirect('list_product');
		}
		return   back();
	}


	public function delete_product(request $request,   $id)
	{
		if (session('admin')  or session('vendor')) {
			//delete product
			$store  = add_product::where('id', $id)->first();

			//delete  the  afile  

			$all_pictures =  	json_decode($store->picture,  true);


			foreach ($all_pictures as  $pictures) {

				try {

					$path  =  public_path($pictures['new_name']);

					unlink($path);
				} catch (\Exception  $e) {
				}
			}


			//delete from cart order save 
			if (isset($store->id)) {

				$delete_cart  = cart_list::where('product_id',  $id);
				$delete_cart->delete();
				$delete_order  = order_list::where('product_id',  $id);
				$delete_order->delete();
				$delete_saved  = saved_item::where('product_id',  $id);
				$delete_saved->delete();
				$store->delete();
			}

			return   redirect('/list_product');
		} else {

			return redirect('/');
		}
	}

	public  function customer()
	{

		if (session('admin')) {

			return  view('admin_folder.customer');
		}
	}


	public  function vendor_list()
	{
		if (session('admin')) {
			return  view('admin_folder.vendors');
		}
	}

	public  function slider()
	{
		if (session('admin')) {
			return  view('admin_folder.slider');
		}
	}

	public  function icons()
	{
		if (session('admin')) {
			return  view('admin_folder.icons');
		}
	}


	public  function logo()
	{
		if (session('admin')) {
			return  view('admin_folder.logo');
		}
	}





	public  function banner1()
	{
		if (session('admin')) {
			return  view('admin_folder.banner1');
		}
	}
	public  function banner2()
	{
		if (session('admin')) {
			return  view('admin_folder.banner21');
		}
	}





	public	 function slider_store(request $request)


	{
		if (session('admin')) {

			$image = $request->file('picture');
			$new_name = rand() . '.' . $image->getClientOriginalExtension();
			$getsize =  $image->getSize();
			$original_name = $image->getClientOriginalName();

			$real_path  =   $image->getRealPath();
			$slider  = new slider();

			$slider->picture =   $new_name;
			$slider->real_name =   $original_name;

			$slider->save();


			$image->move(public_path('slider'), $new_name);

			return response()->json([
				'message'   => 'Image Upload Successfully',
				'filename' =>  $original_name,
				'real_path' => asset('slider/' . $new_name),
				'status' => 'succesful',
				'class_name'  => 'alert-success'
			]);
		}
	}



	public	 function icon_store(request $request)
	{
		if (session('admin')) {

			$image = $request->file('picture');
			$new_name = rand() . '.' . $image->getClientOriginalExtension();
			$getsize =  $image->getSize();
			$original_name = $image->getClientOriginalName();

			$real_path  =   $image->getRealPath();
			$slider  = new icons();

			$slider->picture =   $new_name;
			$slider->real_name =   $original_name;

			$slider->save();


			$image->move(public_path('slider'), $new_name);

			return response()->json([
				'message'   => 'Image Upload Successfully',
				'filename' =>  $original_name,
				'real_path' => asset('slider/' . $new_name),
				'status' => 'succesful',
				'class_name'  => 'alert-success'
			]);
		}
	}








	public	 function logo_change(request $request)
	{

		if (session('admin')) {
			$image = $request->file('picture');
			$new_name = rand() . '.' . $image->getClientOriginalExtension();
			$getsize =  $image->getSize();
			$original_name = $image->getClientOriginalName();
			$real_path  =   $image->getRealPath();
			$slider  = logo::find(2);
			$slider->picture =   $new_name;
			$slider->save();
			$image->move(public_path('slider'), $new_name);
			return response()->json([
				'message'   => 'Image Upload Successfully',
				'filename' =>  $original_name,
				'real_path' => asset('slider/' . $new_name),
				'status' => 'succesful',
				'class_name'  => 'alert-success'
			]);
		}
	}










	public	 function font_change(request $request)
	{
		if (session('admin')) {

			$image = $request->file('name');
			$new_name = rand() . '.' . $image->getClientOriginalExtension();
			$getsize =  $image->getSize();
			$original_name = $image->getClientOriginalName();
			$real_path  =   $image->getRealPath();
			$slider  = font::first();
			$slider->name =   $new_name;
			$slider->real_name  =   $original_name;
			$slider->save();

			$image->move(public_path('fonts'), $new_name);


			return   redirect('/font_change');
		}
	}







	public	 function banner2_change(request $request)
	{

		if (session('admin')) {
			$image = $request->file('picture');
			$new_name = rand() . '.' . $image->getClientOriginalExtension();
			$getsize =  $image->getSize();
			$original_name = $image->getClientOriginalName();

			$real_path  =   $image->getRealPath();


			$slider  = banner2::first();


			$slider->picture =   $new_name;


			$slider->save();


			$image->move(public_path('slider'), $new_name);

			return response()->json([
				'message'   => 'Image Upload Successfully',
				'filename' =>  $original_name,
				'real_path' => asset('slider/' . $new_name),
				'status' => 'succesful',
				'class_name'  => 'alert-success'
			]);
		}
	}








	public	 function banner1_change(request $request)
	{
		if (session('admin')) {

			$image = $request->file('picture');
			$new_name = rand() . '.' . $image->getClientOriginalExtension();
			$getsize =  $image->getSize();
			$original_name = $image->getClientOriginalName();

			$real_path  =   $image->getRealPath();


			$slider  = banner1::first();


			$slider->picture =   $new_name;


			$slider->save();


			$image->move(public_path('slider'), $new_name);

			return response()->json([
				'message'   => 'Image Upload Successfully',
				'filename' =>  $original_name,
				'real_path' => asset('slider/' . $new_name),
				'status' => 'succesful',
				'class_name'  => 'alert-success'
			]);
		}
	}







	public function list_sliders()
	{
		if (session('admin')) {

			return  view('admin_folder.list_slider');
		}

		return  redirect('/');
	}



	public function list_icons()
	{

		if (session('admin')) {
			return  view('admin_folder.list_icons');
		}

		return  redirect('/');
	}



	public function delete_slide($id)
	{

		if (session('admin')) {
			//lecture_contents
			$store  = slider::find($id);
			$store->delete();
			return   redirect('/list_sliders');
		}

		return  redirect('/');
	}




	public function delete_icon($id)
	{
		if (session('admin')) {
			//lecture_contents
			$store  = icons::find($id);
			$store->delete();
			return   redirect('/list_icons');
		}
		return  redirect('/');
	}




	public  function  pages($pages)
	{
		if (session('admin')) {
			return  view('admin_folder.pages')->with('pages', $pages);
		}
	}


	public   function   update_pages(request $request, $pages)
	{
		if (session('admin')) {
			if ($request->content  != null) {
				$content_page  = $request->content;
			} else {
				$content_page  = ' ';
			}
			$update_pages  = page_content::where('page', $pages)->first();
			$update_pages->content  = $content_page;
			$update_pages->save();


			$all  = array('pages' => $pages, 'success'  => 'successful');

			return  view('admin_folder.pages')->with($all);
		}
	}


	public   function add_pickup()
	{
		if (session('admin')) {
			return   view('admin_folder.add_pickup');
		}
	}


	public   function store_pickup(request $request)
	{
		if (session('admin')) {
			$enter  = new pickup();

			if (session('admin')) {
				$email =		session('admin');
			} else {

				if (session('vendor')) {
					$email = session('vendor');
				}
			}

			$enter->address  = $request->address;
			$enter->email = $email;
			$enter->price = $request->price;
			$enter->save();

			return  redirect('/list_pickup');
		}
	}



	public   function list_pickup()
	{
		if (session('admin')) {
			return   view('admin_folder.list_pickup');
		}
	}



	public   function delete_pickup($id)
	{


		if (session('admin')) {
			$enter  = pickup::find($id);

			$now_address = now_address::where('pickup_id', $enter->id);



			$now_address->delete();
			$enter->delete();

			return   view('admin_folder.list_pickup');
		}
	}


	public   function edit_pickup($id)
	{
		if (session('admin')) {
			$enter  = pickup::find($id);

			return   view('admin_folder.add_pickup')->with('edit_pickup', $enter);
		}
	}

	public   function edit_user($id)
	{
		if (session('admin')) {

			$enter  = user_admin::find($id);

			return   view('admin_folder.add_user')->with('edit_list', $enter);
		}
	}



	public   function update_pickup(request $request,  $id)
	{

		if (session('admin')) {
			$enter  = pickup::find($id);
			$enter->address = $request->address;
			$enter->price = $request->price;
			$enter->save();

			return   redirect('/list_pickup');
		}
	}


	public   function order_progress()
	{

		if (session('admin')  or session('vendor')) {

			return  view('admin_folder.orders.order_progress');
		}

		return  redirect("/");
	}


	public   function order_complete()
	{

		if (session('admin') or session('vendor')) {

			return  view('admin_folder.orders.order_complete');
		}
	}


	public   function cancel_order()
	{

		if (session('admin') or session('vendor')) {

			return  view('admin_folder.orders.order_cancel');
		}
	}




	public   function order_action($id, $state)
	{
		if (session('admin')) {

			$find_order = order_list::find($id);
			$find_order->state  =  $state;
			$find_order->save();
			echo ('welodne');
		}
		return   back();
	}

	public   function cancel_order_client($id)
	{
		if (session('client')) {

			$find_order = order_list::where('email',  session('client')['id'])->where('id', $id)->first();

			$change_value  =  order_list::find($find_order->id);

			$change_value->state  =  'cancel';

			$change_value->save();
		}
		return   back();
	}


	public  function update_product_image($id)
	{


		return response()->json([
			'message'   => '100%',
			'filename' =>  '$original_name',
			'real_path' => 'asset',
			'status' => 'succesful',
			'class_name'  => 'alert-success'
		]);
	}


	public  function update_user(request  $request, $id)
	{

		if (session('admin')) {
			$update_user  = user_admin::find($id);

			$update_user->username  = $request->username;
			$update_user->password  = $request->password;
			$update_user->name  = $request->name;

			$update_user->save();

			return  redirect('/list_user');
		}
	}






	public  function  admin_signin(request  $request)
	{

		//$request->session()->forget('vendor');

		return  view('/admin_folder.admin_signin');
	}


	public  function admin_signin_redirect(request $request)
	{

		$checking = 	user_admin::where('username', $request->username)->where('password',   $request->password)->first();

		if (isset($checking->id)) {
			$request->session()->put('admin',  $request->username);

			return redirect('/dashboard');
		} else {

			$error = 'wrong password or email address';

			return redirect('/admin_signin')->with('error', $error);
		}
	}



	public  function  admin_logout(request $request)
	{


		$request->session()->forget('admin');

		return  redirect('/');
	}



	public  function vendor_product_list()
	{

		$vendor_list = 'yes';
		return  view('admin_folder.list_product')->with('vendor_list', $vendor_list);
	}


	public  function customer_signin(request  $request,  $email)
	{

		if (session('admin')) {

			$request->session()->put('client', $email);

			return  redirect('/account_profile');
		}
	}
}
