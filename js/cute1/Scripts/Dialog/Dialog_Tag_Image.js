var OxObfd0=["inp_src","btnbrowse","AlternateText","inp_id","longDesc","Align","optNotSet","optLeft","optRight","optTexttop","optAbsMiddle","optBaseline","optAbsBottom","optBottom","optMiddle","optTop","Border","bordercolor","bordercolor_Preview","inp_width","imgLock","inp_height","constrain_prop","HSpace","VSpace","outer","img_demo","onclick","src","height","width","value","cssText","style","","src_cetemp","id","vspace","hspace","border","borderColor"," ","backgroundColor","align","alt","ValidNumber","ValidID","longdesc","checked","../Images/locked.gif","../Images/1x1.gif","length"];var inp_src=Window_GetElement(window,OxObfd0[0x0],true);var btnbrowse=Window_GetElement(window,OxObfd0[0x1],true);var AlternateText=Window_GetElement(window,OxObfd0[0x2],true);var inp_id=Window_GetElement(window,OxObfd0[0x3],true);var longDesc=Window_GetElement(window,OxObfd0[0x4],true);var Align=Window_GetElement(window,OxObfd0[0x5],true);var optNotSet=Window_GetElement(window,OxObfd0[0x6],true);var optLeft=Window_GetElement(window,OxObfd0[0x7],true);var optRight=Window_GetElement(window,OxObfd0[0x8],true);var optTexttop=Window_GetElement(window,OxObfd0[0x9],true);var optAbsMiddle=Window_GetElement(window,OxObfd0[0xa],true);var optBaseline=Window_GetElement(window,OxObfd0[0xb],true);var optAbsBottom=Window_GetElement(window,OxObfd0[0xc],true);var optBottom=Window_GetElement(window,OxObfd0[0xd],true);var optMiddle=Window_GetElement(window,OxObfd0[0xe],true);var optTop=Window_GetElement(window,OxObfd0[0xf],true);var Border=Window_GetElement(window,OxObfd0[0x10],true);var bordercolor=Window_GetElement(window,OxObfd0[0x11],true);var bordercolor_Preview=Window_GetElement(window,OxObfd0[0x12],true);var inp_width=Window_GetElement(window,OxObfd0[0x13],true);var imgLock=Window_GetElement(window,OxObfd0[0x14],true);var inp_height=Window_GetElement(window,OxObfd0[0x15],true);var constrain_prop=Window_GetElement(window,OxObfd0[0x16],true);var HSpace=Window_GetElement(window,OxObfd0[0x17],true);var VSpace=Window_GetElement(window,OxObfd0[0x18],true);var outer=Window_GetElement(window,OxObfd0[0x19],true);var img_demo=Window_GetElement(window,OxObfd0[0x1a],true); btnbrowse[OxObfd0[0x1b]]=function btnbrowse_onclick(){ function Ox27b(Oxca){if(Oxca){ function Actualsize(){var Ox303= new Image(); Ox303[OxObfd0[0x1c]]=Oxca ;if(Ox303[OxObfd0[0x1e]]>0x0&&Ox303[OxObfd0[0x1d]]>0x0){ inp_width[OxObfd0[0x1f]]=Ox303[OxObfd0[0x1e]] ; inp_height[OxObfd0[0x1f]]=Ox303[OxObfd0[0x1d]] ; FireUIChanged() ;} else { setTimeout(Actualsize,0x190) ;} ;}  ; inp_src[OxObfd0[0x1f]]=Oxca ; setTimeout(Actualsize,0x190) ;} ;}  ; editor.SetNextDialogWindow(window) ;if(Browser_IsSafari()){ editor.ShowSelectImageDialog(Ox27b,inp_src.value,inp_src) ;} else { editor.ShowSelectImageDialog(Ox27b,inp_src.value) ;} ;}  ; UpdateState=function UpdateState_Image(){ img_demo[OxObfd0[0x21]][OxObfd0[0x20]]=element[OxObfd0[0x21]][OxObfd0[0x20]] ;if(Browser_IsWinIE()){ img_demo.mergeAttributes(element) ;} ;if(element[OxObfd0[0x1c]]){ img_demo[OxObfd0[0x1c]]=element[OxObfd0[0x1c]] ;} else { img_demo.removeAttribute(OxObfd0[0x1c]) ;} ;}  ; SyncToView=function SyncToView_Image(){var src; src=element.getAttribute(OxObfd0[0x1c])+OxObfd0[0x22] ;if(element.getAttribute(OxObfd0[0x23])){ src=element.getAttribute(OxObfd0[0x23])+OxObfd0[0x22] ;} ; inp_src[OxObfd0[0x1f]]=src ; inp_width[OxObfd0[0x1f]]=element[OxObfd0[0x1e]] ; inp_height[OxObfd0[0x1f]]=element[OxObfd0[0x1d]] ; inp_id[OxObfd0[0x1f]]=element[OxObfd0[0x24]] ;if(element[OxObfd0[0x25]]<=0x0){ VSpace[OxObfd0[0x1f]]=OxObfd0[0x22] ;} else { VSpace[OxObfd0[0x1f]]=element[OxObfd0[0x25]] ;} ;if(element[OxObfd0[0x26]]<=0x0){ HSpace[OxObfd0[0x1f]]=OxObfd0[0x22] ;} else { HSpace[OxObfd0[0x1f]]=element[OxObfd0[0x26]] ;} ; Border[OxObfd0[0x1f]]=element[OxObfd0[0x27]] ;if(Browser_IsWinIE()){ bordercolor[OxObfd0[0x1f]]=element[OxObfd0[0x21]][OxObfd0[0x28]] ;} else {var arr=revertColor(element[OxObfd0[0x21]].borderColor).split(OxObfd0[0x29]); bordercolor[OxObfd0[0x1f]]=arr[0x0] ;} ; bordercolor[OxObfd0[0x21]][OxObfd0[0x2a]]=bordercolor[OxObfd0[0x1f]]||OxObfd0[0x22] ; bordercolor[OxObfd0[0x21]][OxObfd0[0x2a]]=bordercolor[OxObfd0[0x1f]] ; bordercolor_Preview[OxObfd0[0x21]][OxObfd0[0x2a]]=bordercolor[OxObfd0[0x1f]] ; Align[OxObfd0[0x1f]]=element[OxObfd0[0x2b]] ; AlternateText[OxObfd0[0x1f]]=element[OxObfd0[0x2c]] ; longDesc[OxObfd0[0x1f]]=element[OxObfd0[0x4]] ;}  ; SyncTo=function SyncTo_Image(element){ element[OxObfd0[0x1c]]=inp_src[OxObfd0[0x1f]] ; element.setAttribute(OxObfd0[0x23],inp_src.value) ; element[OxObfd0[0x27]]=Border[OxObfd0[0x1f]] ; element[OxObfd0[0x26]]=HSpace[OxObfd0[0x1f]] ; element[OxObfd0[0x25]]=VSpace[OxObfd0[0x1f]] ;try{ element[OxObfd0[0x1e]]=inp_width[OxObfd0[0x1f]] ; element[OxObfd0[0x1d]]=inp_height[OxObfd0[0x1f]] ;} catch(er){ alert(CE_GetStr(OxObfd0[0x2d])) ;return false;} ;if(element[OxObfd0[0x21]][OxObfd0[0x1e]]||element[OxObfd0[0x21]][OxObfd0[0x1d]]){try{ element[OxObfd0[0x21]][OxObfd0[0x1e]]=inp_width[OxObfd0[0x1f]] ; element[OxObfd0[0x21]][OxObfd0[0x1d]]=inp_height[OxObfd0[0x1f]] ;} catch(er){ alert(CE_GetStr(OxObfd0[0x2d])) ;return false;} ;} ;var Ox296=/[^a-z\d]/i;if(Ox296.test(inp_id.value)){ alert(CE_GetStr(OxObfd0[0x2e])) ;return ;} ; element[OxObfd0[0x24]]=inp_id[OxObfd0[0x1f]] ; element[OxObfd0[0x2b]]=Align[OxObfd0[0x1f]] ; element[OxObfd0[0x2c]]=AlternateText[OxObfd0[0x1f]] ; element[OxObfd0[0x4]]=longDesc[OxObfd0[0x1f]] ; element[OxObfd0[0x21]][OxObfd0[0x28]]=bordercolor[OxObfd0[0x1f]] ;if(element[OxObfd0[0x2f]]==OxObfd0[0x22]||element[OxObfd0[0x2f]]==null){ element.removeAttribute(OxObfd0[0x2f]) ;} ;if(element[OxObfd0[0x4]]==OxObfd0[0x22]||element[OxObfd0[0x4]]==null){ element.removeAttribute(OxObfd0[0x4]) ;} ;if(element[OxObfd0[0x1e]]==0x0){ element.removeAttribute(OxObfd0[0x1e]) ;} ;if(element[OxObfd0[0x1d]]==0x0){ element.removeAttribute(OxObfd0[0x1d]) ;} ;if(element[OxObfd0[0x26]]==OxObfd0[0x22]){ element.removeAttribute(OxObfd0[0x26]) ;} ;if(element[OxObfd0[0x25]]==OxObfd0[0x22]){ element.removeAttribute(OxObfd0[0x25]) ;} ;if(element[OxObfd0[0x24]]==OxObfd0[0x22]){ element.removeAttribute(OxObfd0[0x24]) ;} ;if(element[OxObfd0[0x2b]]==OxObfd0[0x22]){ element.removeAttribute(OxObfd0[0x2b]) ;} ;if(element[OxObfd0[0x27]]==OxObfd0[0x22]){ element.removeAttribute(OxObfd0[0x27]) ;} ;}  ; function toggleConstrains(){if(constrain_prop[OxObfd0[0x30]]){ imgLock[OxObfd0[0x1c]]=OxObfd0[0x31] ; checkConstrains(OxObfd0[0x1e]) ;} else { imgLock[OxObfd0[0x1c]]=OxObfd0[0x32] ;} ;}  ;var checkingConstrains=false; function checkConstrains(Ox31c){if(checkingConstrains){return ;} ; checkingConstrains=true ;try{var Ox3a9,Ox258;if(constrain_prop[OxObfd0[0x30]]){var Ox303= new Image(); Ox303[OxObfd0[0x1c]]=inp_src[OxObfd0[0x1f]] ;var Ox31d=Ox303[OxObfd0[0x1e]];var Ox31e=Ox303[OxObfd0[0x1d]];if((Ox31d>0x0)&&(Ox31e>0x0)){var Oxd6=inp_width[OxObfd0[0x1f]];var Ox281=inp_height[OxObfd0[0x1f]];if(Ox31c==OxObfd0[0x1e]){if(Oxd6[OxObfd0[0x33]]==0x0||isNaN(Oxd6)){ inp_width[OxObfd0[0x1f]]=OxObfd0[0x22] ; inp_height[OxObfd0[0x1f]]=OxObfd0[0x22] ;} else { Ox281=parseInt(Oxd6*Ox31e/Ox31d) ; inp_height[OxObfd0[0x1f]]=Ox281 ;} ;} ;if(Ox31c==OxObfd0[0x1d]){if(Ox281[OxObfd0[0x33]]==0x0||isNaN(Ox281)){ inp_width[OxObfd0[0x1f]]=OxObfd0[0x22] ; inp_height[OxObfd0[0x1f]]=OxObfd0[0x22] ;} else { Oxd6=parseInt(Ox281*Ox31d/Ox31e) ; inp_width[OxObfd0[0x1f]]=Oxd6 ;} ;} ;} ;} ;} finally{ checkingConstrains=false ;} ;}  ; bordercolor[OxObfd0[0x1b]]=bordercolor_Preview[OxObfd0[0x1b]]=function bordercolor_onclick(){ SelectColor(bordercolor,bordercolor_Preview) ;}  ;