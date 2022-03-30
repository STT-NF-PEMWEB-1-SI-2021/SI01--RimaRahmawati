<?php
function kelulusan($nilai_total){
    if ($nilai_total > 55){
        return 'LULUS';
    }else{
        return 'TIDAK LULUS';
    }
}

function grade($nilai){
    if ($nilai >= 85){
        return 'A';
    }
    elseif($nilai >= 70){
        return 'B';
    }
    elseif($nilai >= 56){
        return 'C';
    }
    elseif($nilai >= 36 ){
        return 'D';
    }
    elseif($nilai >= 10){
        return 'E';
    }
    else{
        return 'Nilai tidak ada';
    }
}

function predikat($grade){
    switch($grade)
    {
        case 'A';
        return "SANGAT MEMUASKAN";
        break;

        case 'B';
        return "MEMUASKAN";
        break;

        case 'C';
        return "CUKUP";
        break;

        case 'D';
        return "KURANG";
        break;

        case 'E';
        return "SANGAT KURANG";
        break;
    }
}

?>