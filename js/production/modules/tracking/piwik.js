define(function(){var a={};return a.init=function(a,b){require([b+"piwik.js"],function(){try{var a=Piwik.getTracker(b+"piwik.php",1);a.trackPageView(),a.enableLinkTracking()}catch(c){}})},a});