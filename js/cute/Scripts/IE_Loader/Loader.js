var OxO3019=["head","script","language","javascript","type","text/javascript","src","id","undefined","Microsoft.XMLHTTP","readyState","onreadystatechange","","document","length","element \x27","\x27 not found","returnValue","preventDefault","cancelBubble","stopPropagation","onchange","oninitialized","command","commandui","commandvalue","oncommand","string","event","_fireEventFunction","parentNode","_IsCuteEditor","True","readOnly","_IsRichDropDown","null","value","selectedIndex","nodeName","TR","cells","display","style","nextSibling","innerHTML","\x3Cimg src=\x22","/Images/t-minus.gif\x22\x3E","CuteEditor_CollapseTreeDropDownItem(this,\x22","\x22)","onclick","none","/Images/t-plus.gif\x22\x3E","CuteEditor_ExpandTreeDropDownItem(this,\x22","//TODO: event not found? throw error ?","all","UNSELECTABLE","on","tabIndex","-1","contentWindow","contentDocument","parentWindow","frames","frameElement","//TODO:frame contentWindow not found?","caller","arguments","parent","top","opener","srcElement","target","//TODO: srcElement not found? throw error ?","fromElement","relatedTarget","toElement","keyCode","clientX","clientY","offsetX","offsetY","button","ctrlKey","altKey","shiftKey","CuteEditor_GetEditor(this).ExecImageCommand(this.getAttribute(\x27Command\x27),this.getAttribute(\x27CommandUI\x27),this.getAttribute(\x27CommandArgument\x27),this)","CuteEditor_GetEditor(this).PostBack(this.getAttribute(\x27Command\x27))","this.onmouseout();CuteEditor_GetEditor(this).DropMenu(this.getAttribute(\x27Group\x27),this)","ResourceDir","Theme","/Themes/","/Images/all.png","/Images/blank2020.gif","IMG","Command","Group","ThemeIndex","width","20px","height","backgroundImage","url(",")","backgroundPosition","0 -","px","className","separator","CuteEditorButton","CuteEditor_ButtonCommandOver(this)","onmouseover","CuteEditor_ButtonCommandOut(this)","onmouseout","CuteEditor_ButtonCommandDown(this)","onmousedown","CuteEditor_ButtonCommandUp(this)","onmouseup","oncontextmenu","ondragstart","PostBack","ondblclick","_ToolBarID","_CodeViewToolBarID","_FrameID"," CuteEditorFrame"," CuteEditorToolbar","buttonInitialized","isover","CuteEditorButtonOver","CuteEditorButtonDown","CuteEditorDown","border","solid 1px #0A246A","backgroundColor","#b6bdd2","padding","1px","solid 1px #f5f5f4","inset 1px","IsCommandDisabled","CuteEditorButtonDisabled","IsCommandActive","CuteEditorButtonActive","(","href","location",",DanaInfo=",",","+","scriptProperties","GetScriptProperty","/Scripts/IE_Implementation/CuteEditorImplementation.js?i=1","CuteEditorImplementation","function","GET","\x26getModified=1","loadScript","status","Failed to load impl time!","cursor","body","InitializeCode","block","contentEditable","no-drop"]; function include(Ox8ef,Ox2bc){var Ox8f0=document.getElementsByTagName(OxO3019[0x0]).item(0x0);var Ox8f1=document.getElementById(Ox8ef);if(Ox8f1){ Ox8f0.removeChild(Ox8f1) ;} ;var Ox8f2=document.createElement(OxO3019[0x1]); Ox8f2.setAttribute(OxO3019[0x2],OxO3019[0x3]) ; Ox8f2.setAttribute(OxO3019[0x4],OxO3019[0x5]) ; Ox8f2.setAttribute(OxO3019[0x6],Ox2bc) ; Ox8f2.setAttribute(OxO3019[0x7],Ox8ef) ; Ox8f0.appendChild(Ox8f2) ;}  ; function CreateXMLHttpRequest(){try{if( typeof (XMLHttpRequest)!=OxO3019[0x8]){return  new XMLHttpRequest();} ;if( typeof (ActiveXObject)!=OxO3019[0x8]){return  new ActiveXObject(OxO3019[0x9]);} ;} catch(x){return null;} ;}  ; function LoadXMLAsync(Ox8f4,Ox2bc,Ox153,Ox8f5){var Ox79a=CreateXMLHttpRequest(); function Ox8f6(){if(Ox79a[OxO3019[0xa]]!=0x4){return ;} ; Ox79a[OxO3019[0xb]]= new Function() ;var Ox1a7=Ox79a; Ox79a=null ; Ox153(Ox1a7) ;}  ; Ox79a[OxO3019[0xb]]=Ox8f6 ; Ox79a.open(Ox8f4,Ox2bc,true) ; Ox79a.send(Ox8f5||OxO3019[0xc]) ;}  ; function Window_GetElement(Ox140,Ox11d,Ox15b){var Oxd=Ox140[OxO3019[0xd]].getElementById(Ox11d);if(Oxd){return Oxd;} ;var Oxc2=Ox140[OxO3019[0xd]].getElementsByName(Ox11d);if(Oxc2[OxO3019[0xe]]>0x0){return Oxc2.item(0x0);} ;if(Ox15b){throw ( new Error(OxO3019[0xf]+Ox11d+OxO3019[0x10]));} ;return null;}  ; function Event_PreventDefault(Ox161){ Ox161=Event_GetEvent(Ox161) ; Ox161[OxO3019[0x11]]=false ;if(Ox161[OxO3019[0x12]]){ Ox161.preventDefault() ;} ;}  ; function Event_CancelBubble(Ox161){ Ox161=Event_GetEvent(Ox161) ; Ox161[OxO3019[0x13]]=true ;if(Ox161[OxO3019[0x14]]){ Ox161.stopPropagation() ;} ;return false;}  ; function Event_CancelEvent(Ox161){ Ox161=Event_GetEvent(Ox161) ; Event_PreventDefault(Ox161) ;return Event_CancelBubble(Ox161);}  ; function CuteEditor_AddMainMenuItems(Ox56c){}  ; function CuteEditor_AddDropMenuItems(Ox56c,Ox573){}  ; function CuteEditor_AddTagMenuItems(Ox56c,Ox575){}  ; function CuteEditor_AddVerbMenuItems(Ox56c,Ox575){}  ; function CuteEditor_OnInitialized(editor){}  ; function CuteEditor_OnCommand(editor,Ox579,Ox57a,Oxad){}  ; function CuteEditor_OnChange(editor){}  ; function CuteEditor_FilterCode(editor,Ox188){return Ox188;}  ; function CuteEditor_FilterHTML(editor,Ox19e){return Ox19e;}  ; function CuteEditor_FireChange(editor){ window.CuteEditor_OnChange(editor) ; CuteEditor_FireEvent(editor,OxO3019[0x15],null) ;}  ; function CuteEditor_FireInitialized(editor){ window.CuteEditor_OnInitialized(editor) ; CuteEditor_FireEvent(editor,OxO3019[0x16],null) ;}  ; function CuteEditor_FireCommand(editor,Ox579,Ox57a,Oxad){var Oxca=window.CuteEditor_OnCommand(editor,Ox579,Ox57a,Oxad);if(Oxca==true){return true;} ;var Ox581={}; Ox581[OxO3019[0x17]]=Ox579 ; Ox581[OxO3019[0x18]]=Ox57a ; Ox581[OxO3019[0x19]]=Oxad ; Ox581[OxO3019[0x11]]=true ; CuteEditor_FireEvent(editor,OxO3019[0x1a],Ox581) ;if(Ox581[OxO3019[0x11]]==false){return true;} ;}  ; function CuteEditor_FireEvent(editor,Ox583,Ox584){if(Ox584==null){ Ox584={} ;} ;var Ox585=editor.getAttribute(Ox583);if(Ox585){if( typeof (Ox585)==OxO3019[0x1b]){ editor[OxO3019[0x1d]]= new Function(OxO3019[0x1c],Ox585) ;} else { editor[OxO3019[0x1d]]=Ox585 ;} ; editor._fireEventFunction(Ox584) ;} ;}  ; function CuteEditor_GetEditor(element){for(var Oxdc=element;Oxdc!=null;Oxdc=Oxdc[OxO3019[0x1e]]){if(Oxdc.getAttribute(OxO3019[0x1f])==OxO3019[0x20]){return Oxdc;} ;} ;return null;}  ; function CuteEditor_DropDownCommand(element,Ox8f8){var editor=CuteEditor_GetEditor(element);if(editor[OxO3019[0x21]]){return ;} ;if(element.getAttribute(OxO3019[0x22])==OxO3019[0x20]){var Oxce=element.GetValue();if(Oxce==OxO3019[0x23]){ Oxce=OxO3019[0xc] ;} ;var Ox117=element.GetText();if(Ox117==OxO3019[0x23]){ Ox117=OxO3019[0xc] ;} ; element.SetSelectedIndex(0x0) ; editor.ExecCommand(Ox8f8,false,Oxce,Ox117) ;} else {if(!editor[OxO3019[0x21]]&&element[OxO3019[0x24]]){var Oxce=element[OxO3019[0x24]];if(Oxce==OxO3019[0x23]){ Oxce=OxO3019[0xc] ;} ; element[OxO3019[0x25]]=0x0 ; editor.ExecCommand(Ox8f8,false,Oxce,Ox117) ;} else { element[OxO3019[0x25]]=0x0 ;} ;} ; editor.FocusDocument() ;}  ; function CuteEditor_ExpandTreeDropDownItem(src,Ox643){var Ox611=null;while(src!=null){if(src[OxO3019[0x26]]==OxO3019[0x27]){ Ox611=src ;break ;} ; src=src[OxO3019[0x1e]] ;} ;var Ox16=Ox611[OxO3019[0x28]].item(0x0); Ox611[OxO3019[0x2b]][OxO3019[0x2a]][OxO3019[0x29]]=OxO3019[0xc] ; Ox16[OxO3019[0x2c]]=OxO3019[0x2d]+Ox643+OxO3019[0x2e] ; Ox611[OxO3019[0x31]]= new Function(OxO3019[0x2f]+Ox643+OxO3019[0x30]) ;}  ; function CuteEditor_CollapseTreeDropDownItem(src,Ox643){var Ox611=null;while(src!=null){if(src[OxO3019[0x26]]==OxO3019[0x27]){ Ox611=src ;break ;} ; src=src[OxO3019[0x1e]] ;} ;var Ox16=Ox611[OxO3019[0x28]].item(0x0); Ox611[OxO3019[0x2b]][OxO3019[0x2a]][OxO3019[0x29]]=OxO3019[0x32] ; Ox16[OxO3019[0x2c]]=OxO3019[0x2d]+Ox643+OxO3019[0x33] ; Ox611[OxO3019[0x31]]= new Function(OxO3019[0x34]+Ox643+OxO3019[0x30]) ;}  ; function Event_GetEvent(Ox161){ Ox161=Event_FindEvent(Ox161) ;if(Ox161==null){ Debug_Todo(OxO3019[0x35]) ;} ;return Ox161;}  ; function Element_GetAllElements(p){var arr=[];for(var i=0x0;i<p[OxO3019[0x36]][OxO3019[0xe]];i++){ arr.push(p[OxO3019[0x36]].item(i)) ;} ;return arr;}  ; function Element_SetUnselectable(element){ element.setAttribute(OxO3019[0x37],OxO3019[0x38]) ; element.setAttribute(OxO3019[0x39],OxO3019[0x3a]) ;var arr=Element_GetAllElements(element);var len=arr[OxO3019[0xe]];if(!len){return ;} ;for(var i=0x0;i<len;i++){ arr[i].setAttribute(OxO3019[0x37],OxO3019[0x38]) ; arr[i].setAttribute(OxO3019[0x39],OxO3019[0x3a]) ;} ;}  ; function Frame_GetContentWindow(Ox266){if(Ox266[OxO3019[0x3b]]){return Ox266[OxO3019[0x3b]];} ;if(Ox266[OxO3019[0x3c]]){if(Ox266[OxO3019[0x3c]][OxO3019[0x3d]]){return Ox266[OxO3019[0x3c]][OxO3019[0x3d]];} ;} ;var Ox140;if(Ox266[OxO3019[0x7]]){ Ox140=window[OxO3019[0x3e]][Ox266[OxO3019[0x7]]] ;if(Ox140){return Ox140;} ;} ;var len=window[OxO3019[0x3e]][OxO3019[0xe]];for(var i=0x0;i<len;i++){ Ox140=window[OxO3019[0x3e]][i] ;if(Ox140[OxO3019[0x3f]]==Ox266){return Ox140;} ;if(Ox140[OxO3019[0xd]]==Ox266[OxO3019[0x3c]]){return Ox140;} ;} ; Debug_Todo(OxO3019[0x40]) ;}  ; function Array_IndexOf(arr,Ox163){for(var i=0x0;i<arr[OxO3019[0xe]];i++){if(arr[i]==Ox163){return i;} ;} ;return -0x1;}  ; function Array_Contains(arr,Ox163){return Array_IndexOf(arr,Ox163)!=-0x1;}  ; function clearArray(Ox166){for(var i=0x0;i<Ox166[OxO3019[0xe]];i++){ Ox166[i]=null ;} ;}  ; function Event_FindEvent(Ox161){if(Ox161&&Ox161[OxO3019[0x12]]){return Ox161;} ;if(window[OxO3019[0x1c]]){return window[OxO3019[0x1c]];} ;return Event_FindEvent_FindEventFromWindows();}  ; function Event_FindEvent_FindEventFromCallers(){var Ox169=Event_GetEvent[OxO3019[0x41]];for(var i=0x0;i<0x64;i++){if(!Ox169){break ;} ;var Ox161=Ox169[OxO3019[0x42]][0x0];if(Ox161&&Ox161[OxO3019[0x12]]){return Ox161;} ; Ox169=Ox169[OxO3019[0x41]] ;} ;}  ; function Event_FindEvent_FindEventFromWindows(){var arr=[];return Ox16b(window); function Ox16b(Ox140){if(Ox140==null){return null;} ;if(Ox140[OxO3019[0x1c]]){return Ox140[OxO3019[0x1c]];} ;if(Array_Contains(arr,Ox140)){return null;} ; arr.push(Ox140) ;var Ox16c=[];if(Ox140[OxO3019[0x43]]!=Ox140){ Ox16c.push(Ox140.parent) ;} ;if(Ox140[OxO3019[0x44]]!=Ox140[OxO3019[0x43]]){ Ox16c.push(Ox140.top) ;} ;if(Ox140[OxO3019[0x45]]){ Ox16c.push(Ox140.opener) ;} ;for(var i=0x0;i<Ox140[OxO3019[0x3e]][OxO3019[0xe]];i++){ Ox16c.push(Ox140[OxO3019[0x3e]][i]) ;} ;for(var i=0x0;i<Ox16c[OxO3019[0xe]];i++){try{var Ox161=Ox16b(Ox16c[i]);if(Ox161){return Ox161;} ;} catch(x){} ;} ;return null;}  ;}  ; function Event_GetSrcElement(Ox161){ Ox161=Event_GetEvent(Ox161) ;if(Ox161[OxO3019[0x46]]){return Ox161[OxO3019[0x46]];} ;if(Ox161[OxO3019[0x47]]){return Ox161[OxO3019[0x47]];} ; Debug_Todo(OxO3019[0x48]) ;return null;}  ; function Event_GetFromElement(Ox161){ Ox161=Event_GetEvent(Ox161) ;if(Ox161[OxO3019[0x49]]){return Ox161[OxO3019[0x49]];} ;if(Ox161[OxO3019[0x4a]]){return Ox161[OxO3019[0x4a]];} ;return null;}  ; function Event_GetToElement(Ox161){ Ox161=Event_GetEvent(Ox161) ;if(Ox161[OxO3019[0x4b]]){return Ox161[OxO3019[0x4b]];} ;if(Ox161[OxO3019[0x4a]]){return Ox161[OxO3019[0x4a]];} ;return null;}  ; function Event_GetKeyCode(Ox161){ Ox161=Event_GetEvent(Ox161) ;return Ox161[OxO3019[0x4c]];}  ; function Event_GetClientX(Ox161){ Ox161=Event_GetEvent(Ox161) ;return Ox161[OxO3019[0x4d]];}  ; function Event_GetClientY(Ox161){ Ox161=Event_GetEvent(Ox161) ;return Ox161[OxO3019[0x4e]];}  ; function Event_GetOffsetX(Ox161){ Ox161=Event_GetEvent(Ox161) ;return Ox161[OxO3019[0x4f]];}  ; function Event_GetOffsetY(Ox161){ Ox161=Event_GetEvent(Ox161) ;return Ox161[OxO3019[0x50]];}  ; function Event_IsLeftButton(Ox161){ Ox161=Event_GetEvent(Ox161) ;return Ox161[OxO3019[0x51]]==0x1;}  ; function Event_IsCtrlKey(Ox161){ Ox161=Event_GetEvent(Ox161) ;return Ox161[OxO3019[0x52]];}  ; function Event_IsAltKey(Ox161){ Ox161=Event_GetEvent(Ox161) ;return Ox161[OxO3019[0x53]];}  ; function Event_IsShiftKey(Ox161){ Ox161=Event_GetEvent(Ox161) ;return Ox161[OxO3019[0x54]];}  ; function CuteEditor_BasicInitialize(editor){var Ox60b= new Function(OxO3019[0x55]);var Ox978= new Function(OxO3019[0x56]);var Ox8fd= new Function(OxO3019[0x57]);var Ox8fe=editor.GetScriptProperty(OxO3019[0x58]);var Ox8ff=editor.GetScriptProperty(OxO3019[0x59]);var Ox900=Ox8fe+OxO3019[0x5a]+Ox8ff+OxO3019[0x5b];var Ox901=Ox8fe+OxO3019[0x5c];var images=editor.getElementsByTagName(OxO3019[0x5d]);var len=images[OxO3019[0xe]];for(var i=0x0;i<len;i++){var img=images[i];var Oxc1=img.getAttribute(OxO3019[0x5e]);var Ox573=img.getAttribute(OxO3019[0x5f]);if(!(Oxc1||Ox573)){continue ;} ;var Ox902=img.getAttribute(OxO3019[0x60]);if(parseInt(Ox902)>=0x0){ img[OxO3019[0x2a]][OxO3019[0x61]]=OxO3019[0x62] ; img[OxO3019[0x2a]][OxO3019[0x63]]=OxO3019[0x62] ; img[OxO3019[0x6]]=Ox901 ; img[OxO3019[0x2a]][OxO3019[0x64]]=OxO3019[0x65]+Ox900+OxO3019[0x66] ; img[OxO3019[0x2a]][OxO3019[0x67]]=OxO3019[0x68]+(Ox902*0x14)+OxO3019[0x69] ; img[OxO3019[0x2a]][OxO3019[0x29]]=OxO3019[0xc] ;} ;if(img[OxO3019[0x6a]]!=OxO3019[0x6b]){ img[OxO3019[0x6a]]=OxO3019[0x6c] ; img[OxO3019[0x6e]]= new Function(OxO3019[0x6d]) ; img[OxO3019[0x70]]= new Function(OxO3019[0x6f]) ; img[OxO3019[0x72]]= new Function(OxO3019[0x71]) ; img[OxO3019[0x74]]= new Function(OxO3019[0x73]) ;} ;if(!img[OxO3019[0x75]]){ img[OxO3019[0x75]]=Event_CancelEvent ;} ;if(!img[OxO3019[0x76]]){ img[OxO3019[0x76]]=Event_CancelEvent ;} ;if(Oxc1){var Ox169=img.getAttribute(OxO3019[0x77])==OxO3019[0x20]?Ox978:Ox60b;if(img[OxO3019[0x31]]==null){ img[OxO3019[0x31]]=Ox169 ;} ;if(img[OxO3019[0x78]]==null){ img[OxO3019[0x78]]=Ox169 ;} ;} else {if(Ox573){if(img[OxO3019[0x31]]==null){ img[OxO3019[0x31]]=Ox8fd ;} ;} ;} ;} ;var Ox677=Window_GetElement(window,editor.GetScriptProperty(OxO3019[0x79]),true);var Ox678=Window_GetElement(window,editor.GetScriptProperty(OxO3019[0x7a]),true);var Ox674=Window_GetElement(window,editor.GetScriptProperty(OxO3019[0x7b]),true); Ox674[OxO3019[0x6a]]+=OxO3019[0x7c] ; Ox677[OxO3019[0x6a]]+=OxO3019[0x7d] ; Ox678[OxO3019[0x6a]]+=OxO3019[0x7d] ; Element_SetUnselectable(Ox677) ; Element_SetUnselectable(Ox678) ;}  ; function CuteEditor_ButtonOver(element){if(!element[OxO3019[0x7e]]){ element[OxO3019[0x75]]=Event_CancelEvent ; element[OxO3019[0x70]]=CuteEditor_ButtonOut ; element[OxO3019[0x72]]=CuteEditor_ButtonDown ; element[OxO3019[0x74]]=CuteEditor_ButtonUp ; Element_SetUnselectable(element) ; element[OxO3019[0x7e]]=true ;} ; element[OxO3019[0x7f]]=true ; element[OxO3019[0x6a]]=OxO3019[0x80] ;}  ; function CuteEditor_ButtonOut(){var element=this; element[OxO3019[0x6a]]=OxO3019[0x6c] ; element[OxO3019[0x7f]]=false ;}  ; function CuteEditor_ButtonDown(){if(!Event_IsLeftButton()){return ;} ;var element=this; element[OxO3019[0x6a]]=OxO3019[0x81] ;}  ; function CuteEditor_ButtonUp(){if(!Event_IsLeftButton()){return ;} ;var element=this;if(element[OxO3019[0x7f]]){ element[OxO3019[0x6a]]=OxO3019[0x80] ;} else { element[OxO3019[0x6a]]=OxO3019[0x82] ;} ;}  ; function CuteEditor_ColorPicker_ButtonOver(element){if(!element[OxO3019[0x7e]]){ element[OxO3019[0x75]]=Event_CancelEvent ; element[OxO3019[0x70]]=CuteEditor_ColorPicker_ButtonOut ; element[OxO3019[0x72]]=CuteEditor_ColorPicker_ButtonDown ; Element_SetUnselectable(element) ; element[OxO3019[0x7e]]=true ;} ; element[OxO3019[0x7f]]=true ; element[OxO3019[0x2a]][OxO3019[0x83]]=OxO3019[0x84] ; element[OxO3019[0x2a]][OxO3019[0x85]]=OxO3019[0x86] ; element[OxO3019[0x2a]][OxO3019[0x87]]=OxO3019[0x88] ;}  ; function CuteEditor_ColorPicker_ButtonOut(){var element=this; element[OxO3019[0x7f]]=false ; element[OxO3019[0x2a]][OxO3019[0x83]]=OxO3019[0x89] ; element[OxO3019[0x2a]][OxO3019[0x85]]=OxO3019[0xc] ; element[OxO3019[0x2a]][OxO3019[0x87]]=OxO3019[0x88] ;}  ; function CuteEditor_ColorPicker_ButtonDown(){var element=this; element[OxO3019[0x2a]][OxO3019[0x83]]=OxO3019[0x8a] ; element[OxO3019[0x2a]][OxO3019[0x85]]=OxO3019[0xc] ; element[OxO3019[0x2a]][OxO3019[0x87]]=OxO3019[0x88] ;}  ; function CuteEditor_ButtonCommandOver(element){ element[OxO3019[0x7f]]=true ;if(element[OxO3019[0x8b]]){ element[OxO3019[0x6a]]=OxO3019[0x8c] ;} else { element[OxO3019[0x6a]]=OxO3019[0x80] ;} ;}  ; function CuteEditor_ButtonCommandOut(element){ element[OxO3019[0x7f]]=false ;if(element[OxO3019[0x8d]]){ element[OxO3019[0x6a]]=OxO3019[0x8e] ;} else {if(element[OxO3019[0x8b]]){ element[OxO3019[0x6a]]=OxO3019[0x8c] ;} else { element[OxO3019[0x6a]]=OxO3019[0x6c] ;} ;} ;}  ; function CuteEditor_ButtonCommandDown(element){if(!Event_IsLeftButton()){return ;} ; element[OxO3019[0x6a]]=OxO3019[0x81] ;}  ; function CuteEditor_ButtonCommandUp(element){if(!Event_IsLeftButton()){return ;} ;if(element[OxO3019[0x8b]]){ element[OxO3019[0x6a]]=OxO3019[0x8c] ;return ;} ;if(element[OxO3019[0x7f]]){ element[OxO3019[0x6a]]=OxO3019[0x80] ;} else {if(element[OxO3019[0x8d]]){ element[OxO3019[0x6a]]=OxO3019[0x8e] ;} else { element[OxO3019[0x6a]]=OxO3019[0x6c] ;} ;} ;}  ;var CuteEditorGlobalFunctions=[CuteEditor_GetEditor,CuteEditor_ButtonOver,CuteEditor_ButtonOut,CuteEditor_ButtonDown,CuteEditor_ButtonUp,CuteEditor_ColorPicker_ButtonOver,CuteEditor_ColorPicker_ButtonOut,CuteEditor_ColorPicker_ButtonDown,CuteEditor_ButtonCommandOver,CuteEditor_ButtonCommandOut,CuteEditor_ButtonCommandDown,CuteEditor_ButtonCommandUp,CuteEditor_DropDownCommand,CuteEditor_ExpandTreeDropDownItem,CuteEditor_CollapseTreeDropDownItem,CuteEditor_OnInitialized,CuteEditor_OnCommand,CuteEditor_OnChange,CuteEditor_AddVerbMenuItems,CuteEditor_AddTagMenuItems,CuteEditor_AddMainMenuItems,CuteEditor_AddDropMenuItems,CuteEditor_FilterCode,CuteEditor_FilterHTML]; function SetupCuteEditorGlobalFunctions(){for(var i=0x0;i<CuteEditorGlobalFunctions[OxO3019[0xe]];i++){var Ox169=CuteEditorGlobalFunctions[i];var name=Ox169+OxO3019[0xc]; name=name.substr(0x8,name.indexOf(OxO3019[0x8f])-0x8).replace(/\s/g,OxO3019[0xc]) ;if(!window[name]){ window[name]=Ox169 ;} ;} ;}  ; SetupCuteEditorGlobalFunctions() ;var __danainfo=null;var danaurl=window[OxO3019[0x91]][OxO3019[0x90]];var danapos=danaurl.indexOf(OxO3019[0x92]);if(danapos!=-0x1){var pluspos1=danaurl.indexOf(OxO3019[0x93],danapos+0xa);var pluspos2=danaurl.indexOf(OxO3019[0x94],danapos+0xa);if(pluspos1!=-0x1&&pluspos1<pluspos2){ pluspos2=pluspos1 ;} ; __danainfo=danaurl.substring(danapos,pluspos2)+OxO3019[0x94] ;} ; function CuteEditor_GetScriptProperty(name){var Oxce=this[OxO3019[0x95]][name];if(Oxce&&__danainfo){if(name==OxO3019[0x58]){return Oxce+__danainfo;} ;var Ox730=this[OxO3019[0x95]][OxO3019[0x58]];if(Oxce.substr(0x0,Ox730.length)==Ox730){return Ox730+__danainfo+Oxce.substring(Ox730.length);} ;} ;return Oxce;}  ; function CuteEditor_SetScriptProperty(name,Oxce){if(Oxce==null){ this[OxO3019[0x95]][name]=null ;} else { this[OxO3019[0x95]][name]=String(Oxce) ;} ;}  ; function CuteEditorInitialize(Ox90f,Ox910){var editor=Window_GetElement(window,Ox90f,true); editor[OxO3019[0x95]]=Ox910 ; editor[OxO3019[0x96]]=CuteEditor_GetScriptProperty ;var Ox674=Window_GetElement(window,editor.GetScriptProperty(OxO3019[0x7b]),true);var editwin=Frame_GetContentWindow(Ox674);var editdoc=editwin[OxO3019[0xd]];var Ox911=false;var Ox912;var Ox913=false;var Ox914=editor.GetScriptProperty(OxO3019[0x58])+OxO3019[0x97]; function Ox915(){if( typeof (window[OxO3019[0x98]])==OxO3019[0x99]){return ;} ;try{ LoadXMLAsync(OxO3019[0x9a],Ox914+OxO3019[0x9b],Ox916) ;} catch(x){ include(OxO3019[0x9c],Ox914) ;var Ox979=setInterval(function (){if(window[OxO3019[0x98]]){ clearInterval(Ox979) ;if(Ox911){ Ox918() ;} ;} ;} ,0x64);} ;}  ; function Ox916(Ox1a7){if(Ox1a7[OxO3019[0x9d]]!=0xc8){ alert(OxO3019[0x9e]) ;return ;} ; CuteEditorInstallScriptCode(Ox1a7.responseText,OxO3019[0x98]) ;if(Ox911){ Ox918() ;} ;}  ; function Ox918(){if(Ox913){return ;} ; Ox913=true ; window.CuteEditorImplementation(editor) ;try{ editor[OxO3019[0x2a]][OxO3019[0x9f]]=OxO3019[0xc] ;} catch(x){} ;try{ editdoc[OxO3019[0xa0]][OxO3019[0x2a]][OxO3019[0x9f]]=OxO3019[0xc] ;} catch(x){} ;var Ox919=editor.GetScriptProperty(OxO3019[0xa1]);if(Ox919){ editor.Eval(Ox919) ;} ;}  ; function Ox91a(){if(!window[OxO3019[0xd]][OxO3019[0xa0]].contains(editor)){return ;} ;try{ Ox674=Window_GetElement(window,editor.GetScriptProperty(OxO3019[0x7b]),true) ; editwin=Frame_GetContentWindow(Ox674) ; editdoc=editwin[OxO3019[0xd]] ; x=editdoc[OxO3019[0xa0]] ;} catch(x){ setTimeout(Ox91a,0x64) ;return ;} ;if(!editdoc[OxO3019[0xa0]]){ setTimeout(Ox91a,0x64) ;return ;} ;if(!Ox911){ Ox674[OxO3019[0x2a]][OxO3019[0x29]]=OxO3019[0xa2] ; editdoc[OxO3019[0xa0]][OxO3019[0xa3]]=true ; Ox911=true ; setTimeout(Ox91a,0x64) ;return ;} ;if( typeof (window[OxO3019[0x98]])==OxO3019[0x99]){ Ox918() ;} else {try{ editdoc[OxO3019[0xa0]][OxO3019[0x2a]][OxO3019[0x9f]]=OxO3019[0xa4] ;} catch(x){} ;} ;}  ; CuteEditor_BasicInitialize(editor) ; Ox915() ; Ox91a() ;}  ; function CuteEditorInstallScriptCode(Ox896,Ox897){ eval(Ox896) ; window[Ox897]=eval(Ox897) ;}  ;