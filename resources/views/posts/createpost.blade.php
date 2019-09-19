<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="POST" action="store" accept-charset="UTF-8" enctype="multipart/form-data">

      {{ csrf_field() }}

      <input type="text" name="ptitle" placeholder="Enter Post Title">
      <input type="text" name="pbody" placeholder="Enter Post Body">
      <input type="submit" name="submit">
      </form>

  </body>
</html>
