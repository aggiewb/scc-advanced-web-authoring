<?php
/*
portal-config.php
Used to store all of our WEB120 configuration information
*/

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

function getTitleString($pageType){
    return "Aggie's WEB120 {$pageType} Page";
}

switch(THIS_PAGE){
    case 'index.php':
        $title = getTitleString('Title');
        $pageId = 'About me';
    break;

    case 'contactme.php':
        $title = getTitleString('Contact');
        $pageId = 'Contact Aggie';
    break;

    case 'flowchart.php':
        $title = getTitleString('Flowchart');
        $pageId = 'Flowchart';
    break;

    case 'aia.php':
        $title = getTitleString('AIA');
        $pageId = 'AIA';
    break;

    default:
        $title = THIS_PAGE;
        $pageId = 'Not yet constructed';
}

$navMain = array(
    'index.php'=>'Home', 
    'big/index.php'=>'Big', 
    'aia.php'=>'AIA', 
    'flowchart.php'=>'Flowchart', 
    'fp/index.php'=>'Final Project', 
    'contactme.php'=>'Contact Aggie'
);

function createLinks($nav){
    $navListElements = '';
    foreach($nav as $url => $urlTitle){
        if($url == THIS_PAGE){
            $navListElements .= "<li class='selected'><a href='{$url}'>{$urlTitle}</a></li>";
        } else {
            $navListElements .= "<li><a href='{$url}'>{$urlTitle}</a></li>";
        }    
    }
    return $navListElements;
}
?>