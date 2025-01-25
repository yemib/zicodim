<?php    use App\order_address; ?>
	<div   id=""  style=""   class="col-sm-12">
		
		<?php     $my_pickup  = order_address::where('email', session('client')['id'])->paginate(10) ?>
		
		<div>
		<?php     foreach($my_pickup  as $pickups){   ?>
		
			<div   class="col-sm-6">
			  
			  
			<div  class="pickup"   id="">
			<label  for="pickup<?php   echo $pickups->id  ?>">
			<input  onClick="update_address('/update_delivery_address/{{ $pickups->id }}/order_address')"   type="radio" id="pickup<?php   echo $pickups->id  ?>"  name="pickup"  value="<?php   echo $pickups->id ?>" /><strong>Select This Pickup Location</strong>
			
			<p> <?php   echo  $pickups->first_name  ?>   </p>
				
			</label>
					</div>
			</div>
		<?php  } ?>
			</div>
		</div>
	