<?php

header('Location: app/');

?>



SELECT COUNT(DISTINCT date_day) as nbre_jour FROM zkteco_presance WHERE id_number=2 and date_day BETWEEN "2020-05-20" and "2020-08-28"
