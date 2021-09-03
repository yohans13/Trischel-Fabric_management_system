<template>
<div>

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">

                   <!-- Responsive tables start -->
                <div class="row" id="table-responsive">
                    <div class="col-12">
                        <div class="card">
                             
                            <div class="card-body">
                                
                                <div class="alert alert-info">
                                    <div class="alert-body">
                                        <h4 class="text-warning">Manage All Sustainability Charts</h4>
                                        <p>
                                          <code class="highlighter-rouge">Energy Sources </code>Electricity (kw) | steam (ton) | Diesel (l) | HFO (l) | Thermic heater (kcal) | <code class="highlighter-rouge">Water </code>Raw Water Intake (<span>&#13221;</span>) | Effluent water discharge (<span>&#13221;</span>), 
                                          <code class="highlighter-rouge">waste </code>Fabric (kg) | Contaminated fabric (kg).

                                        </p><br>
 
                                                <h4 class="text-warning">{{form.year}} Sustainability Chart</h4>
                                

                                    
                                   </div>
                                </div>

                                
                                 <!-- <label for="last-name-column">Select Year</label>
                             
                                  <select  class="custom-select" id="select1" v-model="form.years" >
                                      <option :value="department.id" v-for="department in departments" :key="department.id"> {{department.dname}} </option>

                                    </select> -->


                                 

                            </div>

                                
                            <div class="table-responsive">

                                <div class="btn-group ml-1 mb-1">
                                           
                                             <div class="col-md-6">
                                            <!-- Basic trigger modal -->
                                            <div class="basic-modal">
                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#select2InModal">
                                                    Year
                                                </button>

                                                 
                                                <!-- Modal -->
                                                <div class="modal fade text-left" id="select2InModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel1">Change Year</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>PLease select year.</p>

                                                                <label for="select2Demo">Select Year</label>
                                                                <select class="select2InModal form-control form-control-lg" id="select2Demo">
                                                                    <option value="AK">2010</option>
                                                                    <option value="AK">2011</option>
                                                                    <option value="AK">2012</option>
                                                                    <option value="AK">2013</option>
                                                                    <option value="AK">2014</option>
                                                                    <option value="AK">2015</option>
                                                                    <option value="AK">2016</option>
                                                                    <option value="AK">2017</option>
                                                                    <option value="AK">2018</option>
                                                                    <option value="AK">2019</option>
                                                                    <option value="AK">2020</option>
                                                                    <option value="AK">2021</option>
                                                                    <option value="AK">2022</option>
                                                                    <option value="AK">2023</option>
                                                                    <option value="AK">2024</option>
                                                                    <option value="AK">2025</option>
                                                                    <option value="AK">2026</option>
                                                                    <option value="AK">2027</option>
                                                                    <option value="AK">2028</option>
                                                                    <option value="AK">2029</option>
                                                                    <option value="AK">2030</option>
                                                                    <option value="AK">2031</option>
                                                                    <option value="AK">2032</option>
                                                                    <option value="AK">2033</option>
                                                                    <option value="AK">2034</option>
                                                                    <option value="AK">2035</option>
                                                                    <option value="AK">2036</option>
                                                                    <option value="AK">2037</option>
                                                                    <option value="AK">2038</option>
                                                                    <option value="AK">2039</option>
                                                                    <option value="AK">2040</option>
                                                                    <option value="AK">2041</option>
                                                                    <option value="AK">2042</option>
                                                                    <option value="AK">2043</option>
                                                                    <option value="AK">2044</option>
                                                                    <option value="AK">2045</option>
                                                                    <option value="AK">2046</option>
                                                                    <option value="AK">2047</option>
                                                                    <option value="AK">2048</option>
                                                                    <option value="AK">2049</option>
                                                                    <option value="AK">2050</option>
                                                                    <option value="AK">2051</option>
                                                                    <option value="AK">2052</option>
                                                                    <option value="AK">2053</option>
                                                                    <option value="AK">2054</option>
                                                                    <option value="AK">2055</option>
                                                                    <option value="AK">2056</option>
                                                                    <option value="AK">2057</option>
                                                                    <option value="AK">2058</option>
                                                                    <option value="AK">2059</option>
                                                                    <option value="AK">2060</option>
                                                                </select>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <!-- Basic trigger modal end -->
                                        </div>

                                        </div>
                                        
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                           
                                            <th scope="col" class="text-nowrap">Energy Sources</th>
                                            <th scope="col" class="text-nowrap">Jan 21</th>
                                            <th scope="col" class="text-nowrap">Feb 21</th>
                                            <th scope="col" class="text-nowrap">Mar 21</th>
                                            <th scope="col" class="text-nowrap">Apr 21</th>
                                            <th scope="col" class="text-nowrap">May 21</th>
                                            <th scope="col" class="text-nowrap">June 21</th>
                                            <th scope="col" class="text-nowrap">july 21</th>
                                            <th scope="col" class="text-nowrap">Aug 21</th>
                                            <th scope="col" class="text-nowrap">Sep 21</th>
                                            <th scope="col" class="text-nowrap">Oct 21</th>
                                            <th scope="col" class="text-nowrap">Nov 21</th>
                                            <th scope="col" class="text-nowrap">Dec 21</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          
                                            <td class="text-nowrap">Electricity (kw)</td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ejan" checked /><br>
                                            <!-- <button type="button" class="btn btn-outline-primary" id="ajax-request">Ajax</button> -->
                                            <label class="custom-control-label" for="ejan">00</label>
                                            </div>

                                            
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="efeb" checked /><br>
                                            <label class="custom-control-label" for="efeb">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="emar" checked /><br>
                                            <label class="custom-control-label" for="emar">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="eapr" checked /><br>
                                            <label class="custom-control-label" for="eapr">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="emay" checked /><br>
                                            <label class="custom-control-label" for="emay">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ejune" checked /><br>
                                            <label class="custom-control-label" for="ejune">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ejuly" checked /><br>
                                            <label class="custom-control-label" for="ejuly">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="eaug" checked /><br>
                                            <label class="custom-control-label" for="eaug">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="esep" checked /><br>
                                            <label class="custom-control-label" for="esep">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="eoct" checked /><br>
                                            <label class="custom-control-label" for="eoct">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="enov"  /><br>
                                            <label class="custom-control-label" for="enov">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="edec" checked /><br>
                                            <label class="custom-control-label" for="edec">00</label>
                                            </div>
                                            </td>
                                             
                                        </tr>


                                          <tr>
                                          
                                            <td class="text-nowrap">steam (ton)</td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="sjan" checked /><br>
                                            <label class="custom-control-label" for="sjan">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="sfeb" checked /><br>
                                            <label class="custom-control-label" for="sfeb">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="smar" checked /><br>
                                            <label class="custom-control-label" for="smar">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="sapr" checked /><br>
                                            <label class="custom-control-label" for="sapr">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="smay" checked /><br>
                                            <label class="custom-control-label" for="smay">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="sjune" checked /><br>
                                            <label class="custom-control-label" for="sjune">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="sjuly" checked /><br>
                                            <label class="custom-control-label" for="sjuly">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="saug" checked /><br>
                                            <label class="custom-control-label" for="saug">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ssep" checked /><br>
                                            <label class="custom-control-label" for="ssep">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="soct" checked /><br>
                                            <label class="custom-control-label" for="soct">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="snov"  /><br>
                                            <label class="custom-control-label" for="snov">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="sdec" checked /><br>
                                            <label class="custom-control-label" for="sdec">00</label>
                                            </div>
                                            </td>
                                             
                                        </tr>


                                          <tr>
                                          
                                            <td class="text-nowrap">Diesel (l)</td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="djan" checked /><br>
                                            <label class="custom-control-label" for="djan">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="dfeb" checked /><br>
                                            <label class="custom-control-label" for="dfeb">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="dmar" checked /><br>
                                            <label class="custom-control-label" for="dmar">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="dapr" checked /><br>
                                            <label class="custom-control-label" for="dapr">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="dmay" checked /><br>
                                            <label class="custom-control-label" for="dmay">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="djune" checked /><br>
                                            <label class="custom-control-label" for="djune">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="djuly" checked /><br>
                                            <label class="custom-control-label" for="djuly">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="daug" checked /><br>
                                            <label class="custom-control-label" for="daug">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="dsep" checked /><br>
                                            <label class="custom-control-label" for="dsep">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="doct" checked /><br>
                                            <label class="custom-control-label" for="doct">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="dnov"  /><br>
                                            <label class="custom-control-label" for="dnov">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ddec" checked /><br>
                                            <label class="custom-control-label" for="ddec">00</label>
                                            </div>
                                            </td>
                                             
                                        </tr>


                                          <tr>
                                          
                                            <td class="text-nowrap">HFO (l)</td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="hjan" checked /><br>
                                            <label class="custom-control-label" for="hjan">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="hfeb" checked /><br>
                                            <label class="custom-control-label" for="hfeb">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="hmar" checked /><br>
                                            <label class="custom-control-label" for="hmar">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="hapr" checked /><br>
                                            <label class="custom-control-label" for="hapr">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="hmay" checked /><br>
                                            <label class="custom-control-label" for="hmay">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="hjune" checked /><br>
                                            <label class="custom-control-label" for="hjune">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="hjuly" checked /><br>
                                            <label class="custom-control-label" for="hjuly">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="haug" checked /><br>
                                            <label class="custom-control-label" for="haug">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="hsep" checked /><br>
                                            <label class="custom-control-label" for="hsep">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="hoct" checked /><br>
                                            <label class="custom-control-label" for="hoct">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="hnov"  /><br>
                                            <label class="custom-control-label" for="hnov">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="hdec" checked /><br>
                                            <label class="custom-control-label" for="hdec">00</label>
                                            </div>
                                            </td>
                                             
                                        </tr>




                                        <tr>
                                          
                                            <td class="text-nowrap">Thermic heater (kcal)</td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="tjan" checked /><br>
                                            <label class="custom-control-label" for="tjan">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="tfeb" checked /><br>
                                            <label class="custom-control-label" for="tfeb">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="tmar" checked /><br>
                                            <label class="custom-control-label" for="tmar">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="tapr" checked /><br>
                                            <label class="custom-control-label" for="tapr">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="tmay" checked /><br>
                                            <label class="custom-control-label" for="tmay">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="tjune" checked /><br>
                                            <label class="custom-control-label" for="tjune">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="tjuly" checked /><br>
                                            <label class="custom-control-label" for="tjuly">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="taug" checked /><br>
                                            <label class="custom-control-label" for="taug">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="tsep" checked /><br>
                                            <label class="custom-control-label" for="tsep">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="toct" checked /><br>
                                            <label class="custom-control-label" for="toct">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="tnov"  /><br>
                                            <label class="custom-control-label" for="tnov">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-info custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="tdec" checked /><br>
                                            <label class="custom-control-label" for="tdec">00</label>
                                            </div>
                                            </td>
                                             
                                        </tr>





                                

                                    </tbody>

                                      <thead>
                                        <tr>
                                           
                                            <th scope="col" class="text-nowrap">Water</th>
                                            <th scope="col" class="text-nowrap">Jan 21</th>
                                            <th scope="col" class="text-nowrap">Feb 21</th>
                                            <th scope="col" class="text-nowrap">Mar 21</th>
                                            <th scope="col" class="text-nowrap">Apr 21</th>
                                            <th scope="col" class="text-nowrap">May 21</th>
                                            <th scope="col" class="text-nowrap">June 21</th>
                                            <th scope="col" class="text-nowrap">july 21</th>
                                            <th scope="col" class="text-nowrap">Aug 21</th>
                                            <th scope="col" class="text-nowrap">Sep 21</th>
                                            <th scope="col" class="text-nowrap">Oct 21</th>
                                            <th scope="col" class="text-nowrap">Nov 21</th>
                                            <th scope="col" class="text-nowrap">Dec 21</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          
                                            <td class="text-nowrap">Raw Water Intake (<span>&#13221;</span>) </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rjan" checked /><br>
                                            <label class="custom-control-label" for="rjan">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rfeb" checked /><br>
                                            <label class="custom-control-label" for="rfeb">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rmar" checked /><br>
                                            <label class="custom-control-label" for="rmar">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rapr" checked /><br>
                                            <label class="custom-control-label" for="rapr">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rmay" checked /><br>
                                            <label class="custom-control-label" for="rmay">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rjune" checked /><br>
                                            <label class="custom-control-label" for="rjune">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rjuly" checked /><br>
                                            <label class="custom-control-label" for="rjuly">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="raug" checked /><br>
                                            <label class="custom-control-label" for="raug">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rsep" checked /><br>
                                            <label class="custom-control-label" for="rsep">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="roct" checked /><br>
                                            <label class="custom-control-label" for="roct">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rnov"  /><br>
                                            <label class="custom-control-label" for="rnov">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rdec" checked /><br>
                                            <label class="custom-control-label" for="rdec">00</label>
                                            </div>
                                            </td>
                                             
                                        </tr>


                                         <tr>
                                          
                                            <td class="text-nowrap">Effluent water discharge (<span>&#13221;</span>)</td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rjanq" checked /><br>
                                            <label class="custom-control-label" for="rjanq">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rfebq" checked /><br>
                                            <label class="custom-control-label" for="rfebq">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rmarq" checked /><br>
                                            <label class="custom-control-label" for="rmarq">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="raprq" checked /><br>
                                            <label class="custom-control-label" for="raprq">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rmayq" checked /><br>
                                            <label class="custom-control-label" for="rmayq">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rjuneq" checked /><br>
                                            <label class="custom-control-label" for="rjuneq">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rjulyq" checked /><br>
                                            <label class="custom-control-label" for="rjulyq">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="raugq" checked /><br>
                                            <label class="custom-control-label" for="raugq">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rsepq" checked /><br>
                                            <label class="custom-control-label" for="rsepq">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="roctq" checked /><br>
                                            <label class="custom-control-label" for="roctq">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rnovq"  /><br>
                                            <label class="custom-control-label" for="rnovq">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-primary custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rdecq" checked /><br>
                                            <label class="custom-control-label" for="rdecq">00</label>
                                            </div>
                                            </td>
                                             
                                        </tr>
                                

                                    </tbody>

                                        <thead>
                                        <tr>
                                           
                                            <th scope="col" class="text-nowrap">Waste</th>
                                            <th scope="col" class="text-nowrap">Jan 21</th>
                                            <th scope="col" class="text-nowrap">Feb 21</th>
                                            <th scope="col" class="text-nowrap">Mar 21</th>
                                            <th scope="col" class="text-nowrap">Apr 21</th>
                                            <th scope="col" class="text-nowrap">May 21</th>
                                            <th scope="col" class="text-nowrap">June 21</th>
                                            <th scope="col" class="text-nowrap">july 21</th>
                                            <th scope="col" class="text-nowrap">Aug 21</th>
                                            <th scope="col" class="text-nowrap">Sep 21</th>
                                            <th scope="col" class="text-nowrap">Oct 21</th>
                                            <th scope="col" class="text-nowrap">Nov 21</th>
                                            <th scope="col" class="text-nowrap">Dec 21</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        <tr>
                                          
                                            <td class="text-nowrap">Fabric (kg)</td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="fjan" checked /><br>
                                            <label class="custom-control-label" for="fjan">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ffeb" checked /><br>
                                            <label class="custom-control-label" for="ffeb">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="fmar" checked /><br>
                                            <label class="custom-control-label" for="fmar">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="fapr" checked /><br>
                                            <label class="custom-control-label" for="fapr">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="fmay" checked /><br>
                                            <label class="custom-control-label" for="fmay">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="fjune" checked /><br>
                                            <label class="custom-control-label" for="fjune">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="fjuly" checked /><br>
                                            <label class="custom-control-label" for="fjuly">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="faug" checked /><br>
                                            <label class="custom-control-label" for="faug">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="fsep" checked /><br>
                                            <label class="custom-control-label" for="fsep">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="foct" checked /><br>
                                            <label class="custom-control-label" for="foct">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="fnov"  /><br>
                                            <label class="custom-control-label" for="fnov">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="fdec" checked /><br>
                                            <label class="custom-control-label" for="fdec">00</label>
                                            </div>
                                            </td>
                                             
                                        </tr>



                                         <tr>
                                          
                                            <td class="text-nowrap">Contaminated fabric (kg)</td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cjan" checked /><br>
                                            <label class="custom-control-label" for="cjan">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cfeb" checked /><br>
                                            <label class="custom-control-label" for="cfeb">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cmar" checked /><br>
                                            <label class="custom-control-label" for="cmar">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="capr" checked /><br>
                                            <label class="custom-control-label" for="capr">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cmay" checked /><br>
                                            <label class="custom-control-label" for="cmay">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cjune" checked /><br>
                                            <label class="custom-control-label" for="cjune">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cjuly" checked /><br>
                                            <label class="custom-control-label" for="cjuly">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="caug" checked /><br>
                                            <label class="custom-control-label" for="caug">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="csep" checked /><br>
                                            <label class="custom-control-label" for="csep">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="coct" checked /><br>
                                            <label class="custom-control-label" for="coct">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cnov"  /><br>
                                            <label class="custom-control-label" for="cnov">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-danger custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cdec" checked /><br>
                                            <label class="custom-control-label" for="cdec">00</label>
                                            </div>
                                            </td>
                                             
                                        </tr>


                                

                                    </tbody>

                                        <thead>
                                        <tr>
                                           
                                            <th scope="col" class="text-nowrap">Production</th>
                                            <th scope="col" class="text-nowrap">Jan 21</th>
                                            <th scope="col" class="text-nowrap">Feb 21</th>
                                            <th scope="col" class="text-nowrap">Mar 21</th>
                                            <th scope="col" class="text-nowrap">Apr 21</th>
                                            <th scope="col" class="text-nowrap">May 21</th>
                                            <th scope="col" class="text-nowrap">June 21</th>
                                            <th scope="col" class="text-nowrap">july 21</th>
                                            <th scope="col" class="text-nowrap">Aug 21</th>
                                            <th scope="col" class="text-nowrap">Sep 21</th>
                                            <th scope="col" class="text-nowrap">Oct 21</th>
                                            <th scope="col" class="text-nowrap">Nov 21</th>
                                            <th scope="col" class="text-nowrap">Dec 21</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        <tr>
                                          
                                            <td class="text-nowrap">Inspected production (kg)</td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ijan" checked /><br>
                                            <label class="custom-control-label" for="ijan">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ifeb" checked /><br>
                                            <label class="custom-control-label" for="ifeb">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="imar" checked /><br>
                                            <label class="custom-control-label" for="imar">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="iapr" checked /><br>
                                            <label class="custom-control-label" for="iapr">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="imay" checked /><br>
                                            <label class="custom-control-label" for="imay">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ijune" checked /><br>
                                            <label class="custom-control-label" for="ijune">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ijuly" checked /><br>
                                            <label class="custom-control-label" for="ijuly">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="iaug" checked /><br>
                                            <label class="custom-control-label" for="iaug">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="isep" checked /><br>
                                            <label class="custom-control-label" for="isep">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ioct" checked /><br>
                                            <label class="custom-control-label" for="ioct">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="inov"  /><br>
                                            <label class="custom-control-label" for="inov">00</label>
                                            </div>
                                            </td>
                                            <td class="text-nowrap">
                                            <div class="custom-control custom-control-success custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="idec" checked /><br>
                                            <label class="custom-control-label" for="idec">00</label>
                                            </div>
                                            </td>
                                             
                                        </tr>
                                

                                    </tbody>

                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Responsive tables end -->
    </div>
    </div>
    </div>

    
  </div>
</template>



<script>

   export default{
                created(){
                  if(!User.loggedIn()){
                   this.$router.push({name: '/'})
                  }
                },
                data(){
                  return{

                       form:{
                   
                    battery: 'vbackend/app-assets/images/sus/battery-48.png',
                    bin: 'vbackend/app-assets/images/sus/bin-48.png',
                    water: 'vbackend/app-assets/images/sus/water.png',
                    product: 'vbackend/app-assets/images/sus/pipeline-48.png', 
                    year:'2021',
                      
                         },


                    users:[],
                    years:[],
                    searchTerm:'',
                    
                  }
                },
                computed:{
                  filtersearch(){
                    return this.users.filter(user=>{
                      return user.name.match(this.searchTerm)
                    })
                  }
                },
                methods:{
                  allusers(){
                    axios.get('/api/user')
                    .then(({data})=>(this.users=data))

                    .catch()
                  }
                ,


                  years(){
                    
                    axios.get('/api/years')
                    .then(({data})=>(this.years=data))
                    .catch()
                  },
                   
                
                deleteUser(id){
                    Swal.fire({
                      title: 'Are you sure?',
                      text: "You won't be able to revert this!",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        
                          axios.delete('/api/userDelete/'+id)
                            .then(() =>{
                                this.users = this.users.filter(user =>{
                                  return user.id != id
                                })
                            })
                            .catch(()=>{
                              this.$route.push({name:'show-user'})
                            })
                          Swal.fire(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                        )
                      }
                    })  

                },

                isActive(id){
                    Swal.fire({
                      title: 'Are you sure?',
                      text: "Deactive this employee!",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, Deactive it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        
                          axios.patch('/api/isActiveUser/'+id)
                            .then(() =>{
                                window.location.reload();
                                // location.reload();
                              
                            })
                            .catch(()=>{
                              this.$route.push({name:'show-user'})
                            })
                          Swal.fire(
                          'Deactivated!',
                          'This Account has been Deactivated.',
                          'success'
                        )
                      }
                    })  

                },



                 isDeactive(id){
                    Swal.fire({
                      title: 'Are you sure?',
                      text: "Deactive this employee!",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, Re-active it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        
                          axios.patch('/api/isDeactiveUser/'+id)
                            .then(() =>{
                                 
                                window.location.reload();

                            })
                            .catch(()=>{
                              this.$route.push({name:'show-user'})
                            })
                          Swal.fire(
                          'Deactivated!',
                          'This Account has been Activated.',
                          'success'
                        )
                      }
                    })  

                },


              },

                created(){
                  this.allusers();
                  this.years();
                }

                  
              
   }
</script>