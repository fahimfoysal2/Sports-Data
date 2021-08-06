@extends('layouts.app')


@section('content')

    <?php foreach($datas["data"] as $scoredatas) { 
           foreach($leagues["data"]["leagues"] as $leaguesdata){
        ?>

        <?php
            try {
                if($scoredatas["description"]!=""){
                    ?>
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="heading-component-title text-uppercase mt-5"><?php echo $scoredatas["description"]; ?></h5>
                    </div>
                </div>
                <?php foreach($leaguesdata["league"] as $leaguessportsdata){
                    foreach($leaguessportsdata["@attributes"] as $sportsdata){
                        
                ?>
                    <?php 
               
                            if($scoredatas["league_id"]==$sportsdata){
                        ?>
                <div class="sport-table-header justify-content-between">
                    <div class="row">
                       <div class="col-md-12">
                           <p><?php echo $leaguessportsdata["name"]; ?></p>
                       </div>
                   </div>
                </div>
                <?php }}} ?>
                <?php foreach($scoredatas["period_summary"] as $periods){ ?>
                <div class="sport-table">
                    <div class="sport-table-tr">
                        <div class="sport-row align-items-center">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="sport-table-title">
                                        <div class="sport-table-title-item sport-table-title-item-left">
                                            <span class="sport-table-title-team">HOME</span>
                                            <span class="sport-table-title-team">AWAY</span>
                                        </div>
                                        <div class="sport-table-title-item sport-table-title-item-right">
                                            <span class="sport-table-title-score"><span><?php echo $scoredatas["home_rot"]; ?></span></span>
                                            <span class="sport-table-title-score"><span><?php echo $scoredatas["away_rot"]; ?></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="sport-table-wager">
                                        <span class="sport-table-title-team"><?php echo $periods["name"]; ?></span>
                                        <span class="sport-table-title-team"><?php echo $scoredatas["time"]; ?></span>
                                    </div>   
                                </div>
                                <div class="col-md-3">
                                    <div class="sport-table-title-item sport-table-title-item-right">
                                        <span class="sport-table-title-score"><span>HOME SCORE: <?php echo $periods["home_score"]; ?></span></span>
                                        <span class="sport-table-title-score"><span>AWAY SCORE: <?php echo $periods["away_score"]; ?></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              <?php  }}    
                
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
    <?php }} ?>
    
    <?php //dd($scoredatas);
    //dd($leagues);
           ;  
    
    ?>
@endsection