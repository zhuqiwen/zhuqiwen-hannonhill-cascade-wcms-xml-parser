<?php

namespace Edu\IU\Wcms\XmlParser;

interface ParserInterface {
    public function loadFromString(string $xmlString);

    public function constructNode(\stdClass $obj);
}
