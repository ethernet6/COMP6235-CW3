<?php @session_start();
@$_SESSION['year'] = "";
@$_SESSION['make'] = "";
@$_SESSION['fuelname'] = "";
?>  
<div class="row">
  <div class="container">
      <div class="col-lg-12">
          <strong><p class="text-center">Find Good Cars</p></strong>
        </div>  
</div>  

<script type="text/javascript">
  function fuelselection(fuelname)
    {
        if(document.getElementById(fuelname).checked==true)
        {
          var action = "add";  //if checked add value to session
        }
        else
        {
          var action = "remove";
        }

        $.ajax({
        url:"goodcarsfilter3.php",
        type:"GET",
        data:{
          fuelname:fuelname,
          type:"fuel",
          action:action,
        },
        success:function(response) {
         document.getElementById("goodcarsstock").innerHTML =response;
       },
       error:function(){
        alert("error");
       }
      });
    }
</script>



<script type="text/javascript">
  function yearselection(yearval)
    {
        if(document.getElementById("year#"+yearval).checked==true)
        {
          var action = "add";  //if checked add value to session
        }
        else
        {
          var action = "remove";
        }
        $.ajax({
        url:"goodcarsfilter3.php",
        type:"GET",
        data:{
          year:yearval,
          type:"year",
          action:action,
        },
        success:function(response) {
         document.getElementById("goodcarsstock").innerHTML =response;
       },
       error:function(){
        alert("error");
       }
      });
    }
</script>


<script type="text/javascript">
  function makeselection(makeid)
    {
        if(document.getElementById("make#"+makeid).checked==true)
        {
          var action = "add";  //if checked add value to session
        }
        else
        {
          var action = "remove";
        }

        $.ajax({
        url:"goodcarsfilter3.php",
        type:"GET",
        data:{
          make:makeid,
          type:"make",
          action:action,
        },
        success:function(response) {
         document.getElementById("goodcarsstock").innerHTML =response;
       },
       error:function(){
        alert("error");
       }
      });
    }
  
</script>


    <div class="container">
       <div class="row">
           <div class="col-md-4" id="refineleft">
                <h4>Refine</h4>
                <p class="sidebar_sub_heading">Year</p>
                <ul class="sidebar_list">
                  <li>
                    <input type="checkbox" id="year#2013" value="2013" onclick="yearselection(this.value);"> 2013
                  </li>
                  <li>
                    <input type="checkbox" id="year#2014" value="2014" onclick="yearselection(this.value);"> 2014
                  </li>
                  <li>
                    <input type="checkbox" id="year#2015" value="2015" onclick="yearselection(this.value);"> 2015
                  </li>
                  <li>
                    <input type="checkbox" id="year#2016" value="2016" onclick="yearselection(this.value);"> 2016
                  </li>
                  <li>
                    <input type="checkbox" id="year#2017" value="2017" onclick="yearselection(this.value);"> 2017
                  </li>
                </ul>



                <p class="sidebar_sub_heading">Brands</p>
                <ul class="sidebar_list">
                  <?php foreach ($allmakes as $key => $value) {?>
                    <li>
                      <input value="<?php echo $key;?>" type="checkbox" id="make#<?php echo $key;?>" onclick="makeselection(this.value);"> <?php echo $value;?>
                    </li>
                  <?php } ?>
                </ul>



                <p class="sidebar_sub_heading">Fuel</p>
                <ul class="sidebar_list">
                    <li>
                      <input type="checkbox" id="Electric" value="Electric" onclick="fuelselection(this.value);"> Electric
                    </li>

                    <li>
                      <input type="checkbox" id="Gasoline" value="Gasoline" onclick="fuelselection(this.value);"> Gasoline
                    </li>
                </ul>



           </div>
           <div class="col-md-8">
                <h4>Real Calculation</h4>
        <div class="container">
          <div class="col-md-12 search_form_container">
           <select id="fuel_sorting" style="width:190px;" onchange="sort(this.value);">
                <option value="Default">Default</option>
                <option value="Emission_low_to_high">Emission low to high</option>
                <option value="Emission_high_to_low">Emission high to low</option>
                <option value="GHGR_high_to_low">Green high to low</option>
                <option value="GHGR_low_to_high">Green low to high</option>
              </select>
          </div>
        </div>
        <div class="container" id="goodcarsstock">

        <?php include('goodcars_starttabs.php');?>
          <!--BLOCK3 ENDS-->
        </div>  
           </div>
       </div>
    </div>
</div>
<!--main content ends-->

<script>
function sort(valuesort) {
 $.ajax({
        url:"goodcarsfilter3.php",
        type:"GET",
        data:{
      sortbyvalue:valuesort,
          type:"sort",
        },
        success:function(response) {
         document.getElementById("goodcarsstock").innerHTML =response;
       },
       error:function(){
        alert("error");
       }
      });
    }
</script>

