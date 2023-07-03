<?php

function print_r2($arg)
{
    echo '<pre>';
    print_r($arg);
    echo '</pre>';
}

function asset_path($asset_name)
{
    $manifest = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/dist/manifest.json");

    $manifest = json_decode($manifest, true); //decode json string to php associative array

    if (!isset($manifest[$asset_name]))
        return $asset_name; //if manifest.json doesn't contain $asset_name then return $asset_name itself

    return "./dist/" . $manifest[$asset_name];
}


function getDataUser($item)
{
    if (!empty($item)) {
        return $item;
    }

    return '-';
}

function getDataAddressUser($item)
{
    if (!empty($item)) {
        $address = (!empty($item['street']) ? $item['street'] : '') . ", " . (!empty($item['suite']) ? $item['suite'] : '')
            . " " . (!empty($item['city']) ? $item['city'] : '') . " " . (!empty($item['zipcode']) ? $item['zipcode'] : '');

        if (!empty($item['geo'])) {
            $address = $address . " (" . (!empty($item['geo']['lat'] && !empty($item['geo']['lng'])) ? $item['geo']['lat'] . ', ' . $item['geo']['lng'] . ')' : '');
        }

        return $address;
    }

    return '-';
}

function getDataCompanyUser($item)
{
    if (!empty($item)) {
        $company = (!empty($item['name']) ? $item['name'] : '') . ", " . (!empty($item['catchPhrase']) ? $item['catchPhrase'] : '')
            . " " . (!empty($item['bs']) ? $item['bs'] : '');

        return $company;
    }

    return '-';
}
?>