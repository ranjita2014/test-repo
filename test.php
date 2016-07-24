<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>	
<form name="form" ng-app>
<div class="control-group" ng-class="{true: 'error'}[submitted && form.email.$invalid]">
        <label class="control-label" for="email">Your email address</label>
        <div class="controls">
            <input type="email" name="email" ng-model="email" required />
            <span class="help-inline" ng-show="submitted && form.email.$error.required">Required</span>
            <span class="help-inline" ng-show="submitted && form.email.$error.email">Invalid email</span>
        </div>
    </div>
   
   <button type="submit" class="btn btn-primary btn-large" ng-click="submitted=true">Submit</button>
</form>