<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>

  html {
    text-align: center;
    color: white;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    box-sizing: border-box;
    -moz-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
    background-color: #222;
  }

  *,
  *:before,
  *:after {
    box-sizing: inherit;
  }

  .nope {
    z-index: -1;
    width: 100vw;
    height: 100vh;
    opacity: 0.3;
    position: absolute;
    top: 0;
    left: 0;
    background: url('https://i.giphy.com/media/i3R00Y2Lpravqibsy5/giphy.webp') center center no-repeat;
    background-size: cover;
    background-color: black;
  }

  h1 {
    font-size: 775%;
    padding-top: 25vh;
    margin-bottom: 1vh;
    z-index: 2;
  }

  p {
    font-size: 125%;
  }

  a {
    text-decoration: none;
    color: white;
    z-index: 2;
  }

  a:hover {
    text-decoration: underline;
  }

  </style>

  <title>Ewww! A 500 Internal Server Error!</title>
</head>
<body>

  <h1><a href="/">500 Error</a></h1>
  <p>My server disagrees.</p>
  @if ($exception->getMessage())
    <p>{{ $exception->getMessage() }}</p>
  @endif
  <div class="nope"></div>

</body>
</html>
