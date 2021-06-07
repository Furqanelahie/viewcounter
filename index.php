<?php

$color="#000000";
$bg="#ffffff";

$hex = $bg;
 list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x"); 
 
 
 $split = str_split($color, 2); 
 $r2 = hexdec($split[0]);
  $g2 = hexdec($split[1]);
   $b2 = hexdec($split[2]);
 
 
 
 $your_text = "2090867"; 
 $IMG = imagecreate( 110, 80 ); 
 $background = imagecolorallocate($IMG, $r,$g,$b); 
 $text_color = imagecolorallocate($IMG,$r2,$g2,$b2);
  
   imagestring( $IMG, 5, 3, 30, $your_text, $text_color ); 
   imagesetthickness ( $IMG, 5 );
    
    header( "Content-type: image/png" );
     imagepng($IMG);
      
       imagecolordeallocate($IMG, $text_color ); 
       imagecolordeallocate($IMG, $background ); 
       imagedestroy($IMG); 
       exit;
        ?> 

