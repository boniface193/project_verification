<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<!-- javascript to verify email -->
    <script type="text/javascript">
    function check(value){
    xmlHttp=GetXmlHttpObject()
    var url="checkemail.php";
    url=url+"?name="+value;
    xmlHttp.onreadystatechange=stateChanged
    xmlHttp.open("GET",url,true)
    xmlHttp.send(null)
    }
    function stateChanged(){
    if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
    var showdata = xmlHttp.responseText;
    document.getElementById("mydiv").innerHTML= showdata;
    }
    }
    function GetXmlHttpObject(){
    var xmlHttp=null;
    try{
    xmlHttp=new XMLHttpRequest();
    }
    catch (e) {
    try {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch (e){
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    }
    return xmlHttp;
    }
    </script>

  </head>
  <body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Logout</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Admin <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Register and Verify Project</a>
      </li>


    </ul>
  </div>
</nav>
