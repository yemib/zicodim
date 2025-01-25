<div  id="alertcon"   style="width: 100%; position: fixed ; background-color:rgba(0,235,12,1.00) ; top: 50px ; padding: 20px; z-index: 600000000; font-weight: bolder; display: none;color: rgba(255,255,255,1.00)"> 

</div>
<script>
function  alertcon(str,x){
					$('#alertcon').show();
				$('#alertcon').html(str);
				
				setTimeout(function(){$('#alertcon').hide(500);},x);
				
				
			}  </script>