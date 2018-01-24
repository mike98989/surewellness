<div class="box-wrapper">
    <div class="box-content">
            <div class="col-lg-6">
              <div class="panel panel-default">
              <div class="panel-heading">
              <h3 class="panel-title" style="text-align:center">
              <i class="fa fa-th"></i>&nbsp; SEARCH HOMES BY STATE <br/>
              </h3>
              </div>
        <div class="panel-body">
            <form method="get" action="<?php $_SERVER['PHP_SELF'];?>">
               <fieldset><legend><h5 style="text-align:center">Select State</h5></legend>
                <select ng-model="state" ng-init="state = '0'" class="form-control pull-right" id="state_id" ng-change="selectState(this)">
                <option value="0">---SELECT STATE---</option>
                <!---- ANGULAR SCRIPT FOR LOOPING STATES--->
                <option value="{{state.state}}-{{state.id}}" ng-repeat="state in states">{{state.state}}</option>
                </select>
                <input type="hidden" id="state" name="statesearch">
              </fieldset>
              <fieldset style="margin-top:10px"><legend><h5 style="text-align:center">Select City</h5></legend>

                <select class="form-control pull-right" name="citysearch">
              <option value="0">---SELECT CITY---</option>
                <!---- ANGULAR SCRIPT FOR LOOPING CITIES--->
              <option value="{{city.city}}" ng-repeat="city in cities">{{city.city}}</option>
              </select>

             </fieldset>

                <input type="submit" class="btn btn-success btn-sm pull-right" style="margin-top:6px" value="SEARCH">
              </form>

        </div>
      </div>
    </div>


    <div class="col-lg-6">
      <div class="panel panel-default">
      <div class="panel-heading">
      <h3 class="panel-title" style="text-align:center">
      <i class="fa fa-th"></i>&nbsp; SEARCH HOMES <br/>
      </h3>
      </div>
      <div class="panel-body">
        <form method="get" action="<?php $_SERVER['PHP_SELF'];?>">
       <h5 style="text-align:center">Enter Keyword</h3>
      <input type="text" name="searchkeyword" class="form-control pull-right" required="required" placeholder="Enter City Name">

      <input type="submit" class="btn btn-success btn-sm pull-right" style="margin-top:6px" value="SEARCH">
    </form>
</div>
</div>
</div>

  <div style="clear:both"></div>

</div>
</div>
