@foreach ($myLine["data"]["sports"] as $sportsData)
    @foreach($sportsData["leagues"] as $leaguesData)
        <h5 class="heading-component-title text-uppercase mt-5">{{ $sportsData["sport_name"]}}</h5>
        @foreach($leaguesData["groups"] as $groupsData)
            @foreach($groupsData["events"] as $eventsData)

                <?php try { ?>
                @if ($eventsData["event_date"] != "")
                    <div class="sport-table-header justify-content-between">
                        <div class="row">
                            <div class="col-md-5">
                                <p>{{ $leaguesData["league_name"]}}</p>
                            </div>
                            <div class="col-md-7">
                                <p class="text-uppercase"> Date: {{ $eventsData["event_date"]}}</p>
                            </div>
                        </div>
                    </div>
                @endif
                <?php } catch (Throwable $th) { //throw $th;
                }?>

                <div class="sport-table">
                    <div class="sport-table-tr">
                        <div class="sport-row align-items-center">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="sport-table-title">

                                            <div class="sport-table-title-item sport-table-title-item-left">
                                                @foreach($eventsData["event_participant"] as $eventsParticipant)
                                                    <span
                                                        class="sport-table-title-team">{{$eventsParticipant["event_value"]["team_name"]}}</span>
                                                @endforeach
                                            </div>

                                            <div class="sport-table-title-item sport-table-title-item-right">
                                                @foreach($eventsData["event_participant"] as $eventsParticipant)
                                                    <span
                                                        class="sport-table-title-score"><span>{{ $eventsParticipant["event_value"]["rot"]}}</span></span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="sport-table-wager">

                                            @foreach($eventsData["event_participant"] as $eventsParticipant)
                                                <a class="sport-table-wager-button" href="#" data-toggle="modal"
                                                   data-target="#sportModal" data-team-name="Real Madrid"
                                                   data-confrontation="Real Madrid vs Chelsea"
                                                   data-wager-count="1.23"
                                                   data-score="4:2">
                                                    <span>{{$eventsParticipant["event_value"]["team_name"]}}</span>
                                                    <span
                                                        class="sport-table-wager-button-count">{{ $eventsParticipant["event_value"]["side"]}}</span>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="sport-table-bonus">
                                                <span
                                                    class="sport-table-bonus-count">{{ $eventsParticipant["event_value"]["money_line"]}}</span>
                                            <span
                                                class="sport-table-bonus-icon material-icons-chevron_right"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    @endforeach
@endforeach
{{-- End of Current Lines Data --}}

