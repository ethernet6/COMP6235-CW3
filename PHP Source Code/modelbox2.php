<script type="text/javascript">
  function selecteddatavalues2() {
    $("#box2before").hide();
    $("#box2after").show();
    $('#myModal2').modal('toggle');
    var yearsel = $('#year_v2').val();
    var selectedoption = $('#option_v2').val();
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        alert(this.response);
      }
    };
    xhttp.open("GET", "getdatafields.php?yearsel="+year+"&id="+selectedoption, true);
    xhttp.send();
  }
</script>


<script type="text/javascript">
  function selecteddatavalues2() {
    $('#myModal2').modal('toggle');
    var yearsel = $('#year_v2').val();
    var selectedoption = $('#option_v2').val();
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          var obj = JSON.parse(this.response);
           $("#mgp_v1").val("");//erase the mgp value
           $("#mgp_v2").val("");//erase the mgp value
           $("#box2before").hide();
           $("#box2after").show();
           $("#v2_year_model").html(yearsel+" "+obj.Model);
           $("#v2_litre_cyl_trans").html(obj.Cyl+" cyl, "+obj.Trans);
           $("#v2_comb").html(obj.Cmb_MPG);
           $("#v2_fuel").html(obj.Fuel);
           $("#v2_city_hw").html(obj.City_MPG+" "+obj.Hwy_MPG);
           $("#fullaccord").show();
           $("#veh2_10").html(obj.per10year);
           $("#veh2_yearly").html(obj.yearly);
           $("#veh2_monthly").html(obj.permonth);
           $("#veh2_weekly").html(obj.perweek);
           $("#veh2_mile").html(obj.permile);
           
           //for the fuel usage values
           $("#veh2_10_fuel").html(obj.per10year_fuel);
           $("#veh2_yearly_fuel").html(obj.yearly_fuel);
           $("#veh2_monthly_fuel").html(obj.permonth_fuel);
           $("#veh2_weekly_fuel").html(obj.perweek_fuel);
           $("#veh2_mile_fuel").html(obj.permile_fuel);

           //alert($("#veh1_10").html());
           //for the calculation of save
           if($("#veh1_10").html()!="")
            {
               //show the price symbol for savings
               $("#saving_10_dollar").show();
               $("#saving_yearly_dollar").show();
               $("#saving_monthly_dollar").show();
               $("#saving_weekly_dollar").show();
               $("#saving_mile_dollar").show();


               $("#saving_10_dollar_fuel").show();
               $("#saving_yearly_dollar_fuel").show();
               $("#saving_monthly_dollar_fuel").show();
               $("#saving_weekly_dollar_fuel").show();
               $("#saving_mile_dollar_fuel").show();


               $("#savings").show();


               //fuel usage
               $("#savings_fuel").show();
               var year10_fuel = $("#veh2_10_fuel").html();
               var peryearcostv2_fuel = parseInt(year10_fuel);

               var year10_fuel = $("#veh1_10_fuel").html();
               var peryearcostv1_fuel = parseInt(year10_fuel);
               //alert(peryearcostv1);
               if(peryearcostv1_fuel < peryearcostv2_fuel)
               {

                  var muchsaves_10_fuel = peryearcostv2_fuel - peryearcostv1_fuel;
                  var whosaves_fuel = "A";  
                  $("#whosaves_fuel").html("A");
                  $("#saving_10_fuel").html(muchsaves_10_fuel);
               }
               else
               {
                  var muchsaves_10_fuel = peryearcostv1_fuel - peryearcostv2_fuel;  
                  var whosaves_fuel = "B";
                  $("#whosaves_fuel").html("B");
                  $("#saving_10_fuel").html(muchsaves_10_fuel);
               }
               //fuel usage ends

               var year10 = $("#veh2_10").html();
               var result=year10.split('$');
               var peryearcostv2 = parseInt(result[1]);

               var year10 = $("#veh1_10").html();
               var result=year10.split('$');
               var peryearcostv1 = parseInt(result[1]);
               //alert(peryearcostv1);
               if(peryearcostv1 < peryearcostv2)
               {

                  var muchsaves_10 = peryearcostv2 - peryearcostv1;
                  var whosaves = "A";  
                  $("#whosaves").html("A");
                  $("#saving_10").html(muchsaves_10);
               }
               else
               {
                  var muchsaves_10 = peryearcostv1 - peryearcostv2;  
                  var whosaves = "B";
                  $("#whosaves").html("B");
                  $("#saving_10").html(muchsaves_10);
               }


           }


           if($("#veh1_yearly").html()!="")
           {

               //fuel usage
               var yearyearly_fuel = $("#veh2_yearly_fuel").html();
               var peryearlycostv2_fuel = parseInt(yearyearly_fuel);

               var yearyearly_fuel = $("#veh1_yearly_fuel").html();
               var peryearlycostv1_fuel = parseInt(yearyearly_fuel);

               if(peryearlycostv1_fuel < peryearlycostv2_fuel)
               {

                  var muchsaves_yearly_fuel = peryearlycostv2_fuel - peryearlycostv1_fuel;
                  $("#whosaves_fuel").html("A");
                  $("#saving_yearly_fuel").html(muchsaves_yearly_fuel);
               }
               else
               {
                  var muchsaves_yearly_fuel = peryearlycostv1_fuel - peryearlycostv2_fuel;  
                  $("#whosaves_fuel").html("B");
                  $("#saving_yearly_fuel").html(muchsaves_yearly_fuel);
               }
               //fuel usage ends 

               var yearyearly = $("#veh2_yearly").html();
               var result=yearyearly.split('$');
               var peryearlycostv2 = parseInt(result[1]);

               var yearyearly = $("#veh1_yearly").html();
               var result=yearyearly.split('$');
               var peryearlycostv1 = parseInt(result[1]);

               if(peryearlycostv1 < peryearlycostv2)
               {

                  var muchsaves_yearly = peryearlycostv2 - peryearlycostv1;
                  $("#whosaves").html("A");
                  $("#saving_yearly").html(muchsaves_yearly);
               }
               else
               {
                  var muchsaves_yearly = peryearlycostv1 - peryearlycostv2;  
                  $("#whosaves").html("B");
                  $("#saving_yearly").html(muchsaves_yearly);
               }


           }



           if($("#veh1_monthly").html()!="")
           {
               //fuel usage
               var yearmonthly_fuel = $("#veh2_monthly_fuel").html();
               var permonthlycostv2_fuel = parseInt(yearmonthly_fuel);

               var yearmonthly_fuel = $("#veh1_monthly_fuel").html();
               var permonthlycostv1_fuel = parseInt(yearmonthly_fuel);

               if(permonthlycostv1_fuel < permonthlycostv2_fuel)
               {

                  var muchsaves_monthly_fuel = permonthlycostv2_fuel - permonthlycostv1_fuel;
                  $("#whosaves_fuel").html("A");
                  $("#saving_monthly_fuel").html(muchsaves_monthly_fuel);
               }
               else
               {
                  var muchsaves_monthly_fuel = permonthlycostv1_fuel - permonthlycostv2_fuel;  
                  $("#whosaves_fuel").html("B");
                  $("#saving_monthly_fuel").html(muchsaves_monthly_fuel);
               }
               //fuel usage ends 

               var yearmonthly = $("#veh2_monthly").html();
               var result=yearmonthly.split('$');
               var permonthlycostv2 = parseInt(result[1]);

               var yearmonthly = $("#veh1_monthly").html();
               var result=yearmonthly.split('$');
               var permonthlycostv1 = parseInt(result[1]);

               if(permonthlycostv1 < permonthlycostv2)
               {

                  var muchsaves_monthly = permonthlycostv2 - permonthlycostv1;
                  $("#whosaves").html("A");
                  $("#saving_monthly").html(muchsaves_monthly);
               }
               else
               {
                  var muchsaves_monthly = permonthlycostv1 - permonthlycostv2;  
                  $("#whosaves").html("B");
                  $("#saving_monthly").html(muchsaves_monthly);
               }


           }


           if($("#veh1_weekly").html()!="")
           {
               //fuel usage
               var yearweekly_fuel = $("#veh2_weekly_fuel").html();
               var perweeklycostv2_fuel = parseInt(yearweekly_fuel);

               var yearweekly_fuel = $("#veh1_weekly_fuel").html();
               var perweeklycostv1_fuel = parseInt(yearweekly_fuel);

               if(perweeklycostv1_fuel < perweeklycostv2_fuel)
               {

                  var muchsaves_weekly_fuel = perweeklycostv2_fuel - perweeklycostv1_fuel;
                  $("#whosaves_fuel").html("A");
                  $("#saving_weekly_fuel").html(muchsaves_weekly_fuel);
               }
               else
               {
                  var muchsaves_weekly_fuel = perweeklycostv1_fuel - perweeklycostv2_fuel;  
                  $("#whosaves_fuel").html("B");
                  $("#saving_weekly_fuel").html(muchsaves_weekly_fuel);
               }

               //fuel usage ends 
               var yearweekly = $("#veh2_weekly").html();
               var result=yearweekly.split('$');
               var perweeklycostv2 = parseInt(result[1]);

               var yearweekly = $("#veh1_weekly").html();
               var result=yearweekly.split('$');
               var perweeklycostv1 = parseInt(result[1]);

               if(perweeklycostv1 < perweeklycostv2)
               {

                  var muchsaves_weekly = perweeklycostv2 - perweeklycostv1;
                  $("#whosaves").html("A");
                  $("#saving_weekly").html(muchsaves_weekly);
               }
               else
               {
                  var muchsaves_weekly = perweeklycostv1 - perweeklycostv2;  
                  $("#whosaves").html("B");
                  $("#saving_weekly").html(muchsaves_weekly);
               }


           }



            if($("#veh1_mile").html()!="")
           {
               var yearmile = $("#veh2_mile").html();
               var result=yearmile.split('¢');
               var permilecostv2 = parseInt(result[1]);

               var yearmile = $("#veh1_mile").html();
               var result=yearmile.split('¢');
               var permilecostv1 = parseInt(result[1]);

               if(permilecostv1 < permilecostv2)
               {

                  var muchsaves_mile = permilecostv2 - permilecostv1;
                  $("#whosaves").html("A");
                  $("#saving_mile").html(muchsaves_mile);
               }
               else
               {
                  var muchsaves_mile = permilecostv1 - permilecostv2;  
                  $("#whosaves").html("B");
                  $("#saving_mile").html(muchsaves_mile);
               }



               //fuel usage
               var yearmile_fuel = $("#veh2_mile_fuel").html();
               var permilecostv2_fuel = parseInt(yearmile_fuel);

               var yearmile_fuel = $("#veh1_mile_fuel").html();
               var permilecostv1_fuel = parseInt(yearmile_fuel);

               if(permilecostv1_fuel < permilecostv2_fuel)
               {

                  var muchsaves_mile_fuel = permilecostv2_fuel - permilecostv1_fuel;
                  $("#whosaves_fuel").html("A");
                  $("#saving_mile_fuel").html(muchsaves_mile_fuel);
               }
               else
               {
                  var muchsaves_mile_fuel = permilecostv1_fuel - permilecostv2_fuel;  
                  $("#whosaves_fuel").html("B");
                  $("#saving_mile_fuel").html(muchsaves_mile_fuel);
               }
               //fuel usage ends
           }  
           //for calculation of save 



 
    if($("#veh1_mile").html()!="")
       {    
           /////////////
           // Create the chart
      Highcharts.chart('container', {
          chart: {
              type: 'column'
          },
          title: {
              text: ''
          },
          subtitle: {
              text: ''
          },
          xAxis: {
              type: 'category'
          },
          yAxis: {
              title: {
                  text: 'Dollars'
              }

          },
          legend: {
              enabled: false
          },
          plotOptions: {
              series: {
                  borderWidth: 0,
                  dataLabels: {
                      enabled: true,
                      format: '${point.y:.1f}'
                  }
              }
          },

          tooltip: {
              headerFormat: '<span style="font-size:11px"></span><br>',
              pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>${point.y:.2f}</b> of total<br/>'
          },

          series: [{
              name: '',
              colorByPoint: true,
              data: [{
                  name: 'Vehicle 1',
                  y: peryearcostv1,
                  drilldown: 'Vehicle 1'
              }, {
                  name: 'Vehicle 2',
                  y: peryearcostv2,
                  drilldown: 'Vehicle 2'
              }, {
                  name: 'Vehicle '+whosaves+' Saves',
                  y: muchsaves_10,
                  drilldown: 'Vehicle 2'
              }

              ]
          }],
          drilldown: {
              series: [{
                  name: 'Vehicle 1',
                  id: 'Vehicle 1',
                  data: [
                      [
                          'v11.0',
                          24.13
                      ],
                      [
                          'v8.0',
                          17.2
                      ],
                      [
                          'v9.0',
                          8.11
                      ],
                      [
                          'v10.0',
                          5.33
                      ],
                      [
                          'v6.0',
                          1.06
                      ],
                      [
                          'v7.0',
                          0.5
                      ]
                  ]
              }, {
                  name: 'Vehicle 2',
                  id: 'Vehicle 2',
                  data: [
                      [
                          'v12.x',
                          0.34
                      ],
                      [
                          'v28',
                          0.24
                      ],
                      [
                          'v27',
                          0.17
                      ],
                      [
                          'v29',
                          0.16
                      ]
                  ]
              }]
          }
      });



       //yearly
      /////////////
           // Create the chart
      Highcharts.chart('container_yearly', {
          chart: {
              type: 'column'
          },
          title: {
              text: ''
          },
          subtitle: {
              text: ''
          },
          xAxis: {
              type: 'category'
          },
          yAxis: {
              title: {
                  text: 'Dollars'
              }

          },
          legend: {
              enabled: false
          },
          plotOptions: {
              series: {
                  borderWidth: 0,
                  dataLabels: {
                      enabled: true,
                      format: '${point.y:.1f}'
                  }
              }
          },

          tooltip: {
              headerFormat: '<span style="font-size:11px"></span><br>',
              pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>${point.y:.2f}</b> of total<br/>'
          },
          series: [{
              name: '',
              colorByPoint: true,
              data: [{
                  name: 'Vehicle 1',
                  y: peryearlycostv1,
                  drilldown: 'Vehicle 1'
              }, {
                  name: 'Vehicle 2',
                  y: peryearlycostv2,
                  drilldown: 'Vehicle 2'
              }, {
                  name: 'Vehicle '+whosaves+' Saves',
                  y: muchsaves_yearly,
                  drilldown: 'Vehicle 2'
              }

              ]
          }],
          drilldown: {
              series: [{
                  name: 'Vehicle 1',
                  id: 'Vehicle 1',
                  data: [
                      [
                          'v11.0',
                          24.13
                      ],
                      [
                          'v8.0',
                          17.2
                      ],
                      [
                          'v9.0',
                          8.11
                      ],
                      [
                          'v10.0',
                          5.33
                      ],
                      [
                          'v6.0',
                          1.06
                      ],
                      [
                          'v7.0',
                          0.5
                      ]
                  ]
              }, {
                  name: 'Vehicle 2',
                  id: 'Vehicle 2',
                  data: [
                      [
                          'v12.x',
                          0.34
                      ],
                      [
                          'v28',
                          0.24
                      ],
                      [
                          'v27',
                          0.17
                      ],
                      [
                          'v29',
                          0.16
                      ]
                  ]
              }]
          }
      });



      //monthly
      /////////////
           // Create the chart
      Highcharts.chart('container_monthly', {
          chart: {
              type: 'column'
          },
          title: {
              text: ''
          },
          subtitle: {
              text: ''
          },
          xAxis: {
              type: 'category'
          },
          yAxis: {
              title: {
                  text: 'Dollars'
              }

          },
          legend: {
              enabled: false
          },
          plotOptions: {
              series: {
                  borderWidth: 0,
                  dataLabels: {
                      enabled: true,
                      format: '${point.y:.1f}'
                  }
              }
          },

          tooltip: {
              headerFormat: '<span style="font-size:11px"></span><br>',
              pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>${point.y:.2f}</b> of total<br/>'
          },
          series: [{
              name: '',
              colorByPoint: true,
              data: [{
                  name: 'Vehicle 1',
                  y: permonthlycostv1,
                  drilldown: 'Vehicle 1'
              }, {
                  name: 'Vehicle 2',
                  y: permonthlycostv2,
                  drilldown: 'Vehicle 2'
              }, {
                  name: 'Vehicle '+whosaves+' Saves',
                  y: muchsaves_monthly,
                  drilldown: 'Vehicle 2'
              }

              ]
          }],
          drilldown: {
              series: [{
                  name: 'Vehicle 1',
                  id: 'Vehicle 1',
                  data: [
                      [
                          'v11.0',
                          24.13
                      ],
                      [
                          'v8.0',
                          17.2
                      ],
                      [
                          'v9.0',
                          8.11
                      ],
                      [
                          'v10.0',
                          5.33
                      ],
                      [
                          'v6.0',
                          1.06
                      ],
                      [
                          'v7.0',
                          0.5
                      ]
                  ]
              }, {
                  name: 'Vehicle 2',
                  id: 'Vehicle 2',
                  data: [
                      [
                          'v12.x',
                          0.34
                      ],
                      [
                          'v28',
                          0.24
                      ],
                      [
                          'v27',
                          0.17
                      ],
                      [
                          'v29',
                          0.16
                      ]
                  ]
              }]
          }
      });




      //weekly
      /////////////
           // Create the chart
      Highcharts.chart('container_weekly', {
          chart: {
              type: 'column'
          },
          title: {
              text: ''
          },
          subtitle: {
              text: ''
          },
          xAxis: {
              type: 'category'
          },
          yAxis: {
              title: {
                  text: 'Dollars'
              }

          },
          legend: {
              enabled: false
          },
          plotOptions: {
              series: {
                  borderWidth: 0,
                  dataLabels: {
                      enabled: true,
                      format: '${point.y:.1f}'
                  }
              }
          },

          tooltip: {
              headerFormat: '<span style="font-size:11px"></span><br>',
              pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>${point.y:.2f}</b> of total<br/>'
          },
          series: [{
              name: '',
              colorByPoint: true,
              data: [{
                  name: 'Vehicle 1',
                  y: perweeklycostv1,
                  drilldown: 'Vehicle 1'
              }, {
                  name: 'Vehicle 2',
                  y: perweeklycostv2,
                  drilldown: 'Vehicle 2'
              }, {
                  name: 'Vehicle '+whosaves+' Saves',
                  y: muchsaves_weekly,
                  drilldown: 'Vehicle 2'
              }

              ]
          }],
          drilldown: {
              series: [{
                  name: 'Vehicle 1',
                  id: 'Vehicle 1',
                  data: [
                      [
                          'v11.0',
                          24.13
                      ],
                      [
                          'v8.0',
                          17.2
                      ],
                      [
                          'v9.0',
                          8.11
                      ],
                      [
                          'v10.0',
                          5.33
                      ],
                      [
                          'v6.0',
                          1.06
                      ],
                      [
                          'v7.0',
                          0.5
                      ]
                  ]
              }, {
                  name: 'Vehicle 2',
                  id: 'Vehicle 2',
                  data: [
                      [
                          'v12.x',
                          0.34
                      ],
                      [
                          'v28',
                          0.24
                      ],
                      [
                          'v27',
                          0.17
                      ],
                      [
                          'v29',
                          0.16
                      ]
                  ]
              }]
          }
      });




      //miles
      /////////////
           // Create the chart
      Highcharts.chart('container_miles', {
          chart: {
              type: 'column'
          },
          title: {
              text: ''
          },
          subtitle: {
              text: ''
          },
          xAxis: {
              type: 'category'
          },
          yAxis: {
              title: {
                  text: 'Dollars'
              }

          },
          legend: {
              enabled: false
          },
          plotOptions: {
              series: {
                  borderWidth: 0,
                  dataLabels: {
                      enabled: true,
                      format: '¢{point.y:.1f}'
                  }
              }
          },

          tooltip: {
              headerFormat: '<span style="font-size:11px"></span><br>',
              pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>¢{point.y:.2f}</b> of total<br/>'
          },
          series: [{
              name: '',
              colorByPoint: true,
              data: [{
                  name: 'Vehicle 1',
                  y: permilecostv1,
                  drilldown: 'Vehicle 1'
              }, {
                  name: 'Vehicle 2',
                  y: permilecostv2,
                  drilldown: 'Vehicle 2'
              }, {
                  name: 'Vehicle '+whosaves+' Saves',
                  y: muchsaves_mile,
                  drilldown: 'Vehicle 2'
              }

              ]
          }],
          drilldown: {
              series: [{
                  name: 'Vehicle 1',
                  id: 'Vehicle 1',
                  data: [
                      [
                          'v11.0',
                          24.13
                      ],
                      [
                          'v8.0',
                          17.2
                      ],
                      [
                          'v9.0',
                          8.11
                      ],
                      [
                          'v10.0',
                          5.33
                      ],
                      [
                          'v6.0',
                          1.06
                      ],
                      [
                          'v7.0',
                          0.5
                      ]
                  ]
              }, {
                  name: 'Vehicle 2',
                  id: 'Vehicle 2',
                  data: [
                      [
                          'v12.x',
                          0.34
                      ],
                      [
                          'v28',
                          0.24
                      ],
                      [
                          'v27',
                          0.17
                      ],
                      [
                          'v29',
                          0.16
                      ]
                  ]
              }]
          }
      });





      //************All for fuel
            /////////////
           // Create the chart
      Highcharts.chart('container_fuel', {
          chart: {
              type: 'column'
          },
          title: {
              text: ''
          },
          subtitle: {
              text: ''
          },
          xAxis: {
              type: 'category'
          },
          yAxis: {
              title: {
                  text: 'Emission'
              }

          },
          legend: {
              enabled: false
          },
          plotOptions: {
              series: {
                  borderWidth: 0,
                  dataLabels: {
                      enabled: true,
                      format: '{point.y:.1f}'
                  }
              }
          },

          tooltip: {
              headerFormat: '<span style="font-size:11px"></span><br>',
              pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
          },

          series: [{
              name: '',
              colorByPoint: true,
              data: [{
                  name: 'Vehicle 1',
                  y: peryearcostv1_fuel,
                  drilldown: 'Vehicle 1'
              }, {
                  name: 'Vehicle 2',
                  y: peryearcostv2_fuel,
                  drilldown: 'Vehicle 2'
              }, {
                  name: 'Vehicle '+whosaves_fuel+' Saves',
                  y: muchsaves_10_fuel,
                  drilldown: 'Vehicle 2'
              }

              ]
          }],
          drilldown: {
              series: [{
                  name: 'Vehicle 1',
                  id: 'Vehicle 1',
                  data: [
                      [
                          'v11.0',
                          24.13
                      ],
                      [
                          'v8.0',
                          17.2
                      ],
                      [
                          'v9.0',
                          8.11
                      ],
                      [
                          'v10.0',
                          5.33
                      ],
                      [
                          'v6.0',
                          1.06
                      ],
                      [
                          'v7.0',
                          0.5
                      ]
                  ]
              }, {
                  name: 'Vehicle 2',
                  id: 'Vehicle 2',
                  data: [
                      [
                          'v12.x',
                          0.34
                      ],
                      [
                          'v28',
                          0.24
                      ],
                      [
                          'v27',
                          0.17
                      ],
                      [
                          'v29',
                          0.16
                      ]
                  ]
              }]
          }
      });



       //yearly
      /////////////
           // Create the chart
      Highcharts.chart('container_yearly_fuel', {
          chart: {
              type: 'column'
          },
          title: {
              text: ''
          },
          subtitle: {
              text: ''
          },
          xAxis: {
              type: 'category'
          },
          yAxis: {
              title: {
                  text: 'Emission'
              }

          },
          legend: {
              enabled: false
          },
          plotOptions: {
              series: {
                  borderWidth: 0,
                  dataLabels: {
                      enabled: true,
                      format: '{point.y:.1f}'
                  }
              }
          },

          tooltip: {
              headerFormat: '<span style="font-size:11px"></span><br>',
              pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
          },
          series: [{
              name: '',
              colorByPoint: true,
              data: [{
                  name: 'Vehicle 1',
                  y: peryearlycostv1_fuel,
                  drilldown: 'Vehicle 1'
              }, {
                  name: 'Vehicle 2',
                  y: peryearlycostv2_fuel,
                  drilldown: 'Vehicle 2'
              }, {
                  name: 'Vehicle '+whosaves_fuel+' Saves',
                  y: muchsaves_yearly_fuel,
                  drilldown: 'Vehicle 2'
              }

              ]
          }],
          drilldown: {
              series: [{
                  name: 'Vehicle 1',
                  id: 'Vehicle 1',
                  data: [
                      [
                          'v11.0',
                          24.13
                      ],
                      [
                          'v8.0',
                          17.2
                      ],
                      [
                          'v9.0',
                          8.11
                      ],
                      [
                          'v10.0',
                          5.33
                      ],
                      [
                          'v6.0',
                          1.06
                      ],
                      [
                          'v7.0',
                          0.5
                      ]
                  ]
              }, {
                  name: 'Vehicle 2',
                  id: 'Vehicle 2',
                  data: [
                      [
                          'v12.x',
                          0.34
                      ],
                      [
                          'v28',
                          0.24
                      ],
                      [
                          'v27',
                          0.17
                      ],
                      [
                          'v29',
                          0.16
                      ]
                  ]
              }]
          }
      });



      //monthly
      /////////////
           // Create the chart
      Highcharts.chart('container_monthly_fuel', {
          chart: {
              type: 'column'
          },
          title: {
              text: ''
          },
          subtitle: {
              text: ''
          },
          xAxis: {
              type: 'category'
          },
          yAxis: {
              title: {
                  text: 'Emission'
              }

          },
          legend: {
              enabled: false
          },
          plotOptions: {
              series: {
                  borderWidth: 0,
                  dataLabels: {
                      enabled: true,
                      format: '{point.y:.1f}'
                  }
              }
          },

          tooltip: {
              headerFormat: '<span style="font-size:11px"></span><br>',
              pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
          },
          series: [{
              name: '',
              colorByPoint: true,
              data: [{
                  name: 'Vehicle 1',
                  y: permonthlycostv1_fuel,
                  drilldown: 'Vehicle 1'
              }, {
                  name: 'Vehicle 2',
                  y: permonthlycostv2_fuel,
                  drilldown: 'Vehicle 2'
              }, {
                  name: 'Vehicle '+whosaves_fuel+' Saves',
                  y: muchsaves_monthly_fuel,
                  drilldown: 'Vehicle 2'
              }

              ]
          }],
          drilldown: {
              series: [{
                  name: 'Vehicle 1',
                  id: 'Vehicle 1',
                  data: [
                      [
                          'v11.0',
                          24.13
                      ],
                      [
                          'v8.0',
                          17.2
                      ],
                      [
                          'v9.0',
                          8.11
                      ],
                      [
                          'v10.0',
                          5.33
                      ],
                      [
                          'v6.0',
                          1.06
                      ],
                      [
                          'v7.0',
                          0.5
                      ]
                  ]
              }, {
                  name: 'Vehicle 2',
                  id: 'Vehicle 2',
                  data: [
                      [
                          'v12.x',
                          0.34
                      ],
                      [
                          'v28',
                          0.24
                      ],
                      [
                          'v27',
                          0.17
                      ],
                      [
                          'v29',
                          0.16
                      ]
                  ]
              }]
          }
      });




      //weekly
      /////////////
           // Create the chart
      Highcharts.chart('container_weekly_fuel', {
          chart: {
              type: 'column'
          },
          title: {
              text: ''
          },
          subtitle: {
              text: ''
          },
          xAxis: {
              type: 'category'
          },
          yAxis: {
              title: {
                  text: 'Emission'
              }

          },
          legend: {
              enabled: false
          },
          plotOptions: {
              series: {
                  borderWidth: 0,
                  dataLabels: {
                      enabled: true,
                      format: '{point.y:.1f}'
                  }
              }
          },

          tooltip: {
              headerFormat: '<span style="font-size:11px"></span><br>',
              pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
          },
          series: [{
              name: '',
              colorByPoint: true,
              data: [{
                  name: 'Vehicle 1',
                  y: perweeklycostv1_fuel,
                  drilldown: 'Vehicle 1'
              }, {
                  name: 'Vehicle 2',
                  y: perweeklycostv2_fuel,
                  drilldown: 'Vehicle 2'
              }, {
                  name: 'Vehicle '+whosaves_fuel+' Saves',
                  y: muchsaves_weekly_fuel,
                  drilldown: 'Vehicle 2'
              }

              ]
          }],
          drilldown: {
              series: [{
                  name: 'Vehicle 1',
                  id: 'Vehicle 1',
                  data: [
                      [
                          'v11.0',
                          24.13
                      ],
                      [
                          'v8.0',
                          17.2
                      ],
                      [
                          'v9.0',
                          8.11
                      ],
                      [
                          'v10.0',
                          5.33
                      ],
                      [
                          'v6.0',
                          1.06
                      ],
                      [
                          'v7.0',
                          0.5
                      ]
                  ]
              }, {
                  name: 'Vehicle 2',
                  id: 'Vehicle 2',
                  data: [
                      [
                          'v12.x',
                          0.34
                      ],
                      [
                          'v28',
                          0.24
                      ],
                      [
                          'v27',
                          0.17
                      ],
                      [
                          'v29',
                          0.16
                      ]
                  ]
              }]
          }
      });




      //miles
      /////////////
           // Create the chart
      Highcharts.chart('container_miles_fuel', {
          chart: {
              type: 'column'
          },
          title: {
              text: ''
          },
          subtitle: {
              text: ''
          },
          xAxis: {
              type: 'category'
          },
          yAxis: {
              title: {
                  text: 'Dollars'
              }

          },
          legend: {
              enabled: false
          },
          plotOptions: {
              series: {
                  borderWidth: 0,
                  dataLabels: {
                      enabled: true,
                      format: '{point.y:.1f}'
                  }
              }
          },

          tooltip: {
              headerFormat: '<span style="font-size:11px"></span><br>',
              pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
          },
          series: [{
              name: '',
              colorByPoint: true,
              data: [{
                  name: 'Vehicle 1',
                  y: permilecostv1_fuel,
                  drilldown: 'Vehicle 1'
              }, {
                  name: 'Vehicle 2',
                  y: permilecostv2_fuel,
                  drilldown: 'Vehicle 2'
              }, {
                  name: 'Vehicle '+whosaves_fuel+' Saves',
                  y: muchsaves_mile_fuel,
                  drilldown: 'Vehicle 2'
              }

              ]
          }],
          drilldown: {
              series: [{
                  name: 'Vehicle 1',
                  id: 'Vehicle 1',
                  data: [
                      [
                          'v11.0',
                          24.13
                      ],
                      [
                          'v8.0',
                          17.2
                      ],
                      [
                          'v9.0',
                          8.11
                      ],
                      [
                          'v10.0',
                          5.33
                      ],
                      [
                          'v6.0',
                          1.06
                      ],
                      [
                          'v7.0',
                          0.5
                      ]
                  ]
              }, {
                  name: 'Vehicle 2',
                  id: 'Vehicle 2',
                  data: [
                      [
                          'v12.x',
                          0.34
                      ],
                      [
                          'v28',
                          0.24
                      ],
                      [
                          'v27',
                          0.17
                      ],
                      [
                          'v29',
                          0.16
                      ]
                  ]
              }]
          }
      });
      //************All for fuel ends

    }

      /////////////////////




      }
    };
    xhttp.open("GET", "getdatafields.php?yearsel="+yearsel+"&id="+selectedoption, true);
    xhttp.send();
  }
</script>



 <!-- Modal -->

 
 <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Select Vehicle</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <form class="form_popup" type="post" action="#">
        	 <select name="year_v2" id="year_v2">
              <option value="">Select Year</option>
               <?php foreach ($allyears as $key => $value) {
                 echo "<option value=".$value.">".$value."</option>";
                 } 
               ?>
            </select>
  
  <select name="make_v1" id="make_v1" onchange="loadmodels(this.value,'model_v2','year_v2');">
     <option value="">Select Make</option>
     <?php foreach ($allmakes as $key => $value) {
         echo "<option value=".$key.">".$value."</option>";
       } 
     ?>
   
  </select>
  
  <select name="model_v2" id="model_v2" onchange="loadoptions(this.value,'option_v2','year_v2');">
  <option value="">Select Model</option>
  </select>
  
  <select name="option_v2" id="option_v2">
  <option value="">Select Option</option>
  
  </select>

  <input class="submit_button" type="button" onclick="selecteddatavalues2('box2');" value="SELECT">
        </form>
        </div>
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div>
      
    </div>
        </div>