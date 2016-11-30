  <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                          <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-closed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                            <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                            <li class="sidebar-search-wrapper">
                                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                                <form class="sidebar-search  " action="{{ route('search.results') }}" method="GET">
                                    <a href="javascript:;" class="remove">
                                        <i class="icon-close"></i>
                                    </a>
                                    <div class="input-group">
                                       <input type="text" name="query" class="form-control" placeholder="Find people">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                            </li>
                            
                            
                            
                            
        <li class="nav-item start active open">                  <!-- OPEN and ACTIVE -->
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Home</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                <ul class="sub-menu">
                                    <li class="nav-item start active open">
                                        <a href="{{route('home')}}" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Home</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                   <!-- <li class="nav-item start ">
                                        <a href="dashboard_2.html" class="nav-link ">
                                            <i class="icon-bulb"></i>
                                            <span class="title">Dashboard 2</span>
                                            <span class="badge badge-success">1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item start ">
                                        <a href="dashboard_3.html" class="nav-link ">
                                            <i class="icon-graph"></i>
                                            <span class="title">Dashboard 3</span>
                                            <span class="badge badge-danger">5</span>
                                        </a>
                                    </li> -->
                </ul>
        </li>
                            
                            
                            
                            
                            
                               <li class="heading">
                                <h3 class="uppercase">Tools</h3><!-- Break in Navbar-->
                            </li>
            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-anchor"></i>
                                    <span class="title">Search SKUs</span>  <!-- DropDown Header-->
                                    <span class="arrow"></span>
                                </a>
                    <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{route('search.sku')}}" class="nav-link ">
                                            <span class="title">Search Competitor SKUs  (Pivot) </span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{route('search.sku')}}" class="nav-link ">
                                            <span class="title">Search Thermo SKUs</span>
                                        </a>
                                    </li>
                   
                               
              
                       
                       
                    </ul>
            </li>           
                                
                                
                                
                                
                                
                                
                                   
                          
        <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-puzzle"></i>
                                    <span class="title">GAP Analysis</span>
                                    <span class="arrow"></span>
                                </a>
                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="components_date_time_pickers.html" class="nav-link ">
                                            <span class="title">Date & Time Pickers</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_color_pickers.html" class="nav-link ">
                                            <span class="title">Color Pickers</span>
                                            <span class="badge badge-danger">2</span>
                                        </a>
                                    </li>
                                     <!-- <li class="nav-item  ">
                                        <a href="components_select2.html" class="nav-link ">
                                            <span class="title">Select2 Dropdowns</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_bootstrap_multiselect_dropdown.html" class="nav-link ">
                                            <span class="title">Bootstrap Multiselect Dropdowns</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_bootstrap_select.html" class="nav-link ">
                                            <span class="title">Bootstrap Select</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_multi_select.html" class="nav-link ">
                                            <span class="title">Bootstrap Multiple Select</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_bootstrap_select_splitter.html" class="nav-link ">
                                            <span class="title">Select Splitter</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_clipboard.html" class="nav-link ">
                                            <span class="title">Clipboard</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_typeahead.html" class="nav-link ">
                                            <span class="title">Typeahead Autocomplete</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_bootstrap_tagsinput.html" class="nav-link ">
                                            <span class="title">Bootstrap Tagsinput</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_bootstrap_switch.html" class="nav-link ">
                                            <span class="title">Bootstrap Switch</span>
                                            <span class="badge badge-success">6</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_bootstrap_maxlength.html" class="nav-link ">
                                            <span class="title">Bootstrap Maxlength</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_bootstrap_fileinput.html" class="nav-link ">
                                            <span class="title">Bootstrap File Input</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_bootstrap_touchspin.html" class="nav-link ">
                                            <span class="title">Bootstrap Touchspin</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_form_tools.html" class="nav-link ">
                                            <span class="title">Form Widgets & Tools</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_context_menu.html" class="nav-link ">
                                            <span class="title">Context Menu</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_editors.html" class="nav-link ">
                                            <span class="title">Markdown & WYSIWYG Editors</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_code_editors.html" class="nav-link ">
                                            <span class="title">Code Editors</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_ion_sliders.html" class="nav-link ">
                                            <span class="title">Ion Range Sliders</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_noui_sliders.html" class="nav-link ">
                                            <span class="title">NoUI Range Sliders</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="components_knob_dials.html" class="nav-link ">
                                            <span class="title">Knob Circle Dials</span>
                                        </a>
                                    </li> -->
                </ul>
        </li>     
                            
                            
                            
                            
                            <!-- 
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-settings"></i>
                                    <span class="title">Form Stuff</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="form_controls.html" class="nav-link ">
                                            <span class="title">Bootstrap Form
                                                <br>Controls</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="form_controls_md.html" class="nav-link ">
                                            <span class="title">Material Design
                                                <br>Form Controls</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="form_validation.html" class="nav-link ">
                                            <span class="title">Form Validation</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="form_validation_states_md.html" class="nav-link ">
                                            <span class="title">Material Design
                                                <br>Form Validation States</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="form_validation_md.html" class="nav-link ">
                                            <span class="title">Material Design
                                                <br>Form Validation</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="form_layouts.html" class="nav-link ">
                                            <span class="title">Form Layouts</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="form_repeater.html" class="nav-link ">
                                            <span class="title">Form Repeater</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="form_input_mask.html" class="nav-link ">
                                            <span class="title">Form Input Mask</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="form_editable.html" class="nav-link ">
                                            <span class="title">Form X-editable</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="form_wizard.html" class="nav-link ">
                                            <span class="title">Form Wizard</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="form_icheck.html" class="nav-link ">
                                            <span class="title">iCheck Controls</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="form_image_crop.html" class="nav-link ">
                                            <span class="title">Image Cropping</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="form_fileupload.html" class="nav-link ">
                                            <span class="title">Multiple File Upload</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="form_dropzone.html" class="nav-link ">
                                            <span class="title">Dropzone File Upload</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>   -->
                            
                            
                            
                            
                            
                           <!--   <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-bulb"></i>
                                    <span class="title">Elements</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="elements_steps.html" class="nav-link ">
                                            <span class="title">Steps</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="elements_lists.html" class="nav-link ">
                                            <span class="title">Lists</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="elements_ribbons.html" class="nav-link ">
                                            <span class="title">Ribbons</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="elements_overlay.html" class="nav-link ">
                                            <span class="title">Overlays</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="elements_cards.html" class="nav-link ">
                                            <span class="title">User Cards</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>      -->
                            
                            
                            
                            
                            
                           <!--  <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-briefcase"></i>
                                    <span class="title">Tables</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="table_static_basic.html" class="nav-link ">
                                            <span class="title">Basic Tables</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="table_static_responsive.html" class="nav-link ">
                                            <span class="title">Responsive Tables</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="table_bootstrap.html" class="nav-link ">
                                            <span class="title">Bootstrap Tables</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                            <span class="title">Datatables</span>
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="nav-item ">
                                                <a href="table_datatables_managed.html" class="nav-link "> Managed Datatables </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_buttons.html" class="nav-link "> Buttons Extension </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_colreorder.html" class="nav-link "> Colreorder Extension </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_rowreorder.html" class="nav-link "> Rowreorder Extension </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_scroller.html" class="nav-link "> Scroller Extension </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_fixedheader.html" class="nav-link "> FixedHeader Extension </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_responsive.html" class="nav-link "> Responsive Extension </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_editable.html" class="nav-link "> Editable Datatables </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="table_datatables_ajax.html" class="nav-link "> Ajax Datatables </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>  -->
                            
                            
                            
                            
                            
                            <!--    <li class="nav-item  ">
                                <a href="?p=" class="nav-link nav-toggle">
                                    <i class="icon-wallet"></i>
                                    <span class="title">Portlets</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="portlet_boxed.html" class="nav-link ">
                                            <span class="title">Boxed Portlets</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="portlet_light.html" class="nav-link ">
                                            <span class="title">Light Portlets</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="portlet_solid.html" class="nav-link ">
                                            <span class="title">Solid Portlets</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="portlet_ajax.html" class="nav-link ">
                                            <span class="title">Ajax Portlets</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="portlet_draggable.html" class="nav-link ">
                                            <span class="title">Draggable Portlets</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>    -->
                            
                            
                            
                            
                            
                            
                             <!--  <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">Charts</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="charts_amcharts.html" class="nav-link ">
                                            <span class="title">amChart</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="charts_flotcharts.html" class="nav-link ">
                                            <span class="title">Flot Charts</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="charts_flowchart.html" class="nav-link ">
                                            <span class="title">Flow Charts</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="charts_google.html" class="nav-link ">
                                            <span class="title">Google Charts</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="charts_echarts.html" class="nav-link ">
                                            <span class="title">eCharts</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="charts_morris.html" class="nav-link ">
                                            <span class="title">Morris Charts</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                            <span class="title">HighCharts</span>
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="nav-item ">
                                                <a href="charts_highcharts.html" class="nav-link "> HighCharts </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="charts_highstock.html" class="nav-link "> HighStock </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a href="charts_highmaps.html" class="nav-link "> HighMaps </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>-->
                            
                            
                            
                            
                            
                             <!--   <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-pointer"></i>
                                    <span class="title">Maps</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="maps_google.html" class="nav-link ">
                                            <span class="title">Google Maps</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="maps_vector.html" class="nav-link ">
                                            <span class="title">Vector Maps</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>-->
                            
                            
                            
                            
                            
                            <li class="heading">
                                <h3 class="uppercase">Layouts</h3>
                            </li>
                            
                            
                            
                            
                            
                            
                            <!-- <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-layers"></i>
                                    <span class="title">Page Layouts</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="layout_blank_page.html" class="nav-link ">
                                            <span class="title">Blank Page</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_ajax_page.html" class="nav-link ">
                                            <span class="title">Ajax Content Layout</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_offcanvas_mobile_menu.html" class="nav-link ">
                                            <span class="title">Off-canvas Mobile Menu</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_classic_page_head.html" class="nav-link ">
                                            <span class="title">Classic Page Head</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_light_page_head.html" class="nav-link ">
                                            <span class="title">Light Page Head</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_content_grey.html" class="nav-link ">
                                            <span class="title">Grey Bg Content</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_search_on_header_1.html" class="nav-link ">
                                            <span class="title">Search Box On Header 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_search_on_header_2.html" class="nav-link ">
                                            <span class="title">Search Box On Header 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_language_bar.html" class="nav-link ">
                                            <span class="title">Header Language Bar</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_footer_fixed.html" class="nav-link ">
                                            <span class="title">Fixed Footer</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="layout_boxed_page.html" class="nav-link ">
                                            <span class="title">Boxed Page</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> -->
               
              
               
                      
          
                 
                 
                     
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
        
             <!-- END SIDEBAR -->
                <!-- END SIDEBAR -->
                <!-- END SIDEBAR -->
                <!-- END SIDEBAR -->
        
        
        
        
                    <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
             
                        <!-- BEGIN PAGE HEADER-->

