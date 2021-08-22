<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Ad</th>
      <th scope="col">Soyad</th>
      <th scope="col">Telefon</th>
      <th scope="col">Email</th>
      <th scope="col">Cinsiyet</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_POST["ad"];?></td>
      <td><?php echo $_POST["soyad"];?></td>
      <td><?php echo $_POST["tel"];?></td>
      <td><?php echo $_POST["email"];?></td>
      <td><?php echo $_POST["cinsiyet"];?></td>
    </tr>
  </tbody>
</table>

