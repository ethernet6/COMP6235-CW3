<script type="text/javascript">
  function recalculate() {
    var idrive = $("#idrive").val();
    var incity = $("#incity").val();
    var keepforyears = $("#keepforyears").val();
    var fpricepremium = $("#fpricepremium").val();
    if($("#mgp_v1").val()!="") //if mgp is selected
    {
      var yearsel_v1 = "";
      var selectedoption_v1 = $("#mgp_v2").val();;
      var yearsel_v2 = "";
      var selectedoption_v2 = $("#mgp_v1").val();
      var msgsel = "1";
    }
    else
    {
      var yearsel_v1 = $('#year_v1').val();
      var selectedoption_v1 = $('#option_v1').val();
      var yearsel_v2 = $('#year_v2').val();
      var selectedoption_v2 = $('#option_v2').val();
      var msgsel = "0";
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          var obj = JSON.parse(this.response);
           $('#yearcalfor').html(keepforyears);
           $("#veh1_10").html(obj.v1_per10year);
           $("#veh1_yearly").html(obj.v1_yearly);
           $("#veh1_monthly").html(obj.v1_permonth);
           $("#veh1_weekly").html(obj.v1_perweek);
           $("#veh1_mile").html(obj.v1_permile);

           //for the vehicle 1 fuel
           $('#yearcalfor_fuel').html(keepforyears);
           $("#veh1_10_fuel").html(obj.v1_per10year_fuel);
           $("#veh1_yearly_fuel").html(obj.v1_yearly_fuel);
           $("#veh1_monthly_fuel").html(obj.v1_permonth_fuel);
           $("#veh1_weekly_fuel").html(obj.v1_perweek_fuel);
           $("#veh1_mile_fuel").html(obj.v1_permile_fuel);
            //for the vehicle 1 fuel ends


           $("#veh2_10").html(obj.v2_per10year);
           $("#veh2_yearly").html(obj.v2_yearly);
           $("#veh2_monthly").html(obj.v2_permonth);
           $("#veh2_weekly").html(obj.v2_perweek);
           $("#veh2_mile").html(obj.v2_permile);
           
           //for the vehicle 2 fuel
           $("#veh2_10_fuel").html(obj.v2_per10year_fuel);
           $("#veh2_yearly_fuel").html(obj.v2_yearly_fuel);
           $("#veh2_monthly_fuel").html(obj.v2_permonth_fuel);
           $("#veh2_weekly_fuel").html(obj.v2_perweek_fuel);
           $("#veh2_mile_fuel").html(obj.v2_permile_fuel);
           //for the vehicle 2 fuel ends

           
           $("#graphyears").html(keepforyears);
           $("#graphyears_fuel").html(keepforyears); 
           //alert($("#veh1_10").html());
           //for the calculation of save
           if($("#veh1_10").html()!="")
            {
               $("#savings").show();
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
                  $("#whosaves").html("A");
                  var whosaves = "A";
                  $("#saving_10").html(muchsaves_10);
               }
               else if(peryearcostv1 > peryearcostv2)
               {
                  
                  if(peryearcostv1!="" && peryearcostv2!="NaN")
                  {                
                     var muchsaves_10 = peryearcostv1 - peryearcostv2;  
                     $("#whosaves").html("B");
                     var whosaves = "B";
                     $("#saving_10").html(muchsaves_10);
                  }
               }
               else
               {
                  $("#savings").hide();
               }

               //for fuel changes
               $("#savings_fuel").show();
               var year10_fuel = $("#veh2_10_fuel").html();
               var peryearcostv2_fuel = parseInt(year10_fuel);

               var year10_fuel = $("#veh1_10_fuel").html();
               var peryearcostv1_fuel = parseInt(year10_fuel);
               //alert(peryearcostv1);

               if(peryearcostv1_fuel < peryearcostv2_fuel)
               {

                  var muchsaves_10_fuel = peryearcostv2_fuel - peryearcostv1_fuel;  
                  $("#whosaves_fuel").html("A");
                  var whosaves_fuel = "A";
                  $("#saving_10_fuel").html(muchsaves_10_fuel);
               }
               else if(peryearcostv1_fuel > peryearcostv2_fuel)
               {
                  
                  if(peryearcostv1_fuel!="" && peryearcostv2_fuel!="NaN")
                  {                
                     var muchsaves_10_fuel = peryearcostv1_fuel - peryearcostv2_fuel;  
                     $("#whosaves_fuel").html("B");
                     var whosaves_fuel = "B";
                     $("#saving_10_fuel").html(muchsaves_10_fuel);
                  }
               }
               else
               {
                  $("#savings_fuel").hide();
               }
               //for fuel changes ends


           }


           if($("#veh1_yearly").html()!="")
           {
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
                  var whosaves = "A";
                  $("#saving_yearly").html(muchsaves_yearly);
               }
               else
               {
                  var muchsaves_yearly = peryearlycostv1 - peryearlycostv2;  
                  // $("#whosaves").html("B");
                  // var whosaves = "B";
                  $("#saving_yearly").html(muchsaves_yearly);
               }


               //for fuel changes
               var yearyearly_fuel = $("#veh2_yearly_fuel").html();
               var peryearlycostv2_fuel = parseInt(yearyearly_fuel);

               var yearyearly_fuel = $("#veh1_yearly_fuel").html();
               var peryearlycostv1_fuel = parseInt(yearyearly_fuel);

               if(peryearlycostv1_fuel < peryearlycostv2_fuel)
               {

                  var muchsaves_yearly_fuel = peryearlycostv2_fuel - peryearlycostv1_fuel;
                  $("#whosaves_fuel").html("A");
                  var whosaves_fuel = "A";
                  $("#saving_yearly_fuel").html(muchsaves_yearly_fuel);
               }
               else
               {
                  var muchsaves_yearly_fuel = peryearlycostv1_fuel - peryearlycostv2_fuel;  
                  // $("#whosaves").html("B");
                  // var whosaves = "B";
                  $("#saving_yearly_fuel").html(muchsaves_yearly_fuel);
               }
               //for fuel changes ends


           }



           if($("#veh1_monthly").html()!="")
           {
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
                  //$("#whosaves").html("B");
                  $("#saving_monthly").html(muchsaves_monthly);
               }

               //for fuel changes
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
                  //$("#whosaves").html("B");
                  $("#saving_monthly_fuel").html(muchsaves_monthly_fuel);
               }
               //for fuel changes ends


           }


           if($("#veh1_weekly").html()!="")
           {
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
                  //$("#whosaves").html("B");
                  $("#saving_weekly").html(muchsaves_weekly);
               }


               //for the changes fuel ends
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
                  //$("#whosaves").html("B");
                  $("#saving_weekly_fuel").html(muchsaves_weekly_fuel);
               }
               //for the fuel changes ends

           }



           if($("#veh1_mile").html()!="")
           {
               var yearmile = $("#veh2_mile").html();
               var result=yearmile.split('$');
               var permilecostv2 = parseInt(result[1]);

               var yearmile = $("#veh1_mile").html();
               var result=yearmile.split('$');
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
                  //$("#whosaves").html("B");
                  $("#saving_mile").html(muchsaves_mile);
               }


               //fuel usage starts
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
	                  //$("#whosaves").html("B");
	                  $("#saving_mile_fuel").html(muchsaves_mile_fuel);
	               }
               //fuel usage ends
           }  
           //for calculation of save 




           ////after recaculate graphs
            if($("#veh2_mile").html()!="")
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




      		///****************for fuel changes graph*****************
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
      		//*****************For fuel changes graph ends



            }




      /////////////////////
           //after recalculate graph ends


      }
    };
       
    xhttp.open("GET", "getdatafields_recalculate.php?yearsel_v1="+yearsel_v1+"&yearsel_v2="+yearsel_v2+"&id_v1="+selectedoption_v1+"&id_v2="+selectedoption_v2+"&idrive="+idrive+"&incity="+incity+"&keepforyears="+keepforyears+"&fpricepremium="+fpricepremium+"&msgsel="+msgsel, true);
    xhttp.send();
  }
</script>