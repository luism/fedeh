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
class Helper_Date {
  const DATE_ES = 'd/m/Y';
  const DATETIME_ES = 'd/m/Y H:m:s';
  const DATE_EN = 'Y-m-d';
  const DATETIME_EN = 'Y-m-d H:m:s';

  /**
   * Funcion para pasar la fecha al formato indicado
   * Recibe dos parámetros
   *
   * $data
   * $format
   *
   */
  public static function format($data = NULL, $format = NULL)
  {
    if ($format == NULL)
      $format = strpos($data, ':') === false || $data == null ? self::DATE_ES : self::DATETIME_ES;

    if ($data != NULL)
    {
      $data = $data == 'now' ? time() : strtotime(str_replace('/', '-', $data));
      return date($format, $data);
    }
    else
    {
      return null;
    }
  }
}