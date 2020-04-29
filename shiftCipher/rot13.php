<?php
// Shift cipher by ROT13 mean ROT is rotates with buildin
// function called str_rot13()
// So, str_rot13() can be used to both encrpy and decrpt

// For rotate and encrpt

$decrpted_message = 'I hope this message finds you and your family safe and well.';
echo 'Encrpted message: ' . str_rot13($decrpted_message);
echo '<br><br>';
$encrpted_message = 'V ubcr guvf zrffntr svaqf lbh naq lbhe snzvyl fnsr naq jryy.';
echo 'Decrpted message: ' . str_rot13($encrpted_message);