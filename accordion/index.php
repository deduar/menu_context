<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h2>Accordion with symbols</h2>

  <button class="accordion"> <a href="google.com">Section 1</a></button>
  <div class="panel">
    <button class="accordion">Section 1.1</button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet</p>
    </div>
    <button class="accordion">Section 1.2</button>
    <div class="panel">
      <button class="accordion">Section 1.2.1</button>
      <div class="panel">
        <button class="accordion1">Section 1.2.1.1</button>
      </div>
    </div>
  </div>

  <button class="accordion">Section 2</button>
  <div class="panel">
    <p>Lorem ipsum dolor sit amet</p>
  </div>

  <button class="accordion">Section 3</button>
  <div class="panel">
    <p>Lorem ipsum dolor sit amet</p>
  </div>

  <script src="app.js"></script>
</body>

</html>