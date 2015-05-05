<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap-theme.min.css" media="screen" title="no title" charset="utf-8">
  <title>Login to Admin</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/npm.js"></script>
  <style>
  @font-face {
    font-family: def;
    src: url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/fonts/glyphicons-halflings-regular.ttf'); /* Edit this line */
  }

  body {
    text-align: center;
    font-family: def;
    background-color: aliceblue;
  }

  span {
    color:red;
  }
  </style>
</head>
<body>
  <div class="container">
    <h1>Enter your access code <a onclick="window.history.back()" href="javascript:void(0);">[back]</a></h1>
    <br/>
    <input type="text" id="code" class="form-control" placeholder="Enter code (IE: EX-999123)">
    <br/>
    <span id="err"></span>
    <br/>
    <br/>
    <button class="btn btn-default" onclick="validate()">Done</button>
  </div>
  <script>
  function validate() {
    document.getElementById('err').innerHTML = "Error: Codes Currently Do Not Work";
    document.getElementById('code').setAttribute('style', 'border-color: #A94442;box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset;');
  }
  </script>
</body>
</html>
