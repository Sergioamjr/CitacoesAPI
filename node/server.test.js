var request = require("supertest");
var server = require("./index");

describe("Get Results", () => {
  it("should return 200 status code", done => {
    request(server)
      .get("/")
      .expect(200)
      .end(done);
  });
});
