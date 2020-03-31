const express = require('express');
const app = express();
const bodyParser = require('body-parser');
const mysql = require('mysql');
const port = 3000

app.use(bodyParser.urlencoded({extended: true}))

app.listen(3000, function() {
	console.log('Server is start on' + 3000);
});

app.get('/' , function(req,res){
    res.send('Welcome to Restful API')
})

app.post('/register', function (req, res) {
    let nama = req.body.nama
    let email = req.body.email
    console.log(req.body)

    res.send('Thank you for register Mr. ' + nama + 'Your email is' + email )

});