<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Category extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Category::count();
        $string = 'Category';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-window-list',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager.dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'View All Category',
                'link' => route('voyager.categories.index'),
            ],
            'image' => '/cateogry.jpg',
        ]));
    }
}
