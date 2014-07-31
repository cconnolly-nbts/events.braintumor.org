<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/wp-content/plugins/sf-api/soapclient/config.php');

// Pulls Participant Fields 
$query = "SELECT Participant_First_Name__c, Participant_Last_Name__c, Participant_Page_URL__c FROM NBTS_Registrations__c  WHERE Event_Name__c = 'Nashville Brain Tumor Race' ";
$response = $mySforceConnection->query($query);

echo '<div id="main_container" class="tr-page-main-content">';
  echo '  <div title="edit_fr_html_container" id="team_list_custom_html" class="custom-wysiwyg-html manageable-editor">';
  echo '    <div id="fr_html_container" class="custom-wysiwyg-text mobile-view-description">';
  echo '      <p><a href="https://secure.e2rm.com/registrant/startup.aspx?eventid=148933&getpage=tabbedIndividualSearch">Search for a participant</a> <i>Note: At this time, participants who have a total fundraising amount of $0 are not listed, and registration fees are not included in your total donations.</i></p>';

  echo '      <div style="padding: 4px; margin-top: 15px; font-weight: bold; width: 100%; color: #ffffff; height: 20px; background-color: #f58025;"><strong>Top Participants</strong></div>';

foreach ($response->records as $record) {

    echo '<p><a href="'. $record->Participant_Page_URL__c .' ">' . $record->Participant_First_Name__c . " ". $record->Participant_Last_Name__c . "</a></p>\n";
    }

  echo '    </div>';
  echo '  </div>';
  echo '</div>';
?>
