<?php
    $isUDIDProtected=FALSE; //you don’t have to define this if you want it to be false, you can just omit it.
    $compatibleVersions=array("8.1.4","8.1.3","8.1.1","8.1","8.0.2","8.0.1","8.0","7.1.2"); //if you don't define this array, nothing shows up for the user
    $name="Flatastic"; //title of the package

    $description=array(“A new approach to a flat Homescreen", "An upcoming theme I am currently working on. Right now, there are only a few icons but soon there should be way more! (Am kinda busy right now)”);
    //each value in the array is a new paragraph
    //You may do links within the description, but must escape all speech marks within the link tag and you need target="_blank" for it to work in Cydia
    // ...array("This is my description. <a href=\"http://www.google.com\" target=\"_blank\">Here's a link to Google.com</a>! Here is more description");

    $changelog=array("0.0.2-9:"," - Fixed some bugs");
    //works the same as description

    $devText="Domiosdev on Twitter";//if devText has text, it will be included in the depiction
    $devLink="https://github.domiosdev.io";//if the dev wants to link to wherever, add it here.
?>
