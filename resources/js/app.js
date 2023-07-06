import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import {
    Collapse,
    Dropdown,
    initTE,
  } from "tw-elements";

  initTE({ Collapse, Dropdown });
