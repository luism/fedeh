<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Clase para parametrizar los tipos de linea de cuenta corriente.
 *
 * @package    Fedeh
 * @category   Helper
 * @author     Ricardo Luis Mender
 * @copyright  (c) 2014 RIcardo Luis Mender
 * @license    http://kohanaframework.org/license
 */
class Helper_TipoLineaCC {
  const ED = 'efectivo debito';
  const EC = 'efectivo credito';
  const CD = 'cheque debito';
  const CC = 'cheque credito';
  const DE = 'donacion efectivo';
  const DC = 'donacion cheque';

  public static function id($tipo_linea_cc)
  {
    $tipo = ORM::factory('TipoLineaCuentaCorriente');
    
  }
}