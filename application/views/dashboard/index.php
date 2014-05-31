<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Ejemplo 1</h3>
          </div>
          <div class="panel-body">
            <div class="" id="ejemplo1"></div>
          </div>
          <div class="panel-footer">Total: $10.500,00</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Ejemplo 2</h3>
          </div>
          <div class="panel-body">
            <div id="ejemplo2"></div>
          </div>
          <div class="panel-footer">Panel footer</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading"><h3 class="panel-title">Panel title</h3></div>
          <div class="panel-body">
            <div id="ejemplo3"></div>
          </div>
          <div class="panel-footer">Panel footer</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
          </div>
          <div class="panel-body">
            <div id="ejemplo4"></div>
          </div>
          <div class="panel-footer">Panel footer</div>
        </div>        
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
          </div>
          <div class="panel-body">
            <div id="ejemplo5"></div>
          </div>
          <div class="panel-footer">Panel footer</div>
        </div>
    </div>
</div>
<script type="text/javascript">
var options1 = {
    chart: {
      type: 'column'
    },
    title: {
      text: 'Cuotas Pagadas'
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
          formatter: function () {
            return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %';
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
  }
$(function () { 
  $('#ejemplo1').highcharts(options1);
  $('#ejemplo2').highcharts(options1);
  $('#ejemplo3').highcharts(options1);
  $('#ejemplo4').highcharts(options3);
  $('#ejemplo5').highcharts(options2);
});              
</script>