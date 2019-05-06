<?php

/*

Template name: User Verification

*/



get_header();

?>



<style>

    .wrapper-verification{

        padding: 10px;

    }



    #sub-btn-file{

        display: block;

        margin: 10px 0;

    }



    .headers-span{

        font-size: 20px;

        font-weight: bold;

        display: block;

        margin: 10px 0;

    }

</style>



<script>

    jQuery(document).ready(function() {

    window.$ = window.jQuery;



    $('#verify-btn').click(function () {

        setTimeout(function() {window.location.reload();}, 2000);

    });



    $("#sub-btn-file").click(function (event) {



            event.preventDefault();

            var form = $('#uploadDocument')[0];

            var data = new FormData(form);



            $.ajax({

                type: "POST",

                enctype: 'multipart/form-data',

                url: "<?php echo get_template_directory_uri()?>/verification-ajax.php",

                data: data,

                processData: false,

                contentType: false,

                cache: false,

                success: function (uploadFileDat) {

                    console.log(uploadFileDat);



                    $('#answerServerDiv').html('<span style="color:green; font-weight: bold;">Documents uploaded</span>');

                    // setTimeout(function() {window.location.reload();}, 2000);

                    /*

                    uploadFileRes = $.parseJSON(uploadFileDat);

                    if(uploadFileRes.Code){

                        $('#answerServerDiv').html('Code: ' + uploadFileRes.Code);

                    }else {

                        $('#answerServerDiv').html('reference: ' + uploadFileRes.reference +

                            '<br>statut: ' + uploadFileRes.statut +

                            '<br>libelleStatut: ' + uploadFileRes.libelleStatut);



                        if(uploadFileRes.libelleStatut == null){

                            //$('.status').html('<span style="color:red; font-weight: bold;">no</span>');

                        }else{

                            //$('.status').html('<span style="color:green; font-weight: bold;">' + uploadFileRes.libelleStatut + '</span>');

                        }

                    }*/



                }

            });

        }

    );





});



</script>





<div class="wrapper-verification">

    <?php

    $current_user = wp_get_current_user();

    //echo 'email: ' . $current_user->user_email . '<br />';

    //echo 'ID: ' . $current_user->ID . '<br />';

    //echo 'verification:' .$current_user->verification_user. '<br />';



    echo 'Display name: ' . $current_user->display_name . '<br />';

    echo 'User login: <b>' .$current_user->user_login . '</b><br />';



    $reference = $current_user->user_login;

    $varUser = $current_user->verification_user;



    if($varUser == 'true') {

        echo 'Вы верифицированы';

    }else{

        /*Authentication*/

            $post = ['login' => 'keyClakDev','password' => 'keyClakDev'];

            $ch = curl_init('https://test.easyconform.com/ws22/authenticate');

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

            $response = curl_exec($ch);



            $jData = (json_decode($response));

            $accessToken = $jData->accessToken;

            echo '<span style="color:green;">Token: <b>'.$accessToken.'</b></span><br>';



            curl_close($ch);



         if($accessToken !=''){

         /*Create Folder*/

            $post = ['reference' => $reference];



            $ch = curl_init('https://test.easyconform.com/ws22/dossier');

            curl_setopt($ch, CURLOPT_HTTPHEADER, array('accessToken: '.$accessToken.''));

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

            $response = curl_exec($ch);

            $http_code = curl_getinfo($ch);





            /*if($http_code['http_code'] == 200) {

                    echo $response;

             }else{

                    echo '{"Code":"'.$http_code['http_code'].'"}';

                }*/

            //curl_close($ch);

        }



         if($reference !=''){

             /*Verify*/



             //echo $reference;

                 $ch = curl_init();

                 curl_setopt($ch, CURLOPT_HTTPHEADER, array('accessToken: '.$accessToken.''));

                 curl_setopt($ch, CURLOPT_URL, "https://test.easyconform.com/ws22/dossier/".$reference."/verify"); # URL to post to

                 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                 $result = curl_exec($ch); # run!



                 $statusDoc = (json_decode($result));



                $statusDoc->libelleStatut.'';



                 //echo 'ww'.$statusDoc->libelleStatut;

                 if($statusDoc->libelleStatut == 'ok'){

                     echo 'Verification status: <span style="color:green; font-weight: bold;">'.$statusDoc->libelleStatut.'</span>';

                 }else {

                    echo'Verification status: <button style="color: red; font-weight: bold;" id="verify-btn">Vetiry your documents</button>';

                }



                 curl_close($ch);

         }

    }

    ?>





    <div class="row-forms" style="border-top: 1px solid darkgreen; margin: 50px 0; padding: 30px 0">

        <!--Upload file to folder-->

        <span class="headers-span">Adding a document file</span>



        <form action="" method="post" id="uploadDocument" enctype="multipart/form-data">

            <input type="hidden" name="accessToken" value="<?php echo $accessToken; ?>">

            <input type="hidden" name="folderName" value="<?php echo $reference; ?>">

            <input type="hidden" name="fileId" value="<?php echo $reference.rand(5, 1105); ?>">



            <input type="file" name="userDocument">

            <input type="submit" id="sub-btn-file" value="SEND DOCUMENT">

        </form>

        <div id="answerServerDiv"></div>

    </div>



</div>



<?php

    get_footer();

?>

