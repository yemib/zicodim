
<div   style="position: relative" >
<div   style="overflow: auto" >   
  
 
      
       <div   class="info_con"  style="position: absolute !important ; width: 60% ;  top:200px  ;  z-index: 5000000000000; margin-left: 20% ;  margin-right: 20% ; border: solid  2px rgba(52,20,213,1.00) ; background: rgba(232,226,226,1.00); display: none"  align="center" > 
       <div  style="position: relative">
        <div align="right"   style="">
                      <button  class="btn btn-danger"   onClick="$('.info_con').hide()">Close </button>
                      
                      </div>
                      
                      
       <div  class="content_info"   style="height: 300px;overflow: auto ;"> 
<span>  <strong  style="font-size: 20px">   <?php  if(session('info') ) { ?>  <?php echo session('info'); ?>        <?php }     ?>    <?php  if( isset($info)) { ?> <?php echo $info; ?>   <?php      }     ?>       </strong> </span>
     
		   </div>
                </div>
                                                       
    </div>
    
    
    
     <?php  if(session('info')  ||  isset($info) ) { ?>
     
     
     <script> 
	$('.info_con').show();
	</script>
     
  
     
       <?php }  ?> 
  
   

</div>
</div>

		<?php /**PATH G:\websites\Zicodim\resources\views/layouts/board.blade.php ENDPATH**/ ?>