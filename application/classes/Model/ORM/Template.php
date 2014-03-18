<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Clase abstracta para extender el ORM
 * 
 * En esta clase introducimos un fix para las fechas ya que en Argentina
 * usamos el formato:
 *
 * dd/mm/aaaa
 *
 * Pero Kohana y MySQL esta validando y guardando en formato ingles
 *
 * yyyy-mm-dd
 * mm/dd/yyy
 * 
 */
abstract class Model_ORM_Template extends ORM {
  // Sobreescribimos el get para que cuando tome la fecha la muestre en formato correcto
  // public function get($column)
  // {
  //   $return = parent::get($column);
  //   if ($return != null)
  //   {
  //     $tablecolumns = parent::_list_columns();
  //     if ($tablecolumns[$column]['data_type'] == 'date') {
  //       $return = Helper_Date::format($return, Helper_Date::DATE_ES);
  //     }
  //     else if ($tablecolumns[$column]['data_type'] == 'datetime')
  //     {
  //       $return = Helper_Date::format($return, Helper_Date::DATETIME_ES);
  //     }
  //   }
  //   return $return;
  // }

  // Sobreescribimos el set para que setee en formato valido para Kohana y MySQL
  // public function set($column, $value)
  // {
  //   if ($value != null)
  //   {
  //     $tablecolumns = parent::_list_columns();
  //     if ($tablecolumns[$column]['data_type'] == 'date')
  //     {
  //       $value = Helper_Date::format($value, Helper_Date::DATE_EN);
  //     } 
  //     else if ($tablecolumns[$column]['data_type'] == 'datetime')
  //     {
  //     //   $value = Helper_Date::format($value, Helper_Date::DATETIME_EN);
  //     }
  //   }
  //   parent::set($column, $value);
  // }
}