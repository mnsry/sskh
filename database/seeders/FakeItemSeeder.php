<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class FakeItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::firstOrCreate([
            'name' => 'site',
        ]);

        MenuItem::firstOrNew([
            'menu_id' => 2,
            'title'   => 'اتوماسیون',
            'url'     => 'automation',
            'target'  => '_self',
            'icon_class' => null,
            'color'      => null,
            'parent_id'  => null,
            'order'      => 1,
            'route'      => null,
        ])->save();

        MenuItem::firstOrNew([
            'menu_id' => 2,
            'title'   => 'پی ال سی - PLC',
            'url'     => 'automation-plc',
            'target'  => '_self',
            'icon_class' => null,
            'color'      => null,
            'parent_id'  => 14,
            'order'      => 1,
            'route'      => null,
        ])->save();

        MenuItem::firstOrNew([
            'menu_id' => 2,
            'title'   => 'پی ال سی دلتا - Delta',
            'url'     => 'automation-plc-delta',
            'target'  => '_self',
            'icon_class' => null,
            'color'      => null,
            'parent_id'  => 15,
            'order'      => 1,
            'route'      => null,
        ])->save();

        MenuItem::firstOrNew([
            'menu_id' => 2,
            'title'   => 'پی ال سی فتک - Fatek',
            'url'     => 'automation-plc-fatek',
            'target'  => '_self',
            'icon_class' => null,
            'color'      => null,
            'parent_id'  => 15,
            'order'      => 2,
            'route'      => null,
        ])->save();

        MenuItem::firstOrNew([
            'menu_id' => 2,
            'title'   => 'صفحه نمایش - HMI',
            'url'     => 'automation-hmi',
            'target'  => '_self',
            'icon_class' => null,
            'color'      => null,
            'parent_id'  => 14,
            'order'      => 2,
            'route'      => null,
        ])->save();

        MenuItem::firstOrNew([
            'menu_id' => 2,
            'title'   => 'صفحه نمایش دلتا - Delta',
            'url'     => 'automation-hmi-delta',
            'target'  => '_self',
            'icon_class' => null,
            'color'      => null,
            'parent_id'  => 18,
            'order'      => 1,
            'route'      => null,
        ])->save();

        MenuItem::firstOrNew([
            'menu_id' => 2,
            'title'   => 'صفحه نمایش فتک - Fatek',
            'url'     => 'automation-hmi-fatek',
            'target'  => '_self',
            'icon_class' => null,
            'color'      => null,
            'parent_id'  => 18,
            'order'      => 2,
            'route'      => null,
        ])->save();

        MenuItem::firstOrNew([
            'menu_id' => 2,
            'title'   => 'کارت جانبی  - I/O',
            'url'     => 'automation-module',
            'target'  => '_self',
            'icon_class' => null,
            'color'      => null,
            'parent_id'  => 14,
            'order'      => 3,
            'route'      => null,
        ])->save();

        MenuItem::firstOrNew([
            'menu_id' => 2,
            'title'   => 'برق صنعتی',
            'url'     => 'inductor',
            'target'  => '_self',
            'icon_class' => null,
            'color'      => null,
            'parent_id'  => null,
            'order'      => 2,
            'route'      => null,
        ])->save();

        MenuItem::firstOrNew([
            'menu_id' => 2,
            'title'   => 'کلید اتوماتیک - MCCB',
            'url'     => 'inductor-mccb',
            'target'  => '_self',
            'icon_class' => null,
            'color'      => null,
            'parent_id'  => 22,
            'order'      => 1,
            'route'      => null,
        ])->save();

        MenuItem::firstOrNew([
            'menu_id' => 2,
            'title'   => 'کنتاکتور',
            'url'     => 'inductor-contactor',
            'target'  => '_self',
            'icon_class' => null,
            'color'      => null,
            'parent_id'  => 22,
            'order'      => 2,
            'route'      => null,
        ])->save();

        MenuItem::firstOrNew([
            'menu_id' => 2,
            'title'   => 'نور و روشنایی',
            'url'     => 'light',
            'target'  => '_self',
            'icon_class' => null,
            'color'      => null,
            'parent_id'  => null,
            'order'      => 3,
            'route'      => null,
        ])->save();

        MenuItem::firstOrNew([
            'menu_id' => 2,
            'title'   => 'پایه چراغ',
            'url'     => 'light-tower',
            'target'  => '_self',
            'icon_class' => null,
            'color'      => null,
            'parent_id'  => 25,
            'order'      => 1,
            'route'      => null,
        ])->save();

        MenuItem::firstOrNew([
            'menu_id' => 2,
            'title'   => 'سیم و کابل',
            'url'     => 'wire',
            'target'  => '_self',
            'icon_class' => null,
            'color'      => null,
            'parent_id'  => null,
            'order'      => 15,
            'route'      => null,
        ])->save();
    }
}
