<?php

if(isset($_GET['cris'])){
    $cris = $_GET['cris'];
    if($cris == "empty_input"){
        echo 'Vezi ca ai uitat sa scrii in fiecare input<br><br>';
    }elseif($cris == 'invalid_username'){
        echo 'Acest username are ceva caractere neapreciate<br><br>';
    }elseif($cris == 'email_incorect'){
        echo 'Nu stii sa scrii un email corect?<br><br>';
    }elseif($cris == 'username_invalid'){
        echo 'Este deja cineva cu acest username, copia nu are valoare<br><br>';
    }elseif($cris == 'email_invalid'){
        echo 'Cum ai acelasi email, ca ala de mai de dinainte?<br><br>';
    }elseif($cris == 'none'){
        echo 'Esti tare! Ti-ai facut si tu cont<br><br>';
    }elseif($cris == 'none2'){
        echo 'Esti tare! Stii si tu username-ul si email-ul la un oricare cont<br><br>';
    }elseif($cris == 'could_not_create_contor'){
        echo 'Ceva greseala de la baza de date<br><br>';
    }elseif($cris == 'none3'){
        echo 'Esti tare! Ai creat si tu un contor<br><br>';
    }elseif($cris == 'none4'){
        echo 'Esti tare! Ai bagat si tu un index<br><br>';
    }elseif($cris == 'none5'){
        echo 'Esti tare! Ai updatat si tu serile la un contor<br><br>';
    }elseif($cris == '1'){
        echo 'Ai iesit din cont!<br><br>';
    }elseif($cris == '2'){
        echo 'Nu ai putut parasi acest cont, esti blocat pe viata asta nu-i vreun joc, arunc cu-n potop, tarfo stiu sa-nnot<br><br>';
    }
}