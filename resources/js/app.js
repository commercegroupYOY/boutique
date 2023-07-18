import './bootstrap';

require('./materialize.js');
document.addEventListener('DOMContentLoaded', function() {
  M.AutoInit();

  var elems = document.querySelectorAll('.tooltipped');
  M.Tooltip.init(elems);
});

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import {
    Collapse,
    Dropdown,
    initTE,
  } from "tw-elements";

  initTE({ Collapse, Dropdown });

