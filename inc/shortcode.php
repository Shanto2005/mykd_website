<?php
// UpComing Matches
function upcoming_match_shortcode() {
    ob_start(); 
    $args = array(
        'meta_query'     => array(
            array(
                'key'     => 'tournament_status',
                'value'   => 'upcm',
                'compare' => '=',
            ),
        ),
        'post_type'      => 'tournaments',
        'posts_per_page' => 3,
        'order'          => 'ASC',
    );
    $query = new WP_Query($args);
    ?>
    <div class="upcomin_match_list">
    <?php 
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $tur = get_field('tournament_info');
            $st_date = $tur['start_date'];
            $st_time = $tur['st_time'];
            $gm_name = $tur['game_name'];

            // Combine date and time into a single string
            $combinedDateTime = $st_date . ' ' . $st_time;

            // Convert combined date and time to a timestamp
            $postTimestamp = strtotime($combinedDateTime);

            // Compare the post timestamp with the current timestamp
            if ($postTimestamp > current_time('timestamp')) {
                $formattedTime = str_replace(array('AM', 'PM'), '', $st_time);

                $teams = get_field('teams');
                $team1 = $teams['team_one'];
                $tm1_logo = $team1['team_logo'];
                $tm1_name = $team1['team_name'];
                $team2 = $teams['team_two'];
                $tm2_logo = $team2['team_logo'];
                $tm2_name = $team2['team_name'];
        ?>
            <div class="upcoming_match_item">
                <div class="upcomingmatch_position">
                    <div class="upcomingmatch_team">
                        <div class="imgBox">
                            <a href="#"><img src="<?php echo $tm1_logo;?>" alt="team1"></a>
                        </div>
                    </div>
                    <div class="upcomingmatch_content">
                        <div class="upcoming_match_info text-end">
                            <p><?php echo $gm_name;?></p>
                            <a href="#"><?php echo $tm1_name;?></a>
                        </div>
                        <div class="upcoming_match_time">
                            <h4><?php echo $formattedTime; ?></h4>
                        </div>
                        <div class="upcoming_match_info text-start">
                            <p><?php echo $gm_name;?></p>
                            <a href="#"><?php echo $tm2_name;?></a>
                        </div>
                    </div>
                    <div class="upcomingmatch_team">
                        <div class="imgBox">
                            <a href="#"><img src="<?php echo $tm2_logo;?>" alt="team2"></a>
                        </div>
                    </div>
                </div>
                <div class="uncoming_match_date">
                    <p><?php echo $st_date . ', ' . $st_time;?></p>
                </div>
            </div>
        <?php
            }
        endwhile;
        wp_reset_postdata();
    else :
        echo 'No upcoming tournament found';
    endif;
    ?>

    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('upcoming_matches', 'upcoming_match_shortcode');

// Match Result
function matche_result_shortcode() {
    ob_start(); 
    $args = array(
        'meta_query'     => array(
            array(
                'key'     => 'tournament_status',
                'value'   => 'end',
                'compare' => '=',
            ),
        ),
        'post_type'      => 'tournaments',
        'posts_per_page' => 1,
        'order'          => 'DESC',
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $tur = get_field('tournament_info');
            $st_date = $tur['start_date'];
            $st_time = $tur['st_time'];
            $league = $tur['league_name'];
            $vanue = $tur['vanue'];
            $win_price = $tur['1st_price'];
            $lose_price = $tur['2nd_price'];

            $teams = get_field('teams');
            $team1 = $teams['team_one'];
            $tm1_logo = $team1['team_logo'];
            $tm1_name = $team1['team_name'];
            $team2 = $teams['team_two'];
            $tm2_logo = $team2['team_logo'];
            $tm2_name = $team2['team_name'];

            $result = get_field('match_result');
            $win = $result['who_win'];
            $win_name = ($win == 'tm1') ? $tm1_name : $tm2_name;
            $lose_name = ($win == 'tm1') ? $tm2_name : $tm1_name;
            $win_logo = ($win == 'tm1') ? $tm1_logo : $tm2_logo;
            $lose_logo = ($win == 'tm1') ? $tm2_logo : $tm1_logo;

        ?>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="relust_tittle">
                        <p><?php echo $league?></p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xxl-4">
                    <div class="result_holder justify-content-start justify-content-lg-end">
                        <div class="team">
                            <h4><?php echo $win_name?></h4>
                            <p class="sub_tittle">$<?php echo $win_price?></p>
                        </div>
                        <div class="team_logo ms-3">
                            <img src="<?php echo $win_logo?>" alt="win1">
                        </div>
                        <div class="final_result">
                            <h4>WIN</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xxl-4">
                    <div class="result_holder justify-content-end justify-content-lg-start">
                        <div class="final_result loss_team">
                            <h4>2nd</h4>
                        </div>
                        <div class="team_logo ms-0 me-3">
                            <img src="<?php echo $lose_logo?>" alt="win1">
                        </div>
                        <div class="team">
                            <h4><?php echo $lose_name?></h4>
                            <p class="sub_tittle text-start">$<?php echo $lose_price?></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="match_time mt-4 mb-4">
                        <p><?php echo $st_date?> | <?php echo $st_time?></p>
                        <h6><?php echo $vanue?></h6>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="bttn">READ MORE</a>
                </div>
            </div>  
        <?php endwhile;
        wp_reset_postdata();
    else :
        echo 'No tournament result found';
    endif;
    return ob_get_clean();
}
add_shortcode('matche_result', 'matche_result_shortcode');