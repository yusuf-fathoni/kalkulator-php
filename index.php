<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Aritmatika Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #f0f8ff, #e6f2ff);
            text-align: center;
            margin-top: 100px;
        }
        h2 {
            color: #333;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        input, select {
            margin: 10px;
            padding: 8px;
            width: 180px;
            font-size: 16px;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        .hasil {
            margin-top: 20px;
            font-size: 20px;
            color: #000;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Kalkulator Aritmatika PHP</h2>

    <!-- Form input angka dan operator -->
    <form method="post" action="">
        <!-- Input untuk angka pertama -->
        <input type="number" name="angka1" placeholder="Masukkan angka pertama" required>

        <!-- Dropdown pilihan operator aritmatika -->
        <select name="operator">
            <option value="+">Tambah (+)</option>
            <option value="-">Kurang (-)</option>
            <option value="*">Kali (*)</option>
            <option value="/">Bagi (/)</option>
        </select>

        <!-- Input untuk angka kedua -->
        <input type="number" name="angka2" placeholder="Masukkan angka kedua" required>
        <br>

        <!-- Tombol untuk menghitung -->
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    // Mengecek apakah tombol 'hitung' sudah ditekan
    if (isset($_POST['hitung'])) {

        // ====== VARIABEL ======
        // Menyimpan input dari form ke dalam variabel
        $angka1 = $_POST['angka1']; // Menyimpan angka pertama
        $angka2 = $_POST['angka2']; // Menyimpan angka kedua
        $operator = $_POST['operator']; // Menyimpan operator aritmatika yang dipilih

        // ====== LOGIKA IF-ELSE & OPERATOR ======
        // Menentukan operasi matematika berdasarkan operator yang dipilih pengguna
        if ($operator == "+") {
            // Penjumlahan menggunakan operator +
            $hasil = $angka1 + $angka2;
        } elseif ($operator == "-") {
            // Pengurangan menggunakan operator -
            $hasil = $angka1 - $angka2;
        } elseif ($operator == "*") {
            // Perkalian menggunakan operator *
            $hasil = $angka1 * $angka2;
        } elseif ($operator == "/") {
            // Pembagian menggunakan operator /
            // Mengecek apakah angka kedua bukan nol
            if ($angka2 == 0) {
                $hasil = "Tidak bisa dibagi dengan nol";
            } else {
                $hasil = $angka1 / $angka2;
            }
        } else {
            // Jika operator tidak sesuai pilihan
            $hasil = "Operator tidak dikenali";
        }

        // ====== MENAMPILKAN HASIL ======
        // Menampilkan hasil perhitungan ke pengguna
        echo "<div class='hasil'>Hasil: $hasil</div>";
    }
    ?>

</body>
</html>
