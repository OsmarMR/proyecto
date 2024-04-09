let express = require('express');
let app = express();



console.log("Hello world")



app.get("/", (req, res) => {
  res.send('Hello Express')
})

console.log("hello express")





























module.exports = app;
