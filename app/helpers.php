<?php

function setActive($routeItem){
  return request()->path() === $routeItem ? 'active' : '';
}

?>