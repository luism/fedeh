<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Helper class for date formatting.
 *
 * @package    Fedeh
 * @category   Helper
 * @author     Ricardo Luis Mender
 * @copyright  (c) 2014 RIcardo Luis Mender
 * @license    http://kohanaframework.org/license
 */
class Helper_Date
{
  const DATE_ES = 'd/m/Y';
  const DATETIME_ES = 'd/m/Y H:m:s';
  const DATE_EN = 'Y-m-d';
  const DATETIME_EN = 'Y-m-d H:m:s';

  public static function format($data = NULL, $formato = NULL) {

    // ajeita a mascara
    if ($formato == NULL)
      $formato = strpos($data, ':') === false || $data == null ? self::DATE_BR : self::DATETIME_BR;

    if ($data != NULL) {
      $data = $data == 'now' ? time() : strtotime(str_replace('/', '-', $data));
      return date($formato, $data);
    } else {
      return null;
    }
  }
}