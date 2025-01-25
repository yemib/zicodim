
<?php $__env->startSection('contenth'); ?>	


<?php   
use App\contact_detail;


$contact_details  = contact_detail::first();
 ?> 
	
	<div  align="center">
		<div   align="left" >
		
			
				<form  action="/contact_details"   method="post">
					
					<?php echo e(csrf_field()); ?>  
					
					<p>
					
					<label>FACEBOOK LINK  </label>
					<input   value="<?php if(isset($contact_details->id)): ?><?php echo e($contact_details->facebook); ?><?php endif; ?>"  placeholder="FACEBOOK LINK" class="form-control" name="facebook"/>  </p>
					
					<p>
					<label>TWITTER LINK  </label>
					<input   value="<?php if(isset($contact_details->id)): ?><?php echo e($contact_details->twitter); ?><?php endif; ?>"  placeholder="TWITTER LINK" class="form-control"  name="twitter"/>
					</p>
					<p>
					<label>SUPPORT LINE</label>
					<input    value="<?php if(isset($contact_details->id)): ?><?php echo e($contact_details->support); ?><?php endif; ?>" placeholder="SUPPORT LINE"  class="form-control" name="support"/>
							</p>
							
										<p>			<label>WHATAPP NUMBER</label>
					<input   value="<?php if(isset($contact_details->id)): ?><?php echo e($contact_details->whatapp); ?><?php endif; ?>"  placeholder="WHATAPP NUMBER"  class="form-control" name="whatapp"/>
					</p>
					
					
					<p>
					<label>INSTAGRAM</label>
					<input   value="<?php if(isset($contact_details->id)): ?><?php echo e($contact_details->instagram); ?><?php endif; ?>"  placeholder="INSTAGRAM"  class="form-control" name="instagram"/>
					</p>
					
							<p>
					<label>EMAIL ADDRESS</label>
					<input   value="<?php if(isset($contact_details->id)): ?><?php echo e($contact_details->email); ?><?php endif; ?>"  placeholder="EMAIL ADDRESS"  class="form-control" name="email"/>
					</p>
					

					<p>
						<label>Office Address</label>
						
						<textarea  placeholder="Office Address" class="form-control"  name="address"> <?php if(isset($contact_details->id)): ?><?php echo e($contact_details->address); ?><?php endif; ?></textarea>
						
						</p>


					<p  style="display: none">
					<label>tawk code</label>
					
					<textarea  placeholder="tawk code" class="form-control"  name="tawk"> <?php if(isset($contact_details->id)): ?><?php echo e($contact_details->tawk); ?><?php endif; ?></textarea>
					
					</p>
					<input   class="btn btn-primary"  type="submit"   value="Submit"  />
			
					
				</form>	


		
			
		</div>
		
	</div>
	




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_dashboar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/admin_folder/contact.blade.php ENDPATH**/ ?>