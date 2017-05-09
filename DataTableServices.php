<?php


namespace Module\DataTable;


class DataTableServices
{

    protected static function DataTable_profileFinder()
    {
        $appDir = \Kamille\Ling\Z::appDir();
        $f =  \Module\DataTable\DataTableProfileFinder\DataTableProfileFinder::create();
        $f->addProfilesDir($appDir . "/config/datatable-profiles");
    }
}