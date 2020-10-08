<?php namespace InvoiceNinja;

class Config
{
    private static $token;
    private static $url;
    private static $perPage;
    private static $ninjaVersion;

    public static function setToken($token)
    {
        static::$token = $token;
    }

    public static function getToken()
    {
        return static::$token;
    }

    public static function setUrl($url)
    {
        static::$url = rtrim($url, '/');
    }

    public static function getUrl()
    {
        return static::$url;
    }

    public static function setPerPage($perPage)
    {
        static::$perPage = $perPage;
    }

    public static function getPerPage()
    {
        return static::$perPage;
    }

    public static function setNinjaVersion($version)
    {
        static::$ninjaVersion = strtolower($version);
    }

    public static function getNinjaVersion()
    {
        return static::$ninjaVersion;
    }

    public static function isV5()
    {
        return static::$ninjaVersion == 'v5';
    }

}
