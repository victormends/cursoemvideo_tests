<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<pre>
  <?php
  require_once "video.php";
  require_once "videoactions.php";
  require_once "person.php";
  require_once "gafanhoto.php";
  require_once "visualization.php";

  abstract class pai {
    public function herdado() {
     $this->sobrescrito();
    }
    protected function sobrescrito() {
     echo 'pai';
    }
  }
  class filha extends pai {
    protected function sobrescrito() {
     echo 'filha';
    }
  }
  $teste = new filha();
  $teste->herdado();
?>
</pre>
</body>
</html>