  <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Fuel Usage 
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      <div class="col-lg-6 cal-graph">
        <table>
        <tr>
        <th></th>
        <th style="color:red;">Vehicle A</th>
        <th style="color:green;">Vehicle B</th>
        <th style="display: none;" id="savings_fuel">Veh. <span id="whosaves_fuel">A</span> Saves</th>
        </tr>
        <tr>
        <td><strong id="yearcalfor_fuel">10</strong><strong> Years</strong></td>
        <td id="veh1_10_fuel"></td>
        <td id="veh2_10_fuel"></td>
        <td><strong id="saving_10_dollar_fuel" style="display: none;">$</strong><strong id="saving_10_fuel"></strong></td>
        </tr>
        <tr>
        <td><strong>Yearly</strong></td>
        <td id="veh1_yearly_fuel"></td>
        <td id="veh2_yearly_fuel"></td>
        <td><strong id="saving_yearly_dollar_fuel" style="display: none;">$</strong><strong id="saving_yearly_fuel"></strong></td>
        </tr>
        <tr>
        <td><strong>Monthly</strong></td>
        <td id="veh1_monthly_fuel"></td>
        <td id="veh2_monthly_fuel"></td>
        <td><strong id="saving_monthly_dollar_fuel" style="display: none;">$</strong><strong id="saving_monthly_fuel"></strong></td>
        </tr>
        <tr>
        <td><strong>Weekly</strong></td>
        <td id="veh1_weekly_fuel"></td>
        <td id="veh2_weekly_fuel"></td>
        <td><strong id="saving_weekly_dollar_fuel" style="display: none;">$</strong><strong id="saving_weekly_fuel"></strong></td>
        </tr>
        <tr>
        <td><strong>Per Mile</strong></td>
        <td id="veh1_mile_fuel"></td>
        <td id="veh2_mile_fuel"></td>
        <td><strong id="saving_mile_dollar_fuel" style="display: none;">$</strong><strong id="saving_mile_fuel"></strong></td>
        </tr>
        </table>
        </div>
		<div class="col-lg-6 cal-graph">
	  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>





<ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#10years_fuel"><strong id="graphyears_fuel">10</strong> Years</a></li>
    <li><a data-toggle="pill" href="#yearly_fuel">Yearly</a></li>
    <li><a data-toggle="pill" href="#monthly_fuel">Monthly</a></li>
    <li><a data-toggle="pill" href="#weekly_fuel">Weekly</a></li>
    <li><a data-toggle="pill" href="#mile_fuel">Mile</a></li>
  </ul>
  

  <div class="tab-content">
    <div id="10years_fuel" class="tab-pane fade in active">
      <div id="container_fuel" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
    <div id="yearly_fuel" class="tab-pane fade">
      <div id="container_yearly_fuel" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
    <div id="monthly_fuel" class="tab-pane fade">
      <div id="container_monthly_fuel" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
    <div id="weekly_fuel" class="tab-pane fade">
      <div id="container_weekly_fuel" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
    <div id="mile_fuel" class="tab-pane fade">
      <div id="container_miles_fuel" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
  </div>



 

	  </div>
      </div>
    </div>
  </div> 