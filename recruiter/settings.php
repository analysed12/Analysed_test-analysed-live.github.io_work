<!DOCTYPE html>
<html lang="en">

    <!--HEADER FILES-->
    <!-- <?php include ('header_files.php')?> -->
      <!-- TOP HEADER -->
 <?php include ('header.php')?>


    <!--CSS FILES-->
<link rel="stylesheet" href="./css/settings.css">
<div class="container">
        <div class="small_container" >
            <div class="heading_dash">
                <h1 class="mainHeadingDash">Settings <i class="fa fa-cog" aria-hidden="true"></i></h1>
                <p class="mainParaDash">Confire the system to cater to your needs.</p>
            </div>

            <div class="small_container row_for_settings">

            <!-- START OF LEFT_area_for_setting -->
                <div class="left_area_for_settings">

                    <!-- START OF ACCOUNTS SECTION -->
                    <div class="settings_card_single-item">
                        <a href="setting_home_2.php" class="active-link"><h3 class="heading_for_settings_card_single-item active-link">Account <i class="fa fa-angle-right" aria-hidden="true"></i></h3></a>
                        <p class="para_for_settings_card_single-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dignissim lectus dui, at rutrum ligula elementum sit amet.</p>
                    </div> <!-- END OF ACCOUNTS SECTION -->  

                        <!-- START OF PRIVACY SECTION -->
                    <div class="settings_card_single-item">
                        <a href="#"><h3 class="heading_for_settings_card_single-item">Privacy <i class="fa fa-angle-down" aria-hidden="true"></i></h3></a>
                        <p class="para_for_settings_card_single-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dignissim lectus dui, at rutrum ligula elementum sit amet.</p>
                    </div>  <!-- END OF PRIVACY SECTION -->  

                     <!-- START OF NOTIFICATIONS SECTION -->
                   <div class="settings_card_single-item notification_card_single-item">
                       <h3 class="heading_for_settings_card_single-item notification_heading_settings_single_item">Notifications <i class="fa fa-angle-down" aria-hidden="true"></i></h3>
                        <p class="para_for_settings_card_single-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dignissim lectus dui, at rutrum ligula elementum sit amet.</p>
                        <div class="small_container container_for_collapsing_notif" style="max-width: 80%;">
                                <div class="notifications_panel_settings_card_single-item">
                                
                                <!--  START OF DESKTOP NOTIFICATION -->
                                
                                    <div class="row_for_settings notifications_single_panel_settings_card_single-item">
                                      <span style="color:#333333;font-size:16px;">Desktop Notifications</span>
                                        <label class="switch">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <!--  END OF DESKTOP NOTIFICATION -->

                                     <!--  START OF EMAIL NOTIFICATION -->
                                          <div class="row_for_settings notifications_single_panel_settings_card_single-item">
                                        <span style="color:#333333;font-size:16px;">Email notification</span>
                                        <label class="switch">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                        </label>
                                    </div> <!--  END OF EMAIL NOTIFICATION -->

                                     <!--  START OF OTHER SETTINGS -->
                                       <div class="row_for_settings notifications_single_panel_settings_card_single-item">
                                        <span style="color:#333333;font-size:16px;">Other settings</span>
                                    </div><!--  END OF OTHER SETTINGS -->
                                </div>  <!--  END OF DESKTOP NOTIFICATION -->
                            </div>
                    </div> <!-- END OF NOTIFICATIONS SECTION -->

                        <!-- START OF PREFERENCES SECTION -->
                    <div class="settings_card_single-item">
                        <a href="#"><h3 class="heading_for_settings_card_single-item">Preferences <i class="fa fa-angle-down" aria-hidden="true"></i></h3></a>
                        <p class="para_for_settings_card_single-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dignissim lectus dui, at rutrum ligula elementum sit amet.</p>
                    </div>  <!-- END OF PREFERENCES SECTION -->
                    <!-- START OF mESSAGES SECTION -->
                    <div class="settings_card_single-item">
                        <a href="#"><h3 class="heading_for_settings_card_single-item">Messages <i class="fa fa-angle-down" aria-hidden="true"></i></h3></a>
                        <p class="para_for_settings_card_single-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dignissim lectus dui, at rutrum ligula elementum sit amet.</p>
                    </div>  <!-- END OF MESSAGE SECTION -->
                    <!-- START OF UPDATES SECTION -->
                    <div class="settings_card_single-item updates_card_single-item">
                        <h3 class="heading_for_settings_card_single-item updates_heading_settings_single_item">Updates <i class="fa fa-angle-down" aria-hidden="true"></i></h3>
                        <p class="para_for_settings_card_single-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dignissim lectus dui, at rutrum ligula elementum sit amet.</p>
                        <div class="small_container container_for_collapsing_updates" style="max-width:80%">
                            <div class="updates_panel_settings_card_single-item">
                                <div class="row_for_settings updates_single_panel_settings_card_single-item">
                                    <span style="color:#333333;font-size:16px;">Current Version</span>
                                    <span style="color:#333333;font-size:16px;">V 1.0</span>
                                </div>
                            </div>
                            <div class="updates_panel_settings_card_single-item">
                                <div class="row_for_settings updates_single_panel_settings_card_single-item">
                                    <button class="check_for_updates_button">Check for updates <i class="fa fa-refresh" aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <div class="updates_panel_settings_card_single-item">
                                <div class="row_for_settings updates_single_panel_settings_card_single-item">
                                    <a href="#" style="color:#333333;font-size:16px;text-decoration:none">Other Settings...</a>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- END OF UPDATES SECTION -->
                    <!-- START OF PERMISSIONS SECTION -->
                    <div class="settings_card_single-item">
                        <a href="#"><h3 class="heading_for_settings_card_single-item">Permissions <i class="fa fa-angle-down" aria-hidden="true"></i></h3></a>
                        <p class="para_for_settings_card_single-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dignissim lectus dui, at rutrum ligula elementum sit amet.</p>
                    </div>  <!-- END OF PERMISSIONS SECTION -->
                </div> <!-- END OF LEFT_area_for_setting -->

                <!-- START OF right_area_for_setting -->
                <div class="right_area_for_settings">
                    <ul class="list_for_settings">
                        <li class="list-item_for_settings">
                            <a href="#" class="list-item-link_for_settings active-link">Account</a>
                        </li>
                        <li class="list-item_for_settings">
                            <a href="#" class="list-item-link_for_settings">Privacy</a>
                        </li>
                        <li class="list-item_for_settings">
                            <a href="#" class="list-item-link_for_settings notfication-list-item-link_for_settings">Notifications</a>
                        </li>
                        <li class="list-item_for_settings">
                            <a href="#" class="list-item-link_for_settings">Prefernces</a>
                        </li>
                        <li class="list-item_for_settings">
                            <a href="#" class="list-item-link_for_settings">Messages</a>
                        </li>
                        <li class="list-item_for_settings">
                            <a href="#" class="list-item-link_for_settings update-list-item-link_for_settings">Updates</a>
                        </li>
                        <li class="list-item_for_settings">
                            <a href="#" class="list-item-link_for_settings">Permissions</a>
                        </li>
                    </ul>
                </div>  <!-- END OF right_area_for_setting -->
            </div>
        </div>
        
</div>
<script src="./js/settings.js"></script>