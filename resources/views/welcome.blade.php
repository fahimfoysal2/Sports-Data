@extends('layouts.app')       
            
        @section('content')
            
                <div id="banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">
                                <h1 style="font-size:80px;" class="text-white">EASY BETS</h1>
                                <p class="text-white font-weight-bold text-uppercase">
                                    WITH THE LOWEST COMMISSIONS
                                </p>
                                <a href="#" class="btn btn-outline-light px-5 py-2 font-weight-bold text-uppercase">join us</a>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- end of banner --}}
         
            {{-- navs and tabs --}}
            <div class="section" >
                <div class="">
                    <div class="row">
                        <div class="col-md-12">
                            {{-- Nav Tabs --}}
                            <nav>
                                <div class="nav nav-tabs sports-tab justify-content-between" id="nav-tab" role="tablist">
                                    <a href="#allsports" aria-controls="allsports" aria-selected="true" id="allsportstab" role="tab" data-toggle="tab" class="nav-item nav-link active">ALL SPORTS</a>
                                    <a href="#football" aria-controls="football" aria-selected="false" id="footballtab" role="tab" data-toggle="tab" class="nav-item nav-link">FOOTBALL</a>
                                    <a href="#tennis" aria-controls="tennis" aria-selected="false" id="tennistab" role="tab" data-toggle="tab" class="nav-item nav-link">TENNIS</a>
                                    <a href="#basketball" aria-controls="basketball" aria-selected="false" id="basketballtab" role="tab" data-toggle="tab" class="nav-item nav-link">BASKETBALL</a>
                                    <a href="#icehockey" aria-controls="icehockey" aria-selected="false" id="icehockeytab" role="tab" data-toggle="tab" class="nav-item nav-link">ICE HOCKEY</a>
                                    <a href="#volleyball" aria-controls="volleyball" aria-selected="false" id="volleyballtab" role="tab" data-toggle="tab" class="nav-item nav-link">VOLLEY BALL</a>
                                    <a href="#badminton" aria-controls="badminton" aria-selected="false" id="badmintontab" role="tab" data-toggle="tab" class="nav-item nav-link">BADMINTON</a>
                                    <a href="#baseball" aria-controls="baseball" aria-selected="false" id="baseballtab" role="tab" data-toggle="tab" class="nav-item nav-link">BASEBALL</a>
                                    <a href="#tabletennis" aria-controls="tabletennis" aria-selected="false" id="tabletennistab" role="tab" data-toggle="tab" class="nav-item nav-link">TABLE TENNIS</a>
                                    <a href="#cycling" aria-controls="cycling" aria-selected="false" id="cyclingtab" role="tab" data-toggle="tab" class="nav-item nav-link">CYCLING</a>
                                    
                                  </div>
                            </nav>
                            {{-- Nav Tabs Contents --}}
                            <div style="padding-top:50px;" class="tab-content" id="nav-tabContent">

                              {{-- All Sports --}}
                                <div class="tab-pane fade show active" id="allsports" role="tabpanel" aria-labelledby="allsportstab">
                                   <div class="sports-info">
                                     <div class="">
                                       <div class="row">
                                         <div class="col-md-12">
                                          <p class="sports-text"> All Sports (29)</p>
                                         </div>
                                       </div>
                                     </div>
                                   </div>
                                   <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-8">
                                            <h5 class="heading-component-title">FOOTBALL (3) </h5>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="row">
                                              <div class="col-md-4"><a class="btn btn-sm btn-outline-danger active" href="#">Live</a></div>
                                             <div class="col-md-4">
                                                <a class="btn btn-sm btn-outline-danger" href="#">Upcoming</a>
                                             </div>
                                            <div class="col-md-4">
                                                <a class="btn btn-sm btn-outline-danger" href="#">Today’s events</a>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>National Championship</p>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="sport-row align-items-center">                           
                                                    <div class="container">
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <div class="sport-table-title">
                                                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Real Madrid</span><span class="sport-table-title-team">Chelsea</span></div>
                                                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>4</span></span>
                                                             <span class="sport-table-title-score"><span>2</span></span>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Real Madrid" data-confrontation="Real Madrid vs Chelsea" data-wager-count="1.23" data-score="4:2"><span>Real Madrid</span><span class="sport-table-wager-button-count">1.23</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Real Madrid vs. Chelsea" data-wager-count="13.00" data-score="4:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Chelsea" data-confrontation="Real Madrid vs Chelsea" data-wager-count="34.25" data-score="4:2"><span>Chelsea</span><span class="sport-table-wager-button-count">34.25</span></a>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                          <div class="sport-table-bonus">
                                                            <span class="sport-table-bonus-count">+58</span>
                                                            <span class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>  
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="sport-row align-items-center">                           
                                                    <div class="container">
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <div class="sport-table-title">
                                                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Real Madrid</span><span class="sport-table-title-team">Chelsea</span></div>
                                                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>4</span></span>
                                                             <span class="sport-table-title-score"><span>2</span></span>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Real Madrid" data-confrontation="Real Madrid vs Chelsea" data-wager-count="1.23" data-score="4:2"><span>Real Madrid</span><span class="sport-table-wager-button-count">1.23</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Real Madrid vs. Chelsea" data-wager-count="13.00" data-score="4:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Chelsea" data-confrontation="Real Madrid vs Chelsea" data-wager-count="34.25" data-score="4:2"><span>Chelsea</span><span class="sport-table-wager-button-count">34.25</span></a>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                          <div class="sport-table-bonus">
                                                            <span class="sport-table-bonus-count">+58</span>
                                                            <span class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>  
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="sport-row align-items-center">                           
                                                    <div class="container">
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <div class="sport-table-title">
                                                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Real Madrid</span><span class="sport-table-title-team">Chelsea</span></div>
                                                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>4</span></span>
                                                             <span class="sport-table-title-score"><span>2</span></span>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Real Madrid" data-confrontation="Real Madrid vs Chelsea" data-wager-count="1.23" data-score="4:2"><span>Real Madrid</span><span class="sport-table-wager-button-count">1.23</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Real Madrid vs. Chelsea" data-wager-count="13.00" data-score="4:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Chelsea" data-confrontation="Real Madrid vs Chelsea" data-wager-count="34.25" data-score="4:2"><span>Chelsea</span><span class="sport-table-wager-button-count">34.25</span></a>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                          <div class="sport-table-bonus">
                                                            <span class="sport-table-bonus-count">+58</span>
                                                            <span class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>  
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                   </div>
                                   <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h5 class="heading-component-title">TENNIS</h5>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>
                                                us international
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center">
                                                 
                                                  <div class=" col-md-4 ">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Harry Stewart</span><span class="sport-table-title-team">Donald Crawford</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>7</span><span>0</span><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>6</span><span>1</span><span>0</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Harry Stewart" data-confrontation="Harry Stewart vs Donald Crawford" data-wager-count="13.5" data-score="7:6"><span>Harry Stewart</span><span class="sport-table-wager-button-count">13.5</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Donald Crawford" data-confrontation="Harry Stewart vs Donald Crawford" data-wager-count="1.005" data-score="7:6"><span>Donald Crawford</span><span class="sport-table-wager-button-count">1.005</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h5 class="heading-component-title">BASKETBALL</h5>
                                            <p style="padding-left:20px;">Last MTG: 06/18/21</p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>nba finals</p>
                                              <p>2-minute HCap | Analyzer | Evaluator</p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="sport-table">
                                          <div class="sport-table-tr">
                                            <div class="row sport-row align-items-center row-15">
                                             
                                              <div class="col-md-4">
                                                <div class="sport-table-title">
                                                  <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">BK</span><span class="sport-table-title-team">MIL</span></div>
                                                  <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>114</span></span>
                                                   <span class="sport-table-title-score"><span>108</span></span>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-7">
                                                <div class="sport-table-wager sport-table-wager-double">
                                                  <a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="New York Knicks" data-confrontation="New York Knicks vs Houston Rockets" data-wager-count="2.05" data-score="53:66"><span>Brooklyn</span><span class="sport-table-wager-button-count">2.05</span></a>
                                                  <a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Houston Rockets" data-confrontation="New York Knicks vs Houston Rockets" data-wager-count="1.005" data-score="53:66"><span>Milwaukee</span><span class="sport-table-wager-button-count">1.005</span></a>
                                                </div>
                                              </div>
                                              <div class="col-md-1">
                                                <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h5 class="heading-component-title">ICE HOCKEY</h5>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>national hockey league</p>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Anaheim Ducks</span><span class="sport-table-title-team">New York Rangers</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>4</span></span>
                                                        <span class="sport-table-title-score"><span>2</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Anaheim Ducks" data-confrontation="Anaheim Ducks vs New York Rangers" data-wager-count="1.23" data-score="4:2"><span>Anaheim Ducks</span><span class="sport-table-wager-button-count">1.23</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Anaheim Ducks vs. New York Rangers" data-wager-count="13.00" data-score="4:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="New York Rangers" data-confrontation="Anaheim Ducks vs New York Rangers" data-wager-count="34.25" data-score="4:2"><span>New York Rangers</span><span class="sport-table-wager-button-count">34.25</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+58</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Chicago Black Hawks</span><span class="sport-table-title-team">Washington Capitals</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>1</span></span>
                                                       <span class="sport-table-title-score"><span>0</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Chicago Black Hawks" data-confrontation="Chicago Black Hawks vs Washington Capitals" data-wager-count="1.58" data-score="1:0"><span>Chicago Black Hawks</span><span class="sport-table-wager-button-count">1.58</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Chicago Black Hawks vs. Washington Capitals" data-wager-count="13.00" data-score="1:0"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Washington Capitals" data-confrontation="Chicago Black Hawks vs Washington Capitals" data-wager-count="17.88" data-score="1:0"><span>Washington Capitals</span><span class="sport-table-wager-button-count">17.88</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+46</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Florida Panthers</span><span class="sport-table-title-team">Detroit Red wings</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>1</span></span>
                                                        <span class="sport-table-title-score"><span>2</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Florida Panthers" data-confrontation="Florida Panthers vs Detroit Red wings" data-wager-count="2.41" data-score="1:2"><span>Florida Panthers</span><span class="sport-table-wager-button-count">2.41</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Florida Panthers vs. Detroit Red wings" data-wager-count="13.00" data-score="1:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Detroit Red wings" data-confrontation="Florida Panthers vs Detroit Red wings" data-wager-count="23.28" data-score="1:2"><span>Detroit Red wings</span><span class="sport-table-wager-button-count">23.28</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+51</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h5 class="heading-component-title">
                                              VOLLEYBALL
                                            </h5>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>world championship</p>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Estonia</span><span class="sport-table-title-team">Slovakia</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>18</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>14</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Estonia" data-confrontation="Estonia vs Slovakia" data-wager-count="1.12" data-score="18:14"><span>Estonia</span><span class="sport-table-wager-button-count">1.12</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Slovakia" data-confrontation="Estonia vs Slovakia" data-wager-count="5.45" data-score="18:14"><span>Slovakia</span><span class="sport-table-wager-button-count">5.45</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Poland</span><span class="sport-table-title-team">Germany</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>27</span><span>8</span></span>
                                                        <span class="sport-table-title-score"><span>25</span><span>9</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Poland" data-confrontation="Poland vs Germany" data-wager-count="2.10" data-score="27:25"><span>Poland</span><span class="sport-table-wager-button-count">2.10</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Germany" data-confrontation="Poland vs Germany" data-wager-count="1.68" data-score="27:25"><span>Germany</span><span class="sport-table-wager-button-count">1.68</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+46</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">France</span><span class="sport-table-title-team">Spain</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>16</span></span>
                                                        <span class="sport-table-title-score"><span>15</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="France" data-confrontation="France vs Spain" data-wager-count="1.25" data-score="16:15"><span>France</span><span class="sport-table-wager-button-count">1.25</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Spain" data-confrontation="France vs Spain" data-wager-count="3.75" data-score="16:15"><span>Spain</span><span class="sport-table-wager-button-count">3.75</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+51</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h5 class="heading-component-title">BADMINTON</h5>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>championship</p>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Tammy Edwards</span><span class="sport-table-title-team">Sandra Richardson</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>14</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Tammy Edwards" data-confrontation="Tammy Edwards vs Sandra Richardson" data-wager-count="13.5" data-score="0:14"><span>Tammy Edwards</span><span class="sport-table-wager-button-count">13.5</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Sandra Richardson" data-confrontation="Tammy Edwards vs Sandra Richardson" data-wager-count="1.0005" data-score="0:14"><span>Sandra Richardson</span><span class="sport-table-wager-button-count">1.0005</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Jeffrey Carter</span><span class="sport-table-title-team">Rose Martinez</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Jeffrey Carter" data-confrontation="Jeffrey Carter vs Rose Martinez" data-wager-count="2.10" data-score="0:0"><span>Jeffrey Carter</span><span class="sport-table-wager-button-count">2.10</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Rose Martinez" data-confrontation="Jeffrey Carter vs Rose Martinez" data-wager-count="1.68" data-score="0:0"><span>Rose Martinez</span><span class="sport-table-wager-button-count">1.68</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+46</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Angela Morgan</span><span class="sport-table-title-team">Nancy Walker</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>15</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Angela Morgan" data-confrontation="Angela Morgan vs Nancy Walker" data-wager-count="1.25" data-score="0:15"><span>Angela Morgan</span><span class="sport-table-wager-button-count">1.25</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Nancy Walker" data-confrontation="Angela Morgan vs Nancy Walker" data-wager-count="3.75" data-score="0:15"><span>Nancy Walker</span><span class="sport-table-wager-button-count">3.75</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+51</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Evelyn Baker</span><span class="sport-table-title-team">Laura Lopez</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>2</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Evelyn Baker" data-confrontation="Evelyn Baker vs Laura Lopez" data-wager-count="1.25" data-score="0:2"><span>Evelyn Baker</span><span class="sport-table-wager-button-count">1.25</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Laura Lopez" data-confrontation="Evelyn Baker vs Laura Lopez" data-wager-count="3.75" data-score="0:2"><span>Laura Lopez</span><span class="sport-table-wager-button-count">3.75</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+32</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h5 class="heading-component-title">BASEBALL</h5>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>mlb</p>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Buffalo Bisons</span><span class="sport-table-title-team">Lehigh Valley Ironpigs</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Buffalo Bisons" data-confrontation="Buffalo Bisons vs Lehigh Valley Ironpigs" data-wager-count="13.5" data-score="0:0"><span>Buffalo Bisons</span><span class="sport-table-wager-button-count">13.5</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Lehigh Valley Ironpigs" data-confrontation="Buffalo Bisons vs Lehigh Valley Ironpigs" data-wager-count="1.0005" data-score="0:0"><span>Lehigh Valley Ironpigs</span><span class="sport-table-wager-button-count">1.0005</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Syracuse Chiefs</span><span class="sport-table-title-team">Toledo Mud Hens</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Syracuse Chiefs" data-confrontation="Syracuse Chiefs vs Toledo Mud Hens" data-wager-count="2.10" data-score="0:0"><span>Syracuse Chiefs</span><span class="sport-table-wager-button-count">2.10</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Toledo Mud Hens" data-confrontation="Syracuse Chiefs vs Toledo Mud Hens" data-wager-count="1.68" data-score="0:0"><span>Toledo Mud Hens</span><span class="sport-table-wager-button-count">1.68</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+46</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h5 class="heading-component-title">
                                              TABLE TENNIS
                                            </h5>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>world championship</p>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Francis Hart</span><span class="sport-table-title-team">John Ramsey</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>3</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>2</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Francis Hart" data-confrontation="Francis Hart vs John Ramsey" data-wager-count="3.5" data-score="3:2"><span>Francis Hart</span><span class="sport-table-wager-button-count">3.5</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="John Ramsey" data-confrontation="Francis Hart vs John Ramsey" data-wager-count="2.65" data-score="3:2"><span>John Ramsey</span><span class="sport-table-wager-button-count">2.65</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+16</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Martha Garcia</span><span class="sport-table-title-team">Lisa Peterson</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Martha Garcia" data-confrontation="Martha Garcia vs Lisa Peterson" data-wager-count="2.60" data-score="0:0"><span>Martha Garcia</span><span class="sport-table-wager-button-count">2.60</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Lisa Peterson" data-confrontation="Martha Garcia vs Lisa Peterson" data-wager-count="1.14" data-score="0:0"><span>Lisa Peterson</span><span class="sport-table-wager-button-count">1.14</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+32</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="heading-component-title">
                                              <h5>CYCLING</h5>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>uci road world championship</p>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Janet Alexander</span><span class="sport-table-title-team">Charles Martin</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>1</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Janet Alexander" data-confrontation="Janet Alexander vs Charles Martin" data-wager-count="1.98" data-score="0:1"><span>Janet Alexander</span><span class="sport-table-wager-button-count">1.98</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Charles Martin" data-confrontation="Janet Alexander vs Charles Martin" data-wager-count="3.54" data-score="0:1"><span>Charles Martin</span><span class="sport-table-wager-button-count">3.54</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-2 col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+15</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Terry Gonzales</span><span class="sport-table-title-team">Julie Wilson</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>1</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Terry Gonzales" data-confrontation="Terry Gonzales vs Julie Wilson" data-wager-count="4.05" data-score="1:0"><span>Terry Gonzales</span><span class="sport-table-wager-button-count">4.05</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Julie Wilson" data-confrontation="Terry Gonzales vs Julie Wilson" data-wager-count="1.14" data-score="1:0"><span>Julie Wilson</span><span class="sport-table-wager-button-count">1.14</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+65</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                              {{-- End of All Sports --}}
                           
                              {{-- Football --}}
                                <div class="tab-pane fade" id="football" role="tabpanel" aria-labelledby="footballtab">
                                  <div class="sports-info">
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-md-12">
                                         <p class="sports-text">ALL SPORTS (29)</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-8">
                                            <h5 class="heading-component-title">FOOTBALL (3) </h5>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="row">
                                              <div class="col-md-4"><a class="btn btn-sm btn-outline-danger active" href="#">Live</a></div>
                                             <div class="col-md-4">
                                                <a class="btn btn-sm btn-outline-danger" href="#">Upcoming</a>
                                             </div>
                                            <div class="col-md-4">
                                                <a class="btn btn-sm btn-outline-danger" href="#">Today’s events</a>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>National Championship</p>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="sport-row align-items-center">                           
                                                    <div class="container">
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <div class="sport-table-title">
                                                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Real Madrid</span><span class="sport-table-title-team">Chelsea</span></div>
                                                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>4</span></span>
                                                             <span class="sport-table-title-score"><span>2</span></span>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Real Madrid" data-confrontation="Real Madrid vs Chelsea" data-wager-count="1.23" data-score="4:2"><span>Real Madrid</span><span class="sport-table-wager-button-count">1.23</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Real Madrid vs. Chelsea" data-wager-count="13.00" data-score="4:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Chelsea" data-confrontation="Real Madrid vs Chelsea" data-wager-count="34.25" data-score="4:2"><span>Chelsea</span><span class="sport-table-wager-button-count">34.25</span></a>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                          <div class="sport-table-bonus">
                                                            <span class="sport-table-bonus-count">+58</span>
                                                            <span class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>  
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="sport-row align-items-center">                           
                                                    <div class="container">
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <div class="sport-table-title">
                                                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Real Madrid</span><span class="sport-table-title-team">Chelsea</span></div>
                                                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>4</span></span>
                                                             <span class="sport-table-title-score"><span>2</span></span>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Real Madrid" data-confrontation="Real Madrid vs Chelsea" data-wager-count="1.23" data-score="4:2"><span>Real Madrid</span><span class="sport-table-wager-button-count">1.23</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Real Madrid vs. Chelsea" data-wager-count="13.00" data-score="4:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Chelsea" data-confrontation="Real Madrid vs Chelsea" data-wager-count="34.25" data-score="4:2"><span>Chelsea</span><span class="sport-table-wager-button-count">34.25</span></a>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                          <div class="sport-table-bonus">
                                                            <span class="sport-table-bonus-count">+58</span>
                                                            <span class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>  
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="sport-row align-items-center">                           
                                                    <div class="container">
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <div class="sport-table-title">
                                                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Real Madrid</span><span class="sport-table-title-team">Chelsea</span></div>
                                                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>4</span></span>
                                                             <span class="sport-table-title-score"><span>2</span></span>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Real Madrid" data-confrontation="Real Madrid vs Chelsea" data-wager-count="1.23" data-score="4:2"><span>Real Madrid</span><span class="sport-table-wager-button-count">1.23</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Real Madrid vs. Chelsea" data-wager-count="13.00" data-score="4:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Chelsea" data-confrontation="Real Madrid vs Chelsea" data-wager-count="34.25" data-score="4:2"><span>Chelsea</span><span class="sport-table-wager-button-count">34.25</span></a>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                          <div class="sport-table-bonus">
                                                            <span class="sport-table-bonus-count">+58</span>
                                                            <span class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>  
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                   </div>
                              </div>
                              {{-- End of Football --}}
                              {{-- Tennis --}}
                              <div class="tab-pane fade" id="tennis" role="tabpanel" aria-labelledby="tennistab">
                                <div class="sports-info">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-md-12">
                                       <p class="sports-text">ALL SPORTS (29)</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="heading-component">
                                  <div class="heading-component-inner">
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <h5 class="heading-component-title">TENNIS</h5>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="sport-table-header">
                                            <p>
                                              us international
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="sport-table">
                                            <div class="sport-table-tr">
                                              <div class="row sport-row align-items-center">
                                               
                                                <div class=" col-md-4 ">
                                                  <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Harry Stewart</span><span class="sport-table-title-team">Donald Crawford</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>7</span><span>0</span><span>0</span></span>
                                                      <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>6</span><span>1</span><span>0</span></span>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-7">
                                                  <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Harry Stewart" data-confrontation="Harry Stewart vs Donald Crawford" data-wager-count="13.5" data-score="7:6"><span>Harry Stewart</span><span class="sport-table-wager-button-count">13.5</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Donald Crawford" data-confrontation="Harry Stewart vs Donald Crawford" data-wager-count="1.005" data-score="7:6"><span>Donald Crawford</span><span class="sport-table-wager-button-count">1.005</span></a>
                                                  </div>
                                                </div>
                                                <div class="col-md-1">
                                                  <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              {{-- End of Tennis --}}
                              {{-- basketball --}}
                              <div class="tab-pane fade" id="basketball" role="tabpanel" aria-labelledby="basketballtab">
                                <div class="sports-info">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-md-12">
                                       <p class="sports-text"> All Sports (29)</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="heading-component">
                                  <div class="heading-component-inner">
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <h5 class="heading-component-title">BASKETBALL</h5>
                                          <p style="padding-left:20px;">Last MTG: 06/18/21</p>
                                        </div>
                                      </div>
                                      <div class="sport-table-header">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <p>nba finals</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="sport-table">
                                        <div class="sport-table-tr">
                                          <div class="row sport-row align-items-center row-15">
                                           
                                            <div class="col-md-4">
                                              <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">New York Knicks</span><span class="sport-table-title-team">Houston Rockets</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>53</span></span>
                                                 <span class="sport-table-title-score"><span>66</span></span>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-7">
                                              <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="New York Knicks" data-confrontation="New York Knicks vs Houston Rockets" data-wager-count="2.05" data-score="53:66"><span>New York Knicks</span><span class="sport-table-wager-button-count">2.05</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Houston Rockets" data-confrontation="New York Knicks vs Houston Rockets" data-wager-count="1.005" data-score="53:66"><span>Houston Rockets</span><span class="sport-table-wager-button-count">1.005</span></a>
                                              </div>
                                            </div>
                                            <div class="col-md-1">
                                              <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                             </div>
                               {{-- end of basketball --}}
                               {{-- ice hockey --}}
                               <div class="tab-pane fade" id="icehockey" role="tabpanel" aria-labelledby="icehockeytab">
                                <div class="sports-info">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-md-12">
                                       <p class="sports-text"> All Sports (29)</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="heading-component">
                                  <div class="heading-component-inner">
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <h5 class="heading-component-title">ICE HOCKEY</h5>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="sport-table-header">
                                            <p>national hockey league</p>
                                          </div>
                                          <div class="sport-table">
                                            <div class="sport-table-tr">
                                              <div class="row sport-row align-items-center row-15">
                                                <div class="col-md-4">
                                                  <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Anaheim Ducks</span><span class="sport-table-title-team">New York Rangers</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>4</span></span>
                                                      <span class="sport-table-title-score"><span>2</span></span>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-7">
                                                  <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Anaheim Ducks" data-confrontation="Anaheim Ducks vs New York Rangers" data-wager-count="1.23" data-score="4:2"><span>Anaheim Ducks</span><span class="sport-table-wager-button-count">1.23</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Anaheim Ducks vs. New York Rangers" data-wager-count="13.00" data-score="4:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="New York Rangers" data-confrontation="Anaheim Ducks vs New York Rangers" data-wager-count="34.25" data-score="4:2"><span>New York Rangers</span><span class="sport-table-wager-button-count">34.25</span></a>
                                                  </div>
                                                </div>
                                                <div class="col-md-1">
                                                  <div class="sport-table-bonus"><span class="sport-table-bonus-count">+58</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="sport-table">
                                            <div class="sport-table-tr">
                                              <div class="row sport-row align-items-center row-15">
                                                <div class="col-md-4">
                                                  <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Chicago Black Hawks</span><span class="sport-table-title-team">Washington Capitals</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>1</span></span>
                                                     <span class="sport-table-title-score"><span>0</span></span>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-7">
                                                  <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Chicago Black Hawks" data-confrontation="Chicago Black Hawks vs Washington Capitals" data-wager-count="1.58" data-score="1:0"><span>Chicago Black Hawks</span><span class="sport-table-wager-button-count">1.58</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Chicago Black Hawks vs. Washington Capitals" data-wager-count="13.00" data-score="1:0"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Washington Capitals" data-confrontation="Chicago Black Hawks vs Washington Capitals" data-wager-count="17.88" data-score="1:0"><span>Washington Capitals</span><span class="sport-table-wager-button-count">17.88</span></a>
                                                  </div>
                                                </div>
                                                <div class="col-md-1">
                                                  <div class="sport-table-bonus"><span class="sport-table-bonus-count">+46</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="sport-table">
                                            <div class="sport-table-tr">
                                              <div class="row sport-row align-items-center row-15">
                                                <div class="col-md-4">
                                                  <div class="sport-table-title">
                                                    <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Florida Panthers</span><span class="sport-table-title-team">Detroit Red wings</span></div>
                                                    <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>1</span></span>
                                                      <span class="sport-table-title-score"><span>2</span></span>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-7">
                                                  <div class="sport-table-wager"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Florida Panthers" data-confrontation="Florida Panthers vs Detroit Red wings" data-wager-count="2.41" data-score="1:2"><span>Florida Panthers</span><span class="sport-table-wager-button-count">2.41</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Draw" data-confrontation="Florida Panthers vs. Detroit Red wings" data-wager-count="13.00" data-score="1:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Detroit Red wings" data-confrontation="Florida Panthers vs Detroit Red wings" data-wager-count="23.28" data-score="1:2"><span>Detroit Red wings</span><span class="sport-table-wager-button-count">23.28</span></a>
                                                  </div>
                                                </div>
                                                <div class="col-md-1">
                                                  <div class="sport-table-bonus"><span class="sport-table-bonus-count">+51</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                {{-- ice hockey --}}
                              </div>
                                {{-- volleyball --}}
                                <div class="tab-pane fade" id="volleyball" role="tabpanel" aria-labelledby="volleyballtab">
                                  <div class="sports-info">
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-md-12">
                                        <p class="sports-text"> All Sports (29)</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h5 class="heading-component-title">
                                              VOLLEYBALL
                                            </h5>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>world championship</p>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Estonia</span><span class="sport-table-title-team">Slovakia</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>18</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>14</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Estonia" data-confrontation="Estonia vs Slovakia" data-wager-count="1.12" data-score="18:14"><span>Estonia</span><span class="sport-table-wager-button-count">1.12</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Slovakia" data-confrontation="Estonia vs Slovakia" data-wager-count="5.45" data-score="18:14"><span>Slovakia</span><span class="sport-table-wager-button-count">5.45</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Poland</span><span class="sport-table-title-team">Germany</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>27</span><span>8</span></span>
                                                        <span class="sport-table-title-score"><span>25</span><span>9</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Poland" data-confrontation="Poland vs Germany" data-wager-count="2.10" data-score="27:25"><span>Poland</span><span class="sport-table-wager-button-count">2.10</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Germany" data-confrontation="Poland vs Germany" data-wager-count="1.68" data-score="27:25"><span>Germany</span><span class="sport-table-wager-button-count">1.68</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+46</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">France</span><span class="sport-table-title-team">Spain</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>16</span></span>
                                                        <span class="sport-table-title-score"><span>15</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="France" data-confrontation="France vs Spain" data-wager-count="1.25" data-score="16:15"><span>France</span><span class="sport-table-wager-button-count">1.25</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Spain" data-confrontation="France vs Spain" data-wager-count="3.75" data-score="16:15"><span>Spain</span><span class="sport-table-wager-button-count">3.75</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+51</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                {{-- end of volleyball --}}
                                {{-- badminton --}}
                                <div class="tab-pane fade" id="badminton" role="tabpanel" aria-labelledby="badmintontab">
                                  <div class="sports-info">
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-md-12">
                                         <p class="sports-text"> All Sports (29)</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h5 class="heading-component-title">BADMINTON</h5>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>championship</p>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Tammy Edwards</span><span class="sport-table-title-team">Sandra Richardson</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>14</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Tammy Edwards" data-confrontation="Tammy Edwards vs Sandra Richardson" data-wager-count="13.5" data-score="0:14"><span>Tammy Edwards</span><span class="sport-table-wager-button-count">13.5</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Sandra Richardson" data-confrontation="Tammy Edwards vs Sandra Richardson" data-wager-count="1.0005" data-score="0:14"><span>Sandra Richardson</span><span class="sport-table-wager-button-count">1.0005</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Jeffrey Carter</span><span class="sport-table-title-team">Rose Martinez</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Jeffrey Carter" data-confrontation="Jeffrey Carter vs Rose Martinez" data-wager-count="2.10" data-score="0:0"><span>Jeffrey Carter</span><span class="sport-table-wager-button-count">2.10</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Rose Martinez" data-confrontation="Jeffrey Carter vs Rose Martinez" data-wager-count="1.68" data-score="0:0"><span>Rose Martinez</span><span class="sport-table-wager-button-count">1.68</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+46</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Angela Morgan</span><span class="sport-table-title-team">Nancy Walker</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>15</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Angela Morgan" data-confrontation="Angela Morgan vs Nancy Walker" data-wager-count="1.25" data-score="0:15"><span>Angela Morgan</span><span class="sport-table-wager-button-count">1.25</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Nancy Walker" data-confrontation="Angela Morgan vs Nancy Walker" data-wager-count="3.75" data-score="0:15"><span>Nancy Walker</span><span class="sport-table-wager-button-count">3.75</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+51</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Evelyn Baker</span><span class="sport-table-title-team">Laura Lopez</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>2</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Evelyn Baker" data-confrontation="Evelyn Baker vs Laura Lopez" data-wager-count="1.25" data-score="0:2"><span>Evelyn Baker</span><span class="sport-table-wager-button-count">1.25</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Laura Lopez" data-confrontation="Evelyn Baker vs Laura Lopez" data-wager-count="3.75" data-score="0:2"><span>Laura Lopez</span><span class="sport-table-wager-button-count">3.75</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+32</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                {{-- end of badminton --}}
                                {{-- baseball --}}
                                <div class="tab-pane fade" id="baseball" role="tabpanel" aria-labelledby="baseballtab">
                                  <div class="sports-info">
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-md-12">
                                         <p class="sports-text"> All Sports (29)</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h5 class="heading-component-title">BASEBALL</h5>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>mlb</p>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Buffalo Bisons</span><span class="sport-table-title-team">Lehigh Valley Ironpigs</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Buffalo Bisons" data-confrontation="Buffalo Bisons vs Lehigh Valley Ironpigs" data-wager-count="13.5" data-score="0:0"><span>Buffalo Bisons</span><span class="sport-table-wager-button-count">13.5</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Lehigh Valley Ironpigs" data-confrontation="Buffalo Bisons vs Lehigh Valley Ironpigs" data-wager-count="1.0005" data-score="0:0"><span>Lehigh Valley Ironpigs</span><span class="sport-table-wager-button-count">1.0005</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Syracuse Chiefs</span><span class="sport-table-title-team">Toledo Mud Hens</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Syracuse Chiefs" data-confrontation="Syracuse Chiefs vs Toledo Mud Hens" data-wager-count="2.10" data-score="0:0"><span>Syracuse Chiefs</span><span class="sport-table-wager-button-count">2.10</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Toledo Mud Hens" data-confrontation="Syracuse Chiefs vs Toledo Mud Hens" data-wager-count="1.68" data-score="0:0"><span>Toledo Mud Hens</span><span class="sport-table-wager-button-count">1.68</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+46</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                {{-- end of baseball --}}
                                {{-- table tennis --}}
                                <div class="tab-pane fade" id="tabletennis" role="tabpanel" aria-labelledby="tabletennistab">
                                  <div class="sports-info">
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-md-12">
                                         <p class="sports-text"> All Sports (29)</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h5 class="heading-component-title">
                                              TABLE TENNIS
                                            </h5>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>world championship</p>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Francis Hart</span><span class="sport-table-title-team">John Ramsey</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>3</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>2</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Francis Hart" data-confrontation="Francis Hart vs John Ramsey" data-wager-count="3.5" data-score="3:2"><span>Francis Hart</span><span class="sport-table-wager-button-count">3.5</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="John Ramsey" data-confrontation="Francis Hart vs John Ramsey" data-wager-count="2.65" data-score="3:2"><span>John Ramsey</span><span class="sport-table-wager-button-count">2.65</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+16</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Martha Garcia</span><span class="sport-table-title-team">Lisa Peterson</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Martha Garcia" data-confrontation="Martha Garcia vs Lisa Peterson" data-wager-count="2.60" data-score="0:0"><span>Martha Garcia</span><span class="sport-table-wager-button-count">2.60</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Lisa Peterson" data-confrontation="Martha Garcia vs Lisa Peterson" data-wager-count="1.14" data-score="0:0"><span>Lisa Peterson</span><span class="sport-table-wager-button-count">1.14</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+32</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                {{-- end of table tennis --}}
                                {{-- cycling --}}
                                <div class="tab-pane fade" id="cycling" role="tabpanel" aria-labelledby="cyclingtab">
                                  <div class="sports-info">
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-md-12">
                                         <p class="sports-text"> All Sports (29)</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="heading-component">
                                    <div class="heading-component-inner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="heading-component-title">
                                              <h5>CYCLING</h5>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="sport-table-header">
                                              <p>uci road world championship</p>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Janet Alexander</span><span class="sport-table-title-team">Charles Martin</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>1</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Janet Alexander" data-confrontation="Janet Alexander vs Charles Martin" data-wager-count="1.98" data-score="0:1"><span>Janet Alexander</span><span class="sport-table-wager-button-count">1.98</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Charles Martin" data-confrontation="Janet Alexander vs Charles Martin" data-wager-count="3.54" data-score="0:1"><span>Charles Martin</span><span class="sport-table-wager-button-count">3.54</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-2 col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+15</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="sport-table">
                                              <div class="sport-table-tr">
                                                <div class="row sport-row align-items-center row-15">
                                                  <div class="col-md-4">
                                                    <div class="sport-table-title">
                                                      <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Terry Gonzales</span><span class="sport-table-title-team">Julie Wilson</span></div>
                                                      <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>1</span></span>
                                                        <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="sport-table-wager sport-table-wager-double"><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Terry Gonzales" data-confrontation="Terry Gonzales vs Julie Wilson" data-wager-count="4.05" data-score="1:0"><span>Terry Gonzales</span><span class="sport-table-wager-button-count">4.05</span></a><a class="sport-table-wager-button" href="#" data-toggle="modal" data-target="#sportModal" data-team-name="Julie Wilson" data-confrontation="Terry Gonzales vs Julie Wilson" data-wager-count="1.14" data-score="1:0"><span>Julie Wilson</span><span class="sport-table-wager-button-count">1.14</span></a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-1">
                                                    <div class="sport-table-bonus"><span class="sport-table-bonus-count">+65</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                {{-- end of cycling --}}
                              </div>
                        </div>
                    </div>
                </div>
            </div> 
            <?php //dd($datas) ?>
            {{-- End of navs and tabs --}}
            @endsection