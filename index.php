<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <title>Ini Pendaftaran Partai</title> 
    <link rel="stylesheet" href="style.css/style.css"> 
</head> 
<body> 
    <div class="card"> 
        <h1>Pendaftaran Partai </h1> 
        <form method="post" action="proses_input.php"> 
            <label for="nama">Nama :</label> 
            <input type="text" name="nama" id="nama" maxlength="30" class="form-input" required><br> 
            <label for="email">Email :</label> 
            <input type="text" name="email" id="email" maxlength="30" class="form-input" required><br>
            <label for="password">Password:</label> 
            <input type="password" name="password" id="password" maxlength="30" class="form-input" required><br>
            <label for="tanggal_lahir">Tanggal Lahir :</label> 
            <input type="datetime-local" name="tanggal_lahir" id="tanggal_lahir" maxlength="30" class="form-input" required><br>
            <label for="no_hp">Nomor Handphone :</label> 
            <input type="number" name="no_hp" id="no_hp" maxlength="30" class="form-input" required><br>
            <button type="submit" id="btn-kirim">Kirim</button>         
        </form> 
    </div> 
</body> 
</html> 
