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
                                                <input type="text" class="form-control" name="SKU" id="SKU" placeholder="Enter SKU" value "{{ $originalSku }}">
                                                <div class="form-control-focus"> </div>
                                            </div>
                                            @else
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
                                            <button type="submit" class="btn btn-success"> Submit </button>
                                              <input type="hidden" name="_token" value="{{ Session::token() }}">
                                        </form>
                           

                          
                                        
                          
                                    </div>
                                </div>
                            </div>      <!-- endSAMPLE FORM PORTLET-->
                            <!-- END SAMPLE FORM PORTLET-->
                        </div>       <!-- end SAMPLE FORM PORTLET-->

















@stop