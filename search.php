<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style12.css">
</head>

<body>

  <body>
    <div class="container">
      <div class="category-wrapper">
        <form action="hasil_cari.php" method="POST">
          <select name="search" onchange='if(this.value != 0) { this.form.submit(); }'>
            <option value="Kategori">Pilih Kategori</option>
            <option value="Semua">Gaming</option>
            <option value="Jas">All Rounder</option>
          </select>
        </form>
      </div>
    </div>
  </body>

</body>

</html>