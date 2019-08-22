var express = require('express');
var router = express.Router();


router.get('/', function(req, res, next) {
  var localtime = new Date();
  var new_time = new Date().toLocaleString("en-US", {timeZone: req.query.timezone});
  new_time = new Date(new_time);

  res.send(new_time.toLocaleString());
});

module.exports = router;
