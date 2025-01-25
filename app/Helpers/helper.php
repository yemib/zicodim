<?php



 function generateRandomNumbers()
{
 
    return random_int(PHP_INT_MIN, PHP_INT_MAX);
}

function isJson($string)
{
    json_decode($string);
    return is_string($string) && is_array(json_decode($string, true)) && (json_last_error() == JSON_ERROR_NONE);
}





function imagecontainer($label,  $name,  $multiple =  false, $id_no, $required = "required-input")
{
    global $data;

?>

    <label><?php echo  $label; ?></label>

    <div class="drop-container">

        <?php if (!isset($_GET['view'])) { ?>
            <div id="drop-area1" class="drop-area">



                <input class="<?php echo $required; ?>" placeholder="<?php echo  $label; ?>" style="display:none" type="file" id="file-input1" name="<?php echo $name; ?>[]" <?php if ($multiple == true) {  ?> multiple <?php } ?>>
                <div class="dz-message needsclick">
                    <i class="h1 text-muted ri-upload-cloud-2-line"></i>
                    <h3> <?php if (!isset($data)) { ?> Browse Image <?php   } else { ?> Change Image <?php     } ?></h3>
                    <span class="text-muted fs-13">
                        Drag and drop image here or click to select images
                    </span>
                </div>


            </div>

        <?php  } ?>
        <ul id="file-list<?php echo  $id_no; ?>" class="file-list">
            <?php if (isset($data)) {
                if ($data   != NULL) {
                    $logo2  =       json_decode($data,  true);
                    foreach ($logo2  as  $logo) {
                        if ($logo !=  NULL) {




            ?>

                            <li class="file-item col-sm-6 col-md-4 col-lg-3" style="opacity: 1;">
                                <?php echo  $logo['original_name'] ?> <a href="<?php echo  $logo['new_name'] ?>">
                                    <img class="preview-image" src="<?php echo  $logo['new_name'] ?>"></a></li>




                    <?php   }
                    }




                    ?>




            <?php

                }
            } ?>

        </ul>
    </div>



<?php    } ?>