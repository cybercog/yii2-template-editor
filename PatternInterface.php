<?
namespace mrssoft\template;

interface PatternInterface
{
    public static function getTitle();

    public static function getPattern();

    public static function execute($data);
}