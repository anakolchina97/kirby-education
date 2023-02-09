<?php
  return function() {
    return collection('projects')->filterBy('auto', true);
  };