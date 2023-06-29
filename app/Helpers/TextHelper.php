<?php

namespace App\Helpers;

class TextHelper
{
    public static function formatNoteContent(string $content)
    {
        $processedContent = str_replace('&nbsp;', ' ', $content);
        $processedContent = preg_replace('/<\/(\w+)>/', " ", $processedContent);
        $processedContent = strip_tags($processedContent);
        return $processedContent;
    }
}