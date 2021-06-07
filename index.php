<?php 

Kirby::plugin('hherold/zzpub', [
   'options' => [
      'autoPublish' => false,
      'parent'      => false,
      'status'      => 'listed'
   ],
   
   'hooks' => [
      'page.create:after' => function ($page) {
         $autoPublish = option('hherold.zzpub.autoPublish');
         $parent      = option('hherold.zzpub.parent');
         $status      = option('hherold.zzpub.status');
         
         if ($autoPublish) {
            if ($parent && $page->isDescendantOf(page($parent))) {
               $page->changeStatus($status);
            };
            if ($parent == false) {
               $page->changeStatus($status);
            }
         }
      },
      'page.duplicate:after' => function ($duplicatePage, $originalPage) {
         $autoPublish = option('hherold.zzpub.autoPublish');
         $parent      = option('hherold.zzpub.parent');
         $status      = option('hherold.zzpub.status');
                  
         if ($autoPublish) {
            if ($parent && $page->isDescendantOf(page($parent))) {
               $duplicatePage->changeStatus($status);
            };
            if ($parent == false) {
               $duplicatePage->changeStatus($status);
            }
         }
      } 
   ]
]);
