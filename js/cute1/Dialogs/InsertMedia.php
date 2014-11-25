<?php

error_reporting(E_ALL ^ E_NOTICE);

header("Expires: " . gmdate("D, d M Y H:i:s", time() + (-1*60)) . " GMT");

require("Include_Security.php") ;

?>

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>		

	    <title><?php echo GetString("InsertMedia") ; ?></title>

		<meta http-equiv="Page-Enter" content="blendTrans(Duration=0.1)" />

		<meta http-equiv="Page-Exit" content="blendTrans(Duration=0.1)" />

		<link href="../Themes/<?php echo $Theme; ?>/dialog.css" type="text/css" rel="stylesheet" />

		<!--[if IE]>

			<link href="../Style/IE.css" type="text/css" rel="stylesheet" />

		<![endif]-->

		<script type="text/javascript" src="../Scripts/Dialog/DialogHead.js"></script>

		<style type="text/css">

	    #upload_image {height:80; VISIBILITY: inherit; Z-INDEX: 2}

		.row { HEIGHT: 22px }

		.cb { VERTICAL-ALIGN: middle }

		.itemimg { VERTICAL-ALIGN: middle }

		.editimg { VERTICAL-ALIGN: middle }

		.cell1 { VERTICAL-ALIGN: middle }

		.cell2 { VERTICAL-ALIGN: middle }

		.cell3 { PADDING-RIGHT: 4px; VERTICAL-ALIGN: middle; TEXT-ALIGN: right }

		.cb { }

		</style> 

	<?php     

      $Current_MediaGalleryPath=$MediaGalleryPath;

      if (@$_GET["MP"]!="")

      {

        $Current_MediaGalleryPath=$_GET["MP"];

      }

    ?>

	</head>

	<body>

		<div id="container">

			<table border="0" cellspacing="0" cellpadding="0" width="100%">

	            <tr>

		            <td style="white-space:nowrap; width:250px">

		            </td>

		            <td valign="bottom" style="width:200px">

			<?php

                  $ButtonStatusClass="dialogButton";

                  if($AllowCreateFolder!="true")

                    $ButtonStatusClass="CuteEditorButtonDisabled";                           

              ?>

<img src="../Images/newfolder.gif" id="btn_CreateDir" onclick="CreateDir_click();" title="<?php echo GetString("Createdirectory") ; ?>" class="<?php echo $ButtonStatusClass; ?>" onmouseover="CuteEditor_ColorPicker_ButtonOver(this);" />

<img src="../Images/zoom_in.gif" id="btn_zoom_in" onclick="Zoom_In();" title="<?php echo GetString("ZoomIn") ; ?>" class="dialogButton" onmouseover="CuteEditor_ColorPicker_ButtonOver(this);" /> 

<img src="../Images/zoom_out.gif" id="btn_zoom_out" onclick="Zoom_Out();" title="<?php echo GetString("ZoomOut") ; ?>" class="dialogButton" onmouseover="CuteEditor_ColorPicker_ButtonOver(this);" /> 

<img src="../Images/Actualsize.gif" id="btn_Actualsize" onclick="Actualsize();" title="<?php echo GetString("ActualSize") ; ?>" class="dialogButton" onmouseover="CuteEditor_ColorPicker_ButtonOver(this);" /> 

		            </td>

		            <td align="right">

		            </td>	

	            </tr>

            </table>

            

			<table border="0" cellspacing="0" cellpadding="0" width="100%">

				<tr>

					<td valign="top" style="width:260px;height:240px;">

						<iframe src="browse_Media.php?<?php echo $setting ; ?>&Theme=<?php echo $Theme; ?>&MP=<?php echo $Current_MediaGalleryPath; ?>" id="browse_Frame" frameborder="0" scrolling="auto" style="border:1.5pt inset;width:100%;height:100%"></iframe>		

					</td>

					<td>&nbsp;&nbsp;</td>

					<td valign="top">

						<div style="BORDER: 1.5pt inset; VERTICAL-ALIGN: top; OVERFLOW: auto; WIDTH: 290px; HEIGHT: 240px; BACKGROUND-COLOR: white; TEXT-ALIGN: center">

							<div id="divpreview" style="BACKGROUND-COLOR: white">&nbsp;</div>

						</div>

					</td>

				</tr>

				<tr>

					<td colspan="2" style="height:2">

					</td>

				</tr>

            </table>

			<table border="0" cellspacing="0" cellpadding="0" width="100%">

				<tr>

					<td valign="top">

						<fieldset>

							<legend><?php echo GetString("Properties") ; ?></legend>

							<table border="0" cellpadding="4" cellspacing="0" class="normal">

								<tr>

									<td>

										<table border="0" cellpadding="1" cellspacing="0" class="normal">

											<tr>

												<td style="width:100">

													<?php echo GetString("Width") ; ?>:</td>

												<td>

													<input type="text" name="Width" id="Width" style="width: 80px;" onchange="do_preview()"

														onpropertychange="do_preview()" value="200" /></td>

											</tr>

											<tr>

												<td>

													<?php echo GetString("Height") ; ?>:</td>

												<td>

													<input type="text" name="Height" id="Height" style="width: 80px;" onchange="do_preview()"

														onpropertychange="do_preview()" value="200" /></td>

											</tr>

											<tr>

												<td>

													<?php echo GetString("AutoStart") ; ?>:</td>

												<td>

													<input type="checkbox" name="Transparency" onchange="do_preview()" onpropertychange="do_preview()"

														id="AutoStart" checked="checked" value="AutoStart" /></td>

											</tr>

											<tr>

												<td style="height: 24px">

													<?php echo GetString("ShowControls") ; ?>:</td>

												<td style="height: 24px">

													<input type="checkbox" name="Transparency" onchange="do_preview()" onpropertychange="do_preview()"

														id="ShowControls" checked="checked" value="ShowControls" /></td>

											</tr>

											<tr>

												<td>

													<?php echo GetString("ShowStatusBar") ; ?>:</td>

												<td>

