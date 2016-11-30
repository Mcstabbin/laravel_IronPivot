@extends('templates.default') 
@section('content')
          <div class="row">      <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="col-md-12">      <!-- BEGIN SAMPLE FORM PORTLET-->
                            
                                <!-- BEGIN SAMPLE FORM PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-green-haze">
                                            <i class="icon-settings font-green-haze"></i>
                                            <span class="caption-subject bold uppercase"> Search Competitor SKUs</span>
                                        </div>
                                        <div class="actions">
                                         
                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <h4> Enter SKUs </h4>


                                        <form class="form-inline margin-bottom-40" role="form" form action="{{ route('search.sku') }}" method="post">

                                            @if($originalSku)

                                            <div class="form-group form-md-line-input has-success">
                                                <input type="text" class="form-control" name="SKU" id="SKU" placeholder="{{ $originalSku }}"
                                                value = "{{ $originalSku }}">
                                                <div class="form-control-focus"> </div>
                                            </div>

                                            @else
                                            Not Set
                                            <div class="form-group form-md-line-input has-success">
                                                <input type="text" class="form-control" name="SKU" id="SKU" placeholder="Enter SKU" >
                                                <div class="form-control-focus"> </div>
                                            </div>
                                            @endif


                                        
                                                <div class="md-checkbox md-checkbox-inline has-success">
                                                <input type="checkbox" id="ThermoFisher"  name = "ThermoFisher" class="md-check">
                                                <label for="ThermoFisher"> 
                                                <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> ThermoFisher Sku ? </label>
                                            </div>
                                            <button type="submit" class="btn btn-info"> Submit </button>
                                              <input type="hidden" name="_token" value="{{ Session::token() }}">
                                        </form>
                           

                          
                                        
                          
                                    </div>
                                </div><!-- end SAMPLE FORM PORTLET-->
                             
@include('pivot.partials.wigdetReport')
<!-- BEGIN TABLE PORTLET-->
<div class="portlet light bordered">
    <div class="portlet-title">
      <div class="caption font-dark">
          <i class="icon-settings font-dark"></i>
          <span class="caption-subject bold uppercase">Searched Competitor SKU's</span>
      </div>
      <div class="actions">
        <div class="btn-group btn-group-devided" data-toggle="buttons">
          <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
          <input type="radio" name="options" class="toggle" id="option1">Actions</label>
          <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
          <input type="radio" name="options" class="toggle" id="option2">Settings</label>
        </div>
      </div>
    </div>
<div class="portlet-body">
<table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
  <thead>
    <tr class="">
        <th><b>Competitor Cat</b></th>
        <th><b>Competitor Product</b></th>
        <th><b>Degree of Match</b></th>
        <th><b>Thermo Product</b></th>
        <th><b>Additional Matches</b></th>
        <th><b>WorkFlow</b></th>
    </tr>
  </thead>
<tbody>
                     
@if ($results)
   @foreach($results as $row)
       <tr>  
                                      <td>
                                          <span style='font-size: small; color:#1995bf'><a href="
                                          {{ $row->Url }}">
                                          {{ $row->Catalog }}</a></span>
                                      </td>  
                                      <td>
                                          <span style='font-size: x-small'>
                                          {{ $row->Competitor_Name }}
                                          </span>
                                          <span style='font-size: small'>
                                          <br>
                                          [<b>
                                          {{ $row->Competitor_Company }}
                                          ]</b>
                                          <br>
                                          {{ $row->TF_Size }}
                                          </span>
                                      </td>  
                                      <td>
                                          <span style='font-size: x- small;font-style: italic'>
                                          {{ $row ->Match_Type }}
                                          <br>
                                          <b>  {{ $row->TF_OPTION }} </b>
                                          </span>
                                      </td>
                                      <td>
                                          <span style='font-size: x-small'>
                                          {{ $row->TF_Name }}
                                          </span>
                                          <br>
                                          <span style='color:#1995bf;font-size: small'>
                                          {{  $row->Lifetech_ID }}
                                          </span>
                                      </td>  
                                      <td>
                                          <input type="button" name="view" value="view" id="
                                          {{ $row->Catalog }}"
                                          class="btn btn-info btn-xs view_am_data" />
                                      </td>  
                                      <td>
                                          <input type="button" name="view" value="view" id="{{ $row->Lifetech_ID}}" class="btn btn-info btn-xs view_wf_data" />
                                      </td>  
        </tr>  





   @endforeach
@endif
                                    </tbody>
   </table>
                               <!-- END EXAMPLE TABLE PORTLET-->
                
          </div> <!-- end protlet body-->
         </div> <!-- end Table -->
        </div><!-- End SAMPLE FORM PORTLET-->
  </div> <!-- End Portlet -->

 @include('pivot.partials.PivotModal')

 @include('pivot.partials.IMModal')



@stop