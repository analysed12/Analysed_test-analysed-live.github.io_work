const notificationDivSettingsPage = document.querySelector(
  ".notification_card_single-item"
);
const updatesDivSettingsPage = document.querySelector(
  ".updates_card_single-item"
);
const collapsingPanelNoti = document.querySelector(
  ".container_for_collapsing_notif"
);
const collapsingPanelUpdates = document.querySelector(
  ".container_for_collapsing_updates"
);

const headingForNotifSettingsPage = document.querySelector(
  ".notification_heading_settings_single_item"
);
const rightsideColorChangeNoti = document.querySelector(
  ".notfication-list-item-link_for_settings"
);

const headingForUpdatesSettingsPage = document.querySelector(
  ".updates_heading_settings_single_item"
);
const rightsideColorChangeUpdates = document.querySelector(
  ".update-list-item-link_for_settings"
);

headingForNotifSettingsPage.addEventListener("click", () => {
  if (collapsingPanelNoti.style.display === "block") {
    rightsideColorChangeNoti.style.color = "#333333";
    collapsingPanelNoti.style.display = "none";
    headingForNotifSettingsPage.innerHTML =
      'Notifications <i class="fa fa-angle-down" aria-hidden="true"></i>';
  } else {
    collapsingPanelNoti.style.display = "block";
    rightsideColorChangeNoti.style.color = "#0F9D58";
    headingForNotifSettingsPage.innerHTML =
      'Notifications <i class="fa fa-angle-up" aria-hidden="true"></i>    ';
  }
});

updatesDivSettingsPage.addEventListener("click", () => {
  if (collapsingPanelUpdates.style.display === "block") {
    rightsideColorChangeUpdates.style.color = "#333333";
    collapsingPanelUpdates.style.display = "none";
    headingForUpdatesSettingsPage.innerHTML =
      'Updates <i class="fa fa-angle-down" aria-hidden="true"></i>';
  } else {
    collapsingPanelUpdates.style.display = "block";
    rightsideColorChangeUpdates.style.color = "#0F9D58";
    headingForUpdatesSettingsPage.innerHTML =
      'Updates <i class="fa fa-angle-up" aria-hidden="true"></i>    ';
  }
});
