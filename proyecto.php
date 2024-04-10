app.get('/json', (req, res) => {
    var response = ""
    console.log("MESSAGE_STYLE:" + process.env.MESSAGE_STYLE);
    if (process.env.MESSAGE_STYLE === "uppercase") {
    response = "HELLO JSON";
    } else {
      response = "Hello json";
    }
    res.send({"message": response})
})

app.get('/now' , (req, res, next) => {
  req.time = new Date().toString();
  next();
}, (req, res) => {
    res.send({time: req.time})
});

app.get ("/:word/echo", (req, res) =>{
  const word = req.params.word
  res.json({echo:word})
})

app.get("/name", (req, res) =>{
  res.json({ name: req.query.first + " " + req.query.last })
})

app.post("/name", (req, res) => {
  var string = req.body.first + " " + Request.body.last;
  res.json({ name: string});
});

app.post("/name", function(req, res) {
  // Handle the data in the request
  var string = req.body.first + " " + req.body.last;
  res.json({ name: string });
});
