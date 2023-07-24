<?php

namespace App\Helpers;

use Carbon\Carbon;
use Carbon\CarbonTimeZone;

class TextHelper
{
    public static function formatNoteContent(string $content)
    {
        $processedContent = str_replace('&nbsp;', ' ', $content);
        $processedContent = preg_replace('/<\/(\w+)>/', " ", $processedContent);
        $processedContent = strip_tags($processedContent);
        $processedContent = substr($processedContent, 0, 250);
        return $processedContent;
    }

    public static function formatNoteDate(string $datetime)
    {
        $days = [
            'Sunday' => 'Domingo',
            'Monday' => 'Segunda',
            'Tuesday' => 'Terça',
            'Wednesday' => 'Quarta',
            'Thursday' => 'Quinta',
            'Friday' => 'Sexta',
            'Saturday' => 'Sábado',
        ];

        $datetime = Carbon::parse($datetime, new CarbonTimeZone('America/Sao_Paulo'));
        $datetime->subHours(3);
        $currentDateTime = Carbon::now(new CarbonTimeZone('America/Sao_Paulo'));

        if ($datetime->isSameDay($currentDateTime)) {
            return 'Hoje às ' . $datetime->format('H:i');
        } elseif ($datetime->isSameDay($currentDateTime->subDay())) {
            return 'Ontem às ' . $datetime->format('H:i');
        } elseif ($datetime->isSameWeek($currentDateTime)) {
            $day = $days[$datetime->format('l')];
            return $day . ' às ' . $datetime->format('H:i');
        }
        return $datetime->format('d/m/Y') . ' às ' . $datetime->format('H:i');
    }

    public static function formatSidebarNoteTitle(string $content)
    {
        $processedContent = substr($content, 0, 100);
        return $processedContent;
    }
}