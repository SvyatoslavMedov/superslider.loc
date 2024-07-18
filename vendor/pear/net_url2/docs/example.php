<?php
/**
 * Net_URL2, a class representing a URL as per RFC 3986.
 *
 * PHP version 5
 *
 * This file contains code Copyright (c) 2002-2003, Richard Heyes,
 * See BSD-3-CLAUSE-Heyes,
 * Author: Richard Heyes <richard at php net>
 *
 * @category Networking
 * @package  Net_URL2
 * @author   Some Pear Developers <pear@php.net>
 * @license  https://spdx.org/licenses/BSD-3-Clause BSD-3-Clause
 * @link     https://tools.ietf.org/html/rfc3986
 */

/**
* This example will decode the url given and display its
* constituent parts.
*/

error_reporting(E_ALL | E_STRICT);

require 'Net/URL2.php';

$url = new Net_URL2(
    'https://example.com/pls/portal30/PORTAL30.wwpob_page.changetabs?'
    .'p_back_url=http%3A%2F%2Fexample.com%2Fservlet%2Fpage%3F_pageid%3D360'
    .'%2C366%2C368%2C382%26_dad%3Dportal30%26_schema%3DPORTAL30&foo=bar'
);

?>
<html>
<body>

<pre>
Protocol...: <?php echo $url->protocol; ?>

Username...: <?php echo $url->user; ?>

Password...: <?php echo $url->pass; ?>

Server.....: <?php echo $url->host; ?>

Port.......: <?php $url->port; ?>

File/path..: <?php $url->path; ?>

Querystring: <?php print_r($url->querystring); ?>

Anchor.....: <?php echo $url->anchor;?>

Full URL...: <?php echo $url->getUrl(); ?>


Resolve path (.././/foo/bar/joe/./././../jabba): <b><?php
        echo $url->resolve('.././/foo/bar/joe/./././../jabba'); ?></b>
</pre>

</body>
</html>
