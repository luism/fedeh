<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Fichas por colaboradores:</h3>
          </div>
          <div class="panel-body">
            <div class="" id="ejemplo1"></div>
          </div>
          <div class="panel-footer">Total de fichas activas: 500</div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Ingresos Ultimos 12 meses</h3>
          </div>
          <div class="panel-body">
            <div id="ingresos12meses"></div>
          </div>
          <div class="panel-footer">Total: $ 50.000,00</div>
        </div>
    </div>
    <!-- <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading"><h3 class="panel-title">Panel title</h3></div>
          <div class="panel-body">
            <div id="ejemplo3"></div>
          </div>
          <div class="panel-footer">Panel footer</div>
        </div>
    </div> -->
</div>
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Porcentajes de ingresos por aportes activos: Socios, Socios con descuentos por planilla y Judiciales</h3>
          </div>
          <div class="panel-body">
            <div id="ejemplo4"></div>
          </div>
          <div class="panel-footer">Total: 750</div>
        </div>        
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Resumen Balance Actual</h3>
          </div>
          <div class="panel-body">
            <p>Ingresos Junio: $ 10,50</p>
            <p>Ingresos 2014: $ 1.256,45</p>
            <p>Cuotas de Socios pendientes: $ 4323,50</p>
            <p>Cuotas de Judiciales pendientes: $ 5430,43</p>
            <p></p>
          </div>
          <div class="panel-footer">Total de ingresos pendientes: $ 9.753,93</div>
        </div>
    </div>
</div>
<script type="text/javascript">
var options1 = {
    chart: { type: 'column' },
    title: { text: 'Fichas por Colaboradores' },
    xAxis: {
      categories: ['Juan', 'Maria', 'Agustina', 'Carla']
    },
    yAxis: {
      title: {
        text: 'Cantidad de cuotas'
      }
    },
    series: [{
        name: 'Socios',
        data: [50, 20, 30]
      }/*, {
        name: 'Judiciales',
        data: [5, 7, 3]
      }*/]
  },
  options2 = {
    "chart": {
      "renderTo": "container",
      "plotBackgroundColor": null,
      "plotBorderWidth": null,
      "plotShadow": false
    },
    "title": {
      "text": "Browser market shares at a specific website, 2010"
    },
    "tooltip": {
      "formatter": function () {
          return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %';
      }
    },
    "plotOptions": {
      "pie": {
        "allowPointSelect": 1,
        "cursor": "pointer",
        "dataLabels": {
          "enabled": 1,
          "color": "#000000",
          "connectorColor": "#000000",
          "formatter": function () {
            // return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %';
          }
        }
      }
    },
    "series": [{
      "type": "pie",
      "name": "Browser share",
      "data": [
        ["Firefox", 45],
        ["IE", 26.8], {
          "name": "Chrome",
          "y": 12.8,
          "sliced": true,
          "selected": true
        },
        ["Safari", 8.5],
        ["Opera", 6.2],
        ["Others", 0.7]
      ]
    }]
  },
  options3 = {
    "chart": {
      "renderTo": "container",
      "plotBackgroundColor": null,
      "plotBorderWidth": null,
      "plotShadow": false
    },
    "title": { "text": "" },
    "tooltip": {
      "formatter": function () {
          return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %';
      }
    },
    "plotOptions": {
      "pie": {
        "allowPointSelect": 1,
        "cursor": "pointer",
        "dataLabels": {
          "enabled": 1,
          "color": "#000000",
          "connectorColor": "#000000",
          formatter: function () {
            return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %';
          }
        }
      }
    },
    "series": [{
      "type": "pie",
      "name": "Personas que Aportan",
      "data": [
        ["Socios C/ desc. planilla", 30], {
          "name": "Socios",
          "y": 50,
          "sliced": true,
          "selected": true
        },
        ["Judiciales", 20]
      ]
    }]
  },
  options4 = {
    chart: {
      type: 'bar'
    },
    title: {
      text: 'Fichas por Colaboradores'
    },
    xAxis: {
      categories: ['Enero', 'Febrero', 'Marzo']
    },
    yAxis: {
      title: {
        text: 'Cantidad de cuotas'
      }
    },
    series: [{
        name: 'Socios',
        data: [50, 20, 30]
      }, {
        name: 'Judiciales',
        data: [5, 7, 3]
      }]
  }
$(function () { 
  $('#ejemplo1').highcharts(options1);
  $('#ejemplo3').highcharts(options4);
  $('#ejemplo4').highcharts(options3);

        $('#ingresos12meses').highcharts({
            chart: { type: 'column' },
            title: { text: '' },
            subtitle: { text: '' },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Ingresos (miles)'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'Ingresos en ultimo año: <b>{point.y:.1f} mil</b>',
            },
            series: [{
                name: 'Meses',
                data: [
                    ['Junio', 4.7],
                    ['Julio', 6.7],
                    ['Agosto', 9.7],
                    ['Septiembre', 12.7],
                    ['Octubre', 16.7],
                    ['Noviembre', 14.7],
                    ['Diciembre', 16,1],
                    ['Enero', 14.2],
                    ['Febrero', 14.0],
                    ['Marzo', 12.5],
                    ['Abril', 12.1],
                    ['Mayo', 11.8],

                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    x: 4,
                    y: 10,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif',
                        textShadow: '0 0 3px black'
                    }
                }
            }]
        });
    });

</script>