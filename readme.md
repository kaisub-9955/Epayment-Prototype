

## NOTE

Aplikasi ini menggunakan Laravel dan Node Js dalam pengerjaannya,
Diharapkan untuk disediakan terlebih dahulu sebelum Clone atau download file ini

## TUTORIAL

UNTUK TAMPILAN WEB TAGIHAN

- Pada Command Prompt, jalankan Serve nya dengan type : "php artisan serve"
- dan masuk ke : http://localhost:8000/index jika berhasil akan menampilkan halaman utama dari Web ini.

UNTUK BACK-END TAGIHAN

- Pada Command Prompt, Jalankan Servenya dengan type : "node index.js"
- Jalankan aplikasi Postman dan type : "localhost:3005/tagihan" method : GET untuk cek apakah berjalan atau tidak
- untuk input tagihan baru bisa menggunakan cara :
    - Pada method :POST(Body) , Pilih raw JSON dan type:
    {
	    "tagihan" :{
		    "nama" :"Ayam Goreng + pentol",
		    "semester" : "6",
		    "nilai" : "5000"
	    }
    }