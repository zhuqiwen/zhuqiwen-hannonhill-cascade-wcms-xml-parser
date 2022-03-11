<?php

namespace Edu\IU\Wcms\XmlParser;

class SettingsBlockXmlParser implements ParserInterface {

    public function loadFromString(string $xmlString)
    {
        // convert xml to std object
        $xmlObj = json_decode(json_encode(simplexml_load_string($xmlString)));

        return $this->constructNode($xmlObj);
    }

    public function constructNode(\stdClass $obj){
        $array = [];
        foreach ($obj as $k => $v){
            $tmpArray = [
                "type" => null,
                "identifier" => null,
                "structuredDataNodes" => null,
                "text" => null,
                "assetType" => null,
                "blockId" => null,
                "blockPath" => null,
                "fileId" => null,
                "filePath" => null,
                "pageId" => null,
                "pagePath" => null,
                "symlinkId" => null,
                "symlinkPath" => null,
                "recycled" => null,
            ];

            $tmpArray['identifier'] = $k;
            if(gettype($v) == "object")
            {

                $nodes = new \stdClass();
                $nodesArray = $this->constructNode($v);
                $nodes->structuredDataNode = sizeof($nodesArray) == 1 ? $nodesArray[0] : $nodesArray;
                $tmpArray['structuredDataNodes'] = !empty($nodes->structuredDataNode) ? $nodes: null;
                $tmpArray['type'] = !empty($nodes->structuredDataNode) ? "group": "text";

            }
            else
            {
                $tmpArray['type'] = 'text';
                $tmpArray['text'] = $v;
            }

            $tmbObj = (object) $tmpArray;
            $array[] = $tmbObj;
        }

        return $array;
    }
}