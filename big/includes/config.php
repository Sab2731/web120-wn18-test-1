<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//site keys for web-students.net
$siteKey = "6LeDYDYUAAAAANoLB0pAE5rjxTVZmdPllJ-E-RfM";
$secretKey = "6LeDYDYUAAAAACbx3Q1ZR6GzZITBkBPgsxKljFx_";

//this helps eliminate PHP date errors
date_default_timezone_set('America/Los Angeles');

// this array works with the makelinks function below to write your navigation
// $nav1 is gone

//echo basename($_SERVER['PHP_SELF']);
//die;

//this constant allows a page to know its own url/name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo "constant: " . THIS_PAGE;
//die;

// This switch dynamically updates PHP short tags you added to your header.php
switch(THIS_PAGE)
{
    case 'aia.php':
        $title = 'William\'s: Flexbox Research';
        $logo = '';
        $PageID = 'Flexbox Research';
    break;
        
    case 'galleries.php':
        $title = " William's Galleries Research ";
        $logo = '';
        $PageID = 'Galleries Research';
    break;
        
    case 'parallax.php':
        $title = 'william parallax Reseearch';
        $logo = '';
        $PageID = 'parallax Reseearch';
    break;

    case 'youtube.php':
        $title = 'responsive William Youtube';
        $logo = '';
        $PageID = 'saab type drvier';
    break;        
    
    case 'map.php':
        $title = "William's Map Research";
        $logo = '';
        $PageID = 'Map Research';
    break;

    case 'webcam.php':
        $title = " William's two example of web cams ";
        $logo = '';
        $PageID = ' two example of web cams';
    break;  
        
    case 'shoppingcarts.php':
        $title = "William's shoppingcart Research";
        $logo = '';
        $PageID = 'shoppingcart Research';
    break;
        
    case 'siteapp.php':
        $title = "William's Responsive website vs native mobile app";
        $logo = '';
        $PageID = " William's Responsive website vs native mobile appm ";
    break;    
    
    case 'calendar.php':
        $title = "William's calendar Research";
        $logo = '';
        $PageID = 'William event calendar';
    break;    
        
        
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
        break;
}

// This function creates your navigation using the $nav array and moves the class=selected dynamically!


