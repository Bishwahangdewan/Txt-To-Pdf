<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>PHP PDF Converter</title>
</head>
<body class="red lighten-5">

    <nav>
    <div class="container">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Converto</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <!--  <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li> -->
      </ul>
    </div>
    </div>
    </nav>
    
    <div class="container">
        <h1 class="red-text text-darken-5">PDF Converter</h1>

        <p class="flow-text">Convert txt files into pdf in one click!</p>

        <form method="POST" action="upload.php" enctype="multipart/form-data">
          <input class="waves-effect waves-light btn  red accent-2" type="file" name="fileUpload" id="fileUpload">
          <input class="waves-effect waves-light btn  red accent-2" type="submit" name="pdf" value="Generate Pdf">
        </form>
    </div>


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>