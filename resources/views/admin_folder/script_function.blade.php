<script>

function  upoad_file(event,upload_form,progress_id , message_id, file_id , direction_pathzz , addind_content){
 var myForm = document.getElementById(upload_form);
        event.preventDefault();
      $.ajax({
       url:direction_pathzz,
       xhr: function() { // custom xhr (is the best)
    
    var xhr = new XMLHttpRequest();
    var total = 0;
    
    // Get the total size of files
    $.each(document.getElementById(file_id).files, function(i, file) {
           total += file.size;
    });
    
    // Called when upload progress changes. xhr2
    xhr.upload.addEventListener("progress", function(evt) {
           // show progress like example
           var loaded = (evt.loaded / total).toFixed(2)*100; // percent
    
           $('#'+progress_id).text('Uploading... ' + loaded + '%' );
    }, false);
    
    return xhr;
    },
       method:"POST",
       data: new FormData(myForm)  , // $('#upload_form').serialize()
       dataType:'JSON',
       contentType: false,
       cache: false,
       processData: false,
       success:function(data)
       {
		   
	var addcontent ='<img   height="100"   width="100"   src="'+data.real_path +'" />';
		   
		   
        $('#'+message_id).css('display', 'block');
        $('#'+message_id).html(data.message);
        $('#'+message_id).addClass(data.class_name);
		   
		$('#'+addind_content).html(addcontent)  ; 
		   
        
       }
      })


}
</script>