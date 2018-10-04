var server = require("express")();
var fs = require("fs");
var citacoesObject = JSON.parse(fs.readFileSync("./../citacoes.json", "utf8"));

function filterById(req, res) {
  const {
    params: { id: queryID }
  } = req;
  const { citacao } = citacoesObject;
  const filtered = citacao.filter(({ id }) => id === queryID)[0];
  res.json({ ...filtered });
}

function returnAll(req, res) {
  const { citacao } = citacoesObject;
  res.json({ ...citacao });
}

function returnRandom(req, res) {
  const { citacao } = citacoesObject;
  const citacoesLength = citacao.length;
  const randomID = Math.floor(Math.random() * citacoesLength - 1) + 1;
  const randomIDToString = randomID.toString();
  const filtered = citacao.filter(({ id }) => id === randomIDToString)[0];
  res.json({ ...filtered });
}

server.get("/", returnAll);
server.get("/random", returnRandom);
server.get("/:id", filterById);

server.listen(3000);

module.exports = server;
