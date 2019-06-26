'use strict';

var conn = new WebSocket('ws://192.168.109.10:8000');
conn.onopen = function(e) {
  console.log("Connection established!");
  console.log(e);

};

conn.onmessage = function(e) {
  console.log(e);

  let $el = $('li.messages-menu ul.menu li:first').clone();
  $el.find('p').text(e.data);
  $el.find('h4').text('WS user');
  $el.prependTo('li.messages-menu ul.menu');

};