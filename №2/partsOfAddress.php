<?php

namespace interfaces;

interface partsOfAddress
{
 public static function getPartAddress(\classes\mailAddress $obj, $part);
}