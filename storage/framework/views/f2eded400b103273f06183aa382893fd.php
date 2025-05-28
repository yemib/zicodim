<script>
    function send_landing_page(event, to, form_id, display_data) {
        //animation

        event.preventDefault();
        $.ajax({
            url: to,
            method: "POST",
            data: $('#' + form_id).serialize(),
            success: function(data) {
                $('#' + display_data).html(data);


            }
        });

    }


    function change_value_sub(event, to, form_id, display_data) {
        //animation
        $('#' + display_data).html('<option>Loading......</option>');

        event.preventDefault();
        $.ajax({
            url: to,
            method: "POST",
            data: $('#' + form_id).serialize(),
            success: function(data) {
                $('#' + display_data).html(data);

                //   stop animation 

            }
        });

    }








    function change_password_email(event, to, form_id, display_data) {

        event.preventDefault();
        //animation
        $('#' + display_data).val('Loading...');
        $('#' + display_data).attr('disabled', 'disabled');
        //disble  the button

        $.ajax({
            url: to,
            method: "POST",
            data: $('#' + form_id).serialize(),
            success: function(data) {
                $('#display_output').html(data);


                $('#' + display_data).val('Request Reset');
                $('#' + display_data).removeAttr('disabled');

                //   stop animation 
            }
        });

    }








    function email_subsribe(event, to, form_id, display_data) {
        //animation
        event.preventDefault();
        $('#' + display_data).html('Sending...');

        $.ajax({
            url: to,
            method: "POST",
            data: $('#' + form_id).serialize(),
            success: function(data) {
                $('#' + display_data).html('Email  Sent');
                setTimeout(function() {
                    $('#' + display_data).html('Subscribe');
                }, 1000);
                alertcon('Email Sent', 3000);
                //   stop animation 

            }
        });

    }




    function get_ajax(path_here) {

        $.ajax({
            type: 'get',
            dataType: 'html',
            url: path_here,
            data: "qty=" + newqty + "& rowId=" + rowId + "& proId=" + proId,
            success: function(response) {
                console.log(response);
                $('#updateDiv').html(response);
            }
        });

    }



    // read image 

    function previewImages() {

		

        var $preview = $('#preview');

        if (this.files) $.each(this.files, readAndPreview);

        function readAndPreview(i, file) {

            if (!/\.(jpe?g|png|gif|ico|jpeg)$/i.test(file.name)) {

                sweetmessage("error", file.name + " is not an image");
                return false;


            } // else...
            var reader = new FileReader();
            $(reader).on("load", function() {


                $preview.css('background-image', 'url(' + this.result + ')');
                //auotmatically load the image 


            });

            reader.readAsDataURL(file);

        }

    }

    $('#file-input').on("change", previewImages);



	function productImages() {
    var $preview = $('#preview');

    // Clear previous previews
    $preview.empty();

    if (this.files) {
        $.each(this.files, readAndPreview);
    }

    function readAndPreview(i, file) {
        if (!/\.(jpe?g|png|gif|ico|jpeg)$/i.test(file.name)) {
            sweetmessage("error", file.name + " is not an image");
            return false;
        }

        var reader = new FileReader();
        $(reader).on("load", function() {
            var $img = $('<img/>', {
                src: this.result,
                class: 'preview-image',
                css: {
                    'max-width': '100px', // Adjust the size as needed
                    'max-height': '100px',
                    'margin': '5px'
                }
            });
            $preview.append($img);
        });

        reader.readAsDataURL(file);
    }
}

// Bind the function to the input element
$('#product-image').on('change', previewImages);



    // read   article  image 

    function articleImages() {

        var $preview = $('.preview');

        if (this.files) $.each(this.files, readAndPreview);

        function readAndPreview(i, file) {

            if (!/\.(jpe?g|png|gif|ico|jpeg)$/i.test(file.name)) {
                sweetmessage("error", file.name + " is not an image");
                return false;
            } // else...
            var reader = new FileReader();
            $(reader).on("load", function() {


                image_source = '<img   src="' + this.result + '" /> '

                $preview.append(image_source);

                //auotmatically load the image 


            });

            reader.readAsDataURL(file);

        }

    }

    $('.file-article').on("change", articleImages);


    // use get function period 


    function get_send(path, inside_value, individual_value, v_price, maximum) {
        //$('#item').html('Loading...');
        $('#item2').html('Loading...');
        $('#' + individual_value).html('Loading...');

        $.get(path, {
                sendok: 'yes'
            })
            .done(function(data) {

                //$('#'+container_id).html(data);
                if (data.individual_total_delivery > 0) {

                    $('#' + inside_value).html(data.increase_value);
                    $('#' + individual_value).html(data.individual_total);


                    $('#' + v_price).val(data.individual_total_delivery);

                    $('#' + maximum).html(data.maximum);
                    $('#total_value2').html(data.total);
                    $('#subtotal').html(data.subtotal);
                    $('#item').html(data.number_item);
                    $('#item2').html(data.number_item);


                    //amount value here   realtotal

                    $('.gtpay_tranx_amt').val(data.realtotal);


                }


            });

    }




    function saved_send(path, individual) {
        $('#' + individual).html('saving...');
        $.get(path, {
                sendok: 'yes'
            })
            .done(function(data) {

                alertcon('Saved', 3000);

                $('#' + individual).hide(500);

            });

    }



    function change_state(path, individual) {

        $('#' + individual).html('Loading....');

        $.get(path, {
                sendok: 'yes'
            })
            .done(function(data) {

                $('#' + individual).html(data);

            });

    }







    function side_cart(path) {
        alertcon('Loading..........', 500000000);

        $.get(path, {
                sendok: 'yes'
            })
            .done(function(data) {

                alertcon(' ', 5);

                $('.container_login').fadeIn();
                $('#form_contain_login').hide();

                $('.side_cart').show();
                $('#cart_content').html(data);


            });

    }





    function update_address(path) {

        $('#delivery_price_here').html('Loading....');

        $.get(path, {
                sendok: 'yes'
            })
            .done(function(data) {



                $('#delivery_price_here').html(data);

                $('#delivery_price').val(data);

                $('#disabled_button,#disabled_button1').show();

                var finalamount = parseInt($('#subtotalt').val()) + parseInt(data);



                $('#total_value2').html(finalamount);



            });

    }








    function alcategory(path, picture) {

        $('#loading_p').html('Loading......');

        $.get(path, {
                sendok: 'yes'
            })
            .done(function(data) {


                $('#show').html(data);

                $('#loading_p').html('');

                $('#al_show_img').css('background-image', 'url("' + picture + '")');

                //document.getElementById('al_show_img').style.back

            });

    }
</script>






<script>
    function toggle_password() {
        var x = document.getElementById("myInput");
        var toggle_button = document.getElementById("toggle_button");
        if (x.type === "password") {
            x.type = "text";
            toggle_button.innerHTML = 'hide';
        } else {
            x.type = "password";
            toggle_button.innerHTML = 'show';
        }
    }



    function acceptm(el, tex) {




        $('#' + tex).html($('#' + el).html());

    }
</script>
<?php /**PATH /home/itwtvmvh/public_html/zicodium/resources/views/script.blade.php ENDPATH**/ ?>