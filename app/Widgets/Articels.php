<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use Auth;

class Articels extends AbstractWidget
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
        $count = \App\Articel::count();
        $string = 'المقالات';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-window-list',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'مشاهدة كل المقالات',
                'link' => route('voyager.articels.index'),
            ],
            'image' => '/articels.jpg',
        ]));
    }

    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(\App\Articel::class));
    }
}
