<div class="hidden-phone">
    <div class="container white-container" style="padding-top:16px; z-index: 150">
        <div class="stkilda_nav">
        <div class="row-fluid">
            <div class="span12">
                <?php
                    $menus = $this->Menu_model->get_menus();
                    $total_menus = count($menus);
                     $i = 1;
                    foreach($menus as $menu){
                      $link_pos = '';
                      $link_pos = ($i == 1 ? 'first_link' : ($i >= $total_menus ? 'last_link' : ''));
					  $link_pos_menu = '';
					  $link_pos_menu = ($i == 1 ? 'first_link_menu' : ($i >= $total_menus ? 'last_link_menu' : ''));
                      $url3 = '#';
                      if($menu['url'] != ''){
                       if(is_numeric($menu['url'])){
                           $url3 = base_url().'page/pages/'.$menu['url'];
                       }else{
                           $url3 = $menu['url'];
                       }
                      }	
                      echo '<div class="span2 header-menu '.$link_pos_menu.'">
                                <div class="header-menu-title '.$link_pos.'"><a href="'.$url3.'">'.$menu['name'].'</a></div>';
                      
                      /* check for submenu */
                      $links = $this->Menu_model->get_links($menu['id'],0);
                      if($links != NULL){
                        $submenu_pos = '';
                        $submenu_pos = ($i == 1 ? 'first_submenu' : ($i >= $total_menus ? 'last_submenu' : ''));
                        echo '<div class="header-submenu '.$submenu_pos.'">
                                <div class="header-submenu-content-list">';
                                    foreach($links as $link){
                                       $url = '#';
                                       if($link['url'] != ''){
                                           if(is_numeric($link['url'])){
                                               $url = base_url().'page/pages/'.$link['url'];
                                           }else{
                                               $url = $link['url'];
                                           }
                                       }
                                       $pos = strpos($link['name'],'30-');
                                        
                                       if( $pos > 0){
                                            echo '<div class="header-submenu-list"><a target="_blank" href="'.$url.'">'.$link['name'].'</a>';
                                       }else{
                                           echo '<div class="header-submenu-list"><a href="'.$url.'">'.$link['name'].'</a>';
                                       }
                                       
                                       /* check for sub sub menu */
                                       $child_links = $this->Menu_model->get_child_links($link['id']); 
                                       if($child_links != NULL){
                                           $sub_sub_menu_pos = '';
                                           $sub_sub_menu_pos = ($i >= $total_menus ? 'header-sub-sub-menu-last' : '');
                                           echo '<div class="header-sub-sub-menu '.$sub_sub_menu_pos.'">
                                                    <div class="header-sub-submenu-content-list">';
                                                        foreach($child_links as $c){
                                                            $url2 = '#';
                                                            if($c['url'] != ''){
                                                                if(is_numeric($c['url'])){
                                                                   $url2 = base_url().'page/pages/'.$c['url'];
                                                                }else{
                                                                   $url2 = $c['url'];
                                                                }
                                                             }
                                                            if(strpos($url2,'Flipbook') > 0){
                                                                echo '<div class="header-sub-submenu-list"><a target="_blank" href="'.$url2.'">'.$c['name'].'</a></div>';
                                                            }else{
                                                                echo '<div class="header-sub-submenu-list"><a href="'.$url2.'">'.$c['name'].'</a></div>';
                                                            }
                                                        }//foreach $child_links
                                                    
                                            echo '  </div>
                                                  </div>';//<!--header-sub-sub-menu-->
                                       }
                                       
                                       
                                       echo '</div>';//<!--header-submenu-list-->
                                    }//foreach $links as $link		
                        echo '   </div>
                              </div>';//<!--header-submenu-->
                      }//if $links
                      echo '</div>'; //<!--span2 header-menu-->
                      $i++;
                    }//foreach $menus as $menu
                ?>
            </div>
        </div>
        </div><!--stkilda_nav-->
    </div><!--container-->
</div><!--hidden-phone-->
