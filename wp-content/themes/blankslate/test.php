<?php

	echo '<div id="main_container" class="tr-page-main-content">';
	echo '	<div title="edit_fr_html_container" id="team_list_custom_html" class="custom-wysiwyg-html manageable-editor">';
	echo '		<div id="fr_html_container" class="custom-wysiwyg-text mobile-view-description">';
	echo '			<p><a href="https://secure.e2rm.com/registrant/startup.aspx?eventid=148005&getpage=tabbedIndividualSearch">Search for a participant</a>.</p>';

	echo '			<div style="padding: 4px; margin-top: 15px; font-weight: bold; width: 100%; color: #ffffff; height: 20px; background-color: #f58025;"><strong>Top Participants</strong></div>';

				//XML CODE STARTS HERE
					
					$file = file_get_contents('http://my.e2rm.com/webgetservice/get.asmx/getParticipantScoreBoard?eventID=148005&languageCode=en-CA&sortBy=onlineAmount&listItemCount=100&externalQuestionID=&externalAnswerID=&Source='); //change this to whichever feed you wish to use
					$xml = simplexml_load_string($file);
					foreach($xml->ParticipantScoreBoard_collection->ParticipantScoreBoard as $x){ //This loops around each event

					//Get the event details
					$firstname = $x->ParticipantFirstName;
					$lastname = $x->ParticipantLastName;
					$ScoreboardDisplayName = $x->ScoreboardDisplayName;
					$onlineTotalCollected = $x->onlineTotalCollected;
					$ScoreboardCount = $x->ScoreboardCount;
					$RegistrationID = $x->RegistrationID;
					$ParentEventID = $x->ParentEventID;
					$dollarCalc=$onlineTotalCollected*1;
					setlocale(LC_MONETARY, 'en_US');


					echo '<p><b><a href="https://secure.e2rm.com/registrant/FundraisingPage.aspx?EventID='.$ParentEventID.'&LangPref=en-CA&RegistrationID='.$RegistrationID.'">'.$firstname . " " . $lastname ."</a></b> - (" . money_format('%.2n', $dollarCalc).")</p>" ;
					
					 }


			
	echo '		</div>';
	echo '	</div>';
	echo '</div>';
?>


<?php

	echo '<div id="main_container" class="tr-page-main-content">';
	echo '	<div title="edit_fr_html_container" id="team_list_custom_html" class="custom-wysiwyg-html manageable-editor">';
	echo '		<div id="fr_html_container" class="custom-wysiwyg-text mobile-view-description">';
	echo '			<p><a href="https://secure.e2rm.com/registrant/startup.aspx?eventid=148005&getpage=tabbedIndividualSearch">Search for a Teams</a></p>';

	echo '			<div style="padding: 4px; margin-top: 15px; font-weight: bold; width: 100%; color: #ffffff; height: 20px; background-color: #f58025;"><strong>Top Teams</strong></div>';

					$persoanl = file_get_contents('http://my.e2rm.com/webgetservice/get.asmx/getParticipantScoreBoard?eventID=148005&languageCode=en-CA&sortBy=onlineAmount&listItemCount=100&externalQuestionID=&externalAnswerID=&Source='); //change this to whichever feed you wish to use
					$xml = simplexml_load_string($personal);
					foreach($xml->ParticipantScoreBoard_collection->ParticipantScoreBoard as $x){ //This loops around each event

					//Get the event details
					$firstname = $x->ParticipantFirstName;
					$lastname = $x->ParticipantLastName;
					$ScoreboardDisplayName = $x->ScoreboardDisplayName;
					$onlineTotalCollected = $x->onlineTotalCollected;
					$ScoreboardCount = $x->ScoreboardCount;
					$RegistrationID = $x->RegistrationID;
					$ParentEventID = $x->ParentEventID;
				}

				//XML CODE STARTS HERE
					
					$file = file_get_contents('http://my.e2rm.com/webgetservice/get.asmx/getTeamScoreBoard?eventID=148005&languageCode=en-CA&sortBy=onlineAmount&listItemCount=100&externalQuestionID=&externalAnswerID=&Source='); //change this to whichever feed you wish to use
					$teamxml = simplexml_load_string($file);
					foreach($teamxml->TeamScoreBoard_collection->TeamScoreBoard as $a){ //This loops around each event

					//Get the event details
					$OnlineTotalCollected = $a->OnlineTotalCollected;
					$TeamName = $a->TeamName;
					$TeamID = $a->TeamID;
					$sortKeyPrimary = $a->sortKeyPrimary;
					$dollarCalc=$sortKeyPrimary*1;
					setlocale(LC_MONETARY, 'en_US');


					echo '<p><b><a href=" https://secure.e2rm.com/registrant/TeamFundraisingPage.aspx?EventID='.$ParentEventID.'&LangPref=en-CA&TeamID='.$TeamID.'">'.$TeamName . "</a></b> - (" . money_format('%.2n', $dollarCalc) .")</p>" ; 


					 }
	echo '		</div>';
	echo '	</div>';
	echo '</div>';
?>


<?php
					//XML CODE STARTS HERE
					
					$file = file_get_contents('http://my.e2rm.com/webgetservice/get.asmx/getEventFundraisingTotals?eventID=148005&loginOrgID=nbts&locationExportID=&Source='); //change this to whichever feed you wish to use
					$xml = simplexml_load_string($file);
					foreach($xml->eventFundraisingTotals_collection->eventFundraisingTotals as $x){ //This loops around each event

					//Get the event details
					$eventVerifiedTotalCollected = $x->eventVerifiedTotalCollected;
					$eventVerifiedFundraisingGoal = $x->eventVerifiedFundraisingGoal;
					$eventid = $x->eventid;
					$onlineTotalCollected = $x->onlineTotalCollected;
					$dollarCalc=$eventVerifiedTotalCollected*1;
					setlocale(LC_MONETARY, 'en_US');


					echo '<p style="color:#66BC29; font-family: Arial, Helvetica, Sans-Serif; font-size:20px;">Amount Raised: ' . money_format('%.2n', $dollarCalc) ."</p>" ;
					
					 }
?>




