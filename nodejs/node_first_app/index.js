#!/usr/bin/env node

const express = require("express");
const jsonfile = require("jsonfile");
const bodyParser  = require("body-parser");

const app     = express();
const PORT    = 5000;
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }))
require("./routes/userRoutes")(app);



app.listen(PORT, () => {
  console.log(`Server running`);
});



