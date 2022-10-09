<!DOCTYPE html>
<html lang="en">
<head>
    <title>BOOKING MAKE UP</title>
    <link rel = "stylesheet" href = "style.css">
</head>


<body>
    <form>
        <div>
            <label> Nama </label> <br>
            <input name = "nama" type = "text" placeholder = "Masukkan Nama" class = "nama">
        </div>

        <div>
            <label> <br> Tanggal Booking </label> <br>
            <input name = "tanggal_lahir" type = "date">
        </div>
        
  
        <div>
            <br> Jenis Kulit : <br>
            <input type = "radio" name = "jenis_kulit"> Kering </br>
            <input type = "radio" name = "jenis_kulit"> Normal </br>
            <input type = "radio" name = "jenis_kulit"> Berminyak </br>
            <input type = "radio" name = "jenis_kulit"> Sensitif </br>
            <input type = "radio" name = "jenis_kulit"> Kombinasi </br>
        </div>


        <div>
        <br> Metode Pembayaran : <br>
        <select name="bayar">
        <option value = "" > --Pilih Metode-- </option>
        <option value = "1"> 1. BRI </option>
        <option value = "2"> 2. BNI </option>
        <option value = "3"> 3. MANDIRI </option>
        <option value = "4"> 4. BCA </option>
        <option value = "5"> 5. DANA </option>
        </select>


        <div>
            <br> Kondisi Muka : <br>
            <input type = "checkbox" name="kondisi[]" value = "1"/> Berjerawat <br>
            <input type = "checkbox" name="kondisi[]" value = "2"/> Beruntusan <br>
            <input type = "checkbox" name="kondisi[]" value = "3"/> Kemerahan <br>
        </div>
        
        <div>
            <button> Submit </button>
        </div>
    </form>

    <h1> ZAA MAKE UP </h1>
            <ul>
                <li class = "dropdown">
                    <a class = "dropbutton"> Menu </a>
                    <label class = "dropdown-content">
                        <a href = "Home.html" > Home </a>
                        <a href = "About Me.html"> About Me </a>
                    </label>
                </li>
                <button onclick = "myFunction()"> Change Mode </button> 
                <button onclick = "runPopup ()"> Click Me ! </button>
                <script src = "main.js"> </script>
                <div class = "changecolor">
                    <label> Warna Latar : </label>
                    <input type = "color" id = "bg-color" />
                    <br>
                    <label> Warna Teks  : </label>
                    <input type = "color" id = "text-color" />
                </div>
            </ul>



            <button id = "tombol" > Sembunyikan Promo </button>
            <button id = "tombol2" > Tampilkan Promo </button>


            <br>
            <br>
            <br>
            <br>

            <div class = promo>
                <table border="4" style="width: 200px;" align="right"><tbody>
                <tr> <th colspan="100%" scope="col"> PROMO !!! </th> </tr>
                <tr> <td> <div style = "font-family: arial; font-size: 12px; height: 80px; overflow: scroll; width: 200px;">
                <div style="overflow: hidden; padding: 0 px; width: 100%;">
                <ul>
                    <li class = daftar> 
                        <p> Bold Make Up : 700.000 <br> <br> </p>
                        <p> Semi Bold Make Up : 450.000 <br> <br> </p>
                        <p> Fantasy Make Up : 450.000 <br> <br> </p>
                        <p> Flawless Make Up : 300.000 <br> <br> </p>
                    </li>                 
                </ul></div></div></td></tr></tbody></table></div>
            

        <h2> <br> <br> <br> <br> Jasa Make Up Artist Terfavorit di Bandung </h2>

        <h3> <u> PRICE LIST </u> </h3>

        <div class = "galeri">
            <center> <img class = "image1" src = "Bold.jpg" alt="image"> 
                <p> <b> BOLD MAKE UP </b> <br>
                    Rp. 750.000 </p>
                <img class = "image2" src = "Semi Bold.jpg" alt="image">
                <p> <b> SEMI BOLD MAKE UP </b> <br>
                    Rp. 500.000 </p>
                <img class = "image3" src = "Fantasy.jpg" alt="image">
                <p> <b> FANTASY MAKE UP </b> <br>
                    Rp. 500.000 </p>
                <img class = "image4" src = "Flawless.jpg" alt="image">
                <p> <b> FLAWLESS MAKE UP </b> <br>
                    Rp. 350.000 </p> </center>
        </div>

   
    <div class="footer">
        <p> Part of CV. Altair Pratama - Jalan Buah Batu, Nomor 4. </p>
        <script src = "main.js"> </script>
    </div>


    

</body>
</html>