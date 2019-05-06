<?php
/*Upload file to folder*/
if($_FILES['userDocument']['name'] != ''){
    $ch = curl_init('https://test.easyconform.com/ws22/dossier/'.$_POST['folderName'].'/add/fichier');
    $cfile = new CURLFile(
        $_FILES['userDocument']['tmp_name'],
        $_FILES['userDocument']['type'],
        $_FILES['userDocument']['name']
    );
    $data = [
        'reference' => $_POST['folderName'],
        'fichier' => $cfile,
        'identifiantDocument' => $_POST['fileId']
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('accessToken: '.$_POST['accessToken'].''));
    curl_setopt($ch, CURLOPT_POST,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $uploadRes = curl_exec($ch); # run!
    $http_code = curl_getinfo($ch);



    if($http_code['http_code'] == 200) {
        echo $uploadRes;
    }else{
        echo '{"Code":"'.$http_code['http_code'].'"}';
    }
    curl_close($ch);
}
?>