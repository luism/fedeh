<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 */
class Helper_Fichas
{
    const FICHAS_MAX = 20;

    /**
     * Método estático para generar un array con  numeros del 1 a MAX.
     * @return array Array con numeros
     */
    public static function generar()
    {
        $listado_de_fichas = array();
        for ($i=1; $i <= self::FICHAS_MAX ; $i++) { 
            $listado_de_fichas[] = $i;
        }
        return $listado_de_fichas;
    }

    /**
     * Método estático para generar un array con las fichas ocupadas, a partir de un array de una consulta generada.
     * @return array [description]
     */
    public static function generar_fichas_ocupadas($fichas_ocupadas = array())
    {
        if(!is_array($fichas_ocupadas))
            return array();
        foreach ($fichas_ocupadas as $value) {
            $lista_ok[] = $value['numero_ficha'];
        }
        return $lista_ok;
    }

    public static function fichas_disponibles_popup()
    {
        ?>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Fichas disponibles</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <!-- <h2 class="">Fichas disponibles</h2> -->
                  <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <!-- <div class="panel-heading">Fichas disponibles</div> -->

                    <!-- Table -->
                    <table class="table">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Numero de ficha</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $fichas = Model_Socio::listar_fichas_disponibles() ?>
                        <?php foreach ($fichas as $ficha) { ?>
                        <tr>
                          <td><input type="radio"></button></td>
                          <td><?php echo $ficha ?></td>
                          <td>
                            <a href="#" class="btn"><i class=""></i> <strong>+</strong></a>
                          </td>
                        </tr>      
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- END Modal -->            
        <?php
    }
}