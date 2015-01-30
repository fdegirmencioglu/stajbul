
@extends('master')

@section('content')
  <div ng-controller="appController as appCtrl">	    
    <input ng-model="hello" type="text" />
      <div>@{{ hello }}</div>
  </div>
@stop


