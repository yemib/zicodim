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
use App\now_address;
use App\order_address;




class simple_update extends Controller
{
    
	
	
	
	
	public function update_delivery_address($id , $name_table){
		
		if(session('client')){  
	
			if($name_table == 'pickup'){
				
				$pick_address=pickup::find($id);
				
			}elseif($name_table == 'order_address'){
				
				$pick_address=order_address::find($id);
				
			}
	
		// check the now if is avaiable or not 
			$now_address = now_address::where('email'  ,  session('client')['id'] )->first();

			if(isset($now_address->id)  ){
				// update  address
		   if($name_table == 'pickup'){		
				
			$now_update =  now_address::find($now_address->id);
			$now_update->pickup_id  =  $pick_address->id;  
				
			$now_update->save();
			   
		    $now_update = now_address::where('email' , session('client')['id'])->first();
					   
					   
			$pickup  = pickup::where('id' , $now_update->pickup_id )->first();
				
			   
			return($pickup->price);
					   
				
		   }  elseif($name_table == 'order_address'){
			   
			   
			   return (0);
			   
			   
		   }else{
			   // when you pick your address 
			   
			  $now_update =  now_address::find($now_address->id);
			$now_update->pickup_id  =  0;  
				
			$now_update->save();
			   
			// echo the price    
			return(0);
					   
			   
			   
		   } 
				
				
			}else{
				
				//insert new here 
				
				   if($name_table == 'pickup'){		
			
					   
			$now_update = new now_address();
			$now_update->pickup_id  =  $pick_address->id;  
			$now_update->email  =  session('client')['id'] ;  
			$now_update->save();
			
			//get the price of the pickup
			$now_update = now_address::where('email' , session('client')['id'])->first();
					   
					   
			$pickup  = pickup::where('id' , $now_update->pickup_id )->first();
					   
			return($pickup->price);
					   
			
				
				
		   }  else{
			   
			   // client home address straight  up 
			$now_update = new now_address();
					   
			$now_update->pickup_id  =  0;  
			$now_update->email  =  session('client')['id'] ;  
			$now_update->save();
			// the price is zero
				return (0);
			   
		   } 
				
				
				
				
			}
			
		return (0);
			   
		
		}
		
		return (0);
		
	}
	
	
	public  function shop($email){
		
		return   view('individual')->with('Inmail'  , $email);
		
	}
	
	
	public   function al_category($id){
		
		
		$parent  = add_category::find($id);
		
		$parent_name  = $parent->name ;
		
		$sub_parent = add_category::Where('parent' ,$parent_name)->Where('sub_parent' ,'none')->get();
		
		foreach( $sub_parent as $sub){
			?>
			<div   class="col-sm-4">
 
  <h4> <strong><a   style="text-decoration: none"   href="/category/<?php  echo $sub->name ?>" > <?php  echo $sub->name ?>  </a> </strong> </h4>
    <!---   child category--->
			<?php 
			
	
		
			$parent_name =  $parent->name;
	$sub_parent_name  = $sub->name ; 
	$child_parent = add_category::Where('parent' ,$parent_name)->Where('sub_parent' ,$sub_parent_name)->get();
		
		
		 foreach($child_parent as  $child){  ?>
		  <a  href="/category/<?php  echo $child->name ?>"> <?php  echo $child->name  ?>   </a>
 <br/>
		 
		<?php	 
			 
		 }
		
		
		?>
</div>
		<?php
			}
		
	
		
	}
	
	
	public  function made_private($id){
		
		
		$add_product  = add_product::find($id);
		
		$add_product->status = 'private';
		
		$add_product->save();
		
	?>
	<button   onClick="change_state('/made_public/<?php   echo $id   ?>' , 'buton_container<?php   echo $id   ?>')" class="btn  cartbutton"> Public  </button>
	
	<?php
		
		
		
	}
	
		public  function made_public($id){
		
		
		$add_product  = add_product::find($id);
		
		$add_product->status = 'public';
		
		$add_product->save();
		
	?>
	<button   onClick="change_state('/made_private/<?php   echo $id   ?>' , 'buton_container<?php   echo $id   ?>')" class="btn  cartbutton"> Private  </button>
	
	<?php
		
		
		
	}
	
	
	public  function  vendor_signin(request  $request ,   $email){
		
		
		if(session('admin')){  
		
		$request->session()->put('vendor'  , $email ); 
		$request->session()->forget('admin'); 
			
			return  redirect('/vendors');
		
		}
		
		
		
		
		
	}
	
	
}