<input type="checkbox" name="Transparency" onchange="do_preview()" onpropertychange="do_preview()" id="ShowStatusBar" value="ShowStatusBar" /></td>

											</tr>

											<tr>

												<td>WindowlessVideo:</td>

												<td>

<input type="checkbox" name="WindowlessVideo" onchange="do_preview()" onpropertychange="do_preview()" id="WindowlessVideo" value="windowlessVideo" /></td>

											</tr>

										</table>

									</td>

								</tr>

							</table>

						</fieldset>

					</td>

					<td style="width:10">

					</td>

					<td valign="top">

						<fieldset style="margin-bottom:5px">

							<legend><?php echo GetString("Insert") ; ?></legend>

							<table border="0" cellpadding="4" cellspacing="0">

								<tr>

									<td>

										<table border="0" cellpadding="1" cellspacing="0" class="normal">

											<tr>

												<td valign="middle">

													<?php echo GetString("Url") ; ?>:</td>

												<td>

													<input type="text" id="TargetUrl" size="40" name="TargetUrl" />

												</td>

											</tr>

										</table>

									</td>

								</tr>

							</table>

						</fieldset>

            <?php

              $Style_Display_None="";

						  if ($AllowUpload!="true")

              {

                $Style_Display_None="Style='Display:none'";

              } 

						?>

            <fieldset id="fieldsetUpload" <?php echo $Style_Display_None ; ?> >

							<legend><?php echo GetString("Upload") ; ?> (Max size <?php echo $MaxMediaSize; ?>K)</legend>

							<table border="0" cellspacing="2" cellpadding="0" width="100%" class="normal">

								<tr>

									<td style="width:8">

									</td>

								</tr>

								<tr>

									<td valign="top">

<iframe src="upload.php?<?php echo $setting ; ?>&FP=<?php echo $Current_MediaGalleryPath; ?>&Theme=<?php echo $Theme; ?>&Type=media" id="upload_image" frameborder="0" scrolling="auto" style="width:100%;height:65px"></iframe>

									</td>

								</tr>

							</table>

						</fieldset>

						<div style="padding-top:12px;">

<input class="formbutton" type="button" value="<?php echo GetString("Insert") ; ?>" onclick="do_insert()" id="Button1" />

							&nbsp;&nbsp;&nbsp; 

<input class="formbutton" type="button" value="<?php echo GetString("Cancel") ; ?>" onclick="do_Close()" id="Button2" />

						</div>

					</td>

				</tr>

			</table>

		</div>

			<script type="text/javascript">	

	            var OK = "<?php echo GetString("OK"); ?>";

	            var Cancel = "<?php echo GetString("Cancel"); ?>";

	            var InputRequired = "<?php echo GetString("InputRequired"); ?>";

	            var ValidID = "<?php echo GetString("ValidID"); ?>";

	            var ValidColor = "<?php echo GetString("ValidColor"); ?>";

	            var SelectImagetoInsert = "<?php echo GetString("SelectImagetoInsert"); ?>";

	            

	            function UploadSaved(sFileName,path){

		            ResetFields();

		            TargetUrl.value = sFileName;

		            setTimeout(function(){do_preview(sFileName);}, 100); 

		            browse_Frame.location="browse_Media.php?<?php echo $setting ; ?>&Theme=<?php echo $Theme; ?>&MP="+path+"";	

		            row_click(sFileName);

	            }

            	

	            function Refresh(path)

	            {

		            browse_Frame.location="browse_Media.php?<?php echo $setting ; ?>&Theme=<?php echo $Theme; ?>&MP=<?php echo $MediaGalleryPath; ?>&loc="+path+"";

	            }

	            function CreateDir_click()

	            { 

	                if(isDemoMode)

                    {

                        alert("This function is disabled in the demo mode.");

	                    return;

	                }   

		           <?php

						$Style_Display_None;

									if ($AllowCreateFolder!="true")

						{

							echo "alert('".GetString("Disabled")."')";

							echo "return";

						}

					?>		    

	                if(Browser_IsIE7())

	                {

		                IEprompt(promptCallback,'<?php echo GetString("SpecifyNewFolderName"); ?>', "");		

		                function promptCallback(dir)

		                {

			                var tempPath = browse_Frame.location;	

			                tempPath = tempPath + "&action=createfolder&foldername="+dir;

			                browse_Frame.location = tempPath;		

		                }

	                }

	                else

	                {

		                var dir=prompt("<?php echo GetString("SpecifyNewFolderName"); ?>","")

		                if(dir)

		                {

			                var tempPath = browse_Frame.location;	

			                tempPath = tempPath + "&action=createfolder&foldername="+dir;

			                browse_Frame.location = tempPath;			

		                }

	                }

	            }

	            function row_click(path)

	            {	

		            ResetFields();

		            TargetUrl.value=path;

		            do_preview();

	            }	    

        		

	            function SetUpload_FolderPath(path)

	            {	if(path.substring(path.length-1, path.length)=='/')

		            {

			            path=path.substring(0, path.length-1);

		            }

		            upload_image.src="upload.php?<?php echo $setting ; ?>&Theme=<?php echo $Theme; ?>&FP="+path+"&Type=Media";

	            }	

	        </script>

	        <script type="text/javascript" src="../Scripts/Dialog/DialogFoot.js"></script>

	        <script type="text/javascript" src="../Scripts/Dialog/Dialog_InsertMedia.js"></script>

	</body>

</html>

