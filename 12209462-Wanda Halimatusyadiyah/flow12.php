<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <style>
        body{
            background-image : url("https://i.pinimg.com/564x/3a/cc/ab/3accabcd33611e499b316e7458f00748.jpg");
            background-repeat: no-repeat;
            background-size:cover;
            padding:190px;
        }
        h2{
            color:#ED7B7B;
        }
        .form-style-3{
	max-width: 450px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-3 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-3 label > span{
	float: left;
	width: 100px;
	color: #F072A9;
	font-weight: bold;
	font-size: 13px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-3 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	margin: 0px 0px 10px 0px;
	border: 1px solid #FFD2D2;
	padding: 20px;
	background: #FFF4F4;
	box-shadow: inset 0px 0px 15px #FFE5E5;
	-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
	-webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
}
.form-style-3 fieldset legend{
	color: #FFA0C9;
	border-top: 1px solid #FFD2D2;
	border-left: 1px solid #FFD2D2;
	border-right: 1px solid #FFD2D2;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: #FFF4F4;
	padding: 0px 8px 3px 8px;
	box-shadow: -0px -1px 2px #F1F1F1;
	-moz-box-shadow:-0px -1px 2px #F1F1F1;
	-webkit-box-shadow:-0px -1px 2px #F1F1F1;
	font-weight: normal;
	font-size: 12px;
}
.form-style-3 textarea{
	width:250px;
	height:100px;
}
.form-style-3 input[type=text],
.form-style-3 input[type=date],
.form-style-3 input[type=datetime],
.form-style-3 input[type=number],
.form-style-3 input[type=search],
.form-style-3 input[type=time],
.form-style-3 input[type=url],
.form-style-3 input[type=email],
.form-style-3 select, 
.form-style-3 textarea{
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border: 1px solid #FFC2DC;
	outline: none;
	color: #F072A9;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px #FFD5E7;
	-moz-box-shadow: inset 1px 1px 4px #FFD5E7;
	-webkit-box-shadow: inset 1px 1px 4px #FFD5E7;
	background: #FFEFF6;
	width:50%;
}
.form-style-3  input[type=submit],
.form-style-3  input[type=button]{
	background: #EB3B88;
	border: 1px solid #C94A81;
	padding: 5px 15px 5px 15px;
	color: #FFCBE2;
	box-shadow: inset -1px -1px 3px #FF62A7;
	-moz-box-shadow: inset -1px -1px 3px #FF62A7;
	-webkit-box-shadow: inset -1px -1px 3px #FF62A7;
	border-radius: 3px;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;	
	font-weight: bold;
}
.required{
	color:red;
	font-weight:normal;
}
</style>
    </style>
<form action="" method="post">
    <h2>Input Waktu</h2>
<div class="form-style-3">
<form>
<fieldset><legend> Input   </legend>
<label for="field1"><span>jam <span class="required">*</span></span><input type="number" class="input-field" name="jam" value="" /></label>
<label for="field2"><span>menit <span class="required">*</span></span><input type="number" class="input-field" name="menit" value="" /></label>
<label for="field3"><span>detik <span class="required">*</span></span><input type="number" class="input-field" name="detik" value="" /></label>
<input type="submit" value="Submit" name="submit">
<br><br>
</form>

<?php
    if (isset($_POST['submit'])) {
        $jam = $_POST ['jam'];
        $menit = $_POST ['menit'];
        $detik = $_POST ['detik'];

        $detik = $detik + 1 ;

        if ( $menit >= 60) {
            $menit = $menit + 1;
            $detik = 00;
        
        if ( $menit >= 60) {
            $jam = $jam + 1;
            $menit = 00;
            $detik = 00;

        if($jam >= 24) {
            $jam = 00;
            $menit = 00;
            $detik = 00;
            }
        }

     } else {
        $detik = $detik;
     }

     echo $jam . ".";
     echo $menit . ".";
     echo $detik;
    }
?>
</form>
</center>
</body>
</html>