require ("dotenv").config();
const express = require ('express');
const app = express();
// Middleware de registro de peticiones a
nivel raíz
app.use ((req, res, next) →> ‹
const method = req. method;
const path = req. path;
const ip = req. ip;
console.10g ( '${method} ${path} - ${ip}
*);
next();
}) ;
}) ;
module. exports = app;

app get('/json', (req, res) →> {
let response = "";


console. 1og ("MESSAGE_STYLE:" +

process. env.MESSAGE_STYLE);

if (process. env.MESSAGE_STYLE ===
"uppercase") {


response = "HELLO JSON";
} else {


response = "Hello json";
｝


res. send ({"message": response});
