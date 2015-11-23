<?php

class ThemeHouse_SearchAndExp_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/SearchAndExp/ControllerAdmin/SearchExportProfile.php' => '4ba52dd75b7bbc892a2ee9b8bd4a326e',
                'library/ThemeHouse/SearchAndExp/DataWriter/SearchExportProfile.php' => 'da3af4bcb815092555a0189693cd55a6',
                'library/ThemeHouse/SearchAndExp/Extend/ThemeHouse/UserSearch/Search/DataHandler/User.php' => 'f375f3d93093b993838563b9025c98fd',
                'library/ThemeHouse/SearchAndExp/Extend/XenForo/ControllerPublic/Search.php' => 'c246ffb2cb43b0a4f33a7c696499829d',
                'library/ThemeHouse/SearchAndExp/Extend/XenForo/Model/Search.php' => '11636fbb76c78a635b641736a233e4ff',
                'library/ThemeHouse/SearchAndExp/Install/Controller.php' => '0ac473926ee01ad81b2eed359c42aa10',
                'library/ThemeHouse/SearchAndExp/Listener/LoadClass.php' => '83213beeeca10dd5838742cdf69a5fa8',
                'library/ThemeHouse/SearchAndExp/Model/SearchExportProfile.php' => '31952489cfc032acdded8b62c31c16ef',
                'library/ThemeHouse/SearchAndExp/Option/VisibleColumns.php' => 'e22256f20899f416b36c3c3c3dd25d21',
                'library/ThemeHouse/SearchAndExp/Route/PrefixAdmin/SearchExportProfiles.php' => 'aebc28cf29e232e4a6cec6ed956d6fd8',
                'library/ThemeHouse/SearchAndExp/Search/ExportHandler/Abstract.php' => 'c8b67e83a9d5e17dbc5da67dcf0e0aa1',
                'library/ThemeHouse/SearchAndExp/Search/ExportHandler/User.php' => '8da1190b7ceda1fd32750c5f2cc1354a',
                'library/ThemeHouse/SearchAndExp/ViewPublic/Search/Export.php' => '56040fb045929760389392999d444429',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}