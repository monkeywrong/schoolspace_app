define(function (require) {

    "use strict";

 
    var Feeds = {};

   
    Feeds.getFeed = function(date_str) {
    
         var feeds = {};
         
           
            feeds["news"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=1&format=raw';    
            feeds["services"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=2&format=raw';    
            feeds["portfolio"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=3&format=raw'; 
            feeds["client-area"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=4&format=raw'; 
            feeds["team"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=5&format=raw'; 
            feeds["press-room"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=6&format=raw'; 

            return feeds[Backbone.history.fragment];

    };
   
    return Feeds;

    
});