<?php

/**
 * Copyright (c) 2017, Thomas Schoffelen BV.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to
 * deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 */
 
use PKPass\PKPass;
 
//require_once('/vendor/autoload.php');

 
// Replace the parameters below with the path to your .p12 certificate and the certificate password!
$awpass = new PKPass('/home/pkpass/Certificates.p12', '98014380');
 
// Pass content
$awdata = [
    'description' => $gwarray['company_name'],
    'formatVersion' => 1,
    'organizationName' => $gwarray['company_name'],
    'passTypeIdentifier' => 'pass.com.nfctouch.uatNameCard', // Change this!
    'serialNumber' => $encrypted,
    'teamIdentifier' => 'UJR8TRUAK2', // Change this!
    'storeCard' => [
        'secondaryFields' => [
            [
                'key' => 'name',
                'label' => 'Name',
                'value' =>  $gwarray['name'],
            ],
            [
                'key' => 'position',
                'label' => 'Position',
                'value' => $gwarray['position'],
            ],
        ],
        'transitType' => 'PKTransitTypeAir',
    ],
    'barcode' => [
        'format' => 'PKBarcodeFormatQR',
        'message' => $gwarray['qrcode'],
        'messageEncoding' => 'iso-8859-1',
    ],
    'backgroundColor' => $gwarray['wallet_bg_color'],
    'foregroundColor' => $gwarray['wallet_text_color'],
    'labelColor' => 'rgb(255,255,255)',
    'logoText' => $gwarray['company_name'],
    'relevantDate' => date('Y-m-d\TH:i:sP')
];

 
$awpass->setData($awdata);

// Add files to the pass package
$awpass->addFile('images/icon.png');
$awpass->addRemoteFile('https://e-profile.digital/logo.png');
$awpass->addFile('images/icon@2x.png');
//$pass->addFile('images/logo.png');
$awpass->addRemoteFile('https://e-profile.digital/strip.png');
// Create and output the pass
$awpass->create(true);
