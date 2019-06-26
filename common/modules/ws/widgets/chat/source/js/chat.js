'use strict';

var conn = new WebSocket('ws://192.168.109.10:8000');
conn.onopen = function(e) {
  console.log("Connection established!");
};

conn.onmessage = function(e) {
  console.log(e.data);
};