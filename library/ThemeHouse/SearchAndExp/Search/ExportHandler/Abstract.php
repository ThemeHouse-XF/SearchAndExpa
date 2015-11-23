<?php

abstract class ThemeHouse_SearchAndExp_Search_ExportHandler_Abstract
{

    /**
     * Creates the specified data handler.
     *
     * @param string $class Object to create
     *
     * @return ThemeHouse_SearchAndExp_Search_ExportHandler_Abstract
     */
    public static function create($class)
    {
        $class = XenForo_Application::resolveDynamicClass($class, 'search_export_th');
        return new $class();
    } /* END create */
}