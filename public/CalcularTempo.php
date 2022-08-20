<?php
function getDateTimeDiff($date)
{
    $now_timestamp = strtotime(date('Y-m-d H:i:s'));
    $diff_timestamp = $now_timestamp - strtotime($date);

    if ($diff_timestamp < 60) {
        return 'Há menos de 1 minuto';
    } else if ($diff_timestamp >= 60 && $diff_timestamp < 3600) {
        return 'Há ' . round($diff_timestamp / 60) . ' minutos';
    } else if ($diff_timestamp >= 3600 && $diff_timestamp < 86400) {
        return 'Há ' . round($diff_timestamp / 3600) . ' horas';
    } else if ($diff_timestamp >= 86400 && $diff_timestamp < (86400 * 30)) {
        return 'Há ' . round($diff_timestamp / (86400)) . ' dias';
    } else if ($diff_timestamp >= (86400 * 30) && $diff_timestamp < (86400 * 365)) {
        return 'Há ' . round($diff_timestamp / (86400 * 30)) . ' meses';
    } else {
        return 'Há ' . round($diff_timestamp / (86400 * 365)) . ' anos';
    }
}