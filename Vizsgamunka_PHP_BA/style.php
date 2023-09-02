<?php //
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>

body{
margin:auto;
max-width: 50%;
text-align:center;
}

h1{
margin:auto;
text-align: center;
}
th {

background: #FDE890;
color: black;
padding: 2px 6px;
border-collapse: collapse;
border: <?=$border?> #000;
}

table{
text-align:center;
margin: auto;
}

td {
border: <?=$border?> #DDD;
border-collapse: collapse;
width:100px;
height:50px;
background-color: #FAE6CE;

}

.booked{
background-color:#F5AD9D;
text-align: center;
color: black;
font-weight: bold;
}
td:hover{  
background-color: #EACAC4;
}

td:selected{
background-color:#EACAC4;
}

.selected{
background-color:#E3C2AF;
}

input, select { 
            padding: 5px 5px;
            margin: 5px 10px;
            box-sizing: border-box;
         }