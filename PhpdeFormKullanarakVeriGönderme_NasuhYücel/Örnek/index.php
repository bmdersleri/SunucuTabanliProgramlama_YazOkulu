<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<div class="container">
  <center><h2>PHP FORM</h2></center>
  
  <form action="gonder.php" method="POST">
    <div class="form-group" style="margin: 30px;">
     
      <input type="text" class="form-control" id="ad" placeholder="Ad" name="ad">
    </div>
    <div class="form-group" style="margin: 30px;">
      
      <input type="text" class="form-control" id="soyad" placeholder="Soyad" name="soyad">
    </div>
    <div class="form-group"style="margin: 30px;">
      
      <input type="text" class="form-control" id="tel" placeholder="Telefon" name="tel">
    </div>

    <div class="form-group" style="margin: 30px;">
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-check" style="margin: 30px;">
  <input class="form-check-input" type="radio" name="cinsiyet" value="Erkek" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Erkek
  </label>
</div>
<div class="form-check" style="margin: 30px;">
  <input class="form-check-input" name="cinsiyet" type="radio" value="Kadın" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Kadın
  </label>
</div>
<center><button type="submit" class="btn btn-primary">Kaydet</button></center>
  </form>
</div>