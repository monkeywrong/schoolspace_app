<?php


    $context = $_GET['context'];
    $feed_domain = $_GET['feed_domain'];
    $photoset_id = $_GET['photoset_id'];
    $flickr_api_key = $_GET['flickr_api_key'];
    $flickr_user_id = $_GET['flickr_user_id'];
    $gmail = $_GET['gmail'];

    
            $feeds["news"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=1&format=raw';    
            $feeds["services"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=2&format=raw';    
            $feeds["portfolio-other"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=7&format=raw'; 
            $feeds["portfolio-junior"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=8&format=raw'; 
            $feeds["portfolio-senior"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=9&format=raw'; 
            $feeds["client-area"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=4&format=raw'; 
            $feeds["team"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=5&format=raw'; 
            $feeds["press-room-news"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=10&format=raw'; 
    
    $feeds['events'] = 'https://www.google.com/calendar/feeds/'.$gmail.'/public/full?orderby=starttime&sortorder=ascending&max-results=10&futureevents=true';

    $feeds['albums']= 'http://api.flickr.com/services/rest/?method=flickr.photosets.getList&api_key='.$flickr_api_key.'&user_id='.$flickr_user_id;
    $feeds['photos'] = 'http://api.flickr.com/services/rest/?&method=flickr.photosets.getPhotos&api_key='.$flickr_api_key.'&user_id='.$flickr_user_id.'&extras=url_sq,url_t,url_s,url_m,url_o&photoset_id='.$photoset_id;
 
    
    if(!$context) $context = "home";
    
    $xml = file_get_contents($feed_domain.$feeds[$context]);    
    
    echo $xml;
    
    
    

