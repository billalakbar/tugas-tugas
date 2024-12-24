<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Lomba</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: var(--body-color);
    }

    .container {
  max-width: 700px;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.6); /* Warna hitam dengan transparansi 60% */
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.8);
}


    h1 {
    font-size: var(--h2-font-size);
    color: var(--white-color);
      margin-bottom: 8px;
      text-align: center;
    }

    .registration-form {
      display: flex;
      flex-direction: column;
    }

    label {
        font-size: var(--normal-font-size);
        color: var(--text-color);
      margin-top: 12px;
      margin-bottom: 4px;
      text-align: left;
    }

    .form-row {
      display: flex;
      gap: 10px;
      margin-top: 5px;
    }

    .form-group {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    input[type="text"],
    input[type="date"],
    input[type="tel"],
    input[type="email"],
    input[type="file"],
    select,
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid var(--body-color);
      color: var(--white-color);
      border-radius: 6px;
      font-size: var(--normal-font-size);
      background-color: #2A2A2A;
    }

    textarea {
      resize: vertical;
    }

    button {
      margin-top: 20px;
      padding: 12px;
      font-size: var(--normal-font-size);
      font-weight: var(--font-semi-bold);
      color: var(--white-color);
      background-color: var(--first-color);
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
        background-color: var(--first-color-alt);
    }

    button:focus {
      outline: none;
    }

    @media (max-width > 500px) {
      .container {
        padding: 15px;
      }

      .form-row {
        flex-direction: column;
      }
    }
  </style>
  <body>
    <div class="container">
      <h1>Form Pendaftaran</h1>
      <form action="../index.php" method="post" class="registration-form">
        <div class="form-row">
          <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" id="name" name="name" required />
          </div>
          <div class="form-group">
            <label for="dob">Tanggal Lahir</label>
            <input type="date" id="dob" name="dob" required />
          </div>
        </div>

        <label>Jenis Kelamin</label>
        <div class="form-row">
          <label
            ><input type="radio" name="gender" value="pria" required />
            Pria</label
          >
          <label
            ><input type="radio" name="gender" value="wanita" required />
            Wanita</label
          >
        </div>

        <label for="address">Alamat</label>
        <textarea id="address" name="address" rows="3"></textarea>

        <div class="form-row">
          <div class="form-group">
            <label for="phone">Nomor Telepon</label>
            <input
              type="tel"
              id="phone"
              name="phone"
              placeholder="+62"
              required
            />
          </div>
          <div class="form-group">
            <label for="category">Jenis Lomba</label>
            <select name="category" id="category">
              <option value="pemula">Tenis Meja</option>
              <option value="mahir">Futsal</option>
              <option value="mahir">Basket</option>
              <option value="mahir">Badminton</option>
              <option value="mahir">Bola Voli</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="category">Kategori Lomba</label>
            <select name="category" id="category">
              <option value="pemula">Anak-anak</option>
              <option value="mahir">Remaja</option>
              <option value="mahir">Dewasa</option>
            </select>
          </div>
          <div class="form-group">
            <label for="mode">Mode Bermain</label>
            <select name="mode" id="mode">
              <option value="satu orang">Satu Orang</option>
              <option value="tim">Tim</option>
            </select>
          </div>
        </div>

        <button type="submit">Daftar Sekarang</button>
      </form>
    </div>
  </body>
</html>
