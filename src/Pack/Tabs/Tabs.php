<?php
namespace Seolan\Pack\Tabs;
class Tabs extends \Seolan\Pack\Core\AbstractPack implements \Seolan\Core\PackageInterface {
  function __construct() {
  }
  function getJsIncludes() {
    return array();
  }
  function getJsAsyncIncludes() {
    return array();
  }
  function getCssIncludes(){
    return array();
  }

  function getHeader() {
    return '';
  }

  function getHeader2() {
    return '';
  }
}
?>
