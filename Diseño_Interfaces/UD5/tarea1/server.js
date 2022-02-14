const express = require("express");
const port = process.env.PORT || 5000;
const path = require("path");

const app = express();

app.use(express.static("public"));
app.get("*", (req, res) => {
  res.sendFile(path.resolve(__dirname, "public", "index.html"));
});

app.listen(port, () => {
  console.log("server iniciado en el puerto " + port);
});
