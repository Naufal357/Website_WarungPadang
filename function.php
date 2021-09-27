<?php
    $conn = mysqli_connect("localhost", "root", "", "db_restoranpadang");

    
    function registrasi($data){
        global $conn;
        $username =strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
        $email= mysqli_real_escape_string($conn, $data["email"]);
        $NoTlpn = mysqli_real_escape_string($conn, $data["NoTlpn"]);
        $level = "pelanggan";

        //cek username tersedia
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
        
        if(mysqli_fetch_assoc($result)){
            echo "<script>
                  alert('Maaf Username Sudah Digunakan')
                  </script>";
            return false;
        }


        //Menyamakan konfirmasi password
        if($password !== $password2){
            echo    "<script>
                        alert('Konfirmasi Password Tidak Sesuai')
                    </script>";
            return false;
        }
        
        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Tambah user ke database
        mysqli_query($conn, "INSERT INTO user (id_user, username, password, email, NoTlpn, level) VALUES ('', '$username', '$password', '$email', '$NoTlpn', '$level')");

        return mysqli_affected_rows($conn);
    }



    function pemesanan($data){
        global $conn;
        $username =strtolower(stripslashes($data["username"]));
        $NoTlpn   = mysqli_real_escape_string($conn, $data["NoTlpn"]);
        $email  = mysqli_real_escape_string($conn, $data["email"]);
        $hari      = mysqli_real_escape_string($conn, $data["hari"]);
        $jam      = mysqli_real_escape_string($conn, $data["jam"]);
        $orang    = mysqli_real_escape_string($conn, $data["orang"]);
        $makanan   = mysqli_real_escape_string($conn, $data["makanan"]);
        $minuman   = mysqli_real_escape_string($conn, $data["minuman"]);

        // Tambah pemesanan ke database
        mysqli_query($conn, "INSERT INTO pemesanan VALUES ('', '$username', '$NoTlpn', '$email', '$hari', '$jam', '$orang', '$makanan', '$minuman')");

        return mysqli_affected_rows($conn);
    }