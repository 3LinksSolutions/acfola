<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 7/10/16
 * Time: 12:52 AM
 */

$linkTo = $_GET['link'];
switch ($linkTo) {
    case "facebook":
        $url = "https://www.facebook.com/";
        break;
    case "github":
        $url = "https://github.com/";
        break;
    case "blog":
    case "rss":
    case "home":
        $url = "https://acfola.herokuapp.com/";
        break;
    case "dev":
    default:
        $url = "https://developersfoundation.ca";
}

header("Location: " . $url);
exit;
?>