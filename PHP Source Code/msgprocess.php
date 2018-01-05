<script type="text/javascript">
  function msgprocess(vehicleselected) {
  	var mgp_1 = "";
  	var mgp_2 = "";
  	if(vehicleselected=="mgp_v1")
  	{
  		mgp_1 = $("#mgp_v1").val();
  		if($("#mgp_v2").val()!="")
  		{
  		   mgp_2 = $("#mgp_v2").val();
  		}
  	}
  	else
  	{
  		mgp_2 = $("#mgp_v2").val();
  		if($("#mgp_v1").val()!="")
  		{
  		   mgp_1 = $("#mgp_v1").val();
  		}
  	}
    
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
      	  $("#fullaccord").show();
          var obj = JSON.parse(this.response);
           $('#yearcalfor').html(obj.keepforyears);
           $("#veh1_10").html(obj.v1_per10year);
           $("#veh1_yearly").html(obj.v1_yearly);
           $("#veh1_monthly").html(obj.v1_permonth);
           $("#veh1_weekly").html(obj.v1_perweek);
           $("#veh1_mile").html(obj.v1_permile);

           $("#veh2_10").html(obj.v2_per10year);
           $("#veh2_yearly").html(obj.v2_yearly);
           $("#veh2_monthly").html(obj.v2_permonth);
           $("#veh2_weekly").html(obj.v2_perweek);
           $("#veh2_mile").html(obj.v2_permile);
           
           $("#graphyears").html('10'); 
           //alert($("#veh1_10").ht1ml());
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
               else
               {
                  var muchsaves_10 = peryearcostv1 - peryearcostv2;  
                  $("#whosaves").html("B");
                  var whosaves = "B";
                  $("#saving_10").html(muchsaves_10);
               }


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
                  $("#whosaves").html("B");
                  var whosaves = "B";
                  $("#saving_yearly").html(muchsaves_yearly);
               }


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
                  $("#whosaves").html("B");
                  $("#saving_monthly").html(muchsaves_monthly);
               }


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
                  $("#whosaves").html("B");
                  $("#saving_weekly").html(muchsaves_weekly);
               }

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
                  $("#whosaves").html("B");
                  $("#saving_mile").html(muchsaves_mile);
               }
           }  









           //for vehicle 2
           if($("#veh2_10").html()!="")
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
               else
               {
                  var muchsaves_10 = peryearcostv1 - peryearcostv2;  
                  $("#whosaves").html("B");
                  var whosaves = "B";
                  $("#saving_10").html(muchsaves_10);
               }


           }


           if($("#veh2_yearly").html()!="")
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
                  $("#whosaves").html("B");
                  var whosaves = "B";
                  $("#saving_yearly").html(muchsaves_yearly);
               }


           }



           if($("#veh2_monthly").html()!="")
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
                  $("#whosaves").html("B");
                  $("#saving_monthly").html(muchsaves_monthly);
               }


           }


           if($("#veh2_weekly").html()!="")
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
                  $("#whosaves").html("B");
                  $("#saving_weekly").html(muchsaves_weekly);
               }

           }

           if($("#veh2_mile").html()!="")
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
                  $("#whosaves").html("B");
                  $("#saving_mile").html(muchsaves_mile);
               }
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



            }




      /////////////////////
           //after recalculate graph ends


      }
    };
       
    xhttp.open("GET", "getdatafields_mgp.php?mgp_1="+mgp_1+"&mgp_2="+mgp_2, true);
    xhttp.send();
  }
</script>