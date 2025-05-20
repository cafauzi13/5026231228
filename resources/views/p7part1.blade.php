<html>
    <head>
        <title>
            bootstrap 4 example
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                function hello()
                {
                    alert("Selamat Anda mendapatkan 1 Milyar!");
                }
                function tambah()
                {
                    var bil1 = document.getElementById("bil1").value ;
                    var bil2 = document.getElementById("bil2").value ;
                    var hasil = parseInt(bil1) + parseInt(bil2) ;

                    document.getElementById("hasil").innerHTML = hasil ;
                }
                function kurang()
                {
                    var bil1 = document.getElementById("bil1").value ;
                    var bil2 = document.getElementById("bil2").value ;
                    var hasil = parseInt(bil1) - parseInt(bil2) ;

                    document.getElementById("hasil").innerHTML = hasil ;
                }

            </script>
    </head>
    <body>
        <div class="container">
            <button class="btn btn-prymary" onclick="hello();">Klik disini</button>
            <p>
                Bilangan 1 :
                <input type="text" id="bil1" value="" class="form-control">
                <br>
                Bilangan 1 :
                <input type="text" id="bil2" value="" class="form-control">
                <br>
                Hasil Penjumlahan : <span id="hasil"> </span>
                <br>
                <button class="btn btn-success" onclick="tambah();"> Tambah  </button> 
                <button class="btn btn-success" onclick="kurang();"> Kurang </button>
            </p>
        </div>
    </body>
</html>