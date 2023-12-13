<?php
class admin_navPts extends modulePts {
   public function getBreadcrumbsList() {
      $res = array(
         array(
            'label' => PTS_WP_PLUGIN_NAME,
            'url' => framePts::_()->getModule('adminmenu')->getMainLink()
         ) ,
      );
      $activeTab = framePts::_()->getModule('options')->getActiveTab();
      if (!empty($activeTab) && $activeTab != 'main_page') {
         $tabs = framePts::_()->getModule('options')->getTabs();
         if (!empty($tabs) && isset($tabs[$activeTab])) {
            if (isset($tabs[$activeTab]['add_bread']) && !empty($tabs[$activeTab]['add_bread'])) {
               if (!is_array($tabs[$activeTab]['add_bread'])) $tabs[$activeTab]['add_bread'] = array(
                  $tabs[$activeTab]['add_bread']
               );
               foreach ($tabs[$activeTab]['add_bread'] as $addForBread) {
                  $res[] = array(
                     'label' => $tabs[$addForBread]['label'],
                     'url' => $tabs[$addForBread]['url'],
                  );
               }
            }
            if ($activeTab == 'popup_edit') {
               $id = (int)reqPts::getVar('id', 'get');
               if ($id) {
                  $tabs[$activeTab]['url'] .= '&id=' . $id;
               }
            }
            $res[] = array(
               'label' => $tabs[$activeTab]['label'],
               'url' => $tabs[$activeTab]['url'],
            );
            if ($activeTab == 'statistics') {
               $statTabs = framePts::_()->getModule('statistics')->getStatTabs();
               $currentStatTab = framePts::_()->getModule('statistics')->getCurrentStatTab();
               if (isset($statTabs[$currentStatTab])) {
                  $res[] = array(
                     'label' => $statTabs[$currentStatTab]['label'],
                     'url' => $statTabs[$currentStatTab]['url'],
                  );
               }
            }
         }
      }
      return $res;
   }
}
