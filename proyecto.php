require("dotenv").config();
let express = require('express')
let app = express();

app.get('/json', (req, res) => {
  var response = ""
console.log("MESSAGE_STYLE:" + process.env.MESSAGE_STYLE);
if (process.env.MESSAGE_STYLE === "uppercase") {
  response = "HELLO JSON";
} else {
  response ="Hello json";
}
res.send({"message": response})
})





 module.exports = app;
